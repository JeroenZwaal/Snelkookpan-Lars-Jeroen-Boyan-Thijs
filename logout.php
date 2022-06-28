<?php
session_start();
session_destroy();
header("location: index.php?msg=je+bent+uitgelogd");
exit;
?>
