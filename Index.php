<?php
    //tutoriales
    //https://www.youtube.com/watch?v=FvibfpSVFBw&list=PLAzlSdU-KYwXllXcUCW-BylQZemcDV798
    //h1 titulos
    //h2 desafios
    //h3 titulo codigo materia
    //#response id para las respuestas
    

    //link no cambia es la base
    $link="https://www.youtube.com/embed/";

    //code cambia al codigo de la pagina de youtube
    $code="FvibfpSVFBw";

    //path cambia el codigo php que se muestra
    $path="Intro.php";
    $btnBool = "visibility:visible";
    $btnBool2 = "visibility:visible";
    
    //si recibe un post
    if( isset($_POST['btn_next']) )
    {
        //si la pagina ha recibido un post el botton sera visible
        $id=$_POST['btn_next']+1;
        $btnBool ="visibility:visible";
    }
    else if( isset($_POST['btn_back']) )
    {
        $id=$_POST['btn_back']-1;
        $btnBool ="visibility:visible";
    }
    else
    {
        //si la pagina no ha recibido un post ya no sera visible
        
        $id=0;
    }
    

    //logica
    if( $id=="1" )
    {
        $code="Lmhb1KoBeHk";
        $path="tutorial_1.php";
    }
    if( $id=="2" )
    {
        $code="MMnAwnOb4a8";
        $path="tutorial_2.php";
    }
    if( $id=="3" )
    {
        $code="ZXvfPvti-4M";
        $path="tutorial_3.php";
    }
    if( $id=="4" )
    {
        $code="aja-0hYWEFQ";
        $path="tutorial_4.php";
    }
    if( $id=="5" )
    {
        $code="nJoEeniIvgU";
        $path="tutorial_5.php";
    }
    if( $id=="6" )
    {
        $code="b-DhIwRQ9nk";
        $path="tutorial_6.php";
    }
    if( $id=="7" )
    {
        $code="UrfaBgj8tg4";
        $path="tutorial_7.php";
    }
    if( $id=="8" )
    {
        $code="fy2wA9mSitU";
        $path="tutorial_8.php";
    }
    if( $id=="9" )
    {
        $code="";
        $path="";
    }
    if( $id == "10" )
    {
        $code="";
        $path="";
    }
    if( $id == "11" )
    {
        $code="";
        $path="";
    }
    if( $id == "12" )
    {
        $code="";
        $path="";
    }
    if( $id == "13" )
    {
        $code="";
        $path="";
        $btnBool2 ="visibility:hidden";
    }
    if( $id > "13" )
    {
        $id=13;
    }
    if( $id < "0" )
    {
        $id=0;
    }
    if( $id == "0" )
    {
        $btnBool = "visibility:hidden"; 

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
    <?php include_once "views/Navegacion/Side.php"?>
    <div class="wrapper">
        <div class="videowrapper">
            <iframe  src=<?php echo $cLink;?> 
            title="YouTube video player" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <?php include_once "views/tutorial/".$path;?>
    <!-- modificar -->
    <form action="/WebPsint/" method="post">
        <table>
            <tr>
                <td id="td1"><button style =<?php echo $btnBool;?> type="submit" value=<?php echo $id;?> name="btn_back">Anterior</button> </td>
                <td id="td2"><h4>Tutorial <?php echo $id?></h4> </td>
                <td id="td3"><button style =<?php echo $btnBool2;?> type="submit" value=<?php echo $id;?> name="btn_next">Continuar</button> </td>
            </tr>
        </table> 
    </form>
    <!-- modificar -->

</body>
</html>
