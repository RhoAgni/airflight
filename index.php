<!DOCTYPE html>
<?php
session_start();
?>
<html lang="it" dir="ltr">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- personale -->
    <link rel="stylesheet" href="style.css">
    <!-- W3school -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>
    table {
      border-collapse: collapse;
      width: 80%;
      margin: auto;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
      background-color: #4CAF50;
      color: white;
    }
    caption {
      display: table-caption;
      text-align: center;
    }
    /* Set a style for all buttons */

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;

  }

  button:hover {
    opacity: 0.8;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }
    /* Full-width input fields */
    input[type=password], input[type=email] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }

    input[type=password]:focus, input[type=email]:focus {
      background-color: #ddd;
      outline: none;
    }
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    img.avatar {
      width: 30%;
    }
    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }
    .alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    border-collapse: collapse;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;
    text-align:center;
  }


.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)}
      to {-webkit-transform: scale(1)}
    }

    @keyframes animatezoom {
      from {transform: scale(0)}
      to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
    }
  </style>
  <body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
      <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="#home" class="w3-bar-item w3-button"><b>Air</b>Flight</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
          <a class="w3-bar-item w3-button">Info voli</a>
          <a class="w3-bar-item w3-button">Aiuto</a>
          <?php
          include "config.php";
          // Check user login or not
          if(!isset($_SESSION['email'])){
            echo'<a class="w3-bar-item w3-button" onclick="modal()">Accedi</a>';
          }
          else {
            echo'<a href="logout.php" class="w3-bar-item w3-button">Logout</a>';
          }

          ?>

        </div>
      </div>
    </div>
    <div id="id01" class="modal">
      <form class="modal-content animate" action="verifica.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="Airflight.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
          <label for="uname"><b>Email</b></label>
          <input type="email" placeholder="Inserisci email" name="email" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Inserisci Password" name="psw" required>

          <input type="submit" class="registerbtn" value="Submit" name="l_submit" id="l_submit" />
        </div>

        <div class="container w3-center">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>
    <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
      <img class="w3-image" src="landscape.jpg" width="1500" height="800">
      <div class="w3-display-middle w3-margin-top w3-center">
        <form action="" name="prenotazione" onsubmit="showHint()">
          <div class="w3-container w3-white w3-left-align">
            <h1>Prenota</h1>
            <p>Riempi i campi per fare una prenotazione.</p>
            <hr>

            <input type="checkbox" onclick="myFunction()" id="ritorno" value="ritorno">
            <label for="ritorno"> Solo andata</label><br><br>


            <label for="partenza"><b>Da:</b></label>
            <input type="text" placeholder="Aeroporto di partenza" id="partenza" required>

            <label for="arrivo"><b>A:</b></label>
            <input type="text" placeholder="Aeroporto d'arrivo" id="arrivo" required>

            <label for="data_partenza"><b>Data di partenza</b></label>
            <input type="date" id="data_partenza" required>

            <label id="data_ritorno2"><b>Data di ritorno</b></label>
            <input type="date" id="data_ritorno">


            <label><b>Posti</b></label>
            <div id="seats" style="float:right">
              <button id="meno" type="button" class="math" onclick="minus()">
                <span class="glyphicon glyphicon-minus"></span>
              </button>
              <p id="posti" style="display: inline;">0</p>
              <button id="piu" type="button" class="math" onclick="plus()">
                <span class="glyphicon glyphicon-plus"></span>
              </button>
            </div>
            <hr>

            <button type="button" class="registerbtn" onclick="showHint()">Mostra voli</button>
          </div>
        </form>
      </div>
    </header>
    </div>
          <div id="txtHint"></div><br>
    <!-- Page content -->
    <div class="w3-content w3-padding" style="max-width:1564px">


    <!-- Project Section -->
    <div class="w3-container w3-padding-32" id="projects">
      <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">I nostri consigli</h3>
    </div>

    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Emirati Arabi Uniti</div>
          <a href="#ritorno">
          <img src="emirati.jpg" alt="Emirati Arabi Uniti" onclick="change(this.alt)" style="width:100%; height:250px"">
          </a>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Giappone</div>
          <a href="#ritorno">
          <img src="giappone.jpg" alt="Giappone" onclick="change(this.alt)" style="width:100%; height:250px"">
          </a>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Russia</div>
          <a href="#ritorno">
          <img src="russia.jpg" alt="Russia" onclick="change(this.alt)" style="width:100%; height:250px"">
          </a>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Francia</div>
          <a href="#ritorno">
          <img src="francia.jpg" alt="Francia" onclick="change(this.alt)" style="width:100%; height:250px"">
          </a>
        </div>
      </div>
    </div>

    <div class="w3-row-padding">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Stati Uniti d'America</div>
          <a href="#ritorno">
          <img src="stati_uniti.jpg" alt="Stati Uniti" onclick="change(this.alt)" style="width:99%; height:250px"">
          </a>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Islanda</div>
          <a href="#ritorno">
          <img src="islanda.jpg" alt="Islanda" onclick="change(this.alt)" style="width:99%; height:250px"">
          </a>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Norvegia</div>
          <a href="#ritorno">
          <img src="norvegia.jpg" alt="Norvegia" onclick="change(this.alt)" style="width:99%; height:250px"">
          </a>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-display-container">
          <div class="w3-display-topleft w3-black w3-padding">Hawaii</div>
          <a href="#ritorno">
          <img src="hawaii.jpg" alt="Honolulu" onclick="change(this.alt)" style="width:99%; height:250px"">
          </a>
        </div>
      </div>
    </div>

    <script>
    function showHint() {
      var xhttp;
      var data_ritorno = document.getElementById("data_ritorno").value;
      var arrivo = document.getElementById("arrivo").value;

      var data_partenza = document.getElementById("data_partenza").value;
      var partenza = document.getElementById("partenza").value;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      };
      var checkBox = document.getElementById("ritorno");
      if (checkBox.checked == true){
        xhttp.open("GET", "ricerca.php?partenza="+partenza +"&data_partenza="+data_partenza +"&arrivo="+arrivo +"&data_ritorno=1", true);
    }
      else{
        xhttp.open("GET", "ricerca.php?partenza="+partenza +"&data_partenza="+data_partenza +"&arrivo="+arrivo +"&data_ritorno="+data_ritorno, true);
      }

      xhttp.send();
    }
    </script>


      <script>
      function change(consiglio){
        document.getElementById("arrivo").value = consiglio;
      }

      function myFunction() {
        var checkBox = document.getElementById("ritorno");
        if (checkBox.checked == true){
          document.getElementById("data_ritorno").style.visibility = "hidden";
          document.getElementById("data_ritorno2").style.visibility = "hidden";
      }
        else{
          document.getElementById("data_ritorno").style.visibility = "visible";
          document.getElementById("data_ritorno2").style.visibility = "visible";
        }
      }
      function plus(){
        var posti = document.getElementById("posti").innerHTML;
        if(posti!=40){
          var y = 1;
          var x = +posti + y;
          document.getElementById("posti").innerHTML = x;
          document.getElementById("meno").style.cursor = "pointer";
          document.getElementById("piu").style.cursor = "pointer";
        }
        else {
            document.getElementById("piu").style.cursor = "not-allowed";
        }
      }
      function minus(){
        var posti = document.getElementById("posti").innerHTML;
        if(posti != 0){
          var y = 1;
          var x = +posti - y;
          document.getElementById("posti").innerHTML = x;
          document.getElementById("meno").style.cursor = "pointer";
          document.getElementById("piu").style.cursor = "pointer";
        }
        else {
          document.getElementById("meno").style.cursor = "not-allowed";
        }
      }
      function modal(){
      // Get the modal
      document.getElementById('id01').style.display='block'
      var modal = document.getElementById('id01');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
    }
    </script>
  </body>
</html>
