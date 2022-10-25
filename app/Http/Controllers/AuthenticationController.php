<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    protected $factory;

    public function __construct()
    {
        $this->factory = Factory::create();
    }

    public function register(RegisterRequest $request)
    {
        User::create([
            'application_id' => $request->input('application_id'),
            'name' => $request->input('name'),
            'country_code' => $request->input('country_code'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
            'otp' => $this->factory->randomNumber('8', true)
        ]);

        return response()->json([
            'message' => 'Successfully registered! Verification password sent to your number.'
        ]);
    }

    public function login(LoginRequest $request)
    {
        $user = User::with('roles.permissions:node')->where('phone', $request->input('phone'))->first();

        if ($user) {
            if (Hash::check($request->input('password'), $user->password)) {
                $token = null;

                if ($request->input('remember_me') === 1) {
                    $token = bcrypt($this->factory->randomNumber('8', true));

                    $user->remember_token = $token;
                    $user->save();
                }

                return response()->json([
                    'message' => 'Login successfully!',
                    'data' => [
                        'user' => $user,
                        'token' => $token
                    ]
                ]);
            } else {
                return response()->json([
                    'message' => 'Wrong password!',
                ], 400);
            }
        } else {
            return response()->json([
                'message' => "User with phone number +{$request->input('phone')} not found!",
            ], 404);
        }
    }

    public function verifyOtp(Request $request) {
        $request->validate([
            'otp' => 'required'
        ]);
    }

    public function verifyToken(Request $request) {
        $request->validate([
            'token' => 'required|string'
        ]);

        $user = User::where('remember_token', $request->input('token'))->first();

        if ($user) {
            return response()->json([
                'message' => 'Token verified.',
                'data' => $user
            ]);
        } else {
            return response()->json([
                'message' => 'Invalid token provided.'
            ], 401);
        }
    }
}
