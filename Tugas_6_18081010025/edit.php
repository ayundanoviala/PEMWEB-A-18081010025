<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $sd=$_POST['sd'];
    $sma=$_POST['sma'];
    $smp=$_POST['smp'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET sd='$sd',smp='$smp',sma='$sma' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: 18081010025.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $sd = $user_data['sd'];
    $smp = $user_data['smp'];
    $sma = $user_data['sma'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="18081010025.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="sd" value=<?php echo $sd;?>></td>
            </tr>
            <tr> 
                <td>smp</td>
                <td><input type="text" name="smp" value=<?php echo $smp;?>></td>
            </tr>
            <tr> 
                <td>sma</td>
                <td><input type="text" name="sma" value=<?php echo $sma;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>