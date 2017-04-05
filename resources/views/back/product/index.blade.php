@extends('template.main')

@section('tile','Productos')

@section('content')

    <div class="container">
        <h1>Productos</h1>

        <a href="{{route('product.create')}}" class="btn btn-success">Crear Producto</a>

        <div class="container">
            <h4>Buscar</h4>
            {!! Form::open(['route'=>'search','method'=>'POST','class'=>'form-inline']) !!}


            <div class="form-group">
                <label for="nombre">Buscar:</label>
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar','id'=>'nombre']) !!}

            </div>

            <div class="form-group">
                <label for="price">Filtro:</label>
                {!! Form::select('filtro',[
                    ''              =>  "Seleccione campo",
                   "name"           =>  "Nombre",
                   "color"          =>  "Color",
                   "volume"         =>  "Volumen",
                   "price"          =>  "Precio"
                    ],null,['class' =>  'form-control']) !!}

            </div>

            {!! Form::submit('Filtrar',['class'=>'btn btn-default'])!!}

            {!! Form::close() !!}
        </div>

        <div class="container" style="overflow: auto;">
            <h2>Lista de productos</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Color</th>
                    <th>Volumen</th>
                    <th>Precio</th>
                    <th>Creado por</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->color}}</td>
                    <td>{{$product->volume}}</td>
                    <td>${{$product->price}}</td>
                    <td>{{$product->user->name}}</td>
                    <td>
                        <a href="{{route('product.edit',$product->id)}}" class="btn btn-warning glyphicon glyphicon-cog"></a>
                        <a href="{{route('product.destroy',$product->id)}}" class="btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('¿Seguro que deseas eliminarlo?')"></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection