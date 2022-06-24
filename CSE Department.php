<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
    <link rel="stylesheet" href="stylesheets/CSE.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CSE Department</title>
</head>

<body>
    <section>
        <div style="background: linear-gradient(rgba(0,5,40,0.7),rgba(0,5,10,0.7)),url(stylesheets/images/Library.png) no-repeat;background-size: cover;" class="jumbotron bg-cover text-white" id="top">
            <div class="container py-5 text-center">
                <h1 class="display-4 font-weight-bold">Why Join CSE@IIITDMJ</h1>
                <p class="font-italic mb-0 col-md-10 col-md-offset-1 text-center" style="margin: auto;">An environment
                    and the curriculum that
                    provide you the right blend of flexibility and formality
                    to nurture your dreams and help shaping, polishing them to turn into a reality... <br>...and a
                    catalyst for the sustainable socio-economic development of the country...
                </p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature">
                            <h3>Expert teachers</h3>
                            <p align="justify">
                                A good teacher can ignite the imagination, and instill a love of learning. One looks
                                back
                                with appreciation to the brilliant teachers, but with gratitude to those who touched our
                                human feelings.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature">
                            <h3>Study Environment</h3>
                            <p align="justify">
                                It is an environment where children can experiment and try out new ideas without fear or
                                failure. Learning is a kind of natural food for the dwelling mind. Self education is the
                                key
                                to learn.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature">
                            <h3>Research</h3>
                            <p align="justify">
                                Conduct cutting-edge research in most of the principal areas of the field, lead a broad
                                range of multi-disciplinary initiatives that demonstrate the transformative power of
                                Computer Science and Computer Engineering
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature">
                            <h3>Interactive Study</h3>
                            <p align="justify">
                                Interactive learning can take many different forms. Students strengthen their critical
                                thinking and problem-solving skills which can take place across the curriculum with or
                                without technology.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <div style="margin: 0 1rem; ">
        <div class="row gutters-sm">
            <div class="col-md-1"></div>
            <div class="col-md-4 mb-3">
                <div class="card" style="margin-left: auto;">
                    <div>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="rounded-circle" width="150">
                                            <div class="mt-3">
                                                <h3>Name</h3>
                                                <p class="text-secondary mb-2">Designation</p>
                                                <p class="text-muted font-size-sm">Discipline</p>
                                                <p class="text-muted font-size-sm">Email</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
                                /*Check link to the mysql server*/
                                if (!$link) {
                                    die('Failed to connect to server: ');
                                }
                                /*Create query*/
                                $qry = 'SELECT * FROM `faculty` WHERE Discipline="CSE" AND Designation="Professor"';

                                /*Execute query*/
                                $result = mysqli_query($link, $qry);

                                /*Show the rows in the fetched result set one by one*/
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                <div class="carousel-item ">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <?php echo'<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="" class="rounded-circle" width="150" >'?>
                                            <div class="mt-3">
                                                <h3><?php echo $row['name']?></h3>
                                                <p class="text-secondary mb-2"><?php echo $row['Designation']?></p>
                                                <p class="text-muted font-size-sm"><?php echo $row['Discipline']?></p>
                                                <p class="text-muted font-size-sm"><?php echo $row['email']?></p>
                                                <a href="faculty.php">More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev" style="background-color: #000000;">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" data-slide="next" style="background-color: #000000;">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4" id="im">
                <br>
                <div class="not" style="height: 50%;">
                    <p class="font-weight-bold" style="font-size: 1.3rem; margin-bottom: 0%;">NOTICE <i class="fa fa-envelope"></i> </p>
                    <hr>
                    <p>
                        <?php
                        $dbh = new PDO("mysql:host=localhost;dbname=iiitdmj", "root", "");
                        $stat = $dbh->prepare("SELECT * from news_events WHERE Place='CSE' AND scope='Notice'");
                        $stat->execute();
                        while ($row = $stat->fetch()) {
                            echo "<img src='stylesheets/images/new.gif'> <a target='_blank' style='color:red' href='admin/data/view.php?id=" . $row['id'] . "'>" . $row['Name'] . "</a><br>";
                        }
                        ?>
                    </p>
                </div>
                <div class="event" style="height: 50%">
                    <p class="font-weight-bold" style="font-size: 1.2rem;margin-bottom: 0%;">NEWS/EVENT <i class="fa fa-newspaper-o"></i></p>
                    <hr>
                    <p>
                        <?php
                        $dbh = new PDO("mysql:host=localhost;dbname=iiitdmj", "root", "");
                        $stat = $dbh->prepare("SELECT * from news_events WHERE Place='CSE' AND scope='News'");
                        $stat->execute();
                        while ($row = $stat->fetch()) {
                            echo "<img src='stylesheets/images/new.gif'> <a target='_blank' style='color:red' href='admin/data/view.php?id=" . $row['id'] . "'>" . $row['Name'] . "</a><br>";
                        }
                        ?>
                    </p>
                </div>
            </div>

            <div class="col-md-1" style="float: right;">
                <h4 style="color:#000000;">Links</h4>
                <ul class="list_1">
                    <li><a href="index.php">IIITDMJ HOME</a></li>
                    <li><a href="Acad_Calendar.php">Academic Calender</a></li>
                    <li><a href="downloads/Closed Holiday 2021.pdf" target="_blank">Holidays 2021</a></li>
                    <li><a href="dean.php">Dean</a></li>
                    <li><a href="cse_students.php">Students</a></li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <div class="container">
        <h1 align="center">COURSES</h1>
        <br>
        <div class="row table-responsive">
            <div class="col-lg-3 " style="display: inline-flex;">
                <div class="ccard">
                    <img src="stylesheets/images/btech.jpg" style="height:12rem;">
                    <h4>Bachelor of Technology (B.Tech) Programme</h4>
                    <p>Institute offers four year undergraduate degree (B.Tech) programme in Computer Science &
                        Engineering. The course curriculum for the undergraduate program gives the..</p>
                    <a href="BTECH courses.html">Details</a>
                </div>
            </div>
            <div class="col-lg-1" style="display: inline-flex;"></div>
            <div class="col-lg-3 " style="display: inline-flex;">
                <div class="ccard">
                    <img src="stylesheets/images/mtech.jpg" style="height:12rem;">
                    <h4>Master of Technology (M.Tech) Programme</h4>
                    <p>Institute offers two year post graduate degree (M.Tech) programme in Computer Science &
                        Engineering. The minimum residential requirement for the program is four..</p>
                    <a href="#">Details</a>
                </div>
            </div>
            <div class="col-lg-1" style="display: inline-flex;"></div>
            <div class="col-lg-3 " style="display: inline-flex;">
                <div class="ccard">
                    <img src="stylesheets/images/phd.jpg" style="height:12rem;">
                    <h4>Doctor of Philosophy (PhD) Programme</h4>
                    <p>Institute offers doctoral degree (PhD) programme in Computer Science & Engineering.</p>
                    <a href="#">Details</a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <hr>
    <br>
    <div class="container">
        <h1 align="center">ABOUT US</h1>
        <p style="background-color:chocolate; color:burlywood;">Indian Institute of Information Technology, Design and
            Manufacturing (IIITDM) Jabalpur, one of the premier technical Institutes of the country, established by
            Ministry of Human Resource Development (MHRD), Government of India.</p>
        <br>
        <div class="row table-responsive">

            <div class="ccard">
                <h4>Mission Statement</h4>
                <p>The mission of the Computer Engineering Department is to provide educational programs that would
                    encourage students to read critically, reason analytically, communicate persuasively, apply
                    professionally and prepare them to excel in the field of computing. </p>
            </div>

            <div class="col-lg-1" style="display: inline-flex;"></div>

            <div class="ccard">
                <h4>Vision Statement</h4>
                <p>The vision of the Computer Engineering Department is to recognize itself as renowned department in
                    the field of technical education in Computer Engineering and strives to carry out the superior level
                    of research based on the quality, innovation and excellence; with the help of its stakeholders viz.
                    the students, research scholars, faculty members, the support staff and the alumni. </p>
            </div>

        </div>
    </div>
    <br>
    <?php include 'footer.php'; ?>
</body>

</html>