<!-- <!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative Prospects Group</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="icon" type="image/x-icon" href="images/footerLogo.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/style-ar.css">
</head>


<body>
    <div class="PreLoader">
        <svg class="pl" viewBox="0 0 200 200" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <lineargradient id="pl-grad1" x1="1" y1="0.5" x2="0" y2="0.5">
                    <stop offset="0%" stop-color="hsl(313,90%,55%)" />
                    <stop offset="100%" stop-color="hsl(223,90%,55%)" />
                </lineargradient>
                <lineargradient id="pl-grad2" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="hsl(313,90%,55%)" />
                    <stop offset="100%" stop-color="hsl(223,90%,55%)" />
                </lineargradient>
            </defs>
            <circle class="pl__ring" cx="100" cy="100" r="82" fill="none" stroke="url(#pl-grad1)" stroke-width="36" stroke-dasharray="0 257 1 257" stroke-dashoffset="0.01" stroke-linecap="round" transform="rotate(-90,100,100)" />
            <line class="pl__ball" stroke="url(#pl-grad2)" x1="100" y1="18" x2="100.01" y2="182" stroke-width="36" stroke-dasharray="1 165" stroke-linecap="round" />
        </svg>
    </div>
    <div class="MainHead SubPage">
        <div class="BgOpacity">
            <div class="container topNav">
                <div class="row">
                    <div class="col-4 col-md-8 TalkLeft">
                        <h5>تحتاج مساعدة؟ تحدث مع خبير</h5>

                        <a href="tel:920033846">920033846</a>
                    </div>

                    <div class="col-8 col-md-4 TopLink">
                        <a href="#">الوظائف</a>

                        <a class="active" href="faqs.html">الأسئلة</a>

                        <a href="../">
                            English
                            <i class="fa-solid fa-globe"></i>
                        </a>

                        <a href="#"><i class="fa-solid fa-moon"></i></a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-9 col-md-5 logo">
                        <a href="#">
                            <img src="images/logoWhite.png" alt>
                        </a>
                    </div>
                    <div class="col-2 col-md-7 NavMenu">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="#">الرئيسية</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" target="_blank" href="../Creative Prospect • Company Profile.pdf">ملف
                                                التعريف</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="services.html">الخدمات</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="products.html">المنتجات</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">المدونة</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.html">عننا</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="contact.php">اتصل بنا</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container WelcomeSec">
                <div class="row justify-content-md-center">
                    <div class="col-12 WelcomeTopH5 SubHead">
                        <h1>
                            اتصل بنا
                        </h1>
                        <p>
                            <a href="index.html">الرئيسية</a>
                            <i class="fa-solid fa-angle-left"></i>
                            <a href="products.html">اتصل بنا</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 SubServImg">
                <p>اتصل بنا</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 ContactContentInfo">
                <h1>
                    Let build something
                    awesome together
                </h1>


                <?php 
                if (!empty($_POST["send"])) {
                    $Name = $_POST["Name"];
                    $Mobile = $_POST["Mobile"];
                    $Email = $_POST["Email"];
                    $Subject = $_POST["Subject"];
                    $MessageDetails = $_POST["MessageDetails"];
                    $toEmail = "it@uc.net.sa";


                    $mailHeaders = "Name: " . $Name .
                        "\r\n Mobile: " . $Mobile .
                        "\r\n Email: " . $Email .
                        "\r\n Subject: " . $Subject .
                        "\r\n Message: " . $MessageDetails . "\r\n";

                    // SMTP Configuration
                    $toEmail = "it@uc.net.sa";
                    $subject = "Contact Form Submission";
                    $mailHeaders = "From: sender@example.com" . "\r\n";
                    $mailHeaders .= "Reply-To: $Email" . "\r\n";
                    $mailHeaders .= "Content-Type: text/plain; charset=utf-8" . "\r\n";

                    if (mail($toEmail, $Subject, $mailHeaders)) {
                        $Message = "Thanks, Your Information Has Been Sent Successfully.";
                    }
                }
                ?>

                <form action="" method="post" enctype="multipart/form-data">
                    <input type="text" name="Name" id="" placeholder="Name">
                    <input type="number" name="Mobile" id="" placeholder="Mobile">
                    <input type="email" name="Email" id="" placeholder="Email">
                    <input type="text" name="Subject" id="" placeholder="Subject">

                    <textarea name="MessageDetails" id="" cols="30" rows="6" placeholder="Your Message"></textarea>

                    <button type="submit" value="Send">Send Message</button>

                    <?php if (!empty($Message)) { ?>
                        <div class="SentSuccess">
                            <p> <?php echo "$Message" ?> </p>
                        </div>

                    <?php } ?>
                </form>
            </div>

            <div class="col-12 col-md-6 ContactContentImage">
                <img src="images/ContactImg.png" alt="">
            </div>
        </div>
    </div>

    <div class="CoDetails bgSoftDark">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="CoDetails2Blocks">
                        <i class="fa-solid fa-hotel"></i>
                        <h1>Pay us a visit</h1>
                        <p>
                            Anas Ibn Malek St, Alsahafa Destrict,
                            Riyadh Saudi Arabia.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="CoDetails2Blocks">
                        <i class="fa-solid fa-phone-volume"></i>
                        <h1>Or drop us a line</h1>

                        <p>
                            <span>جوال:</span>
                            <a href="tel:+966000000">966000000</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="WorkWithUs">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 WorkWithUsH1">
                    <h1>Do you have a next level-idea?</h1>
                    <p>Reach out and we can create magic together</p>
                </div>
                <div class="col-12 col-md-6 WorkWithUsLink">
                    <a href="#">WORK WITH US</a>
                </div>
            </div>
        </div>
    </div>



    <div class="container FooterContainer">
        <div class="row">
            <div class="col-12 footerLogo">
                <a href="#">
                    <img src="images/UC Logo-icon.png" alt>
                </a>
            </div>
        </div>
        <div class="row footerLinksContainer">
            <div class="col-7 col-md-4 FooterH1">
                <h1>Resources</h1>
                <ul class="footerUl1">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Blog Post</a>
                    </li>
                </ul>
                <ul class="footerUl1">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Blog Post</a>
                    </li>
                </ul>
            </div>
            <div class="col-5 col-md-4 FooterH1">
                <h1>Utility Pages</h1>
                <ul class="footerUl1">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Blog Post</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-4 StayTouch">
                <h1>LET'S STAY IN TOUCH.</h1>
                <p>Join our newsletter, so that we reach out to you.</p>
                <form action>
                    <input type="text" name id placeholder="Enter Your Email">
                    <button>Start</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 CopySec">
                Copyright © Creative Prospects Group.
            </div>
            <div class="col-12 col-md-6 SocialSec">
                <a href="#" class="Insta">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="Twit">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#" class="Snap">
                    <i class="fa-brands fa-snapchat"></i>
                </a>
                <a href="#" class="Linked">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>