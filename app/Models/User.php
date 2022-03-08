<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'role',
        'last_logged_at',
        'phone',
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

    /**
     * @return BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * @return HasMany
     */
    public function company(): HasMany
    {
        return $this->hasMany(Company::class);
    }

    // ******************************* HELPER METHODS *************************************

    /**
     * @return string|null
     */
    public function getFirstName():? string
    {
        $expName = Str::of($this->name)->explode(' ');
        return Arr::first($expName);
    }

    /**
     * @return string|null
     */
    public function getFirstLetterFromName():? string
    {
        return Str::upper(
            Arr::first(
                str_split($this->getFirstName())
            )
        );
    }

    /**
     * @param Request $request
     * @param \App\Models\User $user
     * @return bool
     */
    public static function updateUser(UpdateUserRequest $request, User $user): bool
    {
        return $user->update([
            'name' => $request->name,
            'phone' => $request->phone
        ]);
    }
}
