<!DOCTYPE html>
<html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
  <meta name="viewport" width="device-width", initial-scale=1.0>
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

.container{
      width: 100%;
      margin: auto;
      overflow: hidden;
    }
  
    /* contact form css */


    #contact-section{
      background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.5)), url(lappy.jpg);
      background-size:cover;
      background-position: center;
      height: 100%;
      width: 100% ;
    
     /* padding-bottom: 2%;*/
    }

    #contact-section .container h1{
      text-align: center;
       text-decoration: underline;
     
        /* text-decoration-color:red; */
     
        text-underline-position: under;
        color: rgb(238, 235, 235);
        letter-spacing: 2px;
        
    }

    

    #contact-section .container p{
      text-align: center; 
      width: 100%; 
      margin-left: auto;
       margin-right: auto; 
       padding-bottom: 3%;
       color: #fff;
       letter-spacing:3px;
	   font-size: 20px;
    }

    .contact-form i.fa{
    
      /* color: red; */
      /* color: #fff; */
    
      font-size: 22px; 
      padding: 3%;
      background-color: none;
      border-radius: 80%;
      margin: 2%;
    
      /* border: 2px solid #fff; */
    
      cursor: pointer;
      border:2px solid rgb(190, 190, 190);
      color: rgb(190, 190, 190);
    }
    
    .contact-form i.fa:hover{
      cursor: pointer;
      border:2px solid white;
      color: white;
    }
     
      .contact-form{
        display: grid;
        grid-template-columns: auto auto;
         }
      
      .form-info{
        font-size: 16px;
        font-style: italic;
        color: white;
        letter-spacing: 2px;
      }
      input{
        padding: 10px;
        margin:10px;
        width: 70%;
        background-color:rgba(15, 13, 13, 20);
        color: white;
        border: none;
        outline:none;
      }

      input::placeholder{
        color: white;
      }
    
       textarea{
      padding: 10px;
      margin: 10px;     
      width: 70%;
      background-color:rgba(15, 13, 13, 20);
      color: white;
      border: none;
      outline:none;
     }
     textarea::placeholder{
       color: white;
     }
     
      
    
      .submit{
      width: 40%;
      background: green;
      padding: 4px;
      outline: none;
       /* border: 1px solid #fff;
      color: #fff; */
      font-size: 13px;
      font-weight: bold;
      letter-spacing: 2px;
      height: 33px;
      text-align: center;
      cursor: pointer;
      letter-spacing: 2px;
      margin-left: 3%;
      border:2px solid rgb(190, 190, 190);
      color: rgb(190, 190, 190);
     }

     .submit:hover{
           border: 1px solid #fff;
      color: #fff;
      cursor: pointer;
     }

        /* media queries */
    @media (max-width: 768px){

 #contact-section .contact-form{
        display: block;
        width: 100%;
        text-align: center;
      }
      #contact-section .submit{

        width: 60%;
      }

  }

   </style>
    <!-- Add font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Contact Us</title>
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
	<!-- contact section -->
         <section id="contact-section">
           <div class="container">
           	 <h1>Contact Us</h1>
              <p>Contact Us For More Inquiries..</p>
             <div class="contact-form">

                  <!-- First grid -->
               <div>
                 <i class="fa fa-map-marker"></i><span class="form-info">   NSTI Noida D-1</span><br><br>
                 <i class="fa fa-phone" > </i><span class="form-info">  +91 7412816722</span><br><br>
                 <i class="fa fa-envelope"></i><span class="form-info">  pankhuri@gmail.com</span>
               </div>
               
                   <!-- second grid -->
           <div>        
             <form action="process.php" method="post">
               <input type="text"  name="name"  placeholder="First Name" required>
               <input type="text"  name="Lname"  placeholder="Last Name"><br>
               <input type="Email" name="mail"  placeholder="Email" required><br>
               <input type="text"  name="subject"  placeholder="Subject of this message"><br>
               <textarea name="msg"placeholder="Message" rows="5" required></textarea><br>
               <button class="submit" >Send Message</button> 
             </form>   
               </div>
             </div>
           </div>
         </section>

         
     </body>
     </html>