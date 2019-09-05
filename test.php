<?php
echo "hello world";
?>

<?php

// $conn = new SQLite3('test.db');

// if($conn){
// 	echo "connected successfully!";
// }else{
// 	echo "connection fucked!";
// }

?>

<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

// try {
//     $conn = new PDO("sqlite:temp.sqlite");
//     // set the PDO error mode to exception
//     //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "
// CREATE TABLE IF NOT EXISTS projects (
//     project_id   INTEGER PRIMARY KEY,
//     project_name TEXT    NOT NULL
// );
 
// CREATE TABLE IF NOT EXISTS tasks (
//     task_id        INTEGER PRIMARY KEY,
//     task_name      TEXT    NOT NULL,
//     completed      INTEGER NOT NULL,
//     start_date     TEXT,
//     completed_date TEXT,
//     project_id     INTEGER NOT NULL,
//     FOREIGN KEY (
//         project_id
//     )
//     REFERENCES projects (project_id) ON UPDATE CASCADE
//                                      ON DELETE CASCADE
// );
//     ";
//     // use exec() because no results are returned
//     $conn->exec($sql);
//     echo "Tables created successfully<br>";
//     }
// catch(PDOException $e)
//     {
//     echo "<br>" . $e->getMessage();
//     }

// $conn = null;
?>