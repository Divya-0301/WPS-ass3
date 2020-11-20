<!DOCTYPE html>
<html>
<head>
    <title>Redirect</title>
</head>
<body>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $comment = $_POST['comment'];
        $name = $_POST['name'];
        
        if($comment && $name) {
            header('location: homepage.html');
        }
        else{
        ?>
        <script type="text/javascript">
        alert("The requested URl has moved to different host");
        </script>
        <?php
    }
?>

    <form action="comment.php" method="POST">
        <input type="text" name="Name">
        <textarea name="comment"></textarea>
        <input type="submit" value="submit">  
    </form>   

</body>
</html>
