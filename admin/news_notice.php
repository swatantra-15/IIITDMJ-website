<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin- news_events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #nad{
            background-color: rgb(173, 240, 240);
            box-sizing: border-box;
            max-width: 90%;
            margin: auto;
            padding:1%;
        }
    </style>
</head>

<body>
     <!-- <?php
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
    ?> -->
    <div id="nad">
        <form method="POST" enctype="multipart/form-data">
            <div class="row mt-3">
                <div class="col-md-4 mt-2">
                    <div class="form-group">
                        <label for="department">Where To Display Data </label><br>
                        <select name="department" id="">
                            <option value="All">For Everyone</option>
                            <option value="CSE">Computer Science & Engineering</option>
                            <option value="ECE">Electronics & Communication Engineering</option>
                            <option value="Des">Design</option>
                            <option value="ME">Mechanical Engineering</option>
                            <option value="NS">Natural Sciences</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 mt-2">
                    <div class="form-group">
                        <label for="to_store">Type:</label><br>
                        <select name="to_store" id="">
                            <option selected>choose what to store</option>
                            <option value="Notice">Notice</option>
                            <option value="News">News</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="form-group">
                        <label for="myfile">Information:</label><br>
                        <input type="file" name="myfile" required/>
                    </div>
                </div>
                <div class="col-md-1 mt-2">
                    <div class="form-group pt-2">
                        <button name="btn" class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>