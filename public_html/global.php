<!DOCTYPE html>
<html>
    <head>
        <?php
            $title = "Global";
            include("include/head.php");
        ?>
    </head>
    <body>


        <div class="wrapper">
            <?php include("include/header.php"); ?>
            <div class="main-content">
                <div class="page-title">
                    <h2>Settings</h2>
                </div>
                <form method="post">
                        <table class="form">
                            <tr>
                                <td>Countdown Duration</td>
                                <td><input type="number"/></td>
                            </tr>
                            <tr>
                                <td>Helpful Hints Delay</td>
                                <td><input type="number"/></td>
                            </tr>
                            <tr>
                                <td>Delay Before Prompt</td>
                                <td><input type="number"/></td>
                            </tr>
                            <tr>
                                <td>Auto Prompt Exercise</td>
                                <td><select>
                                        <option value="1">Take a hike</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="Submit" value="Save Settings"/></td>
                            </tr>
                        </table>
                </form>
                <div class="page-title">
                    <h2>Helpful Hints</h2>
                </div>
                <button class='btn-add' type='button' name='btn-add'>
                    <a class='btn-icon btn-icon-add'>New Hint</a>
                </button>
                <div class="table_wrapper">
                    <table id="datatable" class="display compact hover">
                        <thead>
                            <tr>
                                <th>Department</th>
                                <th>Hint</th>
                                <th>Hint Order</th>
                                <th>Commands</th>
                            </tr>
                        </thead>
                        <?php
                            for ($i=0; $i < 3; $i++) {
                                echo "<tr>
                                    <td>None</td>
                                    <td>It appears you have been away from your desk. Simply click Take a Hike, record your walking time, and return to work!</td>
                                    <td>1</td>
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
                        <thead>
                            <tr>
                             <th>Department</th>
                                <th>Hint</th>
                                <th>Hint Order</th>
                                <th>Commands</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <?php include("include/footer.php"); ?>
        </div>
        <div id="modal" class="modal-bg">
            <div class="modal-content">
                <button id="btn-close" class="close" type="button" name="">X</button>
                <h2>Edit</h2>
                <form method="post">
                        <table class="form">
                            <tr>
                                <td>Department</td>
                                <td>
                                    <select>
                                        <option value="None">None</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Hint</td>
                                <td>
                                    <input type="text" name="" value="">
                                </td>
                            </tr>
                            <tr>
                                <td>Hint Order</td>
                                <td>
                                    <input type="number" step="1" name="" value="">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="Submit" value="Update"/>
                                </td>
                            </tr>
                        </table>
                </form>
            </div>
        </div>
    </body>
</html>
