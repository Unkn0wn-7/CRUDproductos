<!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>
<p>My first paragraph.</p>
<p>
    @foreach($producto as $pro)
        {{$pro->Nombre}}
        {{$pro->Descripcion}}
        {{$pro->Precio}}
    @endforeach
</p>
</body>
</html>