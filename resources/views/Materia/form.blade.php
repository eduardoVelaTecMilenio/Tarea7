<br>
<label for="Nombre">Nombre de la materia</label>
<input type="text" name="Nombre" value="{{ isset($materia->Nombre)?$materia->Nombre:'' }}" id="Nombre"><br><br>

<label for="PrimeraActividad">Primera actividad</label>
<input type="text" name="PrimeraActividad" value="{{ isset($materia->PrimeraActividad)?$materia->PrimeraActividad:'' }}" id="PrimeraActividad"><br><br>

<label for="PrimeraCalificacion">Calificación</label>
<input type="number" name="PrimeraCalificacion" value="{{ isset($materia->PrimeraCalificacion)?$materia->PrimeraCalificacion:'' }}" id="PrimeraCalificacion"><br><br>

<label for="SegundaActividad">Segunda actividad</label>
<input type="text" name="SegundaActividad" value="{{ isset($materia->SegundaActividad)?$materia->SegundaActividad:'' }}" id="SegundaActividad"><br><br>

<label for="SegundaCalificacion">Calificación</label>
<input type="number" name="SegundaCalificacion" value="{{ isset($materia->SegundaCalificacion)?$materia->SegundaCalificacion:'' }}" id="SegundaCalificacion"><br><br>

<input type="submit" value="Guardar""><br><br>
<br>
<a href="{{ url('materia') }}">Regresar</a>