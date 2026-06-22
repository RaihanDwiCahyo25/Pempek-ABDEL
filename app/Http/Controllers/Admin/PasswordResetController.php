<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ResetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    /**
     * Show the form for requesting a password reset link.
     */
    public function showForgotPasswordForm()
    {
        return view('forgot-password');
    }

    /**
     * Send a password reset link to the given user.
     */
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email tidak valid.',
            'email.exists' => 'Email tidak ditemukan di sistem.',
        ]);

        $email = $request->email;
        $user = User::where('email', $email)->first();

        // Generate token
        $token = Str::random(64);

        // Delete existing tokens for this email
        DB::table('password_reset_tokens')
            ->where('email', $email)
            ->delete();

        // Create new token
        DB::table('password_reset_tokens')
            ->insert([
                'email' => $email,
                'token' => $token,
                'created_at' => now(),
            ]);

        // Generate reset link
        $resetLink = route('password.reset.form', ['token' => $token, 'email' => $email]);

        // Send email
        Mail::to($email)->send(new ResetPassword($resetLink, $user->name));

        return back()->with('status', 'Link reset password telah dikirim ke email Anda. Silakan cek email dalam 15 menit.');
    }

    /**
     * Show the form for resetting the password.
     */
    public function showResetForm(Request $request, $token)
    {
        $email = $request->query('email');
        
        if (!$email) {
            return redirect()->route('password.request')->withErrors(['email' => 'Email tidak valid.']);
        }
        
        return view('reset-password', ['token' => $token, 'email' => $email]);
    }

    /**
     * Reset the password for the given token.
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'token' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Email tidak valid.',
            'email.exists' => 'Email tidak ditemukan.',
            'token.required' => 'Token tidak valid.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak sesuai.',
        ]);

        // Check if token exists and not expired (15 minutes)
        $resetToken = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->where('token', $request->token)
            ->first();

        if (!$resetToken || now()->diffInMinutes($resetToken->created_at) > 15) {
            return back()->withErrors(['email' => 'Link reset password sudah expired. Silakan request ulang.']);
        }

        // Update password
        $user = User::where('email', $request->email)->first();
        $user->update(['password' => $request->password]);

        // Delete token
        DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->delete();

        return redirect()->route('login')->with('status', 'Password berhasil direset. Silakan login dengan password baru.');
    }
}
