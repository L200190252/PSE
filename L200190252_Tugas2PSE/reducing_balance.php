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
            $X=$_GET['X'];
            $rate=$X/100;
            $reducing_balance=0;
            $reducing_balance = ($purchase_cost-$residual_value)*$rate;  
        }
    	?>
		<div>
			<form action="reducing_balance.php" method="get">
				<h1>REDUCING BALANCE DEPRECIATION</h1>
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
						<td>Rate (%)</td>
						<td>:</td>
						<td><input type="text" name = "X" value="<?php echo $X; ?>" required></td>
					</tr>
				</table>
				<table border="0" cellspacing="7" cellpadding="7">
					<tr>
						<td><button type="button" class="btn btn-danger" onclick="location.href='straight_line.php'">Back</button></td>
						<td><button type="submit" class="btn btn-primary">Process</button></td>
						<td><button type="button" class="btn btn-danger" onclick="location.href='sum_of_the_year.php'">Next</button></td>
					</tr>
				</table>
		        <?php
				if (isset($_GET['purchase_cost'])) {
				    $reducing_balance = "Reducing Balance = " . ($reducing_balance);
				    echo "$reducing_balance";
				}
				?>
			</form>
	</div>
</body>
</html>