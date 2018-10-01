<!doctype html>

<html>
	<head>
		<title>Web Template</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
	</head>

	<body>
        <?php
        //pulls in the header
        include("inc_Header.html");
        ?>
        <div style="width: 20%; text-align: center; float: left">
            <?php
                // pulls in the nav
                include("inc_ButtonNav.html");
            ?>
        </div>
        <!--Start of Dynamic Content Area-->
        <?php
            if(isset($_GET['content'])) {
                switch($_GET['content']){
                    case 'About Me':
                        include('inc_About.html');
                        break;
                    case 'Contact Me':
                        include('inc_Contact.html');
                        break;
                    case 'Home':
                        // A value of home means to display the default page
                    default:
                        include('inc_Home.html');
                        break;
                }
            }else {
                include('inc_Home.html');
            }
        ?>
        <!--End of Dynamic Content Area-->
        <?php
            //pulls in footer
            include("inc_Footer.php");
        ?>
	</body>
</html>