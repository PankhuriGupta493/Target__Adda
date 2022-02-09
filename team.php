<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 10px;
  padding: 0 8px;

}

@media screen and (max-width: 650px) {
  .column {
    width: 80%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

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
            <a href="Previous Year.html">Previous Year Question Paper</a>

            <a href="sign in.php">Free Test</a>
            <a href="contactus.php">Contact Us</a>
            <a href="team.php">Team Member</a>

    </div>
<br>

<h2 style="text-align:center" > Project Team memeber </h2>
<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="rakhi.jpg" alt="rakhi" style="width:65%">
      <div class="container">
        <h2 style="font-weight: bold;">Rakhi</h2>
  
        <p>rakhitandon20011998@gmail.com</p>
        <p>
          <button class="button"><a href="https://www.linkedin.com/in/rakhi-%F0%9F%98%8A-a93028184"> Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="neetu.jpg" alt="neetu" style="width:70%">
      <div class="container">
        <h2 style="font-weight: bold;">Neetu</h2>
        
        <p>neetustar991@gmail.com</p>
        <p><button class="button">
          <a href="https://www.linkedin.com/in/neetu-singh-182605150">
        Contact</a></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="pankhuri.jpg" alt="pankhuri" style="width:70%">
      <div class="container">
        <h2 style="font-weight: bold;">Pankhuri Gupta</h2>
       
        <p>pankhuriindian@gmail.com</p>
        <p><button class="button"><a href="https://www.linkedin.com/in/pankhuri-gupta-9baa4a1a5">
        Contact</a></button></p>
      </div>
    </div>
  </div>

<div class="column">
    <div class="card">
      <img src="sujata.jpg" alt="sujata" style="width:58%">
      <div class="container">
        <h2 style="font-weight: bold;">Sujata Devi</h2>
       
        <p>sairamsujata@gmail.com</p>
        <p><button class="button"><a href="https://www.linkedin.com/in/sujata-devi-5bba521a5">
        Contact</a></button></p>
      </div>
    </div>
  </div>


</body>
</html>
