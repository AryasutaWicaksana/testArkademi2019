<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>salary</td>
                <td><input type="text" name="salary"></td>
            </tr>
            <tr> 
                <td>work</td>
                <td><input type="text" name="work"></td>
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
        $name = $_POST['name'];
        $salary = $_POST['salary'];
        $work = $_POST['work'];

        // include database connection file
        include_once("koneksi_db.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO employee(name,salary,work) VALUES('$name','$salary','$work')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>