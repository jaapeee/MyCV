<?php
session_start();
session_destroy();
echo "<script>alert('Successfully Logged Out');</script>";
echo "<script>location.href = '../student-login.php'</script>";
exit();
 ?>
