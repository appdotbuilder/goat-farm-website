<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Testimonial
 *
 * @property int $id
 * @property string $client_name
 * @property string|null $client_title
 * @property string|null $client_company
 * @property string $testimonial
 * @property string|null $client_photo
 * @property int $rating
 * @property bool $is_featured
 * @property int $sort_order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * 
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereClientName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereClientTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereClientCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereTestimonial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereClientPhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial featured()
 * @method static \Database\Factories\TestimonialFactory factory($count = null, $state = [])
 * 
 * @mixin \Eloquent
 */
class Testimonial extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'client_name',
        'client_title',
        'client_company',
        'testimonial',
        'client_photo',
        'rating',
        'is_featured',
        'sort_order',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'rating' => 'integer',
        'is_featured' => 'boolean',
        'sort_order' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Scope a query to only include featured testimonials.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}