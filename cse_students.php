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
    .table-bordered tr th {
      font-size: clamp(1rem, 1.5vw, 2.5rem);
    }

    tr td {
      font-size: clamp(0.9rem, 1.4vw, 2.2rem);
    }

    #block {
      height: 88%;
      width: 90%;
      margin: auto;
      margin-top: 3%;
      margin-bottom: 2.5%;
      background-color: #ebe0d2;
      box-shadow: 10px 10px grey;
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
  <div style="font-size: xx-large; width:fit-content; margin:auto">
    CSE STUDENTS
  </div>
  <div id="block" class="container" style="padding: 0.8rem;">
    <div class="container" style="text-align: center;">
      <h1> Phd Student Information</h1>
    </div>
    <table class="table table-bordered  text-center " style="margin:auto; margin-bottom: 20px;">
      <thead>
        <tr>
          <th> Student_name </th>
          <th> Programme </th>
          <th> Email </th>
        </tr>
      </thead>
      <tbody>
        <?php
        $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
        /*Check link to the mysql server*/
        if (!$link) {
          die('Failed to connect to server: ');
        }
        /*Create query*/
        $qry = 'SELECT * FROM students WHERE programme="Phd" AND discipline="CSE" ORDER BY name';

        /*Execute query*/
        $result = mysqli_query($link, $qry);

        /*Show the rows in the fetched result set one by one*/
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr> 
          <td>' . $row['name'] . '</td>
          <td>' . $row['programme'] . '</td>
          <td>' . $row['email'] . '</td> 
          </tr>';
        }
        echo '</tbody>     
    </table>';
        ?>
  </div>
  <div id="block" class="container" style="padding: 0.8rem;">
    <div class="container" style="text-align: center;">
      <h1> M.Tech Student Information</h1>
    </div>
    <table class="table table-bordered  text-center " style="margin:auto; margin-bottom: 20px;">
      <thead>
        <tr>
          <th> Student_name </th>
          <th> Programme</th>
          <th> Email </th>
        </tr>
      </thead>
      <tbody>
        <?php
        $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
        /*Check link to the mysql server*/
        if (!$link) {
          die('Failed to connect to server: ');
        }
        /*Create query*/
        $qry = 'SELECT * FROM students WHERE Programme="M.tech" AND discipline="CSE" ORDER BY name';

        /*Execute query*/
        $result = mysqli_query($link, $qry);

        /*Show the rows in the fetched result set one by one*/
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<tr> 
          <td>' . $row['name'] . '</td> 
          <td>' . $row['programme'] . '</td> 
          <td>' . $row['email'] . '</td> 
          </tr>';
        }
        echo '</tbody>     
    </table>';
        ?>
  </div>
  <?php include 'footer.php';?>
</body>

</html>