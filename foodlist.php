<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Items</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">
  <nav>
    <?php
        session_start();
        include 'include/header.php';
        if (!isset($_SESSION['id'])) {
            header("Location: login.php");
            exit;
        }
    ?>
  </nav>
  <section class="max-w-7xl mx-auto p-6">
    <h1 class="text-4xl font-bold text-center my-8">Delicious Food Items</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
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
        <img src="img/2.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Cake
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
        <img src="img/n.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Desert
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
          <p class="text-gray-600">Price: Rs.200.00</p>
          <div class="flex justify-between items-center mt-4">
            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-orange-600">Add to Cart</button>
            <button class="bg-orange-500 text-white px-3 py-1 rounded hover:bg-orange-600">Buy Now</button>
          </div>
        </div>
      </div>
      <div class="bg-white shadow-lg rounded-lg p-4">
        <img src="img/idli.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Idli
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
        <img src="img/e.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Veggie Delight
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
        <img src="img/pizza.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Margherita pizza
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
        <img src="img/k.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Cheesy Bread
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
        <img src="img/4.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Spicy Noodles
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
        <img src="img/2.jpg" alt="Cake" class="w-full h-32 object-cover rounded-t-lg">
        <div class="p-4">
          <h2 class="text-xl font-semibold   flex justify-between">Chocolate Cake
            <span class="text-red-500 text-xl mx-10">❤</span>
          </h2>
          <p class="text-gray-600">Price: Rs.200.00</p>
          <div class="flex justify-between items-center mt-4">
            <button class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-orange-600">Add to Cart</button>
            <button class="bg-orange-500 text-white px-3 py-1 rounded hover:bg-orange-600">Buy Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <?php include 'include/footer.php';?>
  </footer>
</body>

</html>