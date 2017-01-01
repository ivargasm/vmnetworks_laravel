<?php

namespace vmnetworks\Http\Controllers;

use Illuminate\Http\Request;

use vmnetworks\Http\Requests;
use vmnetworks\Http\Requests\EmailContactoRequest;
use Illuminate\Support\Facades\Mail;
use vmnetworks\Mail\FormularioMail;
use vmnetworks\Email;
use Session;
use Redirect;

class MailContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmailContactoRequest $request)
    {

        Email::create($request->all());

        /*Mail::to('ivargasm@hotmail.com')->send(new FormularioMail($datos));*/

        Mail::send('emails.contacto', $request->all(), function($msj){
            $msj->subject('Envio de formulario de Contacto');
            $msj->to('ivargasm@hotmail.com');
        });

        Session::flash('message','Correo enviado correctamente');
        return Redirect::to('/contacto');

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
        //
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
        //
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
