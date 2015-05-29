<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HelloWorld Application</title>
<link rel="stylesheet" href="http://www.danialledube.com/helloWorld/admin.css" type="text/css">
</head>
<body>
<?php
// Create a mySqli database connection
$mysqli = new mysqli('localhost', 'danialle_hw', '7od-rXTHnbB1', 'danialle_helloworld');

// Get registrations from the database
$registrations = get_registrations($mysqli);

// Display Report
?>
<h3>HelloWorld User Registration Report</h3>

<table id="report">
	<thead>
        <tr>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Address</th>
          <th scope="col">Address 2</th>
          <th scope="col">City</th>
          <th scope="col">State</th>
          <th scope="col">Zip Code</th>
          <th scope="col">Country</th>
          <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
		$i = 0;
        while ($row = $registrations->fetch_assoc()) { 
			$i++;
			if (fmod($i, 2) == 0) {?>
            	<tr class="reportRowEven">
            <?php  } else { ?>
            	<tr class="reportRowOdd">
            <?php } ?>
              <td><?php echo $row["first_name"]; ?></td>
              <td><?php echo $row["last_name"]; ?></td>
              <td><?php echo $row["address"]; ?></td>
              <td><?php echo $row["address2"]; ?></td>
              <td><?php echo $row["city"]; ?></td>
              <td><?php echo $row["state"]; ?></td>
              <td><?php echo $row["zip"]; ?></td>
              <td><?php echo $row["country"]; ?></td>
              <td><?php echo $row["create_date"]; ?></td>
            </tr>
        <?php
        } // end of while ($row = $registrations->fetch_assoc()) {  ?>
    </tbody>
</table>

<?php
// function get_registrations
// @param unknown $connection
// return boolean $input
// This function will get the user inputed data 
// from the registration table sorting by the creation date 
function get_registrations ($connection) {
	$query = "SELECT * FROM registrations ORDER BY create_date DESC";
	$result = $connection->query($query);
	return $result;
}

?>
</body>
</html>