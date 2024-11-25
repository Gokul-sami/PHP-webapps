<?php
    $cookie_name = "user";
    $cookie_value = "CSE";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
    static $count = 0;
?>
<html>
    <body>
    
        <?php
            if(!isset($_COOKIE[$cookie_name])) {
                echo "HI you are not registered user";
                $count++;
            } 
            else 
            {
                echo "HI " . $_COOKIE[$cookie_name] . "! Welcome";
                $count++;
                echo $count;
            }
        ?>
    </body>
</html>


<!-- setcookie(name, value, expire, path, domain, secure, httponly); -->