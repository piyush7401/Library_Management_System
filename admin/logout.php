<!-- If Admin has click on logout link, then this page code has been execute, and under this page, it has delete all $_SESSION variable value by using session_destroy() function and after this it will redirect to admin_login.php file.

 -->

<?php

//logout.php

session_start();

session_destroy();

header('location:../admin_login.php');

?>