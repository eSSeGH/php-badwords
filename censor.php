<?php

$paragraph = $_GET["paragraph"];
var_dump($_GET);

?>

<p><?php echo $paragraph ?></p>


<?php

$censored_paragraph = str_replace('bootstrap', 'b*******p', $paragraph);

echo '<br>';
echo $censored_paragraph;
?>