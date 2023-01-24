
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo URLROOT; ?>/img/logo/GlowGuru.png"/>
    <title>Dashboard</title>
</head>
<body>


<div>
    <div class="overflow-hidden h-screen grid grid-cols-[auto_1fr] antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

        <!-- Header -->
        <div class="fixed w-full max-sm:h-10 flex items-center justify-between text-white z-20 bg-gray-800">
            <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 border-none">
                <a href="<?= URLROOT . '/Pages/index'; ?>" class="w-full flex justify-center p-2"> <img class="w-7 h-7 md:w-2/6 md:h-full mr-2 rounded-md overflow-hidden" src="<?= URLROOT . '/img/logo/glowguru.png';?>" /></a>
            </div>
            <div class="flex justify-between items-center h-full header-right">
                <ul class="flex items-center">
                    <li class="rounded-full border-2 border-blue-500 w-7 h-7 overflow-hidden">
                        <img src="<?= URLROOT . '/img/admins/admin.jpg';?>" alt="">
                    </li>
                    <li>
                        <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                    </li>
                    <li>
                        <a href="<?= URLROOT . '/SignIn/logOutAdmin';?>" class="flex items-center mr-4 hover:text-blue-100">
                            <span class="inline-flex mr-1">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </span>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./Header -->
    
        <!-- Sidebar -->
        <div class="mt-12 flex flex-col top-14 left-0 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                <ul class="flex flex-col py-4 space-y-1">
                    <li class="px-5 hidden md:block">
                    <div class="mt-8 flex flex-row items-center h-8">
                        <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                    </div>
                    </li>
                    <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-gauge"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Statistiques</span>
                    </a>
                    </li>
                    <li>
                        <a href="<?= URLROOT . '/Dashboards/product'; ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <i class="fa-sharp fa-solid fa-boxes-stacked"></i>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Products</span>
                        </a>
                    </li>
                </ul>
                <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2022 By OussamaHaddi</p>
            </div>
        </div>
        <!-- ./Sidebar -->

        <!-- body -->
        <div class="mt-24 ">
            <div class="text-center text-2xl font-semibold">Welcome Back <span class="text-yellow-500 text-3xl"><?= $_SESSION['Name']; ?></span></div>
            <div class="mt-12 h-full grid grid-cols-1 sm:grid-cols-3 gap-8">
                <div class="w-5/6 mx-auto flex flex-col justify-around items-center h-32 bg-white text-black rounded-lg p-2">
                    <div>
                    <span class="text-md font-semibold">- Admin - </span><i class="fa-solid fa-khanda text-2xl text-yellow-500"></i>
                    </div>
                    <div class="font-semibold text-md"><?= count($data['admin']); ?></div>
                </div>
                <div class="w-5/6 mx-auto flex flex-col justify-around items-center h-32 bg-white text-black rounded-lg p-2">
                    <div>
                        <span class="text-md font-semibold">- Min Prix - </span><i class="fa-solid fa-arrow-down-long text-2xl text-green-500 -rotate-45"></i>
                    </div>
                    <div class="font-semibold text-md">$<?= $data['products_stats']['MIN']->minimum; ?></div>
                </div>
                <div class="w-5/6 mx-auto flex flex-col justify-around items-center h-32 bg-white text-black rounded-lg p-2">
                    <div>
                        <span class="text-md font-semibold">- Max Prix - </span><i class="fa-solid fa-arrow-down-long text-2xl text-red-500 rotate-180"></i>
                    </div>
                    <div class="font-semibold text-md">$<?= $data['products_stats']['MAX']->maximum; ?></div>
                </div>
            </div>
        </div>
        <!-- ./body -->
    </div>
</div>

</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
</html>