@extends('template.main')

@section('title','Registrarse')

@section('content')

    <div class="container">
        <h2>Crear Usuario</h2>
        {!! Form::open(['route'=>'back.user.store','method'=>'POST']) !!}

            <div class="form-group">
                <label for="nombres">Nombres:</label>
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombres','id'=>'Nombres']) !!}
                @if($errors->first('name'))
                    <div class="danger">
                        *{{$errors->first('name')}}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                {!! Form::text('last_name',null,['class'=>'form-control','placeholder'=>'Apellidos','id'=>'apellidos']) !!}
                @if($errors->first('last_name'))
                    <div class="danger">
                        *{{$errors->first('last_name')}}
                    </div>
                @endif

            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'E-mail','id'=>'email']) !!}
                @if($errors->first('email'))
                    <div class="danger">
                        *{{$errors->first('email')}}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                {!! Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña','id'=>'contrasena']) !!}
                @if($errors->first('password'))
                    <div class="danger">
                        *{{$errors->first('password')}}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="c_contrasena">Confirmar Contraseña:</label>
                {!! Form::password('confirmation_password',['class'=>'form-control','placeholder'=>'Confirmar contraseña','id'=>'c_contrasena']) !!}
                @if($errors->first('confirmation_password'))
                    <div class="danger">
                        *{{$errors->first('confirmation_password')}}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="tel">Teléfono:</label>
                {!! Form::number('phone',null,['class'=>'form-control','placeholder'=>'Teléfono','id'=>'tel']) !!}
                @if($errors->first('phone'))
                    <div class="danger">
                        *{{$errors->first('phone')}}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="cedula">Cédula:</label>
                {!! Form::number('identification',null,['class'=>'form-control','placeholder'=>'Cédula','id'=>'cedula']) !!}
                @if($errors->first('identification'))
                    <div class="danger">
                        *{{$errors->first('identification')}}
                    </div>
                @endif
            </div>


        {!! Form::submit('Registrar',['class'=>'btn btn-default'])!!}

        {!! Form::close() !!}
    </div>






@endsection