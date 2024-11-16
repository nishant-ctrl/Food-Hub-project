<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foodHub-cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

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
    <section class="container mx-auto mt-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-center text-2xl font-semibold mb-4">Your cart</h2>
            <table class="w-full text-center border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2 border">Sl No.</th>
                        <th class="p-2 border">Item Name</th>
                        <th class="p-2 border">Price</th>
                        <th class="p-2 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-2 border">1</td>
                        <td class="p-2 border">Pizza</td>
                        <td class="p-2 border">300</td>
                        <td class="p-2 border"><button class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border">2</td>
                        <td class="p-2 border">Burger</td>
                        <td class="p-2 border">200</td>
                        <td class="p-2 border"><button class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border">3</td>
                        <td class="p-2 border">Pasta</td>
                        <td class="p-2 border">100</td>
                        <td class="p-2 border"><button class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2 border">4</td>
                        <td class="p-2 border">Idli</td>
                        <td class="p-2 border">100</td>
                        <td class="p-2 border"><button class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="bg-gray-100">
                        <td colspan="2" class="p-2 font-semibold">Total</td>
                        <td class="p-2">700</td>
                        <td class="p-2"><a href="success.php"><button id="buy_button"
                                    class="bg-blue-500 text-white px-4 py-2 rounded">Buy Now</button></a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
    <section class="container mx-auto mt-12">
        <h2 class="text-center text-2xl font-semibold mb-8">Available Food Items</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="img/pizza.jpg" alt="Pizza" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Pizza</h3>
                    <p class="text-gray-600">Delicious cheese pizza with fresh ingredients.</p>
                    <p class="text-green-700 font-bold mt-2">Rs. 300</p>
                    <button class="bg-yellow-200 text-yellow-700 px-4 py-2 rounded mt-4 w-full">Remove from
                        Cart</button>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="img/burger.jpg">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Burger</h3>
                    <p class="text-gray-600">Juicy beef burger with lettuce and tomato.</p>
                    <p class="text-green-700 font-bold mt-2">Rs. 200</p>
                    <button class="bg-yellow-200 text-yellow-700 px-4 py-2 rounded mt-4 w-full">Remove from
                        Cart</button>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="img/pasta.jpg">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Pasta</h3>
                    <p class="text-gray-600">Creamy Alfredo pasta with grilled chicken.</p>
                    <p class="text-green-700 font-bold mt-2">Rs. 100</p>
                    <button class="bg-yellow-200 text-yellow-700 px-4 py-2 rounded mt-4 w-full">Remove from
                        Cart</button>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="img/idli.jpg">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Idli</h3>
                    <p class="text-gray-600">Delicious Idli and chutney with fresh ingredients.</p>
                    <p class="text-green-700 font-bold mt-2">Rs. 100</p>
                    <button class="bg-yellow-200 text-yellow-700 px-4 py-2 rounded mt-4 w-full">Remove from
                        Cart</button>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php include 'include/footer.php';?>
    </footer>

</body>

</html>