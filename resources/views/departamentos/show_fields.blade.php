<!-- Nombre Departamento Field -->
<div class="form-group">
    {!! Form::label('nombre_departamento', 'Nombre Departamento:') !!}
    <p>{{ $departamento->nombre_departamento }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $departamento->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $departamento->updated_at }}</p>
</div>

