<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <nav>
    <?php
        session_start();
        include 'include/header.php';
        if (!isset($_SESSION['id'])) {
            header("Location: login.php");
            exit;
        }
        $name = $_SESSION['name'];
    ?>
  </nav>
  <header class="bg-[url(img/b.jpg)] bg-cover bg-center h-80 flex items-center justify-center">
    <div class="h-52 w-3/5 bg-gray-900   bg-opacity-45 rounded-xl">
      <h2 class="text-4xl font-bold text-center text-white mb-4">Welcome
        <?php echo htmlspecialchars($name); ?>
      </h2>
      <p class="text-lg  text-white mb-6 text-center">Discover our amazing features and benefits.</p>
      <div class="flex justify-center mb-4">
        <input type="text" placeholder="Search for delicious food" class="p-1 w-3/4 rounded-l-md focus:ring-2
                outline-none focus:ring-black">
        <button class="bg-red-600 text-white px-4 py-2 rounded-r-md hover:bg-red-700 transition-colors">Search</button>
      </div>
      <p class="flex justify-center">
        <a href="item.php" class="text-white  bg-gray-700 rounded-xl py-2 px-2 ">Explore More</a>
      </p>
    </div>
  </header>
  <section class="max-w-7xl mx-auto p-6">
    <h1 class="text-4xl font-bold text-center my-8">Delicious Food Items</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <div class="bg-white shadow-lg rounded-lg p-4">
        <img src="img/pizza.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Pizza
            <span class="text-red-500 text-xl mx-10">❤</span>
          </h2>
          <p class="text-gray-600">Price: Rs.300.00</p>
          <div class="flex justify-between items-center mt-4">
            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-orange-600">Add to Cart</button>
            <button class="bg-orange-500 text-white px-3 py-1 rounded hover:bg-orange-600">Buy Now</button>
          </div>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4">
        <img src="img/burger.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Burger
            <span class="text-red-500 text-xl mx-10">❤</span>
          </h2>
          <p class="text-gray-600">Price: Rs.200.00</p>
          <div class="flex justify-between items-center mt-4">
            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-orange-600">Add to Cart</button>
            <button class="bg-orange-500 text-white px-3 py-1 rounded hover:bg-orange-600">Buy Now</button>
          </div>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4">
        <img src="img/chickennuggets.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Chicken Nuggets
            <span class="text-red-500 text-xl mx-10">❤</span>
          </h2>
          <p class="text-gray-600">Price: Rs.200.00</p>
          <div class="flex justify-between items-center mt-4">
            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-orange-600">Add to Cart</button>
            <button class="bg-orange-500 text-white px-3 py-1 rounded hover:bg-orange-600">Buy Now</button>
          </div>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4">
        <img src="img/pasta.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Pasta
            <span class="text-red-500 text-xl mx-10">❤</span>
          </h2>
          <p class="text-gray-600">Price: Rs.200.00</p>
          <div class="flex justify-between items-center mt-4">
            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-orange-600">Add to Cart</button>
            <button class="bg-orange-500 text-white px-3 py-1 rounded hover:bg-orange-600">Buy Now</button>
          </div>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4">
        <img src="img/samosa.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Samosa
            <span class="text-red-500 text-xl mx-10">❤</span>
          </h2>
          <p class="text-gray-600">Price: Rs.100.00</p>
          <div class="flex justify-between items-center mt-4">
            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-orange-600">Add to Cart</button>
            <button class="bg-orange-500 text-white px-3 py-1 rounded hover:bg-orange-600">Buy Now</button>
          </div>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4">
        <img src="img/pizza.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Margherita Pizza
            <span class="text-red-500 text-xl mx-10">❤</span>
          </h2>
          <p class="text-gray-600">Price: Rs.150.00</p>
          <div class="flex justify-between items-center mt-4">
            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-orange-600">Add to Cart</button>
            <button class="bg-orange-500 text-white px-3 py-1 rounded hover:bg-orange-600">Buy Now</button>
          </div>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4">
        <img src="img/idli.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Chhole Bhature
            <span class="text-red-500 text-xl mx-10">❤</span>
          </h2>
          <p class="text-gray-600">Price: Rs.150.00</p>
          <div class="flex justify-between items-center mt-4">
            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-orange-600">Add to Cart</button>
            <button class="bg-orange-500 text-white px-3 py-1 rounded hover:bg-orange-600">Buy Now</button>
          </div>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4">
        <img src="img/n.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Desert
            <span class="text-red-500 text-xl mx-10">❤</span>
          </h2>
          <p class="text-gray-600">Price: Rs.150.00</p>
          <div class="flex justify-between items-center mt-4">
            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-orange-600">Add to Cart</button>
            <button class="bg-orange-500 text-white px-3 py-1 rounded hover:bg-orange-600">Buy Now</button>
          </div>
        </div>
      </div>
  </section>
  <footer>
    <?php include 'include/footer.php';?>
  </footer>
</body>

</html>