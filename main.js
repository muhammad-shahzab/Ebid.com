var navLinks = document.getElementById("navLinks");
function showmenu() {
  navLinks.style.display = "flex";
}

function hidemenu() {
  navLinks.style.display = "none";
}
const log=document.getElementById('log');
log.addEventListener('click', function() {
 
  window.location.href = './loginpage/login.php'; 
});

const Reg=document.getElementById('reg');
Reg.addEventListener('click', function() {
 
  window.location.href = './register/registers.php'; 
});

const sln=document.getElementById('Sellnow');
sln.addEventListener('click', function() {
 
  window.location.href = './loginpage/login.php'; 
});