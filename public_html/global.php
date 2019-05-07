<!DOCTYPE html>
<html>
    <head>
        <?php include("include/head.php"); ?>
        <title>global</title>
    </head>
    <body>
        <?php include("include/header.php"); ?>

        <form method="post">
            <table>
                <tr>
                    <td>Countdown Duration</td>
                    <td><input type="text"/></td>
                </tr>
                <tr>
                    <td>Helpful Hints Delay</td>
                    <td><input type="text"/></td>
                </tr>
                <tr>
                    <td>Delay Before Prompt</td>
                    <td><input type="text"/></td>
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
            </table>
            <input type="Submit" value="Save Settings"/>
        </form>

        <?php include("include/footer.php"); ?>
    </body>
</html>
