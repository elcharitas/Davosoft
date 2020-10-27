<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailist extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'username', 'email', 'email_verified_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];
    
    /**
     * Ptocess Verification of email/data
     * 
     * @param array $data
     * @return boolean
     */
    public static function verify(array $data)
    {
        $exists = static::where('email', 'LIKE', $data['email'])->first();
        
        if(!$exists){
            
        } else {
            return $exists->update($data);
        }
    }
}
