<style>

    body {
        background: url(b7.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-color: white;
        }
</style>
</head>

<body class="body1">
    <nav>
        <div class="logo">
            <h4 class="Starbikes"><a href="Index.php">daniel</a></h4>
        </div>
        <ul class="nav-links">
            <li>
                <a href="Index.php">Home</a>
            </li>
            <li>
                <a href="Index2.php">Hobbies</a>
            </li>
            <li>
                <a href="Index3.php">me</a>
            </li>
            <li>
                <a href="Index4.php">res</a>
            </li>
        </ul>
    </nav>

    

        <h1 class="hdrtxt1">rate my website!</h1>
        <br>
        <br>
        
        <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

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
            
        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>

        <div class= "section1">
        <center>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website;?>">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
        </form>
        </center>
        </div>

        <?php
        $conn = mysqli_connect("localhost", "webprogmi212", "webprogmi212", "webprogmi212");

        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $website =  $_REQUEST['website'];
        $comment = $_REQUEST['comment'];
        $gender = $_REQUEST['gender'];

        $sql = "INSERT INTO jgabogado_myratings (name, email, website, comment, gender)  VALUES ('$name',
            '$email','$website','$comment','$gender')";

        if(mysqli_query($conn, $sql)){
            $string = "Your Input:";
            echo '<p><center><span style="color: white; font-size: 30px;"> ' . $string.  '</span></center></p>';
            echo '<p><center><span style="color: white; font-size: 20px;"> ' . $name.  '</span></center></p>';
            echo "<br>";
            echo '<p><center><span style="color: white; font-size: 20px;"> ' . $email.  '</span></center></p>';
            echo "<br>";
            echo '<p><center><span style="color: white; font-size: 20px;"> ' . $website.  '</span></center></p>';
            echo "<br>";
            echo '<p><center><span style="color: white; font-size: 20px;"> ' . $comment.  '</span></center></p>';
            echo "<br>";
            echo '<p><center><span style="color: white; font-size: 20px;"> ' . $gender.  '</span></center></p>';
            echo "<br>";
            echo "<br>";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    