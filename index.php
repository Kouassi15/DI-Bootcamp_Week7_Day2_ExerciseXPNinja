<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><br>
<center>
    <h1>Exercise 1 : Chess Board</h1>
    <form action="" method="post">
        <input type="number" name="number">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
       if (isset($_POST['submit'])) {
         $number = $_POST['number'];
       }

       echo "<table>";
       for($i=1 ; $i<=$number ; $i++)
{
	echo "<tr>";
	for($j=1 ; $j<= $number; $j++)
	{
		//$total=$row+$column;
		if(($i+$j)%2==0)
		{
			echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";
		}
		else
		{
			echo "<td height=35px width=30px bgcolor=#000000></td>";
		}
	}
	echo "</tr>";
}
    ?>
    </center>
</body>
</html>