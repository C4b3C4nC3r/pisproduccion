<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CultivoPlagaProducto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [ ];
    public $timestamps = false;
    protected $table = 'cultivoplagaproducto';



    public function cultivos()
    {
        return $this->belongsTo(Cultivo::class,'cultivo_id')->withTrashed();
    }
    public function plagas()
    {
        return $this->belongsTo(Plaga::class,'plaga_id')->withTrashed();
    }
    public function productostecnicos()
    {
        return $this->belongsTo(ProductoTecnico::class,'productotecnico_id')->withTrashed();
    }

}
