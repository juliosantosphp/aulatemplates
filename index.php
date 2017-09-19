
<?php
require 'template.php';

$array = array(
    "titulo" => "Titulo da página",
    "nome" => "Fulano",
    "idade" => 90
);

$tpl = new Template('template.html');
$tpl->render($array);

?>


