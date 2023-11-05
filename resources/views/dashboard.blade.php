@include('layout.app')
   <div class="container">
     <table class="table table-dark table-hover">
        <thead>
            <th>Tipo Estab.</th>
            <th>Fecha de Actualizac.</th>
            <th>Producto</th>
            <th>Laboratorio</th>
            <th>Farmacia/Botica</th>
            <th>Precio Unit. S/.</th>
            <th>Ver detalle</th>
        </thead>
        <tbody>
            @foreach ($departamentos as $d)
                <tr>
                    <td>{{ $d["nombre"] }}</td>
                </tr>
            @endforeach
        </tbody>
     </table>
   </div>
