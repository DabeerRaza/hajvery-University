<?php

require_once 'config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){

$userName=$_POST["username"];
$userEmail=$_POST["useremail"];
$userMobile=$_POST["usermobile"];
$userCountry=$_POST["usercountry"];
$userDegree=$_POST["userdegree"];
$insertQuery="insert into via_email_table(name,email,mobile,country,degree_program)
values('$userName','$userEmail','$userMobile','$userCountry','$userDegree')";
$result=$conn->query($insertQuery);


}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hajvery University (HU) – One of Pakistan's Top Universities</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/hu-icon.jpg">
</head>

<body>
    <div class="container-fluid container-of-web">
        <div class="row ">
            <div class="header col-xs-12 col-lg-12">
                <div class="left col-xs-12 col-sm-12 col-md-6 col-lg-5">
                    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-1 col-sm-2 col-xs-2">
                        <a target="_blank" href="https://www.facebook.com/HajveryUni" class="facebook"><img src="img/Facebook-2-32.png" alt=""></a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-xs-2">
                        <a target="_blank" href="https://www.flickr.com/photos/hupk/sets" class="flicker"><img src="img/flickr-32.png" alt=""></a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-xs-2">
                        <a target="_blank" href="https://twitter.com/hu_pk" class="twitter"><img src="img/twitter-32.png" alt=""></a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-xs-2">
                        <a target="_blank" href="https://www.youtube.com/user/hajverygroup" class="youtube"><img src="img/social-youtube-circle-32.png" alt=""></a>
                    </div>
                    <div class="col-lg-1 col-sm-2 col-xs-2">
                        <a target="_blank" href="http://www.hup.edu.pk/beat-blog/" class="bloger"><img src="img/blogger-32.png" alt=""></a>
                    </div>
                </div>
                <div class="empty-one col-xs-0 col-sm-0 col-md-1 col-lg-4"></div>
                <div class="right col-xs-12 col-sm-12 col-md-5 col-lg-3">
                    <nav>
                        <ul class="nav- col-lg-12">
                            <li class="col-lg-4 col-md-3 col-xs-4  col-sm-4 "><a href="http://www.hup.edu.pk/apply/">Apply Online</a></li>
                            <li class="col-lg-2 col-md-2 col-xs-2  col-sm-4 "><a href="jobs.html">Jobs</a></li>
                            <li class="col-lg-4 col-md-4 col-xs-4  col-sm-4 "><a href="contact us.html">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="navigation col-xs-12 col-lg-12">
                <div class="logo-part col-xs-12 col-sm-3 col-md-3 col-lg-3">
                    <ul class="logo-img">
                        <li>
                            <a href="#">
                                <img src="img/logo-of-hu.png">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="text-part col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    <ul class="nav-unorder-li-part">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="#">ABOUT US</a>
                            <ul class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">szlfksdkfm</li>
                            </ul>
                        </li>
                        <li><a href="#">ACADEMICS</a></li>
                        <li><a href="admission.html">ADMISSIONS</a></li>
                        <li><a href="#">CURRENT STUDENTS</a></li>
                        <li><a href="#">INTERNATIONAL</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="first-section  col-lg-12 col-xs-12">
                <iframe class="video col-lg-12 col-xs-12" width="1280" height="670" src="https://www.youtube.com/embed/sssU5qlrxGA?autoplay=1&loop=1&playlist=sssU5qlrxGA&showinfo=0&controls=0&volume=0&vol=0&mute=0" frameborder="0" allowfullscreen></iframe>
                <div class="rgba col-xs-12 col-lg-12"></div>
            </div>
        </div>
        <div class="row">
            <div class="third-section col-xs-12 col-lg-12">
                <div class="heading-on-first col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>A GREAT EDUCATION WITH A GREAT FUTURE</h1>
                </div>
                <div class="heading-on-second col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h4>Offering 35+ Degree Programs From Bachelors to Doctorate level, to over 8,500 male and female students.</h4>
                </div>
                <div class="for-height col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
            </div>
        </div>
        <div class="row">
            <div class="forth-section col-xs-12 col-lg-12">
                <div class="red col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="container-box col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <div class="main-1 ">
                            <a href="#">
                                <div class="pic-1"></div>
                            </a>
                        </div>
                        <div class="circle-pic-1 "></div>
                        <div class="text-faculty-1">Faculty of Computer Science</div>
                        <table class="table-1 ">
                            <tr class="trow-1">
                                <td class="td-2-1"></td>
                                <td class="td-2-2"></td>
                                <td class="td-2-3"></td>
                            </tr>
                        </table>
                        <p class="review">Review:</p>
                        <table class="rating-1">
                            <tr>
                                <td class="td-1-1-1">359,000</td>
                                <td class="td-1-1-2">
                                    <span class="star-1">&#9733;</span>
                                    <span class="star-2">&#9733;</span>
                                    <span class="star-3">&#9733;</span>
                                    <span class="star-4">&#9733;</span>
                                    
                                </td>
                                <td class="td-1-1-3"> (89 REVIEWS)</td>
                            </tr>
                        </table>
                    </div>
                    <div class="empty col-xs-0 col-sm-2 col-md-2 col-lg-2"></div>
                    <div class="container-box-1 col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <div class="main-2 ">
                            <a href="#">
                                <div class="pic-2"></div>
                            </a>
                            <div class="circle-pic-2"></div>
                            <div class="text-faculty-2">Faculty of Pharmacy</div>
                            <table class="table-2">
                                <tr class="trow-2">
                                    <td class="td-2-1"></td>
                                    <td class="td-2-2"></td>
                                    <td class="td-2-3"></td>
                                </tr>
                            </table>
                            <p class="review">Review:</p>
                            <table class="rating-1">
                                <tr>
                                    <td class="td-1-1-1">359,000</td>
                                    <td class="td-1-1-2">
                                        <span class="star-1">&#9733;</span>
                                        <span class="star-2">&#9733;</span>
                                        <span class="star-3">&#9733;</span>
                                        <span class="star-4">&#9733;</span>
                                        
                                    </td>
                                    <td class="td-1-1-3"> (89 REVIEWS)</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="green col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="container-box col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <div class="main-3">
                            <a href="#">
                                <div class="pic-3 "></div>
                            </a>
                            <div class="circle-pic-3"></div>
                            <div class="text-faculty-3">Faculty of Engineering
                            </div>
                            <table class="table-3">
                                <tr class="trow-3">
                                    <td class="td-3-1"></td>
                                    <td class="td-3-2"></td>
                                    <td class="td-3-3"></td>
                                </tr>
                            </table>
                            <p class="review">Review:</p>
                            <table class="rating-1">
                                <tr>
                                    <td class="td-1-1-1">359,000</td>
                                    <td class="td-1-1-2">
                                        <span class="star-1">&#9733;</span>
                                        <span class="star-2">&#9733;</span>
                                        <span class="star-3">&#9733;</span>
                                        <span class="star-4">&#9733;</span>
                                        
                                    </td>
                                    <td class="td-1-1-3"> (89 REVIEWS)</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="empty col-xs-0 col-sm-2 col-md-2 col-lg-2"></div>
                    <div class="container-box-1 col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <div class="main-4 ">
                            <a href="#">
                                <div class="pic-4"></div>
                            </a>
                            <div class="circle-pic-4"></div>
                            <div class="text-faculty-4">Faculty of Health & Science</div>
                            <table class="table-4">
                                <tr class="trow-4">
                                    <td class="td-4-1"></td>
                                    <td class="td-4-2"></td>
                                    <td class="td-4-3"></td>
                                </tr>
                            </table>
                            <p class="review">Review:</p>
                            <table class="rating-1">
                                <tr>
                                    <td class="td-1-1-1">359,000</td>
                                    <td class="td-1-1-2">
                                        <span class="star-1">&#9733;</span>
                                        <span class="star-2">&#9733;</span>
                                        <span class="star-3">&#9733;</span>
                                        <span class="star-4">&#9733;</span>
                                        
                                    </td>
                                    <td class="td-1-1-3"> (89 REVIEWS)</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <div class="row">
            <div class="fifth-section col-xs-12 col-lg-12">
                <div class="pink col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="container-box-3 col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <div class="main-5 ">
                            <a href="#">
                                <div class="pic-5"></div>
                            </a>
                            <div class="circle-pic-5"></div>
                            <div class="text-faculty-5">faculty of Film, Tv
                                <br>Advertising & Media Studies</div>
                            <table class="table-5">
                                <tr class="trow-5">
                                    <td class="td-5-1"></td>
                                    <td class="td-5-2"></td>
                                    <td class="td-5-3"></td>
                                </tr>
                            </table>
                            <p class="review">Review:</p>
                            <table class="rating-1">
                                <tr>
                                    <td class="td-1-1-1">359,000</td>
                                    <td class="td-1-1-2">
                                        <span class="star-1">&#9733;</span>
                                        <span class="star-2">&#9733;</span>
                                        <span class="star-3">&#9733;</span>
                                        <span class="star-4">&#9733;</span>
                                        
                                    </td>
                                    <td class="td-1-1-3"> (89 REVIEWS)</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="empty col-xs-0 col-sm-2 col-md-2 col-lg-2"></div>
                    <div class="container-box-4 col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <div class="main-6 ">
                            <a href="#">
                                <div class="pic-6"></div>
                            </a>
                            <div class="circle-pic-6"></div>
                            <div class="text-faculty-6">Faculty of Humanities & Social Sciences</div>
                            <table class="table-6">
                                <tr class="trow-6">
                                    <td class="td-6-1"></td>
                                    <td class="td-6-2"></td>
                                    <td class="td-6-3"></td>
                                </tr>
                            </table>
                            <p class="review">Review:</p>
                            <table class="rating-1">
                                <tr>
                                    <td class="td-1-1-1">359,000</td>
                                    <td class="td-1-1-2">
                                        <span class="star-1">&#9733;</span>
                                        <span class="star-2">&#9733;</span>
                                        <span class="star-3">&#9733;</span>
                                        <span class="star-4">&#9733;</span>
                                        
                                    </td>
                                    <td class="td-1-1-3"> (89 REVIEWS)</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="blue col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="container-box-3 col-xs-12 col-sm-5 col-md-5 col-lg-5">
                        <div class="main-7">
                            <a href="#">
                                <div class="pic-7 "></div>
                            </a>
                            <div class="circle-pic-7"></div>
                            <div class="text-faculty-7">Faculty of Fashion & Textile Design</div>
                                    <table class="table-7">
                                        <tr class="trow-7">
                                            <td class="td-7-1"></td>
                                            <td class="td-7-2"></td>
                                            <td class="td-7-3"></td>
                                        </tr>
                                    </table>
                                    <p class="review">Review:</p>
                                    <table class="rating-1">
                                        <tr>
                                            <td class="td-1-1-1">359,000</td>
                                            <td class="td-1-1-2">
                                                <span class="star-1">&#9733;</span>
                                                <span class="star-2">&#9733;</span>
                                                <span class="star-3">&#9733;</span>
                                                <span class="star-4">&#9733;</span>
                                               
                                            </td>
                                            <td class="td-1-1-3"> (89 REVIEWS)</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="empty col-xs-0 col-sm-2 col-md-2 col-lg-2"></div>
                            <div class="container-box-4 col-xs-12 col-sm-5 col-md-5 col-lg-5">
                                <div class="main-8 ">
                                    <a href="#">
                                        <div class="pic-8"></div>
                                    </a>
                                    <div class="circle-pic-8"></div>
                                    <div class="text-faculty-8">Faculty of Technology</div>
                                    <table class="table-8">
                                        <tr class="trow-8">
                                            <td class="td-8-1"></td>
                                            <td class="td-8-2"></td>
                                            <td class="td-8-3"></td>
                                        </tr>
                                    </table>
                                    <p class="review">Review:</p>
                                    <table class="rating-1">
                                        <tr>
                                            <td class="td-1-1-1">359,000</td>
                                            <td class="td-1-1-2">
                                                <span class="star-1">&#9733;</span>
                                                <span class="star-2">&#9733;</span>
                                                <span class="star-3">&#9733;</span>
                                                <span class="star-4">&#9733;</span>
                                                
                                            </td>
                                            <td class="td-1-1-3"> (89 REVIEWS)</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <div class="sixth-section col-xs-12 col-lg-12">
                        <div class="yellow col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="container-box-5 col-xs-12 col-sm-5 col-md-5 col-lg-5">
                                <div class="main-9 ">
                                    <a href="#">
                                        <div class="pic-9"></div>
                                    </a>
                                    <div class="circle-pic-9"></div>
                                    <div class="text-faculty-9">Faculty of Business Admin</div>
                                    <table class="table-9">
                                        <tr class="trow-9">
                                            <td class="td-9-1"></td>
                                            <td class="td-9-2"></td>
                                            <td class="td-9-3"></td>
                                        </tr>
                                    </table>
                                    <p class="review">Review:</p>
                                    <table class="rating-1">
                                        <tr>
                                            <td class="td-1-1-1">359,000</td>
                                            <td class="td-1-1-2">
                                                <span class="star-1">&#9733;</span>
                                                <span class="star-2">&#9733;</span>
                                                <span class="star-3">&#9733;</span>
                                                <span class="star-4">&#9733;</span>
                                                
                                            </td>
                                            <td class="td-1-1-3"> (89 REVIEWS)</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="empty col-xs-0 col-sm-2 col-md-2 col-lg-2"></div>
                            <div class="container-box-6 col-xs-12 col-sm-5 col-md-5 col-lg-5">
                                <div class="main-10 ">
                                    <a href="#">
                                        <div class="pic-10"></div>
                                    </a>
                                    <div class="circle-pic-10"></div>
                                    <div class="text-faculty-10">Faculty of Commerce & Banking</div>
                                    <table class="table-10">
                                        <tr class="trow-10">
                                            <td class="td-10-1"></td>
                                            <td class="td-10-2"></td>
                                            <td class="td-10-3"></td>
                                        </tr>
                                    </table>
                                    <p class="review">Review:</p>
                                    <table class="rating-1">
                                        <tr>
                                            <td class="td-1-1-1">359,000</td>
                                            <td class="td-1-1-2">
                                                <span class="star-1">&#9733;</span>
                                                <span class="star-2">&#9733;</span>
                                                <span class="star-3">&#9733;</span>
                                                <span class="star-4">&#9733;</span>
                                                
                                            </td>
                                            <td class="td-1-1-3"> (89 REVIEWS)</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="black col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="container-box-5 col-xs-12 col-sm-5 col-md-5 col-lg-5">
                                <div class="main-11">
                                    <a href="#">
                                        <div class="pic-11 "></div>
                                    </a>
                                    <div class="circle-pic-11"></div>
                                    <div class="text-faculty-11">Faculty of Law</div>
                                    <table class="table-11">
                                        <tr class="trow-11">
                                            <td class="td-11-1"></td>
                                            <td class="td-11-2"></td>
                                            <td class="td-11-3"></td>
                                        </tr>
                                    </table>
                                    <p class="review">Review:</p>
                                    <table class="rating-1">
                                        <tr>
                                            <td class="td-1-1-1">359,000</td>
                                            <td class="td-1-1-2">
                                                <span class="star-1">&#9733;</span>
                                                <span class="star-2">&#9733;</span>
                                                <span class="star-3">&#9733;</span>
                                                <span class="star-4">&#9733;</span>
                                                
                                            </td>
                                            <td class="td-1-1-3"> (89 REVIEWS)</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="empty col-xs-0 col-sm-2 col-md-2 col-lg-2"></div>
                            <div class="container-box-6 col-xs-12 col-sm-5 col-md-5 col-lg-5">
                                <div class="main-12 ">
                                    <a href="#">
                                        <div class="pic-12"></div>
                                    </a>
                                    <div class="circle-pic-12"></div>
                                    <div class="text-faculty-12"> Professional Programs</div>
                                    <table class="table-12">
                                        <tr class="trow-12">
                                            <td class="td-12-1"></td>
                                            <td class="td-12-2"></td>
                                            <td class="td-12-3"></td>
                                        </tr>
                                    </table>
                                    <p class="review">Review:</p>
                                    <table class="rating-1">
                                        <tr>
                                            <td class="td-1-1-1">359,000</td>
                                            <td class="td-1-1-2">
                                                <span class="star-1">&#9733;</span>
                                                <span class="star-2">&#9733;</span>
                                                <span class="star-3">&#9733;</span>
                                                <span class="star-4">&#9733;</span>
                                                
                                            </td>
                                            <td class="td-1-1-3"> (89 REVIEWS)</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="seventh-section col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="headings col-lg-xs col-sm-12 col-md-12 col-lg-12">
                            <div class="heading-1 col-lg-xs col-sm-12 col-md-12 col-lg-12">
                                <p class="para-head-1">A TOP RANKING UNIVERSITY LOCALLY RECOGNIZED – GLOBALLY ACCREDITED</p>
                            </div>
                            <div class="heading-2 col-lg-xs col-sm-12 col-md-12 col-lg-12">
                                <p class="para-head-2">HU is Top Ranking inter-disciplinary Research and Teaching University.</p>
                            </div>
                            <div class="horizental-line col-lg-xs col-sm-12 col-md-12 col-lg-12">
                                <div class="horiz-empty col-lg-3"></div>
                                <div class="horiz-head-3 col-lg-6"></div>
                                <div class="horiz-empty col-lg-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="eight-section col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="affiliated-1 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="affi-one col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="affi-one-logo col-lg-12"></div>
                            </div>
                            <div class="affi-two col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="affi-two-logo col-lg-12"></div>
                            </div>
                            <div class="affi-three col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="affi-three-logo col-lg-12"></div>
                            </div>
                            <div class="affi-four col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="affi-four-logo col-lg-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ninth-section col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="affiliated-2 col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                            <div class="affi-five col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="affi-five-logo"></div>
                            </div>
                            <div class="affi-six col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="affi-six-logo"></div>
                            </div>
                            <div class="affi-seven col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="affi-seven-logo"></div>
                            </div>
                            <div class="affi-eight col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="affi-eight-logo"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tenth-section col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="university-news col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="h1-one col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1>UNIVERSITY NEWS & EVENTS</h1>
                            </div>
                            <div class="h4-two col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h4>At HU, You will discover energy. Our Students are active in organising various on-campus events and activities.</h4>
                            </div>
                            <div class="hr col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="empty-for-hr col-lg-3 col-md-3 col-sm-3 col-xs-2"></div>
                                <div class="hr-end col-lg-6 col-md-6 col-sm-6 col-xs-8">
                                    <div class="empty-for-hr col-lg-3 col-md-3 col-sm-3 col-xs-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="eleventh-section col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="slider col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1100px;margin:0px auto 56px;">
                                <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                                    <ul class="amazingslider-slides" style="display:none;">
                                        <li><img src="amazing/images/education-trips.jpg" />
                                        </li>
                                        <li><img src="amazing/images/studyabroad-scholarship.jpg" />
                                        </li>
                                        <li><img src="amazing/images/TedX2.jpg" />
                                        </li>
                                    </ul>
                                    <ul class="amazingslider-thumbnails" style="display:none;">
                                        <li><img src="amazing/images/education-trips-tn.jpg" /></li>
                                        <li><img src="amazing/images/studyabroad-scholarship-tn.jpg" /></li>
                                        <li><img src="amazing/images/TedX2-tn.jpg" /></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="twelveth-section col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="vistis-of-ministers col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="left-side-of-minister col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3"></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8 div-img-blanket"><img class="img-blanket col-lg-12 col-md-12 col-sm-12 col-xs-10" src="img/asad-umer.png"> </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3"></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8 div-img-blanket"><img class="img-blanket col-lg-12 col-md-12 col-sm-12 col-xs-10" src="img/purple-day.png"> </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            </div>
                            <div class="right-side-of-minister col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-3"></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8 div-img-blanket"><img class="img-blanket col-lg-12 col-md-12 col-sm-12 col-xs-10" src="img/aisam-ul-haq.png"> </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3"></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8 div-img-blanket"><img class="img-blanket col-lg-12 col-md-12 col-sm-12 col-xs-10" src="img/pharmaceutical-projects.png"> </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                            </div>
                        </div>
                        <div class="blank col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="thirteenth-section">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-0"></div>
                        <div class="multimedia col-lg-4 col-md-4 col-sm-5 col-xs-12">
                            <h1 class="">MULTIMEDIA</h1>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-0"></div>
                    </div>
                    <div class="fourteenth-section">
                        <div class="left-for-large-video col-lg-7 col-md-12 col-sm-12 col-xs-8">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <iframe name="iframe1" class="iframe col-lg-12" src="https://www.youtube.com/embed/PTDhEYMh3eg" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="right-for-link-video col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="color col-lg-12 col-md-3 col-sm-12 col-xs-12">
                                <div class="col-lg-1 col-md-0 col-sm-0"></div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <a href="https://www.youtube.com/embed/PTDhEYMh3eg" target="iframe1">
                                        <img class="col-lg-12" src="img/hqdefault.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 "></div>
                                <div class="col-lg-5 col-md-12 col-sm-6 col-xs-6">
                                    <p>Pharm-D Students of Hajvery University displayed Pharmaceutical & Clinical Pharmacy Projects</p>
                                </div>
                            </div>
                            <div class="white col-lg-12 col-md-3 col-sm-12 col-xs-12">
                                <div class="col-lg-1 col-md-0 col-sm-0"></div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <a href="https://www.youtube.com/embed/_9UXGACATQ4" target="iframe1">
                                        <img class="col-lg-12" src="img/hqdefault-1.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                                <div class="col-lg-5 col-md-12 col-sm-6 col-xs-6">
                                    <p>Hajvery University (HU) Convocation 2016</p>
                                </div>
                            </div>
                            <div class="color col-lg-12 col-md-3 col-sm-12 col-xs-12">
                                <div class="col-lg-1 col-md-0 col-sm-0"></div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <a href="https://www.youtube.com/embed/gvyjY-lpqCY" target="iframe1">
                                        <img class="col-lg-12" src="img/hqdefault-2.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                                <div class="col-lg-5 col-md-12 col-sm-6 col-xs-6">
                                    <p>Hame barossa he apne Nujawano per</p>
                                </div>
                            </div>
                            <div class="white col-lg-12 col-md-3 col-sm-12 col-xs-12">
                                <div class="col-lg-1 col-md-0 col-sm-0"></div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <a href="https://www.youtube.com/embed/tvEkVBuK-5Q" target="iframe1">
                                        <img class="col-lg-12" src="img/hqdefault-3.jpg">
                                    </a>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                                <div class="col-lg-5 col-md-12 col-sm-6 col-xs-6">
                                    <p>Asad Umer visited Hajvery University</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="fifteenth-section">
                        <div class="col-lg-4 col-md-4 col-sm-2 col-xs-0"></div>
                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                            <div class="button">
                                <a href="https://www.youtube.com/user/hajverygroup">SEE MORE VIDEOS</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-2 col-xs-0"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="sixteenth-section col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1"></div>
                        <h1 class="col-lg-8 col-md-11 col-sm-11 col-xs-11">TAKE A LOOK AROUND OUR CAMPUS, VIRTUALLY</h1>
                        <div class="col-lg-2 col-md-0 col-sm-0 col-xs-0"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="seventeenth-section col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="campus-pic-1 col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <img class="col-lg-12" src="img/Euro-Campus.jpg" alt="">
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                <div class="campus-pic-2 col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <img class="col-lg-12" src="img/Main-Campus.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="campus-pic-3 col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <img class="col-lg-12" src="img/SKP-Campus.jpg" alt="">
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                <div class="campus-pic-4 col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <img class="col-lg-12" src="img/Auditorium_01.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="campus-pic-5 col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <img class="col-lg-12" src="img/Classroom_01.jpg" alt="">
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                <div class="campus-pic-5 col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <img class="col-lg-12" src="img/Library_01.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="eighteenth-section col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="col-lg-1 col-md-0 col-sm-0 col-xs-0"></div>
                        <div class="tour-loactions col-lg-10 col-md-12 col-sm-12 col-xs-12">
                            <a class="col-lg-12 col-md-12 col-sm-12 col-xs-12" href="#">SEE ALL VIRTUAL TOUR LOCATIONS</a>
                        </div>
                        <div class="col-lg-1 col-md-0 col-sm-0 col-xs-0"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="nineteenth-section col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="effal-Tower col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <img class="col-lg-12 col-md-12 col-sm-12 col-xs-12" src="img/effal-Tower.jpg">
                            <div class="partaner-uni col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">OUR PARTNER UNIVERSITIES</h1>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2"></div>
                            <hr class="partner-hr col-lg-6 col-md-6 col-sm-8 col-xs-8">
                            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2"></div>
                            <div class="partner-part-2 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-1"></div>
                                <div class="partaner-part-2-1 col-lg-10">
                                    <h1>We work with the very best. We are proud of our partners,
                        who work with us to deliver lifetime experience to our Students.</h1>
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <div class="slide-uni-logo col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class=" col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="col-lg-1"></div>
                                    <div class=" slide-uni-pic-1 col-lg-10">
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                                <div class="slide-uni-pic-2 col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                                <div class="slide-uni-pic-3 col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                <div class="slide-uni-pic-4 col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
                                <div class="slide-uni-pic-5 col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="twentieth-section col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="twth-left col-lg-4">
                    <div class="twth-left-up col-lg-12">
                        <div class="twth-1-h3 col-lg-12">
                            <h3>Admissions</h3>
                        </div>
                        <div class="twth-2-hr col-lg-12">
                            <hr>
                        </div>
                        <div class="twth-3-p col-lg-12">
                            <p>We know how hard the application process can be, so we have provided a step by step guide here. </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-8">
                                <div class="twth-4-link">
                                    <a class="col-lg-12" href="#"><img class="check" src="img/check-white.png" alt="">APPLY ONLINE</a>
                                </div>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                    </div>
                    <div class="twth-left-down col-lg-12">
                        <div class="twth-down-1-h3 col-lg-12">
                            <h3 class="col-lg-12">Contact Us</h3>
                        </div>
                        <div class="twth-down-2-hr col-lg-12">
                            <hr>
                        </div>
                        <div class="twth-down-3-p col-lg-12">
                            <p class="col-lg-7">Hajvery University (HU) 43-52 Industrial Area, Gulberg III, Lahore 33 Industrial Area, Gulberg III, Lahore 042-111-777-007 </p>
                            <div class="col-lg-5"></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-8">
                                <div class="twth-4-link">
                                    <a class="col-lg-12" href="#"><img class="check" src="img/check-white.png" alt="">VIEW PROSPECTUS</a>
                                </div>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                    </div>
                </div>
                <div class="twth-centre col-lg-4">
                    <div class="twth-cnt-up col-lg-12">
                        <div class="twth-cnt-1-h3 col-lg-12 col-md-12  col-sm-12 col-xs-12">
                            <h3 class="col-lg-12 col-md-12  col-sm-12 col-xs-12">Jobs at HU</h3>
                        </div>
                        <div class="twth-cnt-2-hr col-lg-12">
                            <hr>
                        </div>
                        <div class="twth-cnt-3-p col-lg-12">
                            <p>Make your career with a leading Govt chartered University</p>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-8">
                                <div class="twth-cnt-4-link">
                                    <a class="col-lg-12" href="#"><img class="check" src="img/check-white.png" alt="">APPLY FOR JOBS</a>
                                </div>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                    </div>
                    <div class="twth-cnt-down col-lg-12">
                        <div class="twth-cnt-1-h3 col-lg-12 col-md-12  col-sm-12 col-xs-12">
                            <h3 class="col-lg-12 col-md-12  col-sm-12 col-xs-12">Jobs at HU</h3>
                        </div>
                        <div class="twth-cnt-2-hr col-lg-12">
                            <hr>
                        </div>
                        <div class="twth-cnt-3-a col-lg-12 col-xs-12">
                            <ul>
                                <li><a href="#">Faculty of Engineering</a></li>
                                <li><a href="#">Faculty of Business</a></li>
                                <li><a href="#">Faculty of Fashion & Textile Design</a></li>
                                <li><a href="#">Faculty of Pharmacy</a></li>
                                <li><a href="#">Faculty of Media Studies</a></li>
                                <li><a href="#">Faculty of Computer Sciences</a></li>
                                <li><a href="#">Faculty of Humanities & Social Sciences</a></li>
                                <li><a href="#">Faculty of Law</a></li>
                                <li><a href="#">Faculty of Technology</a></li>
                                <li><a href="#">Faculty of Health Science</a></li>
                                <li><a href="#">Faculty of Commerce & Banking</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="twth-right col-lg-4">
                    <div class="twth-rgt-1-h3 col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="twth-rgt-up col-lg-12">
                            <div class="twth-rgt-1-h3 col-lg-12">
                                <h3 class="col-lg-12 col-md-12  col-sm-12 col-xs-12">START YOUR ADVENTURE TODAY</h3>
                            </div>
                            <div class="twth-rgt-2-p col-lg-12">
                                <p class="col-lg-11">Complete the form below to download our program brochure and hear from the Head of Admissions. </p>
                                <div class="col-lg-1"></div>
                            </div>
                        </div>
                        <div class="twth-rgt-down col-lg-12">
                            <form method="post">
                                <div class="twth-rgt-sp-inp col-lg-12">
                                    <div class="twth-rgt-1-sp col-lg-3">
                                        <span class="col-lg-12">Name</span>
                                    </div>
                                    <div class="twth-rgt-1-inp col-lg-9">
                                        <input class="col-lg-12" type="text" name="username">
                                    </div>
                                </div>
                                <div class="twth-rgt-sp-inp-1 col-lg-12">
                                    <div class="twth-rgt-2-sp col-lg-3">
                                        <span class="col-lg-12">Email</span>
                                    </div>
                                    <div class="twth-rgt-2-inp col-lg-9">
                                        <input class="col-lg-12" type="text" name="useremail">
                                    </div>
                                </div>
                                <div class="twth-rgt-sp-inp-2 col-lg-12">
                                    <div class="twth-rgt-3-sp col-lg-3">
                                        <span class="col-lg-12">Mobile</span>
                                    </div>
                                    <div class="twth-rgt-3-inp col-lg-9">
                                        <input class="col-lg-12" type="text" name="usermobile">
                                    </div>
                                </div>
                                <div class="twth-rgt-sp-inp-3 col-lg-12">
                                    <div class="twth-rgt-4-sp col-lg-3">
                                        <span class="col-lg-12">Country</span>
                                    </div>
                                    <div class="twth-rgt-4-inp col-lg-9">
                                        <select name="usercountry" class="col-lg-5">
                                            <option>Pakistan</option>
                                            <option>India</option>
                                            <option>Oman</option>
                                            <option>America</option>
                                            <option>England</option>
                                            <option>Canada</option>
                                            <option>Brazil</option>
                                            <option>Saudi Arabia</option>
                                            <option>Dubai</option>
                                            <option>Afghanistan</option>
                                            <option>Turkey</option>
                                            <option>Cyprus</option>
                                            <option>Germany</option>
                                            <option>New Zeland</option>
                                            <option>Holand</option>
                                            <option>Azbakstan</option>
                                            <option>Azharbhaijan</option>
                                            <option>South Africa</option>
                                            <option>West Indies</option>
                                            <option>Poland</option>
                                            <option>China</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="twth-rgt-sp-inp-4 col-lg-12">
                                    <div class="twth-rgt-5-sp col-lg-3">
                                        <span class="col-lg-12">Degree Pragram</span>
                                    </div>
                                    <div class="twth-rgt-5-inp col-lg-9">
                                        <select name="userdegree" class="col-lg-8">
                                            <option>Web Development</option>
                                            <option>B.Com(Hons.)</option>
                                            <option>M.com</option>
                                            <option>BBA</option>
                                            <option>BBA(Hons)</option>
                                            <option>MBA Profestional-3 Years</option>
                                            <option>MBA Exicutive</option>
                                            <option>Doctar of Pharmacy (Pharm-D)</option>
                                            <option>Doctar of Physio Therapy (DPT)</option>
                                            <option>M.Phill Pharmacy</option>
                                            <option>M.SC. Ecnomics</option>
                                            <option>M.A. English</option>
                                            <option>B.A</option>
                                            <option>BSCS</option>
                                            <option>MSc.CS</option>
                                            <option>B.A (Hons.) Textile Design</option>
                                            <option>M.A Textile Design</option>
                                            <option>BFD (Hons.)</option>
                                            <option>MFD</option>
                                            <option>MBA Sunday</option>
                                            <option>B.Com-IT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="twth-rgt-sp-inp-5 col-lg-12">
                                    <div class="twth-rgt-6-sp col-lg-3"></div>
                                    <div class="twth-rgt-6-inp col-lg-1">
                                        <input type="checkbox">
                                    </div>
                                    <div class="twth-rgt-6-p col-lg-8">
                                        <p>I agree to receive program news and updates via e-mail‎</p>
                                    </div>
                                </div>
                                <div class="twth-rgt-sp-inp-6 col-lg-12">
                                    <div class="twth-rgt-7-inp col-lg-12">
                                        <input type="submit" value="Send">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                </div>
                <div class="row">
                    <div class="footer col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-h3 col-lg-3 col-md-4 col-xs-12">
                            <h3>Hajvery University (HU) |</h3>
                        </div>
                        <div class="footer-p col-lg-5 col-md-5 col-xs-12">
                            <p> 43-52 Industrial Area, Gulberg III, Lahore, Pakistan</p>
                        </div>
                        <div class="social col-lg-4 col-md-3 col-xs-12">
                            <div class="col-sm-1 col-xs-1"></div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                <a target="_blank" href="https://www.facebook.com/HajveryUni"><img class="col-lg-12 col-xs-12" src="img/facebook_circle_gray-128.png"></a>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                <a target="_blank" href="https://www.flickr.com/photos/hupk/sets"><img class="col-lg-12 col-xs-12" src="img/Flickr-2-128.png"></a>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                <a target="_blank" href="https://twitter.com/hu_pk"><img class="col-lg-12 col-xs-12" src="img/twitter-128.png"></a>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                <a target="_blank" href="https://www.youtube.com/user/hajverygroup"><img class="col-lg-12 col-xs-12" src="img/youtube-128.png"></a>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-0"></div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2">
                                <a target="_blank" href="http://www.hup.edu.pk/beat-blog/"><img class="col-lg-12 col-xs-12" src="img/blogger-128.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--container-fluid-->
            <!--slider script-->
            <script src="amazing/sliderengine/jquery.js"></script>
            <script src="amazing/sliderengine/amazingslider.js"></script>
            <link rel="stylesheet" type="text/css" href="amazing/sliderengine/amazingslider-1.css">
            <script src="amazing/sliderengine/initslider-1.js"></script>
            <!--slider script-->
</body>

</html>

