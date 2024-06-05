<?php
include "header.php"
?>

<section class="form">
    <div class="div-addStudents">
        <h2>Add students</h2>
        <button class="btn btn-primary"><a href="index.php">View Students</a></button>
    </div>
    <form action="insert_data.php" method="post">
        <div class="form-group">
            <label for="name" class="form-label">
                First Name
            </label>
            <input type="text" class="form-input" id="name" name="first_name" placeholder="Enter name" />
        </div>
        <div class="form-group">
            <label for="lname" class="form-label">
                Last Name
            </label>
            <input type="text" class="form-input" id="last_name" name="last_name" placeholder="Enter last name" />
        </div>

        <div class="form-group">
            <label for="semester" class="form-label">
                Semester
            </label>
            <input type="number" class="form-input" id="semester" name="semester" placeholder="Enter your semester" />
        </div>
        <?php
        if (isset($_GET["message"])) {
            echo "<h6 class='errorMessage'> " . $_GET["message"] . "<h6/>";
        }elseif
        (isset($_GET["added_succesfully"])){
            echo "<h6 class='successfulMessage'> " . $_GET["added_succesfully"] . "<h6/>";
        }
        ?>
        <button type="submit" class="btn btn-primary" name="add_students" value="ADD">Submit</button>
    </form>
</section>