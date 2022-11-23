<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Rafael Hinestrosa</title>
</head>

<body>

    <form method="post" action="../controllers/validarFormTarea.php">

        <label>NIF o CIF</label> <input type="text" name="textNif" value="<?= ValorPost('textNif') ?>"><br>
        <?= VerError('nif') ?><br><br>

        <label><strong>Persona de Contacto</strong></label><br>
        <label>Nombre</label> <input type="text" name="textNombre" value="<?= ValorPost('textNombre') ?>"><br>
        <?= VerError('nombre') ?><br><br>
        <label>Apellidos</label> <input type="text" name="textApellidos" value="<?= ValorPost('textApellidos') ?>"><br>
        <?= VerError('apellidos') ?><br><br><br>

        <label>Nº de teléfono</label> <input type="text" name="textTelefono" value="<?= ValorPost('textTelefono') ?>"><br>
        <?= VerError('telefono') ?><br><br>

        <label>Descripción</label><br>
        <textarea name="textDescripcion" id="descripcion" cols="40" rows="10"><?= ValorPost('textDescripcion') ?></textarea><br>
        <?= VerError('descripcion') ?><br><br>

        <label>Correo electrónico</label> <input type="text" name="textCorreo" value="<?= ValorPost('textCorreo') ?>"><br>
        <?= VerError('correo') ?><br><br>

        <label>Dirección</label> <input type="text" name="textDireccion"><br><br>

        <label>Población</label> <input type="text" name="textPoblacion"><br><br>

        <label>Codigo postal</label> <input type="text" name="textCp" value="<?= ValorPost('textCp') ?>"><br>
        <?= VerError('cp') ?><br><br>

        <label>Provincia</label>

        <?= CreaSelect('selectProvincia', Provincia::listaSelect(), filter_input(INPUT_POST, 'prov')) ?>
        <br><br>

        <label>Estado</label> <select name="selectEstado" id="estados">
            <option value="0" hidden>Elija el estado de la tarea</option>
            <option value="b">Esperando ser aprobada</option>
            <option value="p">Pendiente</option>
            <option value="r">Realizada</option>
            <option value="c">Cancelada</option>
        </select><br><br>

        <label>Fecha de creación</label> <input readonly type="date" name="fechaCreacion" value="<?= $fechaActual ?>"><br>


        <label>Operario encargado</label>
        <?= CreaSelect('selectOperario', Usuario::listaSelect(), filter_input(INPUT_POST, 'prov')) ?>
        <br><br>

        <label>Fecha de realización</label> <input type="date" name="fechaRealizacion" value="<?= ValorPost('fechaRealizacion') ?>"><br>
        <?= VerError('fechaRealizacion') ?><br><br>

        <label>Anotaciones anteriores</label><br><textarea name="anotacionesAnt" id="anotaciones1" cols="40" rows="10"></textarea><br><br>

        <label>Anotaciones posteriores</label><br><textarea name="anotacionesPos" id="anotaciones2" cols="40" rows="10"></textarea><br><br>

        <label>Fichero resumen</label><br><input type="file" name="ficheroResumen"><br><br>

        <label>Fotos del trabajo realizado</label><br><input type="file" name="fotoTrabajo"><br><br>

        <button type="submit" name="botonEnviar">Enviar</button>
    </form>
</body>

</html>