<?php

// http://php.net/manual/en/pdo.connections.php

try{
    // http://php.net/manual/en/pdo.construct.php
    $db = new PDO(DSN, USERNAME, PASSWORD);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


// $statement = $db->prepare('SELECT * FROM `test`');

// $statement->execute();

// // http://php.net/manual/en/class.pdostatement.php
// $statement->fetchAll(PDO::FETCH_OBJ);