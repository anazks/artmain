<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>order details</title>
    <style>
        .form{
            color:#E7B554 ;
        }
        th{
            color:white;
        }
        td{
            color:white;
        }
    </style>
</head>

<body style="background-color:black">
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'artgallery');

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to retrieve all Order IDs from the "orders" table
    $query = "SELECT OID FROM orders";
    $result = mysqli_query($conn, $query);

    // Check if there are results
    if (mysqli_num_rows($result) > 0) {
        echo '<html>

                <body>
                    <h1 style="color:white">ORDER IDs</h1>
                    <table border="1">
                        <tr>
                            <th>Order ID</th>
                        </tr>';

        // Loop through the results and display each OID in a table row
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>' . $row['OID'] . '</td></tr>';
        }

        echo '</table>
              </body>
              </html>';
    } else {
        echo "No Order IDs found.";
    }

    // Close the database connection
    mysqli_close($conn);
?>

    <section>
        <img src="../img/feather.png" width="90" height="90" class="d-inline-block align-top mt-5" alt="">
        <div class="title">Order details</div>
        <div class="container">
            <div class="row">
                <form action="search.php" method="POST" name="f" id="f">
                    <table>
                        <div class="form-group">
                            <tr>
                                <td><label class="form">Order ID</label></td>
                                <td><input type="text" name="oid"></td>
                            </tr>
                            <tr>
                                <td><button class="button1" name="regiter" type="submit" onclick="">Search</button></td>
                            </tr>
                        </div>
                    </table>
                </form>
            </div>
        </div>
    </section>
</body>

</html>