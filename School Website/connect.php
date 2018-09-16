<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=progweb','root','');
    /* foreach($dbh->query('SELECT * from formulaireetudiant') as $row) {
        print_r($row);
    }
    $dbh = null; */
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>