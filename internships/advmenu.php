<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
<link rel="stylesheet" href="stayles.css">

<style>

    /* Container for navbar */
    .navbar {
      position: relative;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      float: right;
    }

    /* HAMBURGER MENU */

    .menu-toggle{
      display:none;
      flex-direction:column;
      cursor:pointer;
      gap:6px;
      padding:8px;
      z-index:2;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }

    .menu-toggle span{
      width:30px;
      height:3px;
      background:black;
      display:block;
      transition:0.4s;
    }

    /* Transform to X */

    .menu-toggle.active span:nth-child(1){
      transform:rotate(45deg) translate(5px,5px);
    }

    .menu-toggle.active span:nth-child(2){
      opacity:0;
    }

    .menu-toggle.active span:nth-child(3){
      transform:rotate(-45deg) translate(7px,-6px);
    }

    /* Dropdown */

    .dropdown-content {
      display:flex;
      position:relative;
      background-color:#f9f9f9;
      min-width:160px;
      box-shadow:0px 8px 16px rgba(0,0,0,0.2);
      z-index:1;
    }

    .dropdown-content a{
      color:black;
      padding:12px 16px;
      text-decoration:none;
      display:block;
    }

    .dropdown-content a:hover{
      background-color:#f1f1f1;
    }

    /* Submenu */

    .dropdown-submenu{
      position:relative;
    }

    .dropdown-submenu-content{
      display:none;
      position:absolute;
      left:10px;
      top:40px;
      background-color:#f9f9f9;
      min-width:160px;
      box-shadow:0px 8px 16px rgba(0,0,0,0.2);
      z-index:1;
      font-size:12px;
    }

    .dropdown-submenu:hover .dropdown-submenu-content{
      display:block;
    }

    .dropdown-submenu-content.show{
      display:block;
    }

    #link{
      cursor:pointer;
    }
 
    /* RESPONSIVE */

    @media screen and (max-width:1056px){

    .navbar{
    flex-direction:column;
    align-items:flex-start;
    }

    .menu-toggle{
    display:flex;
    }

    .dropdown-content{
    position:fixed;
    top:4rem;
    left:-100%;
    transition:left 0.6s ease;
    width:220px;
    display:flex;
    flex-direction:column;
    }

    .dropdown-content a{
    padding:10px;
    text-align:left;
    }

    .dropdown-submenu-content{
    position:fixed;
    left:5rem;
    top:10rem;
    }

    .dropdown-content.show{
    left:0;
    }

    }

</style>
</head>

<?php 
  if(isset($_GET['page'])){
   $id = $_GET['page'];
  }else{
    $id = 1;
  }
?>

<body id="<?php echo $id; ?>">

<a href="/jobby/index" class="logo" id="home"
  style="text-decoration:none;color:white;background-color:#2b3e33;padding:8px;border-radius:11%;font-size:1.6rem;box-shadow:0px 8px 16px rgba(0,0,0,0.2);">
    Starfield
</a>

<div class="navbar">  

<!-- UPDATED MENU ICON -->

<div class="menu-toggle" id="menu-toggle">
   <span></span>
  <span></span>
  <span></span>
  
</div>

<div class="dropdown-content" id="dropdownMenu">

    <a href="/jobby/index" class="link">Home</a>
    <a href="../blog" class="link">Career Blog</a>
  <div class="dropdown-submenu">
    <a id="link"><i>By Category</i></a>

    <div class="dropdown-submenu-content" id="submenuu">

      <a href="../index">All</a>
      <a onclick="gotocategorypage('Engineering')">Engineering</a>
      <a onclick="gotocategorypage('IT')">IT</a>
      <a onclick="gotocategorypage('Science')">Science</a>
      <a onclick="gotocategorypage('Administrative')">Administrative</a>
      <a onclick="gotocategorypage('Customer Service')">Customer Service</a>
      <a onclick="gotocategorypage('Education')">Education</a>
      <a onclick="gotocategorypage('Legal')">Legal</a>
      <a onclick="gotocategorypage('Health')">Health</a>
      <a onclick="gotocategorypage('Marketing')">Marketing</a>
      <a onclick="gotocategorypage('Finance')">Finance</a>
      <a onclick="gotocategorypage('Agriculture')">Agriculture</a>
      <a onclick="gotocategorypage('Operations')">Operations</a>

</div>
</div>
  <a background='blue' href="../remote" class="link">Remote Works</a>
  <a href="/jobby/internships/internships" class="link">Internships</a>
  <a href="/jobby/scholarships/scholarships" class="link">Scholarships</a>
  <a href="../about_us" class="link">About Us</a>
  <a href="../contact_us" class="link">Contact Us</a>

  </div>
</div>

<script>

const gotocategorypage = (category) => {
  window.location.href='?page=1&&cat='+category;
}

document.addEventListener('DOMContentLoaded', ()=>{

  var menu = document.getElementById('dropdownMenu');
  var toggleMenu = document.getElementById('menu-toggle');
  var link = document.getElementById('link');
  var submenu = document.getElementById('submenuu');

toggleMenu.addEventListener('click', (e)=>{
    e.stopPropagation();
    menu.classList.toggle('show');
    toggleMenu.classList.toggle('active');
});

link.addEventListener('click', (e)=>{
    e.stopPropagation();
    submenu.classList.toggle('show');
});

/* CLOSE MENU WHEN CLICKING OUTSIDE */

document.addEventListener('click', function(event){

    if(!menu.contains(event.target) && !toggleMenu.contains(event.target)){
        menu.classList.remove('show');
        toggleMenu.classList.remove('active');
        submenu.classList.remove('show');
    }

});

});

</script>

</body>
</html>