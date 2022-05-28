<!-- Nombre Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_departamento', 'Nombre Departamento:') !!}
    {!! Form::text('nombre_departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('departamentos.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
