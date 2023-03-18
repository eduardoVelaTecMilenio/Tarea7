<h1>Añade una nueva materia.</h1>

<form action="{{ url('/materia') }}" method="post">
    @csrf

    @include('materia.form')
</form>