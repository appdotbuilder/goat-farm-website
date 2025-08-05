<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\GalleryItem
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $type
 * @property string $file_url
 * @property string|null $thumbnail_url
 * @property int $sort_order
 * @property bool $is_featured
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * 
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem whereFileUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem whereThumbnailUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem featured()
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem images()
 * @method static \Illuminate\Database\Eloquent\Builder|GalleryItem videos()
 * @method static \Database\Factories\GalleryItemFactory factory($count = null, $state = [])
 * 
 * @mixin \Eloquent
 */
class GalleryItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'description',
        'type',
        'file_url',
        'thumbnail_url',
        'sort_order',
        'is_featured',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'sort_order' => 'integer',
        'is_featured' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Scope a query to only include featured items.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope a query to only include images.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeImages($query)
    {
        return $query->where('type', 'image');
    }

    /**
     * Scope a query to only include videos.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeVideos($query)
    {
        return $query->where('type', 'video');
    }
}