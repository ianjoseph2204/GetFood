<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';

    public function restaurants(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }

    public function menu_categories(): BelongsTo
    {
        return $this->belongsTo(MenuCategory::class, 'category_id');
    }

    public function stock(): HasMany
    {
        return $this->hasMany(Stock::class, 'menu_id', 'id');
    }

    public function order_detail(): HasMany
    {
        return $this->hasMany(OrderDetail::class, 'menu_id', 'id');
    }
}
