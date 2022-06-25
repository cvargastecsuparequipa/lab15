<table>
    <thead>
    <tr>
        <th>Descripcion</th>
        <th>Estado</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categorias as $categoria)
        <tr>
            <td>{{ $categoria->descripcion }}</td>
            <td>{{ $categoria->estado ? 'ACTIVO':'INACTIVO' }}</td>

        </tr>
    @endforeach
    </tbody>
</table>

