<?php
include("./shared/header.php");
include("./controllers/dbcon.php");
?>
<div class="div-addStudents">
    <h2>All students</h2>
    <button class="btn btn-primary"><a href="./addStudent.php">Add students</a></button>
</div>

<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Semester</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "select * from `students`";
        $result = mysqli_query($connection, $query);
        if (!$query) {
            echo ("Query failed");
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo ($row["student_Id"]) ?>
                    <td><?php echo ($row["first_name"]) ?>
                    <td><?php echo ($row["last_name"]) ?>
                    <td><?php echo ($row["semester"]) ?>
                </tr>
        <?php

            };
        }
        ?>

    </tbody>
</table>

</div>
</main>
</body>

</html>