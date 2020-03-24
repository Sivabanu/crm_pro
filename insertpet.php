
<?php
//insert for pets at home

if (isset($_POST["ptype"])) {
    $connect = new PDO("mysql:host=localhost;dbname=pro", "root", "");
    for ($count = 0; $count < count($_POST["ptype"]); $count++) {
        $query = "INSERT INTO pets_athome
  (ptype, pname, breed) 
  VALUES (:ptype, :pname, :breed)
  ";
        $statement = $connect->prepare($query);
        $statement->execute(
            array(
                ':ptype'  => $_POST["ptype"][$count],
                ':pname' => $_POST["pname"][$count],
                ':breed'  => $_POST["breed"][$count]
            )
        );
    }
    $result = $statement->fetchAll();
    if (isset($result)) {
        echo 'ok';
    }
}
?>