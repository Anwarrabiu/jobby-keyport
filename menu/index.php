<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./menu/styles.css">

    <title></title>  
</head>

<?php 
    
    if(isset($_GET['page'])){
        $id = $_GET['page'];
    }else{
        $id = 1;
    }


?>
<body id=<?php echo $id; ?> >

    <nav class="navbar"> 
        <div class="navbar-container">
            <div class="logo"><a href="/jobby/index.php" id="home" style="text-decoration: none; color: #fff;">Starfield</a></div>
            <div class="menu-toggle" id="menu-toggle">
                &#9776;
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="/jobby/index.php" class="toplink">Home</a></li>
                <li><a class="toplink">Jobs By Category</a>
                    <div class="dropdowns">
                    <ul>
                        <li><a href="index.php" style="cursor: pointer;">All</a></li>
                        <li><a onclick="gotocategorypage('engineering')" style="cursor: pointer;">Engineering</a></li>
                        <li><a onclick="gotocategorypage('IT')" style="cursor: pointer;">IT</a></li>
                    </ul>
                </div>
                </li>
                <li><a href="/jobby/admin/index.php" class="toplink">Admin Page</a></li>
                <li><a href="/jobby/internships/internships.php" class="toplink">Internships</a></li>
                <li><a href="/jobby/scholarships/scholarships.php" class="toplink">Scholarships</a></li>
                <li><a href="#" class="toplink">Updates</a></li>
                <li><a href="#" class="toplink">About Us</a></li>
                <li><a href="#" class="toplink">Contact Us </a></li>
            </ul>
        </div>
    </nav>


    <script type="text/javascript">
        const gotocategorypage = (category)=>{
            window.location.href='?page=1&&cat='+category;
        }
    </script>
 
</body>
</html>
