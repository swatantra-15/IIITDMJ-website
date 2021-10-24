<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student @iiitdmj</title>
  <link rel="stylesheet" href="stylesheets/style.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="stylesheets/about.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .option {
      display: flex;
      justify-content: space-around;
      position: absolute;
      top: 80%;
      width: 100%;
    }
    #click:checked~.option{
      display: none;
    }
  </style>
</head>

<body>
  <div class="navbar">
    <?php include 'topnav.php'; ?>
    <?php include 'mainnav.php'; ?>
    <div class="about" style="top:50%;left:10%;transform:translate(-50%,-50%);width:fit-content">
      <h1>Enrolled Student</h1>
    </div>
    <div class="option">
      <div><a href="cse_students.php" style="background-color: blue;padding:20px;font-size: larger">CSE</a></div>
      <div><a href="ece_students.php" style="background-color: blue;padding:20px;font-size: larger">ECE</a></div>
    </div>
  </div>
  <?php include 'footer.php'; ?>

</body>

</html>