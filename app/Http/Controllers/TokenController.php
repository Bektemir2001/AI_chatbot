<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TokenController extends Controller
{
    public function generateTokenForUnAuthorizedUser()
    {
        $text = Carbon::now().rand(10000000, 99999999);
        $token = Hash::make($text);
        User::create(['chat_bot_token_for_unauthorized_user', $token]);

        return response(['token' => $token]);
    }
}
