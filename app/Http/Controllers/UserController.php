<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {        
        $users = DB::table('users')
        ->join('addresses', 'users.id', '=' ,'addresses.user_id')
        ->join('phones', 'users.id', '=' ,'phones.user_id')->get();
        return view('layouts.listUsers', compact('users'));
    }

    public function create()
    {
        return view('layouts.createUser');
    }

    public function store(Request $request)
    {

        $validatedUserData = $request->validate([
            'name' => '', 
            'lastName' => '', 
            'email' => '', 
            'birthDate' => ''
        ]);

        $validatedPhoneData = $request->validate([
            'phoneOne' => '', 
            'phoneTwo' => '', 
            'phoneTree' => '', 
            'phoneFour' => '', 
            'phoneFive' => '', 
            'phoneSix' => ''
        ]);
                
        $validatedAddressData = $request->validate([
            'zipCode' => '', 
            'state' => '', 
            'city' => '', 
            'neighborhood' => '', 
            'street' => '', 
            'number' => ''
        ]);

            // abre uma transaction
            // tenta cadastrar juntamente com os relacionamentos
            // retorna sucess ou fail
     
    }

    public function show(User $user)
    {
        return view('layouts.showUser', compact('user', $user));       
    }

    public function edit(User $user)
    {
        return view('layouts.updateUser', compact('user', $user));
    }

    public function update(Request $request, User $user)
    {
        $user->update($user->all());
        return response()->json($user, 201);
    }

    public function destroy(User $user)
    {
        $user->delete();        
        return response()->json(["success" => true], 204);
    }


}
