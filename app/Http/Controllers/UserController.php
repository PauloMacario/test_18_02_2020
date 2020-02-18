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
        return view('layouts.createUpdateUser');
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 200);
    }

    public function show(User $user)
    {
        return view('layouts.createUpdateUser', compact('user', $user));
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
