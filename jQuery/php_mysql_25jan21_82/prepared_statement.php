<?php
    // Create a new server connection
    $mysqli = new mysqli('localhost', 'root', '', 'pwad_50');

    // Create the query and corresponding placeholders
    $query = "INSERT INTO products1 SET sku=?, name=?, price=?";

    // Create a statement object
    $stmt = $mysqli->stmt_init();

    // Prepare the statement for execution
    $stmt->prepare($query);

    // Bind the parameters
    $stmt->bind_param('ssd', $sku, $name, $price);

   

    // Cycle through the array, and iteratively execute the query
    if (isset($_POST['submit'])) {
        $sku = $_POST['sku'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $stmt->execute();
    }

    // Recuperate the statement resources
    $stmt->close();

    // Close the connection
    $mysqli->close();

?>