<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: 1rem;
            box-shadow: 5px 6px 15px;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .card-body img {
            width: 50%;
            border-radius: 50%;
            margin: 0 auto;
            box-shadow: 0 0 10px rg ba(0, 0, 0, .2);
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col,
        .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        /* bottom part */

        #bottom {
            width: 100%;
            height: 100%;
            font-family: "Open Sans", "open-sans", sans-serif;
            letter-spacing: 0.03em;
            line-height: 1.6;
            color: black;
            width: 1090px;
            min-width: 600px;
            height: 430px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>

    <h2>Faculty</h2>

    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'All')" id="defaultOpen">ALL</button>
        <button class="tablinks" onclick="openCity(event, 'CSE')">CSE</button>
        <button class="tablinks" onclick="openCity(event, 'Design')">Design</button>
        <button class="tablinks" onclick="openCity(event, 'ECE')">ECE</button>
        <button class="tablinks" onclick="openCity(event, 'ME')">ME</button>
        <button class="tablinks" onclick="openCity(event, 'Natural Science')">Natural Science</button>
    </div>

    <div id="All" class="tabcontent">
        <div>
        <div style="margin: 0 1rem; ">
<div class="row">
                    <?php
                $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
                if (!$link) {
                    die('Failed to connect to server: ');
                }
                $qry = 'SELECT * FROM faculty';

                $result = mysqli_query($link, $qry);

                if ($result!= false) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <div class="col-4">
                            <div class="card" style="margin-left: auto; margin-bottom: auto;">
                                <div class="card-body"
                                    style="padding: 10px; box-shadow: 5px 10px 8px #888888;">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                            <h3>'.$row['name'].'</h3>
                                            <p class="text-secondary mb-2">'.$row['Designation'].'</p>
                                            <h6>'.$row['Discipline'].'</h6>
                                            <p class="text-muted font-size-sm">'.$row['faculty_description'].'</p>
                                            <button class="btn btn-primary">Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                }
            ?>
</div>
</div>
        </div>
    </div>

    <div id="CSE" class="tabcontent">
    <div style="margin: 0 1rem; ">
<div class="row">
                    <?php
                $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
                if (!$link) {
                    die('Failed to connect to server: ');
                }
                $qry = 'SELECT * FROM faculty Where Discipline="CSE"';

                $result = mysqli_query($link, $qry);

                if ($result!= false) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <div class="col-4">
                            <div class="card" style="margin-left: auto; margin-bottom: 1rem; margin-top:1rem;">
                                <div class="card-body"
                                    style=" padding: 10px; box-shadow: 5px 10px 8px #888888;">
                                    <div class="d-flex flex-column align-items-center text-center">
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                            <h3>'.$row['name'].'</h3>
                                            <p class="text-secondary mb-2">'.$row['Designation'].'</p>
                                            <p class="text-muted font-size-sm">'.$row['faculty_description'].'</p>
                                            <button class="btn btn-primary">Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                }
            ?>
</div>
</div>
        
    </div>

    <div id="Design" class="tabcontent">
    <div style="margin: 0 1rem; ">
<div class="row">
                    <?php
                $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
                if (!$link) {
                    die('Failed to connect to server: ');
                }
                $qry = 'SELECT * FROM faculty Where Discipline="Design"';

                $result = mysqli_query($link, $qry);

                if ($result!= false) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <div class="col-4">
                            <div class="card" style="margin-left: auto; margin-bottom: auto;">
                                <div class="card-body"
                                    style="padding: 10px; box-shadow: 5px 10px 8px #888888;">
                                    <div class="d-flex flex-column align-items-center text-center">
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                            <h3>'.$row['name'].'</h3>
                                            <p class="text-secondary mb-2">'.$row['Designation'].'</p>
                                            <p class="text-muted font-size-sm">'.$row['faculty_description'].'</p>
                                            <button class="btn btn-primary">Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                }
            ?>
</div>
</div>
        
    </div>
    <div id="ECE" class="tabcontent">
    <div style="margin: 0 1rem; ">
<div class="row">
                    <?php
                $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
                if (!$link) {
                    die('Failed to connect to server: ');
                }
                $qry = 'SELECT * FROM faculty Where Discipline="ECE"';

                $result = mysqli_query($link, $qry);

                if ($result!= false) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <div class="col-4">
                            <div class="card" style="margin-left: auto; margin-bottom: auto;">
                                <div class="card-body"
                                    style="padding: 10px; box-shadow: 5px 10px 8px #888888;">
                                    <div class="d-flex flex-column align-items-center text-center">
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                            <h3>'.$row['name'].'</h3>
                                            <p class="text-secondary mb-2">'.$row['Designation'].'</p>
                                            <p class="text-muted font-size-sm">'.$row['faculty_description'].'</p>
                                            <button class="btn btn-primary">Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                }
            ?>
</div>
</div>
        
    </div>

    <div id="ME" class="tabcontent">
    <div style="margin: 0 1rem; ">
<div class="row">
                    <?php
                $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
                if (!$link) {
                    die('Failed to connect to server: ');
                }
                $qry = 'SELECT * FROM faculty Where Discipline="ME"';

                $result = mysqli_query($link, $qry);

                if ($result!= false) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <div class="col-4">
                            <div class="card" style="margin-left: auto; margin-bottom: auto;">
                                <div class="card-body"
                                    style="padding: 10px; box-shadow: 5px 10px 8px #888888;">
                                    <div class="d-flex flex-column align-items-center text-center">
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                            <h3>'.$row['name'].'</h3>
                                            <p class="text-secondary mb-2">'.$row['Designation'].'</p>
                                            <p class="text-muted font-size-sm">'.$row['faculty_description'].'</p>
                                            <button class="btn btn-primary">Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                }
            ?>
</div>
</div>
        
    </div>

    <div id="Natural Science" class="tabcontent">
    <div style="margin: 0 1rem; ">
<div class="row">
                    <?php
                $link = mysqli_connect('localhost', 'root', '', 'iiitdmj');
                if (!$link) {
                    die('Failed to connect to server: ');
                }
                $qry = 'SELECT * FROM faculty Where Discipline="Natural Science"';

                $result = mysqli_query($link, $qry);

                if ($result!= false) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <div class="col-4">
                            <div class="card" style="margin-left: auto; margin-bottom: auto;">
                                <div class="card-body"
                                    style="padding: 10px; box-shadow: 5px 10px 8px #888888;">
                                    <div class="d-flex flex-column align-items-center text-center">
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" alt="" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                            <h3>'.$row['name'].'</h3>
                                            <p class="text-secondary mb-2">'.$row['Designation'].'</p>
                                            <p class="text-muted font-size-sm">'.$row['faculty_description'].'</p>
                                            <button class="btn btn-primary">Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                }
            ?>
</div>
</div>
        
    </div>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>