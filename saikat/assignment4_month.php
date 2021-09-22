<?php
        session_start();
        $all_prods=$_SESSION['prods'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Months</title>
</head>
<body>
    <h1>Remove Month</h1>

    <form method="POST" action="include/removemonth.inc.php">
        Month ID: <input id="mid" name="mid"/><br/>
        Month Name: <input id="monthname" name="monthname"/><br/>
        <button type="submit" name="addmonth">Add</button>
    </form>

    <table border="1">
    <?php
        foreach($all_months as $m){
            printf('<tr>
            <td>%d</td>
            <td>%s</td>
            <td><a href="include/removemonth.inc.php?action=del&mid=%d">Delete</a></td>'
            ,$m['mid'],$m['monthname'],$m['mid']);
        }
            
    ?>
    </tr>
    </table>
</body>
</html>