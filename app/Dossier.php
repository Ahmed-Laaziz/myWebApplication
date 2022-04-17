<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Dossier extends Model
{
    public function scopeProfs($query){
        if(Auth::user()->role_id == 2){
                return $query->where('user_id','=',Auth::user()->id);
        }
        else if(Auth::user()->role_id == 1){
            return $query->where('Etat', '=', 'En attente');
        }
        
    
    } 
}
