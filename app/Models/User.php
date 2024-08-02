<?php

namespace App\Models;

use App\Traits\UUIDTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes,UUIDTrait;
    use HasRoles;
    protected $keyType = 'id';  //meri id konsi h php a 

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the user associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function AssignCompanies(): HasOne
    {
        return $this->hasOne(UserCompanyManagement::class, 'user_id', );
    }
    /**
     * Get the user associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    

    public function UserAttributes()
    {
        return $this->hasOne(UserAttributes::class, 'user_id');
    }
    /**
     * Get the agency associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function agency(): HasOne
    {
        return $this->hasOne(Agency::class, 'user_id', 'id');
    }

    /**
     * Get the imo associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function imo(): HasOne
    {
        return $this->hasOne(IMO::class, 'user_id', 'id');
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] =  Hash::make($value);
    }

    // public function password():Attribute{
    //     return new Attribute(
    //         set: fn (string $value) => Hash::make($value)
    //     );
    // }
}
