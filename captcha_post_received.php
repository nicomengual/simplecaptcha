<?php
if ($_POST['send']]) {
        session_start();
        $captcha = $_POST['captcha'];
        if ($captcha == $_SESSION['code']) {
                echo "<p>Captcha code correct</p>";
        }else echo"<p>Captcha code incorrect</p>";
}
?>
<html>
<body>
<img src="getpng.php"><br />
<form name="test1" method="post" action="">
        <input type="text" name="captcha">
        <input type="submit" name="send">
</form>
</body>

