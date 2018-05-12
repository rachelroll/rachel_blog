<?php

namespace App\Models;

use App\Mail\ResetPassword;
use App\Mail\VerifyMail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable {
        notify as LaravelNotify;
    }

    public function notify($instance)
    {
        // 如果要通知的人是当前用户, 就不用通知了
        if($this->id = \Auth::id()) {
            return;
        }

        $this->increment('notification_count');
        $this->LaravelNotify($instance);
    }

    /**
     * The attributes that are mass assignable.
     *AA
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'confirmation_token', 'introduction',
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

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }

    public function isAuthorOf($model)
    {
        return $this->id == $model->user_id;
    }

    public function markAsRead()
    {
        $this->notification_count = 0;
        $this->save();
        $this->unreadNotifications()->markAsRead();
    }
}
