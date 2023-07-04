<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $fillable = [
        'role_name',
        'privileges'
    ];
    public $timestamps = ['created_at', 'updated_at'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'staff_roles', 'role_id', 'staff_account_id');
    }
}
