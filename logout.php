<?php
session_start();
session_destroy();

echo "<script>
alert('Successfully logged out');
window.location.href='index.php';
</script>";

?>