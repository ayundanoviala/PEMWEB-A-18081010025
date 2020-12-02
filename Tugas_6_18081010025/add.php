<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="18081010025.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>sd</td>
                <td><input type="text" name="sd"></td>
            </tr>
            <tr> 
                <td>smp</td>
                <td><input type="text" name="smp"></td>
            </tr>
            <tr> 
                <td>sma</td>
                <td><input type="text" name="sma"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $sd = $_POST['sd'];
        $smp = $_POST['smp'];
        $sma = $_POST['sma'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(sd,smp,sma) VALUES('$sd','$smp','$sma')");

        // Show message when user added
        echo "User added successfully. <a href='18081010025.php'>View Users</a>";
    }
    ?>
</body>
</html>