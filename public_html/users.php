<!DOCTYPE html>
<html>
    <head>
        <?php
            $title = "Users";
            include("include/head.php");
            include("include/db_conn.php");
        
            $query = "SELECT * FROM USERS";
            $result = $mysqli->query($query);
        ?>
        <title>Exertime | Users</title>
    </head>
    <body>
        <div class="wrapper">
            <?php include("include/header.php"); ?>
            <div class="main-content">
                <div class="page-title">
                    <h2>Users</h2>
                </div>
                <div class="table_scroll">
                    <table id="datatable" class="display compact hover">
                        <thead>
                            <tr>
                                <th>Group</th>
                                <th>Prefered Name</th>
                                <th>Given Names</th>
                                <th>Surname</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Emergency Exit</th>
                                <th>Status</th>
                                <th>Calory Goal(Override)</th>
                                <th>New User</th>
                                <th>Commands</th>
                            </tr>
                        </thead>
                        <?php
                            while($row = $result->fetch_array(MYSQLI_ASSOC)) {
                                if($row['emergency exit'] == 1)
                                {
                                    $row['emergency exit'] = "True";
                                }
                                else
                                {
                                    $row['emergency exit'] = "False";
                                }
                                
                                if($row['status'] == 1)
                                {
                                    $row['status'] = "Active";
                                }
                                else
                                {
                                    $row['status'] = "Inactive";
                                }   
                                
                                if($row['new user'] == 1)
                                {
                                    $row['new user'] = "True";
                                }
                                else
                                {
                                    $row['new user'] = "False";
                                }                                


                                
                                echo "<tr>
                                        <td>" . $row['org_group'] . "</td>
                                        <td>" . $row['preferred name'] . "</td>
                                        <td>" . $row['given name'] . "</td>
                                        <td>" . $row['surname'] . "</td>
                                        <td>" . $row['username'] . "</td>
                                        <td>" . $row['email'] . "</td>
                                        <td>" . $row['emergency exit'] . "</td>
                                        <td>" . $row['status'] . "</td>
                                        <td>" . $row['calorie goal'] . "</td>
                                        <td>" . $row['new user'] . "</td>
                                        <td>
                                            <button class='btn-edit' type='button' name='btn-edit'>
                                                <a class='btn-icon btn-icon-edit'>Edit</a>
                                            </button>
                                            <button class='btn-del' type='button' name='btn-del'>
                                                <a class='btn-icon btn-icon-del'>Delete</a>
                                            </button>
                                        </td>
                                    </tr>";
                            }
                         ?>
                        <tfoot>
                            <tr>
                                <th>Group</th>
                                <th>Prefered Name</th>
                                <th>Given Names</th>
                                <th>Surname</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Emergency Exit</th>
                                <th>Status</th>
                                <th>Calory Goal(Override)</th>
                                <th>New User</th>
                                <th>Commands</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <?php include("include/footer.php"); ?>
        </div>
        <div id="modal" class="modal-bg">
            <div class="modal-content">
                <button id="btn-close" class="close" type="button" name="">X</button>
                <h2>Edit</h2>
            </div>
        </div>
    </body>
</html>
