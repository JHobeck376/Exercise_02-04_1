<!doctype html>

<html>
	<head>
		<title>Number Form</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
        <h2>Number Form</h2>
        <?php
            // keeps track if the form needs to be displayed or not
            $displayForm = true;
            $number = "";
            if(isset($_POST['submit'])) {
                $number = $_POST['number'];
                if (is_numeric($number)) {
                    $displayForm = false;
                } else {
                    echo "<p>You need to enter a numeric value.</p>\n";
                    $displayForm = true;
                }
            }
            if ($displayForm) {
                ?>
                <form name="numberForm" action="NumberForm.php" method="post">
                    <p>
                        Enter a number: <input type="text" name="number" value="<?php echo $number; ?>">
                    </p>
                    <p>
                        <input type="reset" value="Clear Form">&nbsp;&nbsp;
                        <input type="submit" name="submit" value="Send Form">
                    </p>
                </form>
                <?php
            } else {
                echo "<p>Thank you for entering a number.</p>\n";
                echo "<p>Your number, $number, squared is " . ($number * $number) . ".</p>\n";
                echo "<p><a href=\"NumberForm.php\">Try again?</a></p>\n";
            }
        ?>
	</body>
</html>