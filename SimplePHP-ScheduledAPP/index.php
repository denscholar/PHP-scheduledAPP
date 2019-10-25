<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple calculator</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="styles.css">


</head>
<body>
<div class="body">
    <form method="POST">
        <input type="text" name="number1" placeholder="number1" class="form-control" style="width: 150px; display: inline">
        <select name="operator" id="">
            <option>Select</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select><br><br>
        <input type="text" name="number2" placeholder="number2" class="form-control" style="width: 150px; display: inline"><br><br>
        <div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Calculate</button><br><br>    
        </div>
        
    </form>


<?php
$result = '';
// If the submit button has been pressed
if (isset($_POST['submit'])){

     // Check numeric values    
    if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])){
        //calculate the total result for each operator
        if($_POST['operator'] == 'Select'){
            $result = "Please select an option";            
        }
        if($_POST['operator'] == 'Add'){
            $result = $_POST['number1'] + $_POST['number2'];
        }
        if ($_POST['operator'] == 'Subtract'){
            $result = $_POST['number1'] - $_POST['number2'];
        }
        if ($_POST['operator'] == 'Multiply'){
            $result = $_POST['number1'] * $_POST['number2'];
        }
        if ($_POST['operator'] == 'Divide'){
            $result = $_POST['number1'] / $_POST['number2'];
        }
    }else{
        $result = "Numeric values are required";
    }  
}
?>
<textarea  cols="30" rows="3" id="txt_descripcion"><?php echo $result ; ?></textarea>
</div>

    
</body>
</html>