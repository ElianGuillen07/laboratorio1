<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $materia->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido') }}
            {{ Form::text('Apellido', $materia->Apellido, ['class' => 'form-control' . ($errors->has('Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Años') }}
            {{ Form::text('Años', $materia->Años, ['class' => 'form-control' . ($errors->has('Años') ? ' is-invalid' : ''), 'placeholder' => 'Años']) }}
            {!! $errors->first('Años', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Materia') }}
            {{ Form::text('Materia', $materia->Materia, ['class' => 'form-control' . ($errors->has('Materia') ? ' is-invalid' : ''), 'placeholder' => 'Materia']) }}
            {!! $errors->first('Materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('centro educatico') }}
            {{ Form::text('centro', $materia->centro, ['class' => 'form-control' . ($errors->has('centro') ? ' is-invalid' : ''), 'placeholder' => 'Centro educativo']) }}
            {!! $errors->first('centro', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</div>