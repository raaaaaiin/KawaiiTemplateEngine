<!-- a simple view returning json data -->
<?php
include "view/header.php";
echo "<h3 style=\"text-align: center;\">Product added</h3>";
json_encode($product);
include "view/footer.php";
?>