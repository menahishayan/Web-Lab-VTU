<html>
    <head>
        <title>p8a</title>
    </head>
    <body>
        <form method="post">
            <input type="number" name="n1">
            <input type="number" name="n2">
            <button type="submit">Submit</button>
        </form>
        <?php 
            $n1 = $_POST['n1']; 
            $n2 = $_POST['n2']; 
            print "<br/> Add: ".($n1+$n2);
            print "<br/> Sub: ".($n1-$n2);
            print "<br/> Mul: ".($n1*$n2);
            print "<br/> Div: ".($n1/$n2);
        ?>
    </body>
</html>