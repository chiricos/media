@extends('template.main')

@section('tile','Crear Producto')

@section('content')


    <div class="container">
        <h1>Crear nuevo producto</h1>
        {!! Form::open(['route'=>'product.store','method'=>'POST']) !!}

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','id'=>'nombre']) !!}
            @if($errors->first('name'))
                <div class="danger">
                    *{{$errors->first('name')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="color">Color:</label>
            {!! Form::text('color',null,['class'=>'form-control','placeholder'=>'Color','id'=>'color']) !!}
            @if($errors->first('color'))
                <div class="danger">
                    *{{$errors->first('color')}}
                </div>
            @endif

        </div>

        <div class="form-group">
            <label for="volume">Volumen:</label>
            {!! Form::number('volume',null,['class'=>'form-control','placeholder'=>'Volumen','id'=>'volume']) !!}
            @if($errors->first('volume'))
                <div class="danger">
                    *{{$errors->first('volume')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="price">Precio:</label>
            {!! Form::number('price',null,['class'=>'form-control','placeholder'=>'Precio','id'=>'price']) !!}
            @if($errors->first('price'))
                <div class="danger">
                    *{{$errors->first('price')}}
                </div>
            @endif
        </div>

        {!! Form::submit('Crear Producto',['class'=>'btn btn-default'])!!}

        {!! Form::close() !!}
    </div>

@endsection