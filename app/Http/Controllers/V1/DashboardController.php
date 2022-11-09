<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = $request->user();
        $userTokens = $user->tokens;

        return view('dashboard', [
            'tokens' => $userTokens,
        ]);
    }

    public function showTokenForm()
    {
        return view('token-create');
    }

    public function createToken(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $tokenName = $request->post('name');
        $user = $request->user();
        $token = $user->createToken($tokenName);

        return view('token-show', [
            'tokenName' => $tokenName,
            'token' => $token->plainTextToken
        ]);
    }

    public function deleteToken(PersonalAccessToken $token)
    {
        $token->delete();

        return redirect('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
