
<?php
//familyinsert.php;

if (isset($_POST["gender"])) {
    $connect = new PDO("mysql:host=localhost;dbname=pro", "root", "");
    for ($count = 0; $count < count($_POST["gender"]); $count++) {
        $query = "INSERT INTO family_members 
  (gender, relationship, occupation) 
  VALUES (:gender, :relationship, :occupation)
  ";
        $statement = $connect->prepare($query);
        $statement->execute(
            array(
                ':gender'  => $_POST["gender"][$count],
                ':relationship' => $_POST["relationship"][$count],
                ':occupation'  => $_POST["occupation"][$count]
            )
        );
    }
    $result = $statement->fetchAll();
    if (isset($result)) {
        echo 'ok';
    }
}
?>