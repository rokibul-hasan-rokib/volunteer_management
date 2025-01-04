<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
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

    public const STATUS_INACTIVE = 0;
    public const STATUS_ACTIVE = 1;

    public const STATUS_LIST = [
        self::STATUS_INACTIVE  => 'Inactive',
        self::STATUS_ACTIVE    => 'Active',
    ];

    public const ROLE_ADMIN = 'admin';
    public const ROLE_USER = 'user';
    public const ROLE_VOLUNTEER = 'volunteer';

    const ROLE_LIST = [
        self::ROLE_ADMIN => "Admin",
        self::ROLE_USER => "User",
        self::ROLE_VOLUNTEER => "Volunteer"
    ];

    final public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }

    final public function getAllUsers() {
        return self::query()->get();
    }

    final public function prepareData(Request $request): array
    {
        return [
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "password" => $request->input('password'),
            "phone" => $request->input('phone'),
            "address" => $request->input('address'),
            "role" => $request->input('role'),
            "status" => $request->input('status'),
        ];
    }

    final public function storeUser(Request $request)
    {
        return self::query()->create($this->prepareData($request));
    }

    final public function updateUser(Request $request, User $user)
    {
        return $user->update($this->prepareData($request));
    }

    final public function deleteUser(User $user)
    {
        return $user->delete();
    }

    final public function getUserAssoc()
    {
      return self::query()->where('status', self::STATUS_ACTIVE)->pluck('name', 'id')->toArray();
    }

}
