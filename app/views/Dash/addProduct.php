
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
<body class="h-screen w-full bg-no-repeat bg-cover" style="background-image: url(<?= URLROOT . '/img/bg.png';?>); background-color: #ECE0DB;">
    
    <a href="<?= URLROOT . '/Dashboards/product'; ?>" class="w-40 relative top-16 left-1/2 translate-x-1/2 font-semibold flex items-center justify-center text-gray-700 hover:text-black hover:drop-shadow-[4px_4px_1px_rgb(255,150,0,0.50)] hover:transition-all hover:duration-300">
        Back 
        <img src="<?= URLROOT; ?>/img/logo/libg.png" alt="" class="h-12 absolute mt-2 ml-4 -z-10">
    </a>
    
    <div class="h-screen w-full grid place-items-center -mt-">
        <div class="block p-6 rounded-lg shadow-lg bg-white/50">
            <form action="<?= URLROOT . '/Dashboards/addProduct'; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-6">
                    <input type="text" name="name" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7" placeholder="Product Name">
                    <span class="text-red-500"> <?= $data['product_name_err']; ?> </span>
                </div>
                <div class="form-group mb-6 flex gap-4">
                    <div class="">
                        <input type="number" name="price" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8" placeholder="Product Price">
                        <span class="text-red-500"> <?= $data['product_price_err']; ?> </span>
                    </div>
                    <div class="">
                        <input type="number" name="quantity" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8" placeholder="Product Quantity">
                        <span class="text-red-500"> <?= $data['product_quantity_err']; ?> </span>
                    </div>
                </div>
                <div class="form-group mb-6">
                    <textarea name="description" class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none " id="exampleFormControlTextarea13" rows="3" placeholder="Product Description" ></textarea>
                    <span class="text-red-500"> <?= $data['product_description_err']; ?> </span>
                </div>
                <div class="form-group mb-6 w-full">
                    <input type="file" name="image" class="block">
                    <span class="text-red-500"><?= $data['product_image_err']; ?></span>
                </div>
                <div class="flex gap-2">
                    <button type="submit" class=" w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out font-semibold">ADD</button>
                    <button type="button" class=" w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out font-semibold">ADD MORE</button>
                </div>
            </form>
        </div>
    </div>


</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
</html>