<h1>Modifica una materia.</h1>

<form action="{{ url('/materia/'.$materia->id) }}" method="post">
    @csrf

    {{method_field('PATCH')}}

    @include('materia.form')
</form>