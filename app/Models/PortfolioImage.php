<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PortfolioImage extends Model
{
    protected $fillable = [
        'portfolio_category_id',
        'original_path',
        'large_path',
        'medium_path',
        'sort_order',
    ];

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id');
    }

    // Удаление файлов при удалении записи
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($image) {
            // Удаляем из storage/app/public
            Storage::disk('public')->delete([
                $image->original_path,
                $image->large_path,
                $image->medium_path,
            ]);
            
            // Удаляем из public/storage (для хостингов без симлинков)
            $publicPaths = [
                public_path('storage/' . $image->original_path),
                public_path('storage/' . $image->large_path),
                public_path('storage/' . $image->medium_path),
            ];
            
            foreach ($publicPaths as $path) {
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        });
    }
}