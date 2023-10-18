<!-- Styles -->
<link rel="stylesheet" href="styles/custom.css">
<link rel="stylesheet" href="styles/bootstrap/css/bootstrap.css">
<script defer src="styles/bootstrap/js/bootstrap.js"></script>

<?php

// Database connection
include "dbConnection.php";

?>

<!-- Page structure -->
<!DOCTYPE html>
<html>
<head>
    <title>To-do List</title>
</head>
<body>
    <h1>To-do List</h1>
    <?php

    // Form for creating new Record
    include "page_content/newRecord.php";

    // Deleting and inserting into database
    include "page_content/databaseUsageRecords.php";

    // Writes out records
    include "page_content/showRecords.php"

    ?>
</body>
</html>