<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->query('paginate') === "false") {
            $user = User::with('roles:name')->filter(request()->only(['search']))->filterRole(request()->only(['super']))->latest()->get();
        } else {
            $user = User::with('roles:name')->filter(request()->only(['search', 'name', 'phone', 'from', 'to']))->filterRole(request()->only(['super']))->latest()->paginate(15)->withQueryString();
        }

        return response()->json($user);
    }

    public function show($phone)
    {
        $user = User::with('roles')->where('phone', $phone)->firstOrFail();

        return response()->json($user);
    }

    public function update(UpdateUserRequest $request)
    {
        $user = User::where('phone', $request->input('initial_phone'))->firstOrFail();
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');

        $user->save();

        return response()->json([
            'message' => 'Successfully updated an user!'
        ]);
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'phone' => 'required'
        ]);

        $user = User::where('phone', $request->input('phone'))->firstOrFail();

        $user->delete();

        return response()->json([
            'message' => 'Successfully deleted an user!'
        ]);
    }
}
