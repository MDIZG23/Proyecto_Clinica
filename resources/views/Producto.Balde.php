<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h2>Productos</h2>
        <p>Lista de Productos</p>

        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <td>ID Producto</td>
                    <td>Nombre</td>
                    <td>Descripción</td>
                    <td>Precio</td>
                    <td>Categoría</td>
                    <td>Estado</td>
                </tr>
            </thead>
            <tbody>
                @foreach($ResulProductos as $producto)
                <tr>
                    <td class="inner-table">{{$producto["id"]}}</td>
                    <td class="inner-table">{{$producto["NOM_PRODUCTO"]}}</td>
                    <td class="inner-table">{{$producto["DES_PRODUCTO"]}}</td>
                    <td class="inner-table">{{$producto["PRECIO"]}}</td>
                    <td class="inner-table">{{$producto["ID_CATEGORIA"]}}</td>
                    <td class="inner-table">{{$producto["ID_ESTADO"]}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h2>Insertar Nuevo Producto</h2>
        <form action="/INSERT_PRODUCTO" method="post">
            @csrf <!-- Agrega esto para protección contra CSRF -->

            <label for="nombre">Nombre:</label>
            <input type="text" name="PV_NOM_PRODUCTO" required>

            <label for="descripcion">Descripción:</label>
            <input type="text" name="PV_DES_PRODUCTO" required>

            <label for="precio">Precio:</label>
            <input type="number" step="0.01" name="PN_PRECIO" required>

            <label for="categoria">Categoría:</label>
            <input type="text" name="PN_ID_CATEGORIA" required>

            <label for="estado">Estado:</label>
            <input type="text" name="PN_ID_ESTADO" required>

            <button type="submit">Insertar</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
