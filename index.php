<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Designer Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* CTA buttons */
.cta-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.btn {
    background-color: #181717;
    color: #fff;
}

.btn span {
    margin-left: 10px;
    transition: margin-left 0.3s;
}

.btn:hover span {
    margin-left: 15px;
}

.btn.secondary {
    background-color: #ed1010;
    color: #fff; /* Text color set to white for secondary button as well */
}

    </style>
</head>
<body>

<?php include 'nav.php'; ?>

<header>
    <div class="container">
    
        <div class="header-content">
            <h1>Websites Done Right</h1>
            <p>I am a web developer from Bengaluru, India, and I currently live in Bengaluru. I enjoy building everything from small business sites to rich interactive web apps. If you are a business seeking a web presence or an employer looking to hire, you can get in touch with me <a href="#">here</a>.</p>
            <div class="cta-buttons">
                <a href="#" class="btn">I need a website <span>&#10145;</span></a>
                <a href="#" class="btn secondary">I'm looking to hire <span>&#10145;</span></a>
            </div>
        </div>
    </div>
</header>

</body>
</html>
