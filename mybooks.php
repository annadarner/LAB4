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
	<h4>My books</h4>
	<form action="mybooks.php" method="POST">
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
# This is the mysqli version

$searchtitle = "";
$searchauthor = "";

if (isset($_POST) && !empty($_POST)) {
# Get data from form
    $searchtitle = trim($_POST['searchtitle']);
    $searchauthor = trim($_POST['searchauthor']);
}

//	if (!$searchtitle && !$searchauthor) {
//	  echo "You must specify either a title or an author";
//	  exit();
//	}

$searchtitle = addslashes($searchtitle);
$searchauthor = addslashes($searchauthor);

# Open the database
@ $db = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if ($db->connect_error) {
    echo "could not connect: " . $db->connect_error;
    printf("<br><a href=index.php>Return to home page </a>");
    exit();
}

# Build the query. Users are allowed to search on title, author, or both

$query = " select booktitle, bookauthor, bookreserved, bookid from allbooks where bookreserved is false";
if ($searchtitle && !$searchauthor) { // Title search only
    $query = $query . " and booktitle like '%" . $searchtitle . "%'";
}
if (!$searchtitle && $searchauthor) { // Author search only
    $query = $query . " and bookauthor like '%" . $searchauthor . "%'";
}
if ($searchtitle && $searchauthor) { // Title and Author search
    $query = $query . " and booktitle like '%" . $searchtitle . "%' and bookauthor like '%" . $searchauthor . "%'"; // unfinished
}

//echo "Running the query: $query <br/>"; # For debugging


  # Here's the query using an associative array for the results
//$result = $db->query($query);
//echo "<p> $result->num_rows matching books found </p>";
//echo "<table border=1>";
//while($row = $result->fetch_assoc()) {
//echo "<tr><td>" . $row['bookid'] . "</td> <td>" . $row['title'] . "</td><td>" . $row['author'] . "</td></tr>";
//}
//echo "</table>";
 

# Here's the query using bound result parameters
    // echo "we are now using bound result parameters <br/>";
    $stmt = $db->prepare($query);
    $stmt->bind_result($booktitle, $bookauthor, $bookreserved, $bookid);
    $stmt->execute();
    
//    $stmt2 = $db->prepare("update onloan set 0 where bookid like ". $bookid);
//    $stmt2->bind_result($onloan, $bookid);
    

    echo '<table cellpadding="6">';
    echo '<tr><b><td class="td1">BookID</td><b> <td class="td1">Title</td> <td class="td1">Author</td> </b> <td class="td1">Return</td> </b></tr>';
    while ($stmt->fetch()) {
        if($bookreserved==0)
            $bookreserved="Yes";
       
        echo "<tr>";
        echo "<td> $bookid </td><td> $booktitle </td><td> $bookauthor </td>";
        echo '<td><a href="returnBook.php?bookid=' . urlencode($bookid) . '" class="resbtn">Return</a></td>';
        echo "</tr>";
        
    }
    echo "</table>";
    ?>


	<?php include 'footer.php';?>
	</body>
</html>