<div class="seccion">
	{!!Form::text('titulo',null,['placeholder'=>'Titulo del video'])!!}
	{!!Form::text('video',null,['placeholder'=>'Liga del Video'])!!}
	{!!Form::textarea('descripcion',null,['placeholder'=>'Descripcion del Video'])!!}
	{!!Form::file('thum')!!}
</div>