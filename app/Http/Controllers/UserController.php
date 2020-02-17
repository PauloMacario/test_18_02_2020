<?php


use App \User;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users, 200);
    }

    public function store(Request $request)
    {
        $user = Team::create($request->all());
        return response()->json($user, 200);
    }

    public function show(User $user)
    {
        return response()->json($user, 200);
    }

    public function update(Request $request, User $user)
    {
        $team->update($user->all());

        return response()->json($team, 201);
    }

    public function destroy(User $user)
    {
        $user->delete();
        
        return response()->json(null, 204);
    }


}
