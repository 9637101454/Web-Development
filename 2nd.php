<html>
    <body>
        <form method="post">
            Name: <input type="text" name="name" ><br><br>
            Email: <input type="email" name="email"><br><br>
            <input type="submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    echo "Name:" . $_POST['name'] . "<br>";
    echo "Email:" . $_POST['email'];
}
?>
</body>
</html>
