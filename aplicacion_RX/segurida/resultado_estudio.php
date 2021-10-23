<?php
if ($_SESSION){
    $medico=$_SESSION['user'];
}else{
    echo "<script>location.href='../../index.php'</script>";
}