<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=d2cda3df5m1lok host=ec2-107-20-244-39.compute-1.amazonaws.com port=5432 user=jmnbdtcvtrmijv password=tKVu4N2X
U3cdBPd46lNfOS2t7f sslmode=require";
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    console.log("Connection Establised");
}
 
$result = pg_query($db, "SELECT * from interactions");
?>