<?php

namespace vmnetworks\Http\Controllers;

use Illuminate\Http\Request;

use vmnetworks\Http\Requests;
use vmnetworks\Http\Requests\UserCreateRecuest;
use vmnetworks\User;
use Redirect;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth',['only'=>['create','store','edit','update','destroy']]);
    }

    public function index()
    {
        return view('usuarios.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRecuest $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'ocupacion' => $request['ocupacion'],
            'descripcion' => $request['descripcion'],
            'descripcion2' => $request['descripcion2'],
            'foto' => $request['foto'],
            'nacionalidad' => 'Mexico',
            'perfil_id' => '1',
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $this->id = $id;
        $this->notFound($user);
        return view('usuarios.update',['user'=>$user, 'id'=>$id]);
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
        $user = User::find($id);
        $user->fill([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'ocupacion' => $request['ocupacion'],
            'descripcion' => $request['descripcion'],
            'descripcion2' => $request['descripcion2'],
            'foto' => $request['foto'],
        ]);
        $user->save();

        return Redirect::to('/usuarios');
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
