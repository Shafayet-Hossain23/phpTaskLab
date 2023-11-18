<h1> User List </h1>
<?php
$host = "localhost";

$con = mysqli_connect($host, "root", "", "phplogin");
if (!$con) {
    echo "NOT connected";
}
$select_data = "SELECT * FROM `user`";

$result = mysqli_query($con, $select_data);

// print_r($result);
if (isset($_GET['id'])) {
    $delete_course_data = "DELETE FROM `user` WHERE user_id='$_GET[id]' ";
    if (mysqli_query($con, $delete_course_data)) {
        echo "delete success!";
    } else {
        // echo "fffff";
    }
}
?>

<table border="1" width="560px">

    <tr>
        <td> id </td>
        <td> Name </td>
        <td> Email </td>
        <td> Action </td>
    </tr>
    <?php while ($rec_data = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td>
                <?php echo $rec_data['user_id']; ?>
            </td>
            <td>
                <?php echo $rec_data['user_name']; ?>
            </td>
            <td>
                <?php echo $rec_data['user_email']; ?>
            </td>
            <td><a href="?id=<?php echo ($rec_data['user_id']); ?>">Delete</a></td>
        </tr>
    <?php } ?>

</table>

<a href="addUser.php"> Add User </a><br>