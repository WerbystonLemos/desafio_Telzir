<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telzir</title>

    <!-- Bootstrap -->
    <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- css  -->
    <link href="./src/css/main.css" rel="stylesheet" />
    <!-- Jquery -->
    <script src="./lib/jquery/jquery.min.js"></script>
</head>
<body>

    <div id="generalContainer" class="container-fluid">
        
        <header id="headerContainer" class="">
            <?php include_once('./src/components/header/index.php'); ?>
        </header>

        <main id="mainContainer" class="">
            <?php include_once('./src/components/main/index.php'); ?>
        </main>
        
        <div id="footerContainer" class="">
            <?php include_once('./src/components/footer/index.php'); ?>
        </div>
    </div>


    <!-- Bootstrap -->
    <script src="./lib/bootstrap/js/bootstrap.min.js" ></script>
</body>
</html>