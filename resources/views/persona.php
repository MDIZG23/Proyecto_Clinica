<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>Personas</h2>
  <p>Lista de Personas</p>

  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <td>IDENTIDAD</td>
        <td>PRIMERNOMBRE</td>
        <td>SEGUNDONOMBRE</td>
        <td>PRIMERAPELLIDO</td>
        <td>SEGUNDOAPELLIDO</td>
        <td>SEXPERSONA</td>
        <td>INDCIVIL</td>
        <td>EDADPERSONA</td>
        <td>TELEFONO</td>
        <td>CORREO</td>
        <td>DIRPERSONA</td>
        <td>FECREGISTRO</td>
      </tr>
    </thead>
    <tbody>
      @foreach($ResulPersonas as $persona)
        <tr>
          <td class="inner-table">{{$persona["id"]}}</td>
          <td class="inner-table">{{$persona["firstname"]}}</td>
          <td class="inner-table">{{$persona["secondname"]}}</td>
          <td class="inner-table">{{$persona["surname"]}}</td>
          <td class="inner-table">{{$persona["secondsurname"]}}</td>
          <td class="inner-table">{{$persona["sexperson"]}}</td>
          <td class="inner-table">{{$persona["civilstatus"]}}</td>
          <td class="inner-table">{{$persona["age"]}}</td>
          <td class="inner-table">{{$persona["phone"]}}</td>
          <td class="inner-table">{{$persona["mail"]}}</td>
          <td class="inner-table">{{$persona["address"]}}</td>
          <td class="inner-table">{{$persona["registrationdate"]}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <h2>Insertar Nueva Persona</h2>
  <form action="/INSERT_PERSONA" method="post">
    @csrf <!-- Agrega esto para protección contra CSRF -->
  
    <label for="identidad">Identidad:</label>
    <input type="text" name="PV_IDENTIDAD" required>

    <label for="primerNombre">Primer Nombre:</label>
    <input type="text" name="PV_PRIMER_NOMBRE" required>

    <label for="segundoNombre">Segundo Nombre:</label>
    <input type="text" name="PV_SEGUNDO_NOMBRE" required>

    <label for="primerApellido">Primer Apellido:</label>
    <input type="text" name="PV_PRIMER_APELLIDO" required>

    <label for="segundoApellido">Segundo Apellido:</label>
    <input type="text" name="PV_SEGUNDO_APELLIDO" required>

    <label for="sexo">Sexo:</label>
    <select name="PV_SEX_PERSONA" required>
      <option value="M">Masculino</option>
      <option value="F">Femenino</option>
    </select>

    <label for="estadoCivil">Estado Civil:</label>
    <input type="text" name="PV_IND_CIVIL" required>

    <label for="edad">Edad:</label>
    <input type="number" name="PN_EDAD_PERSONA" required>

    <label for="telefono">Teléfono:</label>
    <input type="text" name="PN_TELEFONO" required>

    <label for="correo">Correo:</label>
    <input type="email" name="PV_CORREO" required>

    <label for="direccion">Dirección:</label>
    <input type="text" name="PV_DIR_PERSONA" required>

    <label for="fechaRegistro">Fecha de Registro:</label>
    <input type="text" name="PV_FEC_REGISTRO" required>

    <button type="submit">Insertar</button>
  </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>