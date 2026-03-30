<?php
include 'db/dbconnect.php';
$aid = $_SESSION['aid'];
$sql = "SElECT * FROM post WHERE aid = $aid";

$result=$con->query($sql);

while($row= mysqli_fetch_assoc($result)){
    echo "<div class=\"post-block\">";
        echo "<div class=\'post-name'>";
            echo $_SESSION['firstname'];
        echo "</div>";
        echo "<div class='post-content'>";
            echo $row['post_text'];
        echo"</div>";
    echo"</div>";
}

