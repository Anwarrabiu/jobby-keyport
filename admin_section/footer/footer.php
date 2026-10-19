<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title></title>
    <style>
        footer {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #333;
        }
        footer a {
            color: #007bff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        .footer-links {
            margin-bottom: 10px;
        }
        .footer-links a {
            margin: 0 10px;
        }
        .social-media a {
            margin: 0 10px;
        }

        #contact-info, #legal, #newsletter, .social-media{
            display: none;
        }
    </style>
</head>
<body>

<footer>
     <p>&copy;  <?php echo date("Y"); ?>  <a href="#">Starfield</a>. All Rights Reserved.</p>


   

    <div class="social-media">
        <a href="#">Facebook</a>|
        <a href="#">Twitter</a>|
        <a href="#">LinkedIn</a>|
        <a href="#">Instagram</a>
    </div>

    <div id="contact-info">
        <p>Email: <a href="mailto:info@yourcompany.com">info@yourcompany.com</a></p>
        <p>Phone: (123) 456-7890</p>
        <p>Address: 1234 Your Street, Your City, Your State, 12345</p>
    </div>

    <div id="legal">
        <a href="#">Privacy Policy</a>|
        <a href="#">Terms of Service</a>
    </div>

    <div id="newsletter">
        <p><a href="#">Subscribe to our newsletter</a></p>
    </div>
</footer>

</body>
</html>
