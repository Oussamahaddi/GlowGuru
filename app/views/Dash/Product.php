
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
    <div class="overflow-y-scroll h-screen grid grid-cols-[auto_1fr] antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

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
                        <a href="<?= URLROOT . '/Dashboards/Statistique'; ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
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
        <div class="mt-24 relative">

            <!-- add button -->
            <div class="flex justify-end mr-4">
                <a href="<?= URLROOT . '/Dashboards/addProduct'; ?>" class="w-fit text-end fixed p-2 bg-blue-500 rounded-full cursor-pointer">
                    <i class="fa-solid fa-plus"></i>
                </a>
            </div>

            <!-- component -->
            <div class=" rounded-lg border border-gray-200 shadow-md m-5">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 ">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Product Name</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Product Description</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Product Price</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Product Quantity</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Edit</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        <?php foreach($data['products'] as $product) : ?>
                            <tr class="hover:bg-gray-50">
                                <th class="flex items-center gap-3 px-6 py-4 font-normal text-gray-900">
                                    <div class="relative h-10 w-10">
                                        <img class="h-full w-full object-cover object-center" src="<?= URLROOT . '/img/upload/' . $product->product_image; ?>" alt=""/>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-medium text-gray-700"><?= $product->product_name ?></div>
                                    </div>
                                </th>
                                <td class="px-6 py-4 ">
                                    <div class="overflow-hidden text-ellipsis"><?= $product->product_description; ?></div>
                                </td>
                                <td class="px-6 py-4"><?= $product->product_quantity?></td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                    <?= $product->product_price?>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                <div class="flex justify-end gap-4">
                                    <a x-data="{ tooltip: 'Delete' }" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip" >
                                        <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                    </svg>
                                    </a>
                                    <a x-data="{ tooltip: 'Edite' }" href="#">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-6 w-6"
                                        x-tooltip="tooltip"
                                    >
                                        <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                                        />
                                    </svg>
                                    </a>
                                </div>
                                </td>
                            </tr>
                        <?php endforeach ; ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- ./body -->
    </div>
  </div>

</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
</html>