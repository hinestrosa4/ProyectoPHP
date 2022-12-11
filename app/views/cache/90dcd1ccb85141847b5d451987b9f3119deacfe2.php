<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="">
</head>

<body>
    
    <?php $__env->startSection('cuerpo'); ?>
    <!--<p><?= $usuario ?></p>-->
    <h1 style="margin-left: 50px;margin-bottom:20px;">Lista de Ususarios</h1>
    <hr>
    <?= creaTable('listaUsuarios', $nombreCamposImp, $nombresScreen, Usuario::getTareasImpPorPagina($empezarDesde, $tamanioPagina),"nif") ?>

    <p><b>Página Actual:</b> <?= $pagina ?></p>

    <ul class=pagination>
        <li class=page-item><a class=page-link href='?pagina=1'>Primera</a>
        <li class=page-item><a class=page-link href='?pagina=<?= $pagina - 1 ?>'><<</a>

                    <?php
                    for ($i = 1; $i <= $totalPaginas; $i++) {
                        echo "<li class=page-item><a class=page-link href='? pagina=" . $i . "'>" . $i . "</a> ";
                    }
                    ?>

        <li class=page-item><a class=page-link href='?pagina=<?= $pagina + 1 ?>'>>></a>
        <li class=page-item><a class=page-link href='?pagina=<?= $totalPaginas ?>'>Última</a>
    </ul>
    <form action="/app/controllers/procesarlistaUsuarios.php" method="get">
        Indique una página: <input type=text value="1" name="pagina"> <button class="btn btn-primary">Ir a la página</button>
    </form>
    <?php $__env->stopSection(); ?>
</body>

</html>
<?php echo $__env->make('_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hinestrosa\Desktop\DAW\2\PHP\Proyectos\Proyecto\app\views/listaUsuarios.blade.php ENDPATH**/ ?>