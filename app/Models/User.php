<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // ******************************* HELPER METHODS *************************************

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        $expName = explode(" ", $this->name);
        return isset($expName[0]) ? $expName[0] : '';
    }


    /**
     * @return string|void
     */
    public function getFirstLetterFromName()
    {
        $split = str_split($this->getFirstName());
        if (!isset($split[0])) return ;

        return strtoupper($split[0]);
    }
}
