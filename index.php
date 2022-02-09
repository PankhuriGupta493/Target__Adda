<!DOCTYPE html>
<html lang="en">

<head>
    <title>index page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        .mySlides8 {
            display: none;
        }

        .slideshow-container8 {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        .mySlides8 {
            display: none;
        }

        .active8 {
            background-color: #717171;
        }

        .fade8 {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }

        .navbar {
            overflow: hidden;
            background-color: black;
            font-family: Arial;
            cursor: pointer;
        }

        /* Links inside the navbar */
        .navbar a {
            float: left;
            font-size: 20px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            cursor: pointer;
        }

        /* The dropdown container */
        .dropdown {
            float: left;
            overflow: hidden;
            cursor: pointer;
        }

        /* Dropdown button */
        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            /* Important for vertical align on mobile phones */
            margin: 0;
            /* Important for vertical align on mobile phones */
            cursor: pointer;
        }

        /* Add a red background color to navbar links on hover */
        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: blue;
            cursor: pointer;
        }

        /* Dropdown content (hidden by default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* Add a grey background color to dropdown links on hover */
        .dropdown-content a:hover {
            background-color: IndianRed;
            cursor: pointer;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
            cursor: pointer;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: lightgray;
            font-family: Bahnschrift;
            word-spacing: 4px;
        }

        /* Style the header */
        .header {
            font-family: Britannic Bold;
            padding: 2px;
            text-align: center;
            color: black;
            background-color: lightpink;
            background-image: url(logo.png);
            background-size: 250px 130px;
            background-position: left bottom, left top;
            background-repeat: no-repeat, repeat;
        }

        .row {
            word-spacing: 5px;
            font-size: 18px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .marq {
            font-size: 50px;
            background-color: seagreen;
            font-family: Sans-serif;
            font-weight: bold;
            cursor: pointer;
        }

        footer {
            position: fixed;
            bottom: 0;
        }

        @media (max-height:800px) {
            footer {
                position: static;
            }

            header {
                padding-top: 40px;
            }
        }


        .footer-distributed {
            background-color: #2c292f;
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 50px 50px 60px 50px;
            margin-top: 80px;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: inline-block;
            vertical-align: top;
        }

        /* Footer left */

        .footer-distributed .footer-left {
            width: 30%;
        }

        .footer-distributed h3 {
            color: #ffffff;
            font: normal 36px 'Cookie', cursive;
            margin: 0;
        }



        .footer-distributed .footer-left img {
            width: 30%;
        }

        .footer-distributed h3 span {
            color: #e0ac1c;
        }

        /* Footer links */

        .footer-distributed .footer-links {
            color: #ffffff;
            margin: 20px 0 12px;
        }

        .footer-distributed .footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
        }

        .footer-distributed .footer-website-name {
            color: #8f9296;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }

        /* Footer Center */

        .footer-distributed .footer-center {
            width: 35%;
        }


        .footer-distributed .footer-center i {
            background-color: #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }

        .footer-distributed .footer-center i.fa-envelope {
            font-size: 17px;
            line-height: 38px;
        }

        .footer-distributed .footer-center p {
            display: inline-block;
            color: #ffffff;
            vertical-align: middle;
            margin: 0;
        }

        .footer-distributed .footer-center p span {
            display: block;
            font-weight: normal;
            font-size: 14px;
            line-height: 2;
        }

        .footer-distributed .footer-center p a {
            color: #e0ac1c;
            text-decoration: none;
            ;
        }


        /* Footer Right */

        .footer-distributed .footer-right {
            width: 30%;
        }

        .footer-distributed .footer-website-about {
            line-height: 20px;
            color: #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }

        .footer-distributed .footer-website-about span {
            display: block;
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer-distributed .footer-icons {
            margin-top: 25px;
        }

        .footer-distributed .footer-icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color: #33383b;
            border-radius: 2px;

            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;

            margin-right: 3px;
            margin-bottom: 5px;
        }

        /* Here is the code for Responsive Footer */
        /* You can remove below code if you don't want Footer to be responsive */


        @media (max-width: 880px) {

            .footer-distributed .footer-left,
            .footer-distributed .footer-center,
            .footer-distributed .footer-right {
                display: block;
                width: 100%;
                margin-bottom: 40px;
                text-align: center;
            }

            .footer-distributed .footer-center i {
                margin-left: 0;
            }

        }
        .twit{
            height: 35px;
            width: 35px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>TARGET ADDA</h1>
        <h2>UPSC,SSC,Railway,BANK</h2>
    </div>
    <div class="navbar">
        <b> <a href="index.php">Home</a>
            <a href="mcq.php">Study Material</a>
            <a href="previous year.html">Previous Year Question Paper</a>

            <a href="sign in.php">Free Test</a>
            <a href="contactus.php">Contact Us</a>
            <a href="team.php">Team Member</a>

    </div>
	<marquee class="marq" bgcolor="Green" behavior=alternate direction="left" loop="">
        Welcome to Target Adda
    </marquee>
    
    <br>
    <div class="slideshow-container8" style=" border: 2px solid black">

        <div class="mySlides8 fade8">
            <img src="h1.png" style="width:100%" height="400px">
        </div>
        <div class="mySlides8 fade8">
            <img src="h2.jpg" style="width:100%" height="400px">
        </div>
        <div class="mySlides8 fade8">
            <img src="h3.jpg" style="width:100%" height="400px">
        </div>
        <div class="mySlides8 fade8">
            <img src="h4.png" style="width:100%" height="400px">
        </div>

    </div>
    <br>
    <div style="text-align:center">
        <span class="dot8"></span>
        <span class="dot8"></span>
        <span class="dot8"></span>
        <span class="dot8"></span>
    </div>
    </div>
    <div class="row">
        <div class="column">
            <h2><u>ABOUT US</u></h2>
            <p>On-line competitive exam test is very much important for any Educational Organizations to prepare their
                students for any Competitive exams by saving the time. It will take check the test and generate marks as
                well. It will also help the Organization to test the students and develop their Knowledge.
                <br><br>Realizing that the process of social development has to take into account the needs, interests
                and viewpoints of both men & women alike; and looking at the situation of women, gender inequalities and
                inequities that existed, special gender specific programmes were formulated and organized to mainstream
                women into economic activities.
                <br><br>The purpose of online Competitive exams using website is to take online test by students at any
                time . when he clicks the end test button the result will immediately display over the screen. The main
                aim of online Competitive exams using Website and SQL Server give the result very fast. The students can
                give test according to their convenience and time from anywhere and there is no need of using extra
                thing like paper, pen etc.
                <br><br>Online Competitive exams is an online based exams where examination are given online. Either
                through the internet or intranet using computer System.
                The main goal of this online exams is to effectively evaluate the student thoroughly through totally
                automated system that not only reduce the required time but also obtain fast and accurate results. The
                user can Crack exam without going to the any Coaching Centre. Also the website will provide a good
                Content about Any Competitive Exams.
                <br><br>In an online exams examine get their user id and password. In an online examination system
                examine get their user id and password .This id is already saved in the examination server .when examine
                login to the server he/she get his/her profile already register .All answer given by examine are saved
                into their server with his/her profile information .Php is a web base language so we can create an
                online Preparation for Competitive exams in php.
            </p>
        </div>
    </div>

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3><span>Preparation For Competitive Exam</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">Blog</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
            </p>

            <p class="footer-website-name">© 2022 Target Adda
                <br><br>UPSC,SSC,Railway,BANK
            </p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Noida, Sector- 1, Block - D- 1, 201301</span>
                    Uttar Pradesh, India</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 9526168679</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@Targetadda">support@Target Adda.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-website-about">
                <span>About the Website</span>
                We offer best Preparation facilities to our Students.Please Contact us for more Informations.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook">
                    <img class="twit" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAADCCAMAAAB6zFdcAAAA1VBMVEU8WZ////89WKD///3///kmS5rq6fAyWJ9abqgwUJn6/v2QoMTEyt8+V6I8WZw+WJwwU5ng6O8uR5Pf6PPI0d3///c8Wpr//P/DyeT5//cuUJs/WJgmSJwjSZRCXaBFYZ0wVZcoTpFNbJ51mbOzudDi5fX09P7s8frY2u2uvtunttGTort5j8Rbd718jLbw7+pdc6Wvvco7VKVxg6h9o8DO2vGKmcCarMukp85Taq02XJVmhq+ap7ujsdDC0OJyfLQ1UaZ6hrOPnMhTZZ2xw+oQP5jBze6c/Si7AAAEJElEQVR4nO3df1PbNhzHcVuySazEjhOwDcZuoAv5Ae2gaRdI162MtX3+D6n+tn90h+VcRkSErM/7ru1dz9xJr1OsRJDgOAghhBBCCCH0hGLdA6i1/xHBACGE0I9e+u33pY9vH8EAIYQQQgghhKwpdKIwZI+q/v/n33aUphEbnKadTieqqv75j4juse2rMM+LoowHr16Nx+N0EA3Ozs6DksqZHccEQRm8/m3Sv5hNs6ngQkyn09ns4GI+7y8ur968bftKYGkcj38/vnabG7Z9IYTFzbuZ4BsIeMsNWNk9zrjHLTWI0qgTjCeul1VtIGizQcqWo/eHmyZvgcFydCe8jSug5QZRFBYLV2SJtQbMSQejyRaPgxYbpM6yuBTept2g/Qas/OAmm7eDthsMghux8TmBBQZh8McWN8N2G5Q9brcBc8KPs2S7e0FbDZYd/3JrgJYahOx0ZruB46+23RJaa8DOj6w3yF9nwnYDv+fCoM+bDLiXZfVXEcPT1h2qssOs8X5QvZYWF/3L29ur3q8eWmfAuqLRgPPh3XpUFHkQxHFMf6ryIP2oe9CKC/4Uzc8RJ8v7Myekfn3HLWSDSPegFZd/ck+kCCdZ8pfftlUvL59wuYFI5oUdBI7/tyc3yPjne92D21P+3JMfonkXo1T34PaUf+BxT2aQLAJ7DBL5MRpf5W27/zdFBtJ14P6z1D22feUfNBC43Y4l2wIMHBhQMIABBQMYUDCAAQUDGFAwgAFFBvJzZZsMml4722Vg0zoIauVB0bgO1nle/4Iq3bPYoYidrXr1Vtfcla4D8enhQXJ9b+UwY8/YIhYPvaSefFNw3cRzueRyb8aMNjgUkpoMeCUgu3weOEYbcElNBp5whez6fskGuufy1Migab7/p7tS90yeniqDVa57Jk9PlcF7gzdHJQbVjbJr8DMnJQYeFwYvAzUGJ+6Br3siO6RmHWTzke6J7JCie+LC4K1RlcGtwVujKoMr6w24+1b3PHZJjYFY657HLqkxuDb4GZIqg2FgMoIagyOTt0ZF+8LEN/bwwFFlcHdv7CGSo+qx8CYw2sBRYCA+G25wPtzd4F9zD5V/FC/6kpoOlpP+8XHt4i+RyVsjVfr1vjZ9HJRYF0Xt6tx0gp/vynlU0WhwE9W/QPcMFPT40wCr/Gv5t9pctyu5WvcEnif8DAYMKBjAgIIBDCgYwICCAQwoGMCAggEMKBjAgIIBDCgYwICCAQwoGMCAggEMKBjAgIIBDCgYwICCAQwoGMCAggEMKBjAgIIBDCgYwICCAQwoGMCAggEMKMMMnuX3pCk0MPZTgxQaGPu77Ax7LDxLMIABBQMyaHyf6ws2iJXef/P+kbxva2dbA7Uj0lBQjqSZ/xb37UurdI9Bd/Ru9oEk3eNCCCGEEEIIIYQQQmibvgNLu15CYiXoOgAAAABJRU5ErkJggg=="/>
                </i></a>
                <a href="#"><i class="fa fa-twitter">
                <img class="twit" src="data:image/png;base64,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" />
                </i></a>
                <a href="#"><i class="fa fa-instagram">
                <img class="twit" src="data:image/jpeg;base64,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"/>
                </i></a>
                <a href="#"><i class="fa fa-linkedin">
                <img class="twit" src="data:image/png;base64,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"/>
                </i></a>
                <a href="#"><i class="fa fa-youtube">
                <img class="twit" src="data:image/png;base64,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"/>
                </i></a>
            </div>
        </div>
    </footer>


    <script>
        var slideIndex = 0;
        showSlides8();
        function showSlides8() {
            var i;
            var slides = document.getElementsByClassName("mySlides8");
            var dots = document.getElementsByClassName("dot8");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active8", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides8, 3000); // Change image every 3 seconds
        }
    </script>
</body>

</html>