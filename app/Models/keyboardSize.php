<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keyboardSize extends Model
{
    use HasFactory;

    protected $fillable=[
        'statu_id',
        'name',
        'description'
    ];

    //protected $table = "keyboard_sizes";

    public function statu(){
        return $this->belongsTo(statu::class);
    }

    public function keyboards(){
        return $this->hasMany(keyboard::class);
    }
}
