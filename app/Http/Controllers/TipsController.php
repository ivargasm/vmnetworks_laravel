<?php

namespace vmnetworks\Http\Controllers;

use Illuminate\Http\Request;

use vmnetworks\Http\Requests;
use vmnetworks\Http\Requests\TipRequest;
use vmnetworks\Tip;
use vmnetworks\User;
use Redirect;
use DB;
use Auth;

class TipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth',['only'=>['create','store','edit','update','destroy','newArticle']]);
    }
    
    public function index()
    {
        $tips = DB::table('tips')
                ->orderBy('id', 'desc')
                ->paginate(2);
        return view('tips.index',compact('tips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tips.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipRequest $request)
    {
        Tip::create([
            'titulo' => $request['titulo'],
            'video' => $request['video'],
            'descripcion' =>  $request['descripcion'],
            'user_id' => Auth::id(),
            'thum' => $request['thum'],
        ]);
        return Redirect::to('/tips');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videos = Tip::Videos($id);
        $this->notFound(Tip::find($id));
        return view('tips.show',compact('videos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tip = Tip::find($id);
        $this->notFound($tip);
        return view('tips.edit',['tip'=>$tip]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipRequest $request, $id)
    {
        $tip = Tip::find($id);
        $tip->fill([
            'titulo' => $request['titulo'],
            'video' => $request['video'],
            'descripcion' =>  $request['descripcion'],
            'user_id' => Auth::id(),
            'thum' => $request['thum'],
        ]);
        $tip->save();
        return Redirect::to('/tips');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
