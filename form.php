<?php

session_start();

if(isset($_REQUEST['submit'])){
$_SESSION['username'] = $_REQUEST['username'];
}

?>

    <form action="" method="get">
    <p>Name: <input type="text" name="username" /></p>
    <p><input type="submit" name="submit"/></p>
    </form>

    <?php echo "<a href='output.php'>Другая страница</a>"; ?>
