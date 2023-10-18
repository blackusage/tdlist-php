<?php
// Selects data from the table
$sql = "SELECT * FROM records";
$result = $conn->query($sql);

// Creates a table with data from db
if ($result->num_rows > 0) {
    echo "<table class='table table-striped border'>";
    echo "<tr><th>Name</th><th>Important</th><th>Date Created</th><th></th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . ($row["is_important"] == 1 ? "Yes" : "No") . "</td>";
        echo "<td>" . $row["date_created"] . "</td>";
        echo "<td>
                <form method='post'>
                    <input type='hidden' name='deleteId' value='" . $row["id"] . "'>
                    <button type='submit' name='deleteBtn' class='btn btn-danger'>Delete</button>
                </form>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
}
$conn->close();
?>