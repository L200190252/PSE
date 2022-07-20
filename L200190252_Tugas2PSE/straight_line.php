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
            $useful_life=$_GET['useful_life'];
            $straight_line=0;
            $straight_line = ($purchase_cost-$residual_value)/$useful_life;  
        }
    	?>
		<div>
			<form action="straight_line.php" method="get">
				<h1>STRAIGHT LINE DEPRECIATION</h1>
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
						<td><input type="text" name = "useful_life" value="<?php echo $useful_life; ?>" required></td>
					</tr>
				</table>
				<table border="0" cellspacing="7" cellpadding="7">
					<tr>
						<td><button type="button" class="btn btn-danger" onclick="location.href='index.php'">Back</button></td>
						<td><button type="submit" class="btn btn-primary">Process</button></td>
						<td><button type="button" class="btn btn-danger" onclick="location.href='reducing_balance.php'">Next</button></td>
					</tr>
				</table>
		        <?php
				if (isset($_GET['purchase_cost'])) {
				    $straight_line = "Straight Line = ".($straight_line);
				    echo "$straight_line";
				}
				?>
			</form>
	</div>
</body>
</html>