<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>./estilo/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>./estilo/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Desenvolvedor Web">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;500&display=swap" rel="stylesheet">
    <title>Rodrigo Viana</title>
</head>


<body>

    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch ($url) {
        case 'sobre':
            echo '<target target="sobre" />';
            break;

        case 'projetos':
            echo '<target target="projetos" />';
            break;

        case 'contato':
            echo '<target target="contato" />';
            break;


    }

    ?>

    <header>
        <div class="center">
        <div class="logo left"><h1>Port<span>folio</span></h1></div><!--logo-->
    
        <nav class="desktop right">
        
        <ul>
            <li><a href="<?php echo INCLUDE_PATH; ?>">Início</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>projetos">Projetos</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
        </ul>
    </nav>
    
        <nav class="mobile right">
            <div class="botao-menu-mobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <ul>
            <li><a href="<?php echo INCLUDE_PATH; ?>">Início</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>projetos">Projetos</a></li>
            <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
        </ul>
        </nav>
        <div class="clear"></div><!--clear-->
    </div><!--center-->
    </header>

    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    if(file_exists('pages/'.$url.'.php')){
        include('pages/'.$url.'.php');
    }else{
        //Podemos fazer o que quiser, pois a página não existe.
        if($url != 'sobre' && $url !='projetos' && $url !='contato'){
        $pagina404 = true;
        include('pages/404.php');
    }else{
        include('pages/home.php');
    }
    }

    ?>

    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"';?>>
        <div class="center">
        <p>Todos os direitos reservados @Rodrigo Viana.</p>
        </div><!--center-->
    </footer>
<script src="<?php echo INCLUDE_PATH; ?>./js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH; ?>./js/scripts.js"></script>

</body>


</html>