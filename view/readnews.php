<?php
ob_start();
?>

<br>

<?php

ViewNews::ReadNews($n);
print_r($n);
$content = ob_get_clean();
include_once 'view/layout.php';

?>