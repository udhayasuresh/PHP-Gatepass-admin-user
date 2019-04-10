 <?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'employee';
$dbc = mysqli_connect ($db_hostname, $db_username,$db_password,$db_name);
if (mysqli_connect_error($dbc)) 
{
echo "Database connection could not be established!";
}
// functiongetUserAccessRoleByID($id)
// {
	// global $dbc;
		
	// $query = "select register from tbl_user_role where  id = ".$id;
	
	// $rs = mysqli_query($dbc,$query);
	// $row = mysqli_fetch_assoc($rs);
		
	// return $row['user_role'];
// }
?>