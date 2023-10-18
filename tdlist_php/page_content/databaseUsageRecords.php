<?php

// Delete from database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["deleteBtn"])) {
      $deleteId = $_POST["deleteId"];
  
      $deleteQuery = "DELETE FROM records WHERE id = ?";
      $deleteStmt = $conn->prepare($deleteQuery);
      $deleteStmt->bind_param("i", $deleteId);
  
      if ($deleteStmt->execute()) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
      } 
      else {
        echo "Error deleting record: " . $deleteStmt->error;
      }
  
      $deleteStmt->close();
    } 

// Insert into database
    else {
      $todoName = $_POST["todoFormName"];
      $isImportant = isset($_POST["todoFormIsImportant"]) ? 1 : 0;
      $dateCreated = date('Y-m-d');
  
      $writeDB = $conn->prepare("INSERT INTO records (name, is_important, date_created) VALUES (?, ?, ?)");
      $writeDB->bind_param("sis", $todoName, $isImportant, $dateCreated);
  
      $writeDB->execute();
      $writeDB->close();
  
      header("Location: " . $_SERVER['PHP_SELF']);
      exit();
    }
  }
  ?>