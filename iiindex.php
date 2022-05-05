<?php



    function pd($obj)
    {

        print "<div align='left'><font face='Verdana' color='//536f8c' size='3'><pre>";
        print_r($obj);
        print "</pre></font></div>";
        die;

    }
?>

<html>
<body>

<form action="index.php" method="get">
    <input type="hidden" name='ttt' value="hide">
Name: <input type="text" name="name"><br>
E-mail: <input type="email" name="email"><br>
Password: <input type="password" name="password"><br>
<input type="date" name="password"><br>
<input type="submit" value="daachire">
</form>

</body>
</html>
