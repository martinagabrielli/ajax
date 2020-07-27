<?php
    include 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery-3.4.1.min.js"></script>
</head>
<body>
    <a class="home-link" href="/">Home</a>
    <div id="comments">
        <?php
            $sql = "SELECT * FROM comments LIMIT 2";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>";
                    echo $row['author'];
                    echo "<br>";
                    echo $row['message'];
                    echo "</p>";
                }
            } else {
                echo "There are no comments.";
            }
        ?>
    </div>
    <button>Show more comments</button>

    <script>
        $(document).ready(() => {
            let commentCount = 2;
             $("button").click(() => {
                commentCount = commentCount + 2;
                $("#comments").load("load-comments.php", {
                    commentNewCount: commentCount
                });
             });
        });
    </script>
</body>
</html>