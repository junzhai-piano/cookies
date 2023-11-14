<?php
// set the expiration date to one hour ago
unset($_COOKIE['user']); 
setcookie('user', null, -1, '/'); 
?>
<html>
<body>

<?php
echo "Cookie 'user' is deleted.";
?>

</body>
</html>