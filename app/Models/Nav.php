<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Nav extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'label_link',
        'page_link',
        'page_id'
    ];


    public function nav(){
        return $this->hasMany(Nav::class, 'id', 'page_id');
    }
}
