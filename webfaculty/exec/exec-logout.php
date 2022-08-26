<?php
session_start();
session_destroy();
echo "<script>alert('Successfully Logged Out');</script>";
echo "<script>location.href = '../faculty-login.php'</script>";
exit();
 ?>
