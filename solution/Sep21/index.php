<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management<<</title>
</head>
<body>
    <h1>Product Management</h1>

    <form action="action/product.inc.php" method="POST">
        Product Name: <input type="text" name="pname" id="pname"><br/>
        Product Desc: <input type="text" name="description" id="description"><br/>
        Product Price: <input type="text" name="price" id="price"><br/>
        <input type="button" value="Submit" name="submit">
    </form>
    <br/>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th></th>
            <th></th>
        </tr>
        <?php
            $products=array(
                array("id"=>1,"pname"=>"keyboard","price"=>650.20)
            );
            foreach($products as $p){
                printf("
                        <tr>
                            <td>%d</td>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%d</td>
                            <td><a href='#'>Delete</a></td>
                            <td><a href='#'>Update</a></td>
                        </tr>
                ",$p['id'],$p['pname'],$p['description'],$p['price']);
            }
        ?>
    </table>
</body>
</html>