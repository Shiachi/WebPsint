<?php
    //tutoriales
    //https://www.youtube.com/watch?v=FvibfpSVFBw&list=PLAzlSdU-KYwXllXcUCW-BylQZemcDV798

    

    //link no cambia es la base
    $link="https://www.youtube.com/embed/";

    //code cambia al codigo de la pagina de youtube
    $code="FvibfpSVFBw";

    //path cambia el codigo php que se muestra
    $path="Intro.php";
    $btnBoool = "hidden";
    
    //si recibe un post
    if( isset($_POST['btn_next']) )
    {
        //si la pagina ha recibido un post el botton sera visible
        $id=$_POST['btn_next']+1;
    }
    else if( isset($_POST['btn_back']) )
    {
        $id=$_POST['btn_back']-1;
    }
    else
    {
        //si la pagina no ha recibido un post ya no sera visible
        $btnBoool = "hidden"; 
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
    if($id=="3")
    {
        $code="ZXvfPvti-4M";
        $path="tutorial_3.php";
    }
    if($id=="4")
    {
        $code="aja-0hYWEFQ";
        $path="tutorial_4.php";
    }
    if($id=="5")
    {
        $code="nJoEeniIvgU";
        $path="tutorial_5.php";
    }
    if($id=="6")
    {
        $code="b-DhIwRQ9nk";
        $path="tutorial_6.php";
    }
    if($id=="7")
    {
        $code="UrfaBgj8tg4";
        $path="tutorial_7.php";
    }
    if($id=="8")
    {
        $code="fy2wA9mSitU";
        $path="tutorial_8.php";
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
        <button type="submit" value=<?php echo $id;?> name="btn_back">Anterior</button>
        <button type="submit" value=<?php echo $id;?> name="btn_next">Continuar</button>
    </form>
    <!-- modificar -->

</body>
</html>
