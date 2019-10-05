<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment 03</title>
    <link rel="stylesheet" type="text/css" href="shopping.css">
</head>
<body>
    <form action="Checkout.php">
        <fieldset>
            <legend>Items</legend>
            <h3>Meats</h3>
            <input type="checkbox" name="meat[]" value="Beef">Beef<br>
            <input type="checkbox" name="meat[]" value="Ground Beef">Ground Beef<br>
            <input type="checkbox" name="meat[]" value="Sausage">Sausage<br>
            <input type="checkbox" name="meat[]" value="Ground Sausage">Ground Sausage<br>
            <input type="checkbox" name="meat[]" value="Bacon">Bacon<br><br>

            <h3>Vegetables</h3>
            <input type="checkbox" name="veggies[]" value="Carrots">Carrots<br>
            <input type="checkbox" name="veggies[]" value="Potatoes">Potatoes<br>
            <input type="checkbox" name="veggies[]" value="Onions">Onions<br>
            <input type="checkbox" name="veggies[]" value="Mushrooms">Mushrooms<br><br>

            <h3>Dairy</h3>
            <input type="checkbox" name="Dairy[]" value="Milk">Milk<br>
            <input type="checkbox" name="Dairy[]" value="Yogurt">Yogurt<br>
            <input type="checkbox" name="Dairy[]" value="Ice Cream">Ice Cream<br>
            <input type="checkbox" name="Dairy[]" value="Butter">Butter<br>
            <input type="checkbox" name="Dairy[]" value="Cheddar Cheese">Cheddar Cheese<br>

            <input type="submit">
        </fieldset>
    </form>
</body>
</html>