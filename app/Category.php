<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug'
    ];
    
    /**
     * Relationship Gets Collection of apps by category
     */
    public function apps()
    {
        return $this->hasMany(App::class);
    }
}