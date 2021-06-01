<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stocks';

    public function branches(): BelongsTo
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    public function menus(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
