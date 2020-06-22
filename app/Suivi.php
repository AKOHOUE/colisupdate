<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Suivi extends Model
{
    protected $fillable = ['user_id', 'lieuCurrent', 'origine', 'piece', 'heure', 'destination', 'numero', 'poste'];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
