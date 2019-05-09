<!DOCTYPE html>
<html>
    <head>
        <?php include("include/head.php"); ?>
        <title>global</title>
    </head>
    <body>
        <?php include("include/header.php"); ?>

        <div class="wrapper">
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
                                    <option value="2">Take a hike</option>
                                    <option value="3">Take a hike</option>
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
            <div class="table_scroll">
                <table>
                    <?php
                        echo "<tr>
                                <th>Department</th>
                                <th>Hint</th>
                                <th>Hint Order</th>
                                <th>Commands</th>
                            </tr>";
                        for ($i=0; $i < 3; $i++) {
                            echo "<tr>
                                <td>None</td>
                                <td>It appears you have been away from your desk. Simply click Take a Hike, record your walking time, and return to work!</td>
                                <td>1</td>
                                <td>
                                    <button type='button' name='btn-edit'>
                                        <a class='btn-icon btn-edit'>Edit</a>
                                    </button>
                                    <button type='button' name='btn-del'>
                                        <a class='btn-icon btn-del'>Delete</a>
                                    </button>
                                </td>
                            </tr>";
                        }
                     ?>
                </table>
            </div>
        </div>

        <?php include("include/footer.php"); ?>
    </body>
</html>
