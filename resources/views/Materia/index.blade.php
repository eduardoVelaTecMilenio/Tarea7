<h1>Lista de materias.</h1><br>

<a href="{{ url('materia/create') }}">Añadir una nueva materia</a><br><br>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre de la materia</th>
            <th>Primera actividad</th>
            <th>Calificación</th>
            <th>Segunda actividad</th>
            <th>Calificación</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($materias as $materia)

        <tr>
            <td>{{$materia->id}}</td>
            <td>{{$materia->Nombre}}</td>
            <td>{{$materia->PrimeraActividad}}</td>
            <td>{{$materia->PrimeraCalificacion}}</td>
            <td>{{$materia->SegundaActividad}}</td>
            <td>{{$materia->SegundaCalificacion}}</td>
            <td>
            
            <a href="{{ url('/materia/'.$materia->id.'/edit') }}">
                Editar
            </a>

            | 

            <form action="{{ url('/materia/'.$materia->id) }}" method="post">
                @csrf

                {{method_field('DELETE')}}

                <input type="submit" onclick="return confirm('¿Quiere borrar esta materia de la lista?')" value="Borrar">
            </form>

            </td>
        </tr>

        @endforeach
    </tbody>

</table>
