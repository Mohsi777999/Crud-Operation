<?php
include 'header.php';
include('config.php');
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>

            <?php

            $sql = "SELECT * FROM `student_data` JOIN `sclass` WHERE student_data.s_class = sclass.c_id ORDER BY `s_id` ASC";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)) { ?>

                <tr>
                    <td>
                        <?php echo $row['s_id']; ?>
                    </td>
                    <td>
                        <?php echo $row['s_name']; ?>
                    </td>
                    <td>
                        <?php echo $row['s_address']; ?>
                    </td>
                    <td>
                        <?php echo $row['c_name']; ?>
                    </td>
                    <td>
                        <?php echo $row['s_phone']; ?>
                    </td>
                    <td>
                        <a href='edit.php?id=<?php echo $row['s_id']; ?>'>Edit</a>
                        <a href='delete-inline.php?id=<?php echo $row['s_id']; ?>'>Delete</a>
                    </td>
                </tr>

            <?php } ?>

        </tbody>
    </table>
</div>
</div>
</body>

</html>