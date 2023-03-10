<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function room()
    {
        return $this->hasMany(Room::class);
    }

    public function orderdetail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    protected $fillable = [
        'start_date',
        'end_date',
        'user_id',
    ];

}
