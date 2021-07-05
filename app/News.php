<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = [
        'media', 'title', 'summary','news_type_id' , 'date' , 'readmore'
    ];

    public function newsType()
    {
        return $this->belongsTo('App\NewsType','news_type_id' , 'id');
    }
}
