<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
</head>
<body>
    <h1>Product Management</h1>

    <form action="include/product.inc.php" method="POST">
    <input type="hidden" name="id" id="id"></br>
        Product Name: <input type="text" name="pname" id="pname"><br/>
        Product Desc: <input type="text" name="description" id="description"><br/>
        Product Price: <input type="text" name="price" id="price"><br/>
        <input type="submit" value="Submit" name="submit">
        <!-- <input type="submit" value="Update" name="updateprod"> -->
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
        require_once('include/prodfunctions.inc.php');
        $con = connect_db();
        $products = fetch_record($con);
            //$products=array(
              // array("id"=>1,"pname"=>"keyboard","description"=>"wireless","price"=>650.20)
            //);
            //var_dump($products);
            foreach($products as $p){
                printf("
                        <tr>
                            <td>%d</td>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%d</td>
                            <td><a href='include/product.inc.php?action=del&id=%d'>Delete</a></td>
                            
                
                ",$p['id'],$p['pname'],$p['description'],$p['price'],$p['id']);
            
        ?>

    <td><a href="#" onclick="updateProd(
        <?php printf("'%d','%s','%s','%d'",$p['id'],$p['pname'],$p['description'],$p['price']) ?>
    )">Update</a></td>
    </tr>
    <?php   
    }        
    ?>
    </table>

    <script>
         function updateProd(id,pname,description,price){
         //console.log('Product Id: '+pid);
         var id_input=document.getElementById('id');
         id_input.value=id;

         var pname_input=document.getElementById('pname');
         pname_input.value=pname;

         var description_input=document.getElementById('description');
         description_input.value=description;

         var price_input=document.getElementById('price');
         price_input.value=price;
        } 
     </script> 
</body>
</html>