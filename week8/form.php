<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="parent_">
        <div class="nav">
            <a href="index.php">
                <button>Back to home</button>
            </a>
        </div>
            <?php
                // define variables and set to empty values
                $nameErr = $emailErr  = "";
                $name = $email = $message = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["name"])) {
                        $nameErr = "Name is required";
                    } else {
                        $name = test_input($_POST["name"]);
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed";
                        }
                    }
                    
                    if (empty($_POST["email"])) {
                        $emailErr = "Email is required";
                    } else {
                        $email = test_input($_POST["email"]);
                        // check if e-mail address is well-formed
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                        }
                    }

                    if (empty($_POST["message"])) {
                        $message = "";
                    } else {
                        $message = test_input($_POST["message"]);
                    }
                }

                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }
            ?>
                <div class="formdiv">
                    <h3>Hit me up!</h3>
                    <p><span class="error">* required field</span></p>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                    Name: <span class="error">* <?php echo $nameErr;?></span> <input type="text" name="name" value="<?php echo $name;?>">
                    <br><br>
                    E-mail: <span class="error">* <?php echo $emailErr;?></span><input type="text" name="email" value="<?php echo $email;?>">
                    <br><br>
                    Message: <textarea name="message" rows="5" cols="40"><?php echo $message;?></textarea>
                    <br><br>
                    <button type="submit" name="submit">Submit</button>
                    </form>
                </div>
        </div>
        <div class="footer">
            made with <span style="color: var(--color);">❤️</span> by <a class="anchorlink" href="https://github.com/bxavace" target="_blank">Brylle Ace Nuñez</a> &copy; <span id="year"></span>
        </div>
</body>
<style>


    .formdiv {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    body {
        font-family: inherit;
        overflow-y: hidden;
    }

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid var(--color);
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: none;
    }

    /* remove focus */
    input[type=text]:focus, select:focus, textarea:focus {
        outline: none;
    }
</style>
</html>