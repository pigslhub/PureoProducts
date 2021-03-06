<?php

namespace App\Models;

use App\Notifications\AdminResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Intervention\Image\Facades\Image;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password','type','status','api_token', 'avatar'];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAvatarPath($size = 'sm')
    {
        $sizes = [
            'lg' => '200x200',
            'sm' => '80x80',
        ];
        if ($this->avatar && file_exists('storage/' . $this->avatar))
            return asset('storage/images/admins/' . $this->id . '/' . $sizes[$size] . '.jpg');
        else
            return asset('assets/images/user/user.png');
    }

    public function updateAvatar()
    {
        if (request()->hasFile('avatar') && request()->file('avatar')->isValid()) {
            $dir = public_path('storage/images/admins/' . $this->id);
            if (!file_exists($dir)) mkdir($dir, 0777, true);

            $image = Image::make(request()->file('avatar'));
            $image->fit(200, 200)->save($dir . '/200x200.jpg');
            $image->fit(80, 80)->save($dir . '/80x80.jpg');
            $this->update(['avatar' => "/images/admins/{$this->id}/80x80.jpg"]);
        }
    }
}
