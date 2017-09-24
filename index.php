<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP/Forms</title>
</head>
<body>
<?php 
include_once 'cbp-challenge-winter2017-week3-master/lib/data-functions.php'; 
$index = get_index();
$data = get_data($id);
insert_data($data);
update_data($id, $data);
delete_data($id);
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    <!-- name -->
    <strong>First Name </strong><input type="text" name="firstname" value=""><br><br>
    <strong>Surame </strong><input type="text" name="surname" value=""><br><br>
    <strong>Email Address </strong><input type="text" name="email" value=""><br><br>
    
    <!-- boolean value (male / female) -->
    <strong>Gender </strong><br>
    Male <input type="radio" name="gender" value="male"><br>
    Female <input type="radio" name="gender" value="female"><br><br>
    <strong>Region of residence: </strong><br>

    <!-- a value out of a selection -->
    <select name="continent">
        <option value="Asia">Asia</option>
        <option value="Africa">Africa</option>
        <option value="Antactica">Antarctica</option>
        <option value="Australia">Australia</option>
        <option value="Europe">Europe</option>
        <option value="North America">North America</option>
        <option value="South America">South America</option>
    </select>
    <br><br>

    <!-- text area --> 
    <strong>What is our favourite breed of dog, and why?</strong><br>
    <textarea name="note" placeholder="e.g. pug, because they're full of character and can fit in small apartments"></textarea>
    <input type="submit" value="send">
</form>

</body>
</html>