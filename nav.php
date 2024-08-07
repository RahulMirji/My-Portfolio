<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Button</title>
    <link rel="stylesheet" href="index.php">
    <style>
        /* Navigation styles */
nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 1000;
}

.logo img {
    max-height: 50px;
    border-radius: 2000px;
}
.logo h1 {
    text-align: right;
}


.nav-links {
    list-style: none;
    display: flex;
}

.nav-links li {
    margin:  20px;
}

.nav-links a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    position: relative;
}

.nav-links a:hover::after {
    width: 100%;
}

.nav-links a::after {
    content: '';
    width: 0;
    height: 2px;
    background-color: #ff004c;
    position: absolute;
    left: 0;
    bottom: -5px;
    transition: width 0.3s;
}
    </style>
</head>
<body>
<!-- nav.php -->
<div class="container">
    <nav>
        <div class="logo">
            <img src="Images/logo.png" alt="Logo">
        </div>
        <div>
            <h1>Rahul Mirji</h1>
            <h5>WEB DEVELOPER & BLOGER</h5>
            <h5>Let's Connect </h5>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="https://github.com/RahulMirji">GitHub</a></li>
            <li><a href="services.php">Services</a></li>
        </ul>
    </nav>    
</div>

</body>
</html>