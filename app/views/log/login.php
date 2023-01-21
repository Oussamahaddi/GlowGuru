<?php
    if (isLoggedIn()) {
        redirect('Dashboards/Statistique');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link of flowbite  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />
    <!-- load css file -->
    <link href="./dist/output.css" rel="stylesheet">
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo URLROOT; ?>/img/logo/GlowGuru.png"/>
    
    <title>Login</title>
</head>
<body>

    <section class="h-screen w-full bg-no-repeat bg-cover" style="background-image: url(<?= URLROOT . '/img/bg.png';?>); background-color: #ECE0DB;">
        <div class="px-4 h-full flex items-center">
            <div class="w-full flex sm:justify-center">
                <div class="w-1/2 rounded-lg shadow bg-white/50 p-6 space-y-4 sm:space-y-6 sm:p-8">
                    <div class="flex justify-between items-center">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-[#E1726E] md:text-2xl ">
                            Login
                        </h1>
                    
                        <a href="<?= URLROOT . '/Pages/index'; ?>" class="relative z-10 flex items-center justify-center font-bold text-gray-600 text-sm px-5 py-2 hover:drop-shadow-[4px_4px_1px_rgb(255,150,0,0.50)] hover:transition-all hover:duration-300">
                            <i class="fa-solid fa-arrow-left-long"></i> <span>Back To Home</span>
                            <img src="<?= URLROOT; ?>/img/logo/libg.png" alt="" class="w-28 h-11 absolute mt-2 ml-4 -z-10">
                        </a>
                        
                    </div>
                    <form class="space-y-4 md:space-y-6" action="<?= URLROOT . '/SignIn/login' ?>" method="POST">
                        <div>
                            <label for="email" class="font-semibold block mb-2 text-sm text-gray-900 ">Your email</label>
                            <input type="email" name="Email" value="<?php echo $data['Email'] ?>" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="name@gmail.com">

                            <!-- error message if email empty or not found -->
                            <span class="text-red-500"><?php echo $data['Email_err'] ?></span>
                        </div>

                        <div>
                            <label for="password" class="font-semibold block mb-2 text-sm text-gray-900 ">Password</label>
                            <div class="relative h-fit flex items-center">
                                <input type="password" name="Password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
                                <div class="cursor-pointer absolute right-3">
                                    <i id="password_eye" class="fa-solid fa-eye-slash"></i>
                                </div>
                            </div>
                            <!-- error message if password empty or not found -->
                            <span class="text-red-500"><?php echo $data['Password_err'] ?></span>
                        </div>
                        <div>
                            <!-- error message if email and password empty or not found -->
                            <span class="text-red-500"><?php echo $data['Email_Password_err'] ?></span>
                        </div>

                        <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
    <script src="<?= URLROOT . '/js/password.js"'; ?>" type="module"></script>
</html>


