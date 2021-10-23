<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IIITDM Activities</title>
  <link rel="stylesheet" href="stylesheets/style.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="stylesheets/about.css">
  <link rel="stylesheet" href="stylesheets/carousel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="about">
      <h1>DEANS</h1>
    </div>
  </div>
  <div id="block" class="container" style="padding: 0.8rem;">
    <div class="container" style="text-align: center;">
      <h1>Deans</h1>
    </div>
    <table class="table table-bordered  text-center " style="margin:auto; margin-bottom: 20px;">
      <thead>
        <tr>
          <th> Name</th>
          <th> Department_name </th>
          <th> Email </th>
          <th> Description</th>
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
        $qry = 'SELECT * FROM dean';

        /*Execute query*/
        $result = mysqli_query($link, $qry);

        /*Show the rows in the fetched result set one by one*/
        while ($row = mysqli_fetch_assoc($result)) {
          echo
          '<tr> 
          <td>' . $row['name'] . '</td>
          <td><a href="'.$row['department_name'].'_dean.php" style="color:blue">' . $row['department_name'] . '</a></td>
          <td>' . $row['email'] . '</td> 
          <td>' . $row['description'] . '</td>
          </tr>';
        }
        echo '</tbody>     
</table>';
        ?>
  </div>
  <div id="block" class="container" style="padding: 20px;">
    <h3>Message for Students</h3>
    <br>
    <p>Dear Students</p>
    <br>
    <p style="line-height: 1.5;">Hearty congratulations on being taken a wise move of joining IIITDMJ community. I extend a warm welcome and assure you to take this treasured journey together in the right earnest.
PDPM IIITDMJ is one of the unique academic Institutes with regard to its curriculum and emphasize on project-oriented learning. I am happy to write that Indian as well as Japanese industries are recognizing enhanced capabilities of our students due to the unique curriculum. The atmosphere on the campus is lively and I am sure you will enjoy every moment spent here and will cherish for the rest of your life.
Rest assured that our academic standards are by no means easy and this year is no exception. Being a growing Institute, every year new laboratories and new courses are adding-on. Institute infrastructure is ever-growing. You will find the campus to be lush green with spread out areas earmarked for (a) student halls of residence (there are two and one more will come up soon), (b) the academic area and (c) residential area for faculty members and staff. Students are making every effort for betterment of Gymkhana facilities and you must make good use of it. I sincerely hope that within no time you will become part of one or more of gymkhana clubs that are organizing year-round activities. I strongly believe that by blending the studies with extra-curricular activities in the right balance, an allround personality may be built.
You are advised to take note of the rules and regulations that exists for all and available in our website, both academic guidelines and the rules for conduct and discipline. We strongly believe in educating students and expect them to behave as a responsible person. You will find the IIITDMJ community most cooperating, compassionate, and at the same time professional, firm in dealing with violators of our code of conduct and discipline.
Please be firm to say no to any act of ragging. Help us in eliminating this menace from our society by standing firm against it. We have a series of plans to deter such acts of ragging and we are quite sure we will be able to offer you an incident free stay so that you can concentrate on your primary objective of studying and enjoying the student life here in the Institute. We have in place a strong counselling service comprising of faculty and students to help you tide over the early days here and lend you a helping hand when you need it most. If you ever require a listening ear or a person to talk with, do not hesitate to come and meet me or drop an email or contact Head, counselling services immediately. Feel free to get in touch with us in case you need any help or if you need any clarification on any matter. Have a great time at IIITDMJ.
A final word of caution: Remain focussed at your primary objective. At times students drift so far away that coming back becomes a time consuming job if not impossible.</p>
  </div>
  <?php include 'footer.php'; ?>

</body>

</html>