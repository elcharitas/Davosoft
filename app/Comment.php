<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'website', 'comment', 'active'
    ];
    
    /**
     * Queries the database for comments by user's email
     * 
     * @param string $email
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function user($email)
    {
        return static::where('email', $email);
    }
    
    /**
     * Queries the database for active comments
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param bool $active
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query, $active = true)
    {
        return $query->where('active', $active);
    }
}