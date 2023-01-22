<?php
	include_once APPROOT . '/views/inc/header.php';
?>

<!-- search bar -->
<section class="w-full flex justify-center mx-a my-8">
    <div class="w-5/6 flex relative">
        <input type="search" name="search" value="" placeholder="search items" class="w-5/6 rounded-full mx-auto">
        <i class="fa-solid fa-magnifying-glass absolute right-24 top-1/2 -translate-y-1/2 -translate-x-1/2"></i>
    </div>
</section>
<!-- search bar end -->

<!-- show product -->
<section class="w-full flex justify-center my-12">
        <div class="">
            <div class="mx-auto py-4 px-4 sm:py-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Products</h2>
                
                <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                    <?php foreach($data['products'] as $product) : ?>
                        <div class="group relative bg-gray-100 rounded-md p-4">
                            <div class="overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:h-64">
                                <img src="<?= URLROOT . '/img/upload/' . $product->product_image; ?>" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-700">
                                        <?= $product->product_name; ?>
                                    </h3>
                                </div>
                                <p class="text-xl font-semibold text-gray-900"><?= $product->product_price; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!-- More products... -->
                </div>
            </div>
        </div>
</section>
<!-- show product end -->


<?php
	include_once APPROOT . '/views/inc/footer.php';
?>

