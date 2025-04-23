<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function registerUser($request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create and save the new user
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']); // Hash the password
        $user->save();

        return $user; // Return the created user
    }

    public function loginUser($request)
    {

        $data = $request->validate([
            'email' => 'required|email|exists:users,email',  // Ensure the email exists in the database
            'password' => 'required|min:6',  // Basic password validation
        ]);

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return true;
            // return response()->json([
            //     'message' => 'User successfully logged in!',
            //     'user' => Auth::user(),
            // ]);

        } else {
            return false;
            // return response()->json([
            //     'error' => 'Invalid credentials.',
            // ], 401);

        }
    }

    public function logoutUser()
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        return true;
    }

}
