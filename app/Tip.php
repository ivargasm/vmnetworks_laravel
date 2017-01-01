<?php

namespace vmnetworks;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Tip extends Model
{
    protected $table = 'tips';

    protected $fillable = ['titulo', 'video', 'descripcion', 'user_id', 'thum'];

    public function setThumAttribute($thum){
        if(!empty($thum)){
            $name = Carbon::now()->second.$thum->getClientOriginalName();
            $this->attributes['thum'] = $name;
            \Storage::disk('tips')->put($name, \File::get($thum));
        }
    }

    public static function Videos($id){
        return DB::table('tips')->where('tips.id','=',$id)->join('users','tips.user_id', '=', 'users.id')->select('tips.*','users.name')->get();
    }
}
