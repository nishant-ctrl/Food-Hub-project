<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[url(img/bg.jpg)] bg-cover bg-center  flex items-center justify-center min-h-screen">
  <div class=" h-80 w-3/4 bg-gray-900   bg-opacity-45 rounded-xl  flex flex-row-reverse ">
    <img src="img/lo.jpg" class="h-full w-1/2 object-cover rounded-lg px-4 py-4  " alt="sign up">
    <form action="include/signup_backend.php" method="POST" class="p-8 flex flex-col justify-center w-1/2">
      <h2 class="text-white font-bold text-2xl  py-2 mx-40 ">Sign Up</h2>
      <label for="name"></label>
      <input type="text" name="name" id=name placeholder=" Name " autocomplete="on" required autofocus class="px-4 py-2 mb-4 rounded bg-white text-black placeholder-black
                    focus:outline-none focus:ring-2 focus:ring-black">
      <label for="email"></label>
      <input type="email" name="email" id=eamil placeholder=" Enter Your Email" autocomplete="on" required autofocus
        class="px-4 py-2 mb-4 rounded bg-white text-black placeholder-black
                     focus:outline-none focus:ring-2 focus:ring-black">

      <label for="password"></label>
      <input type="password" name="password" id="password" placeholder="Password(min 8 character)" required class="px-4 py-2 mb-4 rounded bg-white text-black placeholder-black 
                       focus:outline-none focus:ring-2 focus:ring-black">
      <button type="submit" class=" text-white text-xl py-2 rounded-lg
                        ">Sign Up</button>
      <p class="px-16">
        Already have an accont?
        <a href="login.php" class="text-white"> Sign in</a>
        <a href="index.php" class="text-white">Home</a>
      </p>
    </form>
  </div>
</body>

</html>