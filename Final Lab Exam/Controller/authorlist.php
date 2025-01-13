<?php
session_start();
 
// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: ../View/login.html');
    exit();
}
 

$host = 'localhost';     
$dbname = 'blog';  
$dbuser = 'root';         
$dbpass = '';             
 

$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM authors";
$result = $conn->query($sql);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Author List</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Author List</h1>
 
    <input type="text" id="search" placeholder="Search authors by name, username, or contact..." />
    <button id="searchBtn">Search</button>
 
    <br><br>
 
    <div id="authorsTable">
       
        <?php
        if ($result->num_rows > 0) {
            echo "<table border='1' id='authorsTableContent'>";
            echo "<tr><th>Name</th><th>Contact No.</th><th>Username</th><th>Actions</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>
                        <a href='update_author.php?id=" . $row['id'] . "'>Update</a> |
                        <a href='delete_author.php?id=" . $row['id'] . "'>Delete</a>
                      </td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No authors found!";
        }
        ?>
    </div>
 
    <br><br>
    <a href="dashboard.php">Back to Dashboard</a>
 
    <script>
   
        $(document).ready(function() {
          
            $("#searchBtn").click(function() {
                var searchTerm = $("#search").val(); 
 
                $.ajax({
                    url: 'search_author.php',  
                    method: 'GET',
                    data: { query: searchTerm }, 
                    success: function(response) {
                       
                        $('#authorsTable').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
 
<?php
// Close the database connection
$conn->close();
?>