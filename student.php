<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Student Information</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
        #block {
            height: 88%;
            width: 70%;
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
        .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
        border: 1px solid #555;
        }
        .table-bordered {
        border: 3px solid #555;
        width:80%;
        }
  </style>
</head>

<body>
        <?php include('topnav.php') ?>
		<?php include('mainnav.php') ?>
  <div id="block" class="container" style="padding: 0.8rem;">
    <div class="container" style="text-align: center;"><h1>Student Information</h1></div >
    <table class="table table-bordered  text-center " style="margin:auto; margin-bottom: 20px;">
      <thead>
        <tr>
        <th> Roll NUmber</th> 
        <th> Student_name </th> 
        <th> Email </th>
        <th> Programme </th>
        <th> Discipline </th>
        <th> Year of Graduation </th>
        <th> Phone Number </th>
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
$qry = 'SELECT * FROM students';

/*Execute query*/
$result = mysqli_query($link, $qry);

/*Show the rows in the fetched result set one by one*/
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr> 
      <td>'.$row['roll_number'].'</td>
      <td>'.$row['name'].'</td>
      <td>'.$row['email'].'</td>
      <td>'.$row['programme'].'</td> 
      <td>'.$row['discipline'].'</td>
      <td>'.$row['year_of_complition'].'</td>
      <td>'.$row['phone'].'</td>
      </tr>';
}
echo'</tbody>     
</table>';
?>
</div>
</body>
</html>