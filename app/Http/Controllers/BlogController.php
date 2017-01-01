<?php

namespace vmnetworks\Http\Controllers;

use Illuminate\Http\Request;

use vmnetworks\Http\Requests;
use vmnetworks\Http\Requests\BlogRequest;
use vmnetworks\User;
use vmnetworks\Blog;
use Redirect;
use DB;
use Auth;
use Illuminate\Notifications\Notifiable;
use vmnetworks\Notifications\NotificationBlog;

class BlogController extends Controller
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
        $articulos = DB::table('articulos')
                ->orderBy('id', 'desc')
                ->paginate(2);
        return view('blog.index',compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articulos = DB::table('articulos')
                ->orderBy('id', 'desc')
                ->paginate(2);
        return view('blog.admon',compact('articulos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        Blog::create([
            'titulo' => $request['titulo'],
            'extracto' => $request['extracto'],
            'articulo' =>  $request['articulo'],
            'imagen' => $request['foto'],
            'titulo2' => $request['titulo2'],
            'articulo2' => $request['articulo2'],
            'imagen2' => $request['foto2'],
            'titulo3' => $request['titulo3'],
            'articulo3' => $request['articulo3'],
            'imagen3' => $request['foto3'],
            'titulo4' => $request['titulo4'],
            'articulo4' => $request['articulo4'],
            'imagen4' => $request['foto4'],
            'titulo5' => $request['titulo5'],
            'articulo5' => $request['articulo5'],
            'imagen5' => $request['foto5'],
            'usuario_id' => Auth::id(),
        ]);
        return Redirect::to('/blog/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo = Blog::Articles($id);
        $this->notFound(Blog::find($id));
        return view('blog.show',compact('articulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $this->notFound($blog);
        return view('blog.edit',['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulo = Blog::find($id);
        $articulo->fill([
            'titulo' => $request['titulo'],
            'extracto' => $request['extracto'],
            'articulo' =>  $request['articulo'],
            'imagen' => $request['foto'],
            'titulo2' => $request['titulo2'],
            'articulo2' => $request['articulo2'],
            'imagen2' => $request['foto2'],
            'titulo3' => $request['titulo3'],
            'articulo3' => $request['articulo3'],
            'imagen3' => $request['foto3'],
            'titulo4' => $request['titulo4'],
            'articulo4' => $request['articulo4'],
            'imagen4' => $request['foto4'],
            'titulo5' => $request['titulo5'],
            'articulo5' => $request['articulo5'],
            'imagen5' => $request['foto5'],
        ]);
        $articulo->save();
        return Redirect::to('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Blog::find($id);
        \Storage::delete($articulo->imagen);
        $articulo->delete();

        return Redirect::to('/blog/create');
    }

    public function newArticle(){
        return view('blog.new');
    }
}
