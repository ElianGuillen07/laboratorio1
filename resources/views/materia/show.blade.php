@extends('layouts.app')

@section('template_title')
    {{ $materia->name ?? 'Show Materia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Registro de docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('materias.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $materia->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $materia->Apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Años:</strong>
                            {{ $materia->Años }}
                        </div>
                        <div class="form-group">
                            <strong>Materia:</strong>
                            {{ $materia->Materia }}
                        </div>
                        <div class="form-group">
                            <strong>Centro:</strong>
                            {{ $materia->centro }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
