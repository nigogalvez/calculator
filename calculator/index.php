<?php
declare(strict_types = 1);
include 'includes/autoloader.inc.php';
?>
<html>
    <head>

    </head>
    <body>
        <form action="includes/calc.inc.php" method="post">
            <p>My Own Calculator!</p>
            <input type="number" name="num1" placeholder="First number">
            <select name="oper">
                <option value="add">Addition</option>
                <option value="sub">Subtraction</option>
                <option value="div">Division</option>
                <option value="mul">Multiplication</option>
            </select>
            <input type="number" name="num2" placeholder="Second number">
            <button type="submit" name="submit">Calculate</button>
            </form>
    </body>
</html>