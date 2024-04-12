<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>
    
<?php 
if( count($_COOKIE) > 0){
    echo "Cookie are eneble,";
}else{
    echo "Cookie are disable,";
}
?>
</body>
</html>
