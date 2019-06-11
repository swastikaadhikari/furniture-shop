<!--temppalte for log out page-->
<?php
session_start();//start the session
session_unset();//unset the session
session_destroy();//destroy the session
header('location:adm_home');//reaches the location to admin home
 ?>