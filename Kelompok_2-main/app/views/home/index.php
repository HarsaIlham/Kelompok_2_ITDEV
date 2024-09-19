<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goodsy | Welcome</title>
    <link rel="stylesheet" href="http://localhost/KELOMPOK_2-main/public/css/home/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php
    require_once __DIR__ . "/../layouts/navbar.php"
    ?>
    <section id="about">
        <h2>about goodsy</h2>
        <p class="fade-in">Goodsy is an online shopping platform dedicated to offering a wide range of high-quality products to meet your everyday needs. With the tagline “Take the Goods, Own the Best,” Goodsy is committed to delivering a seamless and enjoyable shopping experience. Our user-friendly interface makes it easy to navigate through an extensive catalog of products, from electronics to fashion and household items. Enjoy secure transactions with flexible payment options and fast, reliable delivery. At Goodsy, we ensure top-notch quality, competitive prices, and exceptional customer service to be your go-to destination for all your shopping needs.</p>
    </section>

    <section id="values">
        <h2>our core values</h2>
        <div class="values-container">
            <div class="value-box bounce-in" id="value-box">
                <h3>Quality First</h3>
                <p>At Goodsy, we prioritize delivering only the highest-quality products. We partner with reputable brands and rigorously vet our items to ensure that every purchase meets our stringent quality standards, providing you with the best value and satisfaction.</p>
            </div>
            <div class="value-box bounce-in delay-1" id="value-box" >
                <h3>Customer-Centric Approach</h3>
                <p>We are dedicated to putting our customers at the center of everything we do. From intuitive website design to responsive customer support, we strive to create a shopping experience that is seamless, enjoyable, and tailored to your needs.</p>
            </div>
            <div class="value-box bounce-in delay-2"id="value-box">
                <h3>Integrity and Trust</h3>
                <p>Trust is the foundation of our business. We are committed to transparent practices, secure transactions, and honest communication. Our goal is to build lasting relationships with our customers based on reliability and ethical conduct.</p>
            </div>
        </div>
    </section>

    <footer align="center" style="background-color: black;">
        <p style="color: aliceblue;">&copy; 2024 Goodsy. All rights reserved.</p>
    </footer>


    <script src="http://localhost/KELOMPOK_2-main/public/js/home/index.js"></script>
</body>
</html>