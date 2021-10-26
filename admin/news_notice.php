<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $dbh = new PDO("mysql:host=localhost;dbname=iiitdmj", "root", "");
    if (isset($_POST['btn'])) {
        $name = $_FILES['myfile']['name'];
        $department = htmlspecialchars($_POST["department"]);
        $store_name = $_POST['to_store'];
        $type = $_FILES['myfile']['type'];
        $data = file_get_contents($_FILES['myfile']['tmp_name']);
        $stmt = $dbh->prepare("INSERT INTO news_events VALUES ('',?,?,?,?,?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $department);
        $stmt->bindParam(3, $store_name);
        $stmt->bindParam(4, $type);
        $stmt->bindParam(5, $data);
        $stmt->execute();
    }
    ?>
    <div>
        <form method="POST" enctype="multipart/form-data">
        Where To Display Data<input type="text" name="department" id="">
            <select name="to_store" id="">
                <option selected>choose what to store</option>
                <option value="Notice">Notice</option>
                <option value="News">News</option>
            </select><br>
            <input type="file" name="myfile" /><br>
            <button name="btn">Upload</button>
        </form>
    </div>
</body>

</html>