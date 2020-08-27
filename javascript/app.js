const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".navLinks li");
const right = document.querySelector(".right");


hamburger.addEventListener("click",() => {
  navLinks.classList.toggle("open");
  right.classList.toggle("open");

});

function editemail(){
  var x=0;
  modal(x);
}

function editdate(){
  var x=1;
  modal(x);
}

function editcountry(){
  var x=2;
  modal(x);
}

function editlanguage(){
  var x=3;
  modal(x);
}

function editinfo(){
  var x=4;
  modal(x);
}

function modal(x){
// Get the modal
if (x!==4) {
  document.getElementById('editmodal').style.display='block';
  var modal = document.getElementById('editmodal');
  switch (x) {
    case 0:
    document.getElementById("labelml").style.display="block";
    document.getElementsByName("email")[0].style.display="block";
      break;
    case 1:
    document.getElementById("labelbday").style.display="block";
    document.getElementsByName("bday")[0].style.display="block";
      break;
    case 2:
    document.getElementById("labelcountry").style.display="block";
    document.getElementsByName("country")[0].style.display="block";
      break;
    case 3:
    document.getElementById("labellanguage").style.display="block";
    document.getElementsByName("language")[0].style.display="block";
    }
  }
  else {
    document.getElementById("infomodal").style.display="block";
    document.getElementById("labelnm").style.display="block";
    document.getElementById("labelsnm").style.display="block";
    document.getElementById("labeladdr").style.display="block";
    document.getElementsByName("name")[0].style.display="block";
    document.getElementsByName("lname")[0].style.display="block";
    document.getElementsByName("address")[0].style.display="block";
  }
}

function cancel(){
    document.getElementById("labelml").style.display="none";
    document.getElementsByName("email")[0].style.display="none";
    document.getElementById("labelbday").style.display="none";
    document.getElementsByName("bday")[0].style.display="none";
    document.getElementById("labelcountry").style.display="none";
    document.getElementsByName("country")[0].style.display="none";
    document.getElementById("labellanguage").style.display="none";
    document.getElementsByName("language")[0].style.display="none";
    document.getElementById('editmodal').style.display='none';
    document.getElementById("infomodal").style.display='none';
    }
    /* When the user clicks on the button,
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").style.display="block";
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
