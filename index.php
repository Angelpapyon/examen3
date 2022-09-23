<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>base de datos</title>

</head>
<body>

    <ol>
        <li> creaci&oacuten de la BASE DE DATOS</li>
        <div class="margen">
            <p>aqu&iacute creamos la BASE DE DATOS</p>
            <h2>NOMBRE DE BD</h2>
            <form action="crearDB.php" method="POST">
                <input type="text" name="NomBD">
                <button type="submit">crear base de datos</button>
            </form>
        </div>
        <li>creaci&oacuten DE TABLAS</li>
        <div class="margen">

            <p> aqu&iacute creamos las tablas</p>
            <h2>
                ingrese el nombre de la base de datos
            </h2>
            <form action="crearTabla.php" method="POST">
                <input type="text" name="NomBase">
                <h2>ingrese el nombre de la tabla que desea crear</h2>
                <input type="text" name="nombretabla" placeholder="nombre-Tabla">
                <h2>columnas</h2>

                <input type="text" placeholder="atributo - entero " name="id"> <br>
                <input type="text" placeholder="atributo - cadena" name="nombre"> <br>
                <input type="text" placeholder="atributo - cadena" name="apellido"> <br>
                <input type="text" placeholder="atributo - entero" name="edad"> <br>
                <button type="submit">crear tabla</button>
            </form>
        </div>
        <li>Registro de datos</li>
        <div class="margen">
            <p>aqui realizamos el registro de datos</p>

            <h2>
                ingrese el nombre de la base de datos y el nombre de la tabla
            </h2>
            <form action="insertarDatos.php" method="POST">
                <input type="text" name="NomBase" placeholder="nombre de  Base de Datos">
                <input type="text" name="nomT" placeholder="nombre de Tabla">
                <p>campo 1 para llenar texto</p>
                <input type="text" name="nombreReg" placeholder="texto1">
                <p>campo 2 para llenar texto</p>
                <input type="text" name="apellidoReg" placeholder="texto2">
                <p>campo 1 para llenar numeros</p>
                <input type="text" name="dniReg" placeholder="numero1">
                <p>campo 2 para llenar numeros</p>
                <input type="text" name="edadReg" placeholder="numero2">
                <button type="submit">enviar datos</button>
            </form>

        </div>

    </ol>

</body>
</html>