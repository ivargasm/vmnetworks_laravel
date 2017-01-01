<div class="row">
	<div class="col m6 s12">
		<div class="input-field col s12">
			<i class="material-icons prefix">perm_identity</i>
			{!!Form::text('name',null,['class'=>'validate','id'=>'icon_name'])!!}
			{!!Form::label('icon_name','Nombre')!!}
		</div>
		<div class="input-field col s12">
      		<i class="material-icons prefix">email</i>
      		{!!Form::text('email',null,['class'=>'validate','id'=>'icon_email'])!!}
      		{!!Form::label('icon_email','Correo')!!}
    	</div>
		<div class="input-field col s12">
			<i class="material-icons prefix">vpn_key</i>
			{!!Form::password('password',['class'=>'validate contraseña','id'=>'icon_psw'])!!}
      		{!!Form::label('icon_psw','Contraseña')!!}
		</div>	
    	<div class="input-field col s12">
      		<i class="material-icons prefix">announcement</i>
      		{!!Form::text('ocupacion',null,['class'=>'validate','id'=>'icon_ocupacion'])!!}
      		{!!Form::label('icon_ocupacion','Ocupacion')!!}
    	</div>
	</div>
	<div class="col m6 s12">
    	<div class="input-field col s12">
          	<i class="material-icons prefix">description</i>
          	{!!Form::textarea('descripcion',null,['class'=>'materialize-textarea','id'=>'icon_desc'])!!}
      		{!!Form::label('icon_desc','Descripcion')!!}
        </div>
        <div class="input-field col s12">
          	<i class="material-icons prefix">description</i>
          	{!!Form::textarea('descripcion2',null,['class'=>'materialize-textarea','id'=>'icon_desc2'])!!}
      		{!!Form::label('icon_desc2','Descripcion2')!!}
        </div>
        <div class="input-field col s12">
        	{!!Form::file('foto')!!}
        </div>						
	</div>
	<div class="input-field col s3">
		{!!Form::submit('Registrar',['class'=>'enviar btn'])!!}
	</div>
</div>