<?php
$title = "Home Page";
ob_start();
?>
    <h2>Welcome to the Home Page!</h2>
    <p>This content comes from the child template.</p>
<?php
$content = ob_get_clean();
include 'base.php';
