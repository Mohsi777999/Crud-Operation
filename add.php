<?php include 'header.php';
include('config.php');
?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="sclass">
                <option value="#" disabled selected>Select Class</option>
                <?php
                $sql2 = "SELECT * FROM `sclass`";
                $result2 = mysqli_query($conn, $sql2);
                while ($row = mysqli_fetch_array($result2)) {
                    echo "<option value='{$row['c_id']}'>{$row['c_name']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>

</html>
