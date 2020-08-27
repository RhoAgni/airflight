<!DOCTYPE html>
<?php
session_start();
include "config.php";
if(!isset($_SESSION['email'])){
  //header('Location: index.php');
  echo "You must log in first";
  exit();
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
    <nav>
      <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <ul class="nav-links left">
        <li><a href="index.php"><strong>Air</strong>Flight</a></li>
        <li><a href="#">Info flights</a></li>
      </ul>
      <ul class="nav-links right">
        <li><a href="#"><?php echo $_SESSION['user']?></a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
    <script src="javascript/app.js"></script>
    <div class="container">
      <div class="cover">
        <button id="uploadbtn" type="button" name="button">Upload Cover</button>
      </div>
      <div class="pic">
        <div class="photo"></div>
        <ul class="edit">
          <li><h6>Change</h6></li>
          <li><h6 onclick="editinfo()">Edit</h6></li>
        </ul>
      </div>
      <div class="info">
        <h1><?php echo $_SESSION['user']?></h1><h1><?php echo $_SESSION['cognome']?></h1>
        <h4><?php echo $_SESSION['address']?></h4>
      </div>
      <ul class="sortable">
        <li class="item dropbtn"><h3 onclick="myFunction()">Email</h3><i class="fa fa-caret-down"></i></li>
        <div class="dropdown-content" id="myDropdown">
          <li class="item"><p><?php echo $_SESSION['email']?></p></li>
          <li class="item"><p class="interactive" onclick="editemail()">Edit</p></li>
        </div>
        <li class="hr"><hr></li>
        <li class="item dropbtn"><h3>Birth day</h3><i class="fa fa-caret-down"></i></li>
        <div class="dropdown-content" >
          <li class="item"><p><?php echo $_SESSION['data_nascita']?></p></li>
          <li class="item"><p class="interactive" onclick="editdate()">Edit</p></li>
        </div>
        <li class="hr"><hr></li>
        <li class="item dropbtn"><h3>Country</h3><i class="fa fa-caret-down"></i></li>
        <div class="dropdown-content" >
          <li class="item"><p><?php echo $_SESSION['Italy ;)']?></p></li>
          <li class="item"><p class="interactive" onclick="editcountry()">Edit</p></li>
        </div>
        <li class="hr"><hr></li>
        <li class="item dropbtn"><h3>Language</h3><i class="fa fa-caret-down"></i></li>
        <div class="dropdown-content" >
          <li class="item"><p><?php echo $_SESSION['user']?></p></li>
          <li class="item"><p class="interactive" onclick="editlanguage()">Edit</p></li>
        </div>
        <li class="hr"><hr></li>
      </ul>
     <div class="modal" id="editmodal">
        <form class="modal-content animate" action="" method="post">
          <div class="container">
            <h1 style="text-align: center; margin-bottom:20px">Are you Sure?</h1>
            <p style="font-size:25px">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="modal-input">
              <label id="labelml">Email</label>
              <input type="email" placeholder="New email" name="email">
              <label id="labelbday">Birth</label>
              <input type="date" placeholder="Birth day" name="bday">
              <label id="labelcountry">Country</label>
              <input type="text" placeholder="Country" name="country">
              <label id="labellanguage">Language</label>
              <input type="Text" placeholder="Language" name="language">
            </div>
          </div>
          <div class="modal-footer">
            <button id="cancelbtn" type="button" onclick="cancel()" class="cancelbtn">Cancel</button>
            <input id="okbtn" type="submit" class="registerbtn" value="OK" name="l_submit" id="e_submit" />
          </div>
        </form>
      </div>
   <div class="modal" id="infomodal">
        <form class="modal-content animate" action="" method="post">
          <div class="container">
            <h1 style="text-align: center; margin-bottom:20px">Are you Sure?</h1>
            <p style="font-size:25px">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <div class="form-info">
              <label id="labelnm">Name</label>
              <input type="text" placeholder="Your name" name="name">
              <label id="labelsnm">Surname</label>
              <input type="text" placeholder="Last name" name="lname">
              <label id="labeladdr">Address</label>
              <input type="text" placeholder="Your location" name="address">
            </div>
          </div>
          <div class="modal-footer">
            <button id="cancelbtn" type="button" onclick="cancel()" class="cancelbtn">Cancel</button>
            <input id="okbtn" type="submit" class="registerbtn" value="OK" name="l_submit" id="e_submit" />
          </div>
        </form>
      </div>
    </div>
    <script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>
  </body>
</html>
