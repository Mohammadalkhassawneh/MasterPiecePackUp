<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'size',
        'price',
        'image',
        'seller_id',
        'category_id',
    ];

    // For Seller [one-many]
    public function seller()
    {
        return $this->belongsTo(User::class);
    }

    // For Reservation [many-many]
    public function user()
    {
        return $this->belongsToMany(User::class)->withPivot('id', 'status');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}