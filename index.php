<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foodHub</title>
    <link rel="icon" href="images/res.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include 'include/header.php';?>
    </header>
    <main>
        <section class="welcome-section">
            <div class="welcome">
                <div class="welcome-overlay">
                    <h2 class="text-2xl font-bold">Welcome to Your Culinary Adventure</h2>
                    <div>
                        Delicious recipes, fresh ingredients, and mouthwatering dishes await you
                    </div>
                    <div>
                        Explore our menu and discover flavours that will satisfy every craving!
                    </div>
                    <div class="enter">
                        <a href="#">Start Your Journey</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-section">
            <div class="content">
                <div class="shopcontent">
                    <h1>About FoodHub</h1>
                    <i>Welcome to The FOOD HUB - your one-stop destination for delicious and fresh culinary delights!
                        Explore a wide variety of mouth-watering dishes, handpicked to satisfy your cravings.</i>
                    <p>
                        Our chefs are passionate about using the freshest ingredients, sourced locally and
                        globally, to create dishes that are not only delicious but also nutritious. With a
                        focus on quality and sustainability, we bring you the best of both worlds – taste
                        and health.
                    </p>
                    <p>
                        Join us at FoodHub and embark on a culinary journey like no other. Whether
                        you're dining in, ordering for delivery, or catering an event, we promise to make
                        every meal unforgettable.
                    </p>
                </div>
                <div class="shopimage">
                    <img src="images/5.jpg" alt="Delicious Dishes served at table.">
                </div>
            </div>
        </section>
        <section class="item-section">
            <div class="itemdetails">
                <div class="item">
                    <img src="images/3.jpg" alt="item image">
                    <p>Pizzas</p>
                </div>
                <div class="item">
                    <img src="images/4.jpg" alt="item image">
                    <p>Noodles</p>
                </div>
                <div class="item">
                    <img src="images/2.jpg" alt="item image">
                    <p>Deserts</p>
                </div>
                <div class="item">
                    <img src="images/8.jpg" alt="item image">
                    <p>Others</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
       <?php include 'include/footer.php';?>
    </footer>
</body>

</html>