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
     * Verifies an array of inputted data
     * 
     * @param array $data
     * @return boolean
     */
    public static function verify(array $data)
    {
        
        $valid = static::where('email', 'LIKE', $data['email'])->first();
        
        if(!$valid){
            //send the email
        } else {
            return $valid->update($data);
        }
    }
}
