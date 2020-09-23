<?php
session_start();
if(isset($_SESSION["logged_in"]))
{
	if ($_SESSION["admin"]=="user")
	{
		header("LOCATION: userdash.php");
	}
}?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<?php include 'admindash.php'; ?>
<body>
    <div class="container">
    <div class="header">
    <h1>Edit Book</h1>
        </div>
        <div class="main">
            <form action="" method="POST">
                <span>
                    <input type="text" placeholder="Book Name" name="ebname">
                </span><br>
                <span>
                    <input type="text" placeholder="Book Department" name="ebdept">
                </span><br>
                <span>
                    <input type="text" placeholder="Book Author" name="ebauthor">
                </span><br>
                <span>
                    <input type="text" placeholder="Book Year" name="ebyear">
                </span><br>
                <span>
                    <input type="text" placeholder="Book Quantity" name="ebquantity">
                </span><br>
                <span>
                    <input type="file" placeholder="Book Coverphoto" name="ebcover">
                </span><br>
                <button name="submit">Update</button>

            </form>
        </div>
    </div>
</body>

</html>