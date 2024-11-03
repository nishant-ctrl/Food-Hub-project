<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
    <div class=" p-6 bg-white shadow-md rounded-lg w-full ">
        <h2 class="h-900px text-3xl font-semibold text-center mb-8">Contact Us</h2>
    </div>
    <section class="container mx-auto my-12 p-6 bg-white shadow-md rounded-lg w-full max-w-md">
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label for="name" class="block text-gray-700 font-medium">Name</label>
                <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-md"
                    placeholder="Your Name" required>
            </div>
            <div>
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-md"
                    placeholder="Your Email" required>
            </div>
            <div>
                <label for="message" class="block text-gray-700 font-medium">Message</label>
                <textarea id="message" name="message" class="w-full p-3 border border-gray-300 rounded-md" rows="4"
                    placeholder="Your Message" required></textarea>
            </div>
            <button type="submit"
                class="w-full bg-blue-500 text-white py-3 rounded-md font-medium hover:bg-blue-600">Submit</button>
        </form>
        <div class="text-center text-gray-600 mt-4">
            Email: contact@foodhub.co.in | Phone: +91 7777777777
        </div>
    </section>
    <footer>
        <?php include 'include/footer.php';?>
    </footer>


</body>

</html>