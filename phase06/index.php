<?php

function insert_salamander($salamander)
{
    global $db;

    $errors =  validate_salamander($salamander);
    if (!empty($errors)) {
        return $errors;
    }

    $sql = "INSERT INTO salamander (name, habitat, description) ";
    $sql .= "VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $name, $habitat, $description);
    $name = $salamander['name'];
    $habitat = $salamander['habitat'];
    $description = $salamander['description'];
    $result = mysqli_stmt_execute($stmt);

    //$result = mysqli_query($db, $sql);

    if ($result) {
        return true;
    } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit();
    }
}
