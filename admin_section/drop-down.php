<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Menu with Animations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

    #dropdown-content {
        display: flex;
        position: fixed;
        top: -60rem;
        left: 250px; /* Hide off-screen initially */
        background-color: grey;
        width: 220px;
        height: 70%;
        flex-direction: column;
        transition: top 0.6s ease;
        padding-top: 2rem;
        opacity: 0.9;
    }

    #dropdown-content.active {
        top: 0; /* Slide in when active */
    }
    </style>
</head>
<body>
    <div class="id">
        <button id="dropbtn">Dropdown</button>
        <div id="dropdown-content">
            <a href="#">Option 1</a>
            <a href="#">Option 2</a>
            <a href="#">Option 3</a>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">
    



 document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('dropbtn');
    const navLinks = document.getElementById('dropdown-content');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    document.getElementById('dropdown').addEventListener('click', ()=>{
        navLinks.classList.remove('active');
        //navLinks.style.display='none';
    });

    document.getElementById('dropdown').addEventListener('touchstart', ()=>{
        navLinks.classList.remove('active');
        //navLinks.style.display='none';
    });
});



</script>
