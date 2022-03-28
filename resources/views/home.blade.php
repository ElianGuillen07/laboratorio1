@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><b><div class="card-header">{{ __('Registro de personal docente') }}</div></b></center>
                <center> <img src="https://i.pinimg.com/736x/ee/56/03/ee5603332e58b2ed7f10674d23287842.jpg" class="card-img-top" width="400"
     height="500"> </center>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}
                    <center>Procederemos a crear, ver o eliminar nestros registros. Oprima el boton de abajo</center> 
                
                    <center><br><a class="btn btn-sm btn-primary " href="{{ url('/materias/') }}"><i class="fa fa-fw fa-eye"></i> Ver o crear resgistros</a></center>

                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
