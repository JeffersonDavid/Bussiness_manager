<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'active',

    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'id', 'id');
    }

    public function nav(){
        return $this->hasMany(Nav::class, 'id', 'id');
    }


}
