<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin- news_events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../stylesheets/table.css">
    <style>
        #nad {
            background-color: rgb(173, 240, 240);
            box-sizing: border-box;
            max-width: 90%;
            margin: auto;
            padding: 1%;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/navbar.php'; ?>
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
        <h3 align="center" style="color: Red;">New Notice/News</h3>
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
                            <option selected>Choose What To Store</option>
                            <option value="Notice">Notice</option>
                            <option value="News">News</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="form-group">
                        <label for="myfile">Information:</label><br>
                        <input type="file" name="myfile" required />
                    </div>
                </div>
                <div class="col-md-1 mt-2">
                    <div class="form-group pt-2">
                        <button name="btn" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div id="block" style="padding: 0.8rem;height:fit-content">
        <h1 align="center">Notice/News</h1>
        <table class="table table-bordered  text-center " style="margin:auto; margin-bottom: 20px;">
            <thead>
                <tr style="background-color: rgba(0,0,0,0.6);color:white; font-size:large">
                    <th> Id </th>
                    <th> Name </th>
                    <th> Where </th>
                    <th> Type Of Data </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once 'includes/connect.php';
                /*Create query*/
                $qry = 'SELECT * FROM news_events';

                /*Execute query*/
                $result = mysqli_query($con, $qry);

                /*Show the rows in the fetched result set one by one*/
                while ($row = mysqli_fetch_assoc($result)) {
                    echo
                    '<tr> 
                <td style="font-size: medium; color:black">' . $row['id'] . '</td>
                <td style="font-size: medium; color:black">' . $row['Name'] . '</td>
                <td style="font-size: medium; color:black">' . $row['Place'] . '</td>
                <td style="font-size: medium; color:black">' . $row['scope'] . '</td>
                <td style="font-size: medium;">
                <div class="col-md-1 mt-2">
                <div class="form-group pt-2">
                <button name="del" class="btn btn-primary" style="background-color:red"><a href="delete_function.php?event_id=' . $row['id'] . ' " style="color:white; text-decoration:none" onclick="return checkdelete()"> Delete</a></button>
                </div>
                </div>
                </td>
                </tr>';
                }
                echo '</tbody>     
                </table>';
                ?>
    </div>
    <script src="js/deleteprompt.js"></script>
    <?php 
       include('includes/script.php');
       include('includes/footer.php');
       ?>
</body>

</html>