<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications';
    protected $fillable = [
        'title',
        'content',
        'seen',
        'notification_expiry_date'
    ];

    public $timestamps = false;

    protected $dateFormat = ['notification_expiry_date'];

    public function user()
    {
        return $this->belongsTo(Staff::class);
    }
}
