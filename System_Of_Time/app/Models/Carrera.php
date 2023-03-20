<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $table = 'Carrera';
    protected $primaryKey = 'IDCar';

    protected $fillable = [
        'IDCar',
        'nameCar'
    ];

    public function getAllCarrera(){
        return Carrera::all();
    }

    public function getIdCarrera($id){
        return Carrera::find($id);
    }
}
