<?php

require_once('functions/init.php');


if (!empty($_POST['category_id'])) {

    $category_id = $_POST['category_id'];
    $conn = Db_connection::connection();

    $sql = "SELECT * FROM sub-category WHERE  category_id = '" . $category_id . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
?>
        <option value disabled selected>Choose...</option>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>

            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
<?php   }
    }
}




?>