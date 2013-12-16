<?php
    include_once('../../common/init.php');

    session_destroy();
    header("Location: $BASE_URL"."pages/auth/login.php");
?>
