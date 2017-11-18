<!doctype html>
<html>
	<head>
		<title>Index</title>
			<Meta name="description" content="my page"/>
			<Meta charset="utf-8"/>
			<link rel="stylesheet" href="main.css" type="text/css" />
			<?php include 'config.php';?>

	</head>
	<body>
	<?php include 'menu.php';?>
	<h4>Search books</h4>
            <form action="browse.php" method="POST">
                <table bgcolor="#bdbdbd" cellpadding="6">
                    <tbody>
                        <tr>
                           <td>Title:</td>
                <td><INPUT type="text" name="searchtitle"></td>
            </tr>
            <tr>
                <td>Author:</td>
                <td><INPUT type="text" name="searchauthor"></td>
            </tr>
            <tr>
                <td></td>
                <td><INPUT type="submit" name="submit" value="Submit"></td>
                        </tr>
                    </tbody>
                </table>
            </form>


	
	<?php

$searchtitle = "";
$searchauthor = "";

if (isset($_POST) && !empty($_POST)) {

    $searchtitle= htmlentities($searchtitle);
    $searchtitle = mysqli_real_escape_string($db, $searchtitle);

    $searchauthor= htmlentities($searchauthor);
    $searchauthor = mysqli_real_escape_string($db, $searchauthor);


    $searchtitle = trim($_POST['searchtitle']);
    $searchauthor = trim($_POST['searchauthor']);
}



$searchtitle = addslashes($searchtitle);
$searchauthor = addslashes($searchauthor);


@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if ($db->connect_error) {
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}



$query = " select * from allbooks";
if ($searchtitle && !$searchauthor) { 
    $query = $query . " where booktitle like '%" . $searchtitle . "%'";
}
if (!$searchtitle && $searchauthor) { 
    $query = $query . " where bookauthor like '%" . $searchauthor . "%'";
}
if ($searchtitle && $searchauthor) { 
    $query = $query . " where booktitle like '%" . $searchtitle . "%' and bookauthor like '%" . $searchauthor . "%'"; 
}

    $stmt = $db->prepare($query);
    $stmt->bind_result($bookid, $booktitle, $bookauthor, $bookreserved);
    $stmt->execute();

    function yesNo(&$value){
    $value = $value == true ? 'No' : 'Yes';
    }

    

    echo '<table  cellpadding="6">';
    echo '<tr><b><td class="td1">Title</td> <td class="td1">Author</td><td class="td1">Reserved</td><td class="td1">Reserve</td> </b> </tr>';
    while ($stmt->fetch()) {

        yesNo($bookreserved);

        echo "<tr>";
        echo "<td> $booktitle </td><td> $bookauthor </td>";
        echo "<td> $bookreserved </td>";
         echo '<td><a href="reserveBook.php?bookid=' . urlencode($bookid) . '" class="resbtn"> Reserve </a></td>';

        echo "</tr>";
                }
            echo "</table>";
    ?>


	<?php include 'footer.php';?>

	</body>
</html>