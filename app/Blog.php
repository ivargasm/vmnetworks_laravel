<?php

namespace vmnetworks;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Blog extends Model
{

	protected $table = 'articulos';

    protected $fillable = [
        'titulo', 'extracto', 'articulo', 'imagen', 'titulo2', 'articulo2', 'imagen2', 'titulo3', 'articulo3', 'imagen3','titulo4', 'articulo4', 'imagen4','titulo5', 'articulo5', 'imagen5', 'usuario_id'
    ];

    public function setImagenAttribute($imagen){
        if(!empty($imagen)){
            $name = Carbon::now()->second.$imagen->getClientOriginalName();
            $this->attributes['imagen'] = $name;
            \Storage::disk('blog')->put($name, \File::get($imagen));
        }
    }

    public function setImagen2Attribute($imagen2){
        if(!empty($imagen2)){
            $name = Carbon::now()->second.$imagen2->getClientOriginalName();
            $this->attributes['imagen2'] = $name;
            \Storage::disk('blog')->put($name, \File::get($imagen2));
        }
    }

    public function setImagen3Attribute($imagen3){
        if(!empty($imagen3)){
            $name = Carbon::now()->second.$imagen3->getClientOriginalName();
            $this->attributes['imagen3'] = $name;
            \Storage::disk('blog')->put($name, \File::get($imagen3));
        }
    }

    public function setImagen4Attribute($imagen4){
        if(!empty($imagen4)){
            $name = Carbon::now()->second.$imagen4->getClientOriginalName();
            $this->attributes['imagen4'] = $name;
            \Storage::disk('blog')->put($name, \File::get($imagen4));
        }
    }

    public function setImagen5Attribute($imagen5){
        if(!empty($imagen5)){
            $name = Carbon::now()->second.$imagen5->getClientOriginalName();
            $this->attributes['imagen5'] = $name;
            \Storage::disk('blog')->put($name, \File::get($imagen5));
        }
    }

    public static function Articles($id){
        return DB::table('articulos')->where('articulos.id','=',$id)->join('users','articulos.usuario_id', '=', 'users.id')->select('articulos.*','users.name')->get();
    }
}
