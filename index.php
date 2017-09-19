
<?php
require 'template.php';

$array = array(
    "titulo" => "Titulo da página",
    "nome" => "Fulano"
);

$tpl = new Template('template.html');
$tpl->render($array);

?>


