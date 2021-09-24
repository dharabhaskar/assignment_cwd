<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>newsapp</title>
</head>

<body>
    <form method="post" action="">
        <h1><center>About News</center></h2>
        <select name="catagory">
            <option>science</option>
            <option>world</option>
            <option>sports</option>
        </select>
        <input type="submit" name="submit">
    </form>    
    
    <div class="grid">
        <?php
        //var_dump ($_POST);
             $catagory='science';
             if (isset($_POST['submit']))
            {
                $catagory=$_POST['catagory'];
            }
            require_once('include/functions.php');
            $all_news=fetch_all_news($catagory);

            foreach($all_news->data as $news)
            {
                printf('
                        <div class="card">
                            <h1 class="title">%s</h1>
                            <img src="%s" class="image" height="300"/>
                            <p class="short">%s</p>
                        </div>
                ',$news->title,$news->imageUrl,$news->content);            
    
            }
        ?>
        
    </div>
</body>

</html>