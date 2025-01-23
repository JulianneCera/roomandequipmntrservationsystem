<?php include('partials/menu.php'); ?>

<!-- Main Content Section (Start) -->
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Equipment Reservation</h1>

        <br> <br>
        <!-- Button for Adding Admin -->
        <a href="add-admin.php" class="btn-primary">Add Equipment Reservation</a>

        <br> <br> <br>

        <table class="table-full">
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Professor ID</th>
                <th>Date ID</th>
                <th>Equipment ID</th>
                <th>Purpose</th>
                <th>Actions</th>
            </tr>

            <!-- Dynamic rows (taken from database) go here -->
            <?php

                 // - - -

            ?>

            <tr>
                <td colspan="6"></td>
                <td>
                    <a href="#" class="btn-secondary">Edit</a>
                    <a href="#" class="btn-danger">Delete</a>
                </td>
            </tr>
        </table>

        <br> <br>
    </div>
</div>

<?php include('partials/footer.php'); ?>