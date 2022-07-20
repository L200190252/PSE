<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Nilai Depresiasi</title>
</head>
<body>
	<div>
		<?php
        $purchase_cost=null;
        $residual_value=null;
        $useful_life=null;
        if (isset($_GET['purchase_cost'])) {
            $purchase_cost=$_GET['purchase_cost'];
            $residual_value=$_GET['residual_value'];
            $years=$_GET['years'];
            $useful_life=0;
            for ($i=1; $i<=$years ; $i++) { 
                $useful_life = $useful_life + $i;
            }
            $sum_of_the_year=0;
            $sum_of_the_year = ($purchase_cost-$residual_value)*$years/$useful_life;  
        }
    	?>
		<div>
			<form action="sum_of_the_year.php" method="get">
				<h1>SUM OF THE YEAR</h1>
				<table border="0" cellpadding="3">
					<tr>
						<td>Purchase Cost</td>
						<td>:</td>
						<td><input type="text" name = "purchase_cost" value="<?php echo $purchase_cost; ?>" required></td>
					</tr>
					<tr>
						<td>Residual Value</td>
						<td>:</td>
						<td><input type="text" name = "residual_value" value="<?php echo $residual_value; ?>" required></td>
					</tr>
					<tr>
						<td>Useful Life (years)</td>
						<td>:</td>
						<td><input type="text" name = "years" value="<?php echo $years; ?>" required></td>
					</tr>
				</table>
				<table border="0" cellspacing="7" cellpadding="7">
					<tr>
						<td><button type="button" class="btn btn-danger" onclick="location.href='reducing_balance.php'">Back</button></td>
						<td><button type="submit" class="btn btn-primary">Process</button></td>
						<td><button type="button" class="btn btn-danger" onclick="location.href='unit_of_activity.php'">Next</button></td>
					</tr>
				</table>
		        <?php
				if (isset($_GET['purchase_cost'])) {
				    $sum_of_the_year = "Sum of the Year = ".($sum_of_the_year);
				    echo "$sum_of_the_year";
				}
				?>
			</form>
	</div>
</body>
</html>