<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    

    protected $fillable=['list_id','card_name','description','progress'];
}
