<?php

namespace App\Models;

use App\Mail\ResetPassword;
use App\Mail\VerifyMail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *AA
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avarta', 'confirmation_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $data = [
            'url' => route('password.reset', [
                'token' => $token,
            ]),
        ];

        Mail::to($this->email)->queue(new ResetPassword($data));

    }
}
