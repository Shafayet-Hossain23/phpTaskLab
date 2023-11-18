<h1> Course List </h1>
<?php
$host = "localhost";

$con = mysqli_connect($host, "root", "", "phplogin");
if (!$con) {
    echo "NOT connected";
}
$select_data = "SELECT * FROM `course`";

$result = mysqli_query($con, $select_data);

print_r($result);

?>

<table border="1" width="560px">

    <tr>
        <td> id </td>
        <td> Name </td>
        <td> Code </td>
    </tr>
    <?php while ($rec_data = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td>
                <?php echo $rec_data['c_id']; ?>
            </td>
            <td>
                <?php echo $rec_data['c_name']; ?>
            </td>
            <td>
                <?php echo $rec_data['c_code']; ?>
            </td>
        </tr>
    <?php } ?>

</table>