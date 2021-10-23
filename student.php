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
  <link rel="stylesheet" href="stylesheets/carousel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .table-bordered tr th{
      font-size: clamp(0.8rem,1.5vw,2.5rem);
    }
    tr td{
      font-size: clamp(0.7rem,1.4vw,2.2rem);
    }
    #block {
      height: 88%;
      width: 70%;
      margin: auto;
      margin-top: 3%;
      margin-bottom: 2.5%;
      background-color: #ebe0d2;
      box-shadow: 10px 10px grey;
    }
    @media screen and (max-width:800px){
      #block{
        width: 90%;
      }
      .table-bordered{
        width:60%;
      }
    }
    h1 {
      margin-bottom: 1.2rem;
      color: rgb(43, 43, 153);
      text-shadow: 1px 1px 2px black;
    }

    .table-bordered>tbody>tr>td,
    .table-bordered>tbody>tr>th,
    .table-bordered>tfoot>tr>td,
    .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td,
    .table-bordered>thead>tr>th {
      border: 1px solid #555;
    }

    .table-bordered {
      border: 3px solid #555;
      width: 80%;
    }
  </style>
</head>

<body>
  <div class="navbar">
    <?php include 'topnav.php'; ?>
    <?php include 'mainnav.php'; ?>
    <div class="about" style="top:50%;left:10%;transform:translate(-50%,-50%);">
      <h1>Enrolled Student</h1>
    </div>
    <div style="display: flex; justify-content:space-around;position:absolute; top:80%; width:100%">
      <div><a href="cse_students.php" style="background-color: blue;padding:20px;font-size: larger">CSE</a></div>
      <div><a href="ece_students.php" style="background-color: blue;padding:20px;font-size: larger">ECE</a></div>
    </div>
  </div>
  <?php include 'footer.php'; ?>

</body>

</html>