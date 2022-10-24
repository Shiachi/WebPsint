<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side menu</title>
    <link rel="stylesheet" href="Style/sidemenu.css">

</head>
<body>
    <div id="sidemenu" class="menu-collapsed">
        <!-- Header -->
        <div id="header">
            <div id="title"><span>Curso de PseInt</span></div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>

        <!-- Profile-->
        <div id="profile">
            <div id="photo"><img src="resources/eat.png" alt=""></div>

            <div id="name"></div>
        </div>
        <!-- Items -->
        <form method="post">
        <div id="menu-items">
            <div class="item">
            <button type="submit" class="btnItem" value= "0"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 0</span></div>
            </button>
            </div>
            <div class="item">
            <button type="submit" class="btnItem" value= "1"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 1</span></div>
            </button>
            </div>
            <div class="item">
            <button type="submit" value= "2"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 2</span></div>
            </button>
            </div>
            <div class="item">
            <button type="submit" value= "3"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 3</span></div>
            </button>
            </div>
            <div class="item">
            <button type="submit" value= "4"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 4</span></div>
            </button>
            </div>
            <div class="item">
            <button type="submit" value= "5"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 5</span></div>
            </button>
            </div>
            <div class="item">
            <button type="submit" value= "6"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 6</span></div>
            </button>
            </div>
            <div class="item">
            <button type="submit" value= "7"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 7</span></div>
            </button>
            </div>
            <div class="item">
            <button type="submit" value= "8"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 8</span></div>
            </button>
            </div>
            <div class="item">
            <button type="submit" value= "9"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 9</span></div>
            </button>
            </div>
            <div class="item">
            <button type="submit" value= "10"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 10</span></div>
            </button>
            </div>
            <div class="item">
            <button type="submit" value= "11"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 11</span></div>
            </button>    
            </div>
            <div class="item">
            <button type="submit" value= "12"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 12</span></div>
            </button>
            </div>
            <div class="item">
            <button type="submit" value= "13"  name="btnItems" id="btnItems">
                    <div class="icon"><img src="resources/code.png" alt=""></div>
                    <div class="title"><span>Curso 13</span></div>
            </button>
            </div>


        <div class="item separator"></div>
        </div>
    </div>
    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click', e =>{
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");

            document.querySelector('body').classList.toggle('body-expanded');
        });
    </script>

</body>
</html>