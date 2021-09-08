<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public function users(){ 
        return $this->hasMany(User::class, 'users_id');
    }

    public function adminlte_desc(){
        //return $this->users_id;
        return $this->users()->where('id', $this->users_id)->first();
    }
}