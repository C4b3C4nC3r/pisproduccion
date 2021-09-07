<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CultivoPlagaProducto extends Model
{
    use HasFactory;
    protected $guarded = [ ];
    public $timestamps = false;
    protected $table = 'cultivoplagaproducto';



    public function cultivos()
    {
        return $this->belongsTo(Cultivo::class,'cultivo_id');
    }
    public function plagas()
    {
        return $this->belongsTo(Plaga::class,'plaga_id');
    }
    public function productostecnicos()
    {
        return $this->belongsTo(ProductoTecnico::class,'productotecnico_id');
    }

}
