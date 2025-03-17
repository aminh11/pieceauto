<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Items extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'prix',
        'is_active',
        'is_auction',
        'starting_price',
    ];
    public function category(): BelongsTo
{
    return $this->belongsTo(Category::class, 'category_id');
}

    protected static function booted()
    {
        static::creating(function ($item) {
            if (empty($item->slug)) {
                $item->slug = Str::slug($item->name);
            }
        });
    }
}
