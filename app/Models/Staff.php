<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = "staff_accounts";
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'password_hash',
        'active',
        'profile_img'
    ];
//    public $timestamps = ['registered_at', 'updated_at'];

    public $timestamps = false;

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'staff_roles', 'staff_account_id', 'role_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'account_id');
    }
}
