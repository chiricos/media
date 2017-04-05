@extends('template.main')

@section('tile','Editar Producto')

@section('content')

    <div class="container">
        <h1>Editar el producto {{$product->name}}</h1>
        {!! Form::open(['route'=>['product.update',$product->id],'method'=>'PUT']) !!}

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            {!! Form::text('name',$product->name,['class'=>'form-control','placeholder'=>'Nombre','id'=>'nombre']) !!}
            @if($errors->first('name'))
                <div class="danger">
                    *{{$errors->first('name')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="color">Color:</label>
            {!! Form::text('color',$product->color,['class'=>'form-control','placeholder'=>'Color','id'=>'color']) !!}
            @if($errors->first('color'))
                <div class="danger">
                    *{{$errors->first('color')}}
                </div>
            @endif

        </div>

        <div class="form-group">
            <label for="volume">Volumen:</label>
            {!! Form::number('volume',$product->volume,['class'=>'form-control','placeholder'=>'Volumen','id'=>'volume']) !!}
            @if($errors->first('volume'))
                <div class="danger">
                    *{{$errors->first('volume')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="price">Precio:</label>
            {!! Form::number('price',$product->price,['class'=>'form-control','placeholder'=>'Precio','id'=>'price']) !!}
            @if($errors->first('price'))
                <div class="danger">
                    *{{$errors->first('price')}}
                </div>
            @endif
        </div>

        {!! Form::submit('Actualizar Producto',['class'=>'btn btn-default'])!!}

        {!! Form::close() !!}
    </div>

@endsection