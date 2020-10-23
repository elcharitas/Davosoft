<?php

namespace App\Observers;

class Comment
{
    public function create($comment)
    {
        if(Mailist::verify($comment))
        {
            
        }
    }
}