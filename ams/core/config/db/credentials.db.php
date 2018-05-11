<?php
/* Note: Create a copy of this file with following name
   "credentials.db.php" (without quotes) and change your configuration.
 */
return array(
// Refer Zend Framework 2 Reference Manual for Valid Database Drivers & other Options
'driver'	=> 'Pdo_Mysql',
'database'	=> 'attendancems',
'username'	=> 'rec_master_admin',
'password'	=> '123456Ra$123',
'hostname'	=> 'aws-rec-man-db-instance.cqmbgwgzccqn.ap-south-1.rds.amazonaws.com', // OR '127.0.0.1', // Ensure that your MySQL user has access from this host
);
?>
