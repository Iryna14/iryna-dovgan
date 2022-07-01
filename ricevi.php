<?php
echo "<h1>Metodo Post</h1>";
foreach($_POST as $key=>$value) {
    echo "<div>$key = $value</div>";
}
echo "<hr><h1>Metodo Get</h1>";
foreach($_GET as $key=>$value) {
    echo "<div>$key = $value</div>";
}
?>