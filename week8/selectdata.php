<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dear brylle...</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="parent_">
        <div class="nav">
            <a href="index.php">
                <button>Back to home</button>
            </a>
        </div>
        <h1>Dear Brylle...</h1>
        <?php 
            // $servername = "localhost";
            // $username = "root";
            // $password = "";
            // $dbname = "mydb";

            $servername = "localhost";
            $username = "webprogmi222_sf221";
            $password = "xE*Y2nleNVvZm[!!";
            $dbname = "webprogmi222_sf221";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM bmnunez2_myguests ORDER BY reg_date DESC;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='message-card'>";
                    echo "<h3> From " . $row["name"] . "</h3>";
                    echo "<span> On: " . $row["reg_date"] . "</span>";
                    if ($row["message"] == "") {
                        echo "<p> No message :( </p>";
                    } else {
                        echo "<p>" . $row["message"] . "</p>";
                    }
                    echo "</div>";
                }
            } else {
                echo "No entries found.";
            }
            $conn->close();
        ?>
        <a class="anchorlink" href="form.php">Write me a message!</a>
    </div>
    <style>
        .message-card {
            border: 1px solid #000;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            background-color: #f2f2f2;
        }
    </style>
</body>
</html>
