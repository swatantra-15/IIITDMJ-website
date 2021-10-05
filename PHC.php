<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHC</title>
    <link rel="stylesheet" href="stylesheets/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="stylesheets/about.css">
    <link rel="stylesheet" href="stylesheets/carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="navbar" style="background-image: linear-gradient(rgba(0,5,0,0.7),rgba(0,5,30,0.7)),url(stylesheets/images/phc1.jpg)">
        <?php include 'topnav.php'; ?>
        <?php include 'mainnav.php'; ?>
        <div class="about">
            <h1>Primary Health Centre</h1>
        </div>
    </div>
    <div class="features">
        <h2>Primary Health Centre</h2>
        <section class="featurescontent">
            <section class="child" style="min-width: 70%;">
                <table>
                    <tr>
                        <i class="fa fa-newspaper-o" style="padding-right: 5px;float:left"></i>
                        <td>
                            <div class="aboutcontent">
                                <strong>
                                    Dr. Manoj Singh Parihar
                                </strong>
                                <br>
                                (Faculty Incharge)
                            </div>
                            <div class="aboutcontent">
                                Phone: 0761-2794467<br>
                            </div>
                            <div class="aboutcontent">
                                Doctors available for consultation:
                                    <ol>
                                        <li style="list-style: upper-roman;">Dr. G S Sandhu (MD) Medical Specialist ,</li>
                                        <li style="list-style: upper-roman;">Dr. Jyoti Garg Maternal & Child Care ,</li>
                                        <li style="list-style: upper-roman;">Dr. Arvind Nath Gupta (MD) Paed. ,</li>
                                    </ol>
                                    
                                </div>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <br>
                    <h2 align="center">Some Images</h2>
                    <div class="slideshow-container">
                        
                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="stylesheets/images/phc.jpg" style="width:100%">
                        
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="stylesheets/images/health1.jpg" style="width:100%">
                        
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="stylesheets/images/health2.jpg" style="width:100%">
                        
                    </div>
                    

                    
                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                
                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
                <script src="stylesheets/slide.js"></script>
                <div class="aboutcontent">
                    <a href="downloads/PHC Doctor's Duty Chart.pdf">Duty Roster for PHC Doctors & Counselor</a>
                </div>
            </section>
            <section class="child" style="min-width: 30%;">
                <table>
                    <tr>
                        <td>
                            <h3>See Also</h3>
                            <p><br>
                            <ul>
                                <li>
                                    <a href="#" style="font-size: clamp(15px,2vw,25px);">Gymkhana</a>
                                </li>
                                <li>
                                    <a href="activity.php" style="font-size: clamp(15px,2vw,25px);">Activities</a>
                                </li>
                                <li>
                                    <a href="#" style="font-size: clamp(15px,2vw,25px);">Counselling</a>
                                </li>
                                <li>
                                    <a href="#" style="font-size: clamp(15px,2vw,25px);">Hostels</a>
                                </li>
                                <li>
                                    <a href="#" style="font-size: clamp(15px,2vw,25px);">Alumni</a>
                                </li>
                                <li>
                                    <a href="#" style="font-size: clamp(15px,2vw,25px);">Students Mess</a>
                                </li>
                            </ul>
                        </p>
                    </td>
                </tr>
            </table>
        </section>
        </section>
    </div>
    <?php include 'footer.php'; ?>

</body>

</html>