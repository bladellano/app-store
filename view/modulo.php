<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Store</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>

<body>
    <?php
        extract(current($aModulo));
    ?>
    <div class="container">
        <h5>Contratar Módulo</h5>
        <div class="row">
            <div class="col-md-12">
                <div class="custom-card">
                    <div class="card-head"><?=$categoria?></div>
                    <div class="card-body" style="background:<?=$bgcolor?>">
                        <i class="<?=$fontawesome?>"></i>
                    </div>
                </div>
                <div class="card-modulo-info">
                    <h4><?=$nome_modulo?></h4>
                    <p>+ R$ <?=$preco?> por colaborador por mês</p>
                    <a href="" class="btn btn-success"><?=$btn_ativar?></a>
                </div>
            </div><!--col-md-12-->
        </div><!--row-->
        <div class="row">
           <div class="col-md-12">
               <p></p>
               <h5>Sobre o módulo</h5>
               <p><?=$descricao?></p>
           </div>
        </div>
    </div><!--container-->
</body>

</html>
