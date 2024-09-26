<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <?= "text from php "?>
    <?php "<h3>this is h3 from php</h3>";?>

    <?php
        $someText = "some text";
        echo $someText  
    ?>

    <a href="/about.php">About</a>

    <h1>Forms</h1>

    <form action="" method="get">
    <label for="title">Title :  </label> 
    <br>
    <input type="text" id = "title" name = "title" placeholder="Enter text..">
    <br>
    <label for="content">Content : </label>
    <br>
    <textarea name="content" id="content">Default Text</textarea>
    <br>
    <input type="submit" value="Send">
    <br>
    <br>

    <label for="option">Which snack do you want to choose?</label>

    <select name="option" id="option">
    <option value="snack">--Please choose a snack--</option>
    <option value="chocolate">Chocolate</option>
    <option value="lollipop">Lollipop</option>
    <option value="ice cream">Ice Cream</option>
    <option value="crisps">Crisps</option>
    </select>
    <br>
    <br>

    <input type="radio" name = "vegetable " id="carrot" value="carrot">
    <label for="carrot">Carrot</label>
    <input type="radio" name = "vegetable " id="lettuce" value="lettuce">
    <label for="lettuce">Lettuce</label>
    <br>

</form>
    <div>
        data-color : "red";
    </div>
</body>
</html>