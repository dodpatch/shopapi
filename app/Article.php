<?php

namespace App;
use App\Provider;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['name' , 'price', 'description', 'color', 'provider_name', 'provider_price', 'provider_tel', 'provider_address'];


    public function providers()
    {
        return $this->belongsToMany(Provider::class);
    }
}


