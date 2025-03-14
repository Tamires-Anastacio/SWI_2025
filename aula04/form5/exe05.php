<?php
$corFundo = '#ffffff'; 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cor'])) {
    $corFundo = $_POST['cor'];
}
?>
