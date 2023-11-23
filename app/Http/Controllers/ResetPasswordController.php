<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Certifique-se de importar o modelo User ou o modelo que representa seus usuários
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ResetPasswordController extends Controller
{
    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();

        return view('auth.answer_questions', compact('user'));
    }

    public function answerQuestions(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'answer_1' => 'required',
            'answer_2' => 'required',
            'answer_3' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        // Verifique se as respostas coincidem
        if (
            Hash::check($request->answer_1, $user->answer_1) &&
            Hash::check($request->answer_2, $user->answer_2) &&
            Hash::check($request->answer_3, $user->answer_3)
        ) {
            return view('auth.reset_password', compact('user'));
        } else {
            throw ValidationException::withMessages([
                'email' => 'As respostas não correspondem às cadastradas.',
            ]);
        }
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::where('email', $request->email)->first();
        $user->update(['password' => Hash::make($request->password)]);

        return redirect()->route('login')->with('success', 'Senha redefinida com sucesso. Faça login com sua nova senha.');
    }
}
