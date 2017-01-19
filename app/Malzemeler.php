<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Malzemeler extends Model
{
    protected $table = "malzemeler";

    public function malzemeler()
    {
        return $this->hasOne('App\MalzemeCikis');
    }

    protected $fillable = [
        'madi','mkimlik','mgrubu', 'mmarka', 'mmodel','mfiyat','mdurum','mozellik','ip'
    ];

    public function setIpAttribute($value)
    {
        $this->attributes['ip'] = $_SERVER['REMOTE_ADDR'];
    }

}