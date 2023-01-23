
<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link of flowbite  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />
    <!-- load css file -->
    <link href="<?= URLROOT; ?>/dist/output.css" rel="stylesheet">
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo URLROOT; ?>/img/logo/GlowGuru.png"/>
    
    <title><?= SITENAME ;?></title>

    <style>
        .selected_li {
            background-image: url('<?= URLROOT; ?>/img/logo/libg.png');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: bottom;
        }
        .gradient::before {
            background-image: linear-gradient(to right, orange , yellow , orange);
        }
        @font-face {
            src: url('<?= URLROOT; ?>/css/font/ThunderDemo.ttf');
            font-family: Thunder;
        }

        .Thunder {
            font-family: Thunder;
        }
    </style>

</head>
<body class="bg-[#ECE0DB]">

    <!-- header start -->
    <header class="relative">
        <img src="<?= URLROOT; ?>/img/logo/headerbg.png" alt="" class="absolute -z-10 w-full h-full">
        <nav class="border-gray-200 px-4 md:px-6 py-2.5">
            <div class="flex justify-around items-center mx-auto max-w-screen-xl">
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
                <a href="#">
                    <img src="<?= URLROOT . '/img/logo/GlowGuru.png' ?>" alt="GlowGuru logo" class="w-20">
                </a>
                <div class=" hidden justify-between items-center w-fit sm:block md:w-auto" id="mobile-menu-2">
                    <ul class="nav_list flex max-sm:flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                        <li class="selected_li">
                            <a href="<?= URLROOT . '/Pages/index'; ?>" class="font-semibold h-full block py-2 text-gray-700 rounded bg-primary-700 md:bg-transparent md:text-primary-700 md:p-0 " aria-current="page">Home</a>
                        </li>
                        <li class="">
                            <a href="<?= URLROOT . '/Pages/marketplace'; ?>" class="font-semibold h-full block py-2 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 ">Marketplace</a>
                        </li>
                        <?php if (isLoggedIn()) : ?>
                            <li class="">
                                <a href="<?= URLROOT . '/Dashboards/Statistique'; ?>" class="font-semibold h-full block py-2 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-primary-700 md:p-0 ">Dashboard</a>
                            </li>
                        <?php endif ; ?>
                    </ul>
                </div>
                <div class="flex items-center">
                    <a href="<?= URLROOT . '/SignIn/login'; ?>" class="relative flex items-center justify-center font-bold text-gray-600 text-sm px-5 py-2 hover:drop-shadow-[4px_4px_1px_rgb(255,150,0,0.50)] hover:transition-all hover:duration-300">
                        <img src="<?= URLROOT; ?>/img/logo/libg.png" alt="" class="w-28 h-11 absolute mt-2 ml-4 -z-10">
                        Log in
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- header end -->

    