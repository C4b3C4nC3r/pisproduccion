<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductoTecnico extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [ ];
    public $timestamps = false;
    protected $table = 'productotecnico';

    public function categorias()
    {
        return $this->belongsTo(Categoria::class,'categoria_id')->withTrashed();
    }
    public function fabricantes()
    {
        return $this->belongsTo(Fabricante::class,'fabricante_id')->withTrashed();
    }
}
