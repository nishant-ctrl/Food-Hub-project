<nav class="flex flex-col sm:flex-row justify-between p-4 bg-black text-orange-400">
    <a href="dashboard.php" class="text-3xl font-bold mb-2 sm:mb-0">foodHub</a>
    <div class="space-y-2 sm:space-y-0 sm:space-x-8 flex flex-col sm:flex-row items-center">
        <?php if (!isset($_SESSION['id'])): ?>
            <a href="index.php" class="text-lg hover:underline">Home</a>
            <a href="login.php" class="text-lg hover:underline">Login</a>
            <a href="signup.php" class="text-lg hover:underline">Signup</a>
        <?php else: ?>
            <a href="dashboard.php" class="text-lg hover:underline">Home</a>
            <a href="cart.php" class="text-lg hover:underline">Cart</a>
            <a href="contact.php" class="text-lg hover:underline">Contact</a>
            <a href="include/logout.php" class="text-lg hover:underline">Logout</a>
        <?php endif; ?>
    </div>
</nav>
