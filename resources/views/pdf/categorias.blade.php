<!DOCTYPE html>
<html>
<head>
    <title>CATEGORIAS</title>
</head>
<body>

<table>
    <thead>
    <th>
        DESCRIPCION
    </th>
    <th>
        ESTADO
    </th>
    </thead>
    <tbody>
    @foreach($categorias as $categoria)
        <tr>
            <td>
                {{$categoria->descripcion}}
            </td>
            <td>
                {{$categoria->estado ? 'ACTIVO':'INACTIVO'}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
