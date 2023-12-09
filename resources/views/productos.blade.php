<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Examen</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('producto.inicio') }}">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('empleado.inicio') }}">Empleados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('proveedor.inicio') }}">Proveedores</a>
        </li>
        <li class="nav-item">
    
        </li>
      </ul>
    </div>
  </div>
</nav>

<table class="table">
        <thead>
          <tr>
            <th scope="col">idProducto</th>
            <th scope="col">descripcion</th>
            <th scope="col">precio</th>
            <th scope="col">stock</th>
            <th scope="col">pagaIsv</th>
        
          </tr>
        </thead>
        <tbody>
            @foreach ($productos as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->descripcion}}</td>
                <td>{{$item->precio}}</td>
                <td>{{$item->precio}}</td>
                <td>{{$item->pagaIsv}}</td>
                
            </tr>
            @endforeach          
          
        </tbody>
      </table>  
      
      <a class="btn btn-success" href="{{ route('producto.ver') }}">Crear Producto</a>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>