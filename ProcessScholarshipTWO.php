<!doctype html>

<html>
	<head>
		<title>Page Title</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
       <h2>Process Scholarship 2</h2>
        <?php
            $errorCount = 0;
            function displayRequired($fieldName) {
                echo "The field \"FieldName\" is required<br>\n";
            }
            function validateInput($data, $fieldName) {
                global $errorCount;
                if (empty($data)) {
                    displayRequired($fieldName);
                    ++$errorCount;
                    $retval = "";
                }
            }
            function redisplayForm($firstName, $lastName) {
                ?>
            }
            <h2 style="text-align: center">Scholarship Form</h2>
            <form name="scholarship" action="ProcessScholarship2.php" method="post">
                <p>First name: <input type="text" name="fName" value="<?php echo $firstName; ?>"></p>
                <p>Last Name: <input type="text" name="lName" value="<?php echo $lastName; ?>"></p>
                <p>
                    <input type="reset" value="Clear Form">&nbsp;&nbsp;
                    <input type="submit" value="Send Form">
                </p>
            </form>
        <?php
            }
            $firstName = validateInput($_POST['fName'], "First Name");
            $lastName = validateInput($_POST['lName'], "Last Name");
            if ($errorCount > 0) {
                echo "$errorCount error(s): Please re-enter the information below.<br>\n";
                redisplayForm($firstName, $lastName);
            } else {
                echo "Thank you for filling out . the scholarship form, " . $firstName . " " . $lastName . ".";
            }
        ?>
	</body>
</html>