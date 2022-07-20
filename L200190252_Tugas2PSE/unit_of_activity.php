<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Nilai Depresiasi</title>
</head>
<body>
	<div>
		<?php
        $asset_cost=null;
        $salvage_value=null;
        $useful_units=null;       
        $units_used=null;
        if (isset($_GET['asset_cost'])) {
            $asset_cost=$_GET['asset_cost'];
            $salvage_value=$_GET['salvage_value'];
            $useful_units=0;
            $useful_units=$_GET['useful_units'];
            $units_used=$_GET['units_used'];           
            // $unit_of_activity=0;
            $unit_of_activity = ($asset_cost-$salvage_value)*($useful_units/$units_used);  
        }
    	?>
		<div>
			<form action="unit_of_activity.php" method="get">
				<h1>UNIT OF ACTIVITY</h1>
				<table border="0" cellpadding="3">
					<tr>
						<td>Asset Cost</td>
						<td>:</td>
						<td><input type="text" name = "asset_cost" value="<?php echo $asset_cost; ?>" required></td>
					</tr>
					<tr>
						<td>Salvage Value</td>
						<td>:</td>
						<td><input type="text" name = "salvage_value" value="<?php echo $salvage_value; ?>" required></td>
					</tr>
					<tr>
						<td>Useful Units</td>
						<td>:</td>
						<td><input type="text" name = "useful_life" value="<?php echo $useful_units; ?>" required></td>
					</tr>
					<tr>
						<td>Units Used</td>
						<td>:</td>
						<td><input type="text" name = "units_used" value="<?php echo $units_used; ?>" required></td>
					</tr>
				</table>
				<table border="0" cellspacing="7" cellpadding="7">
					<tr>
						<td><button type="button" class="btn btn-danger" onclick="location.href='sum_of_the_year.php'">Back</button></td>
						<td><button type="submit" class="btn btn-primary">Process</button></td>
					</tr>
				</table>
		        <?php
				if (isset($_GET['asset_cost'])) {
				    $unit_of_activity = "Unit of Activity = ".($unit_of_activity);
				    echo "$unit_of_activity";
				}
				?>
			</form>
	</div>
</body>
</html>