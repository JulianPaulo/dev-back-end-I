<a href="?pagina=1">Página 1</a>
<hr />
<?php
if(isset($_GET["pagina"]) && !empty($_GET["pagina"])){
                $file = "paginas/" . $_GET["pagina"] . ".php";
                if (file_exists($file)) {
                               include($file);     
                } else {
                    echo  $_GET["pagina"] . ".php não existe";
                }
}else{
                include("home.php");      
}
?>
 