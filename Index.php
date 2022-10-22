<?php
    //tutoriales
    //https://www.youtube.com/watch?v=FvibfpSVFBw&list=PLAzlSdU-KYwXllXcUCW-BylQZemcDV798

    //link no cambia es la base
    $link="https://www.youtube.com/embed/";

    //code cambia al codigo de la pagina de youtube
    $code="FvibfpSVFBw";

    //path cambia el codigo php que se muestra
    $path="Intro.php";


    //si recibe un post
    if(isset($_POST['btn_next']))
    {
        
        $id = $_POST["btn_next"];
    }
    else
    {
        $id=0;
    }
    

    //logica
    if($id=="1")
    {
        $code="Lmhb1KoBeHk";
        $path="tutorial_1.php";
    }
    if($id=="2")
    {
        $code="MMnAwnOb4a8";
        $path="tutorial_2.php";
    }

    //reseteo de la pagina
    if($id>13)
    {
        $id = 0;
    }

    //link completo para mostrar el video, no cambia
    $cLink=$link.$code;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PseInt</title>
    
    <link rel="stylesheet" href="Style/tutorial.css">
    
</head>
<body>
    <div class="wrapper">
        <div class="videowrapper">
            <iframe  src=<?php echo $cLink;?> 
            title="YouTube video player" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <?php include_once "views/tutorial/".$path;?>

    <!-- modificar -->
    <form action="/WebPsint/" method="post">
        <?php $id+=1;?>
        <button value=<?php echo $id;?> name="btn_next">Continuar</button>
    </form>
    <!-- modificar -->

</body>
</html>
