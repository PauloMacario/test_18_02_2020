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

        return response()->json($users, 200);

    }

    public function create()
    {

    }

    public function store(Request $request)
    {



        $validatedUserData = $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',

            ]);


        $validatedPhoneData = $request->validate([
            'phone_one' => 'required'
        ]);

        $validatedAddressData = $request->validate([
            'zip_code' => 'required',
            'state' => 'required',
            'city' => 'required',
            'neighborhood' => 'required',
            'street' => 'required',
            'number' => 'required'
        ]);

        $user = User::create($validatedUserData);

        $address = $user->address()->create($validatedAddressData);

        $phone = $user->phone()->create($validatedPhoneData);

        $json['user']    = $user;
        $json['address'] = $address;
        $json['phone']   = $phone;



            return response()->json($json, 201 );
    }

    public function show(User $user)
    {

        $json = [
            'user' =>  $user,
            'address' =>  $user->address,
            'phone' =>  $user->phone

        ];

        return response()->json($json);


    }

    public function edit(User $user)
    {
        return view('layouts.updateUser', compact('user', $user));
    }

    public function update(Request $request, User $user)
    {

        $validatedUserData = $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',

            ]);


        $validatedPhoneData = $request->validate([
            'phone_one' => 'required'
        ]);

        $validatedAddressData = $request->validate([
            'zip_code' => 'required',
            'state' => 'required',
            'city' => 'required',
            'neighborhood' => 'required',
            'street' => 'required',
            'number' => 'required'
        ]);

        $userUp = $user->create($validatedUserData);

        $address = $userUp->address()->create($validatedAddressData);

        $phone = $userUp->phone()->create($validatedPhoneData);

        $json['user']    = $userUp;
        $json['address'] = $address;
        $json['phone']   = $phone;



        return response()->json($json, 201 );

    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(["success" => true], 204);
    }


}
