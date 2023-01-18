<?php
	include_once APPROOT . '/views/inc/header.php';
?>


<!-- home page start -->
<section class="flex justify-center mt-10 relative">
	<img src="img/logo/skins.png" alt="" class="absolute -top-4 left-1/2 -translate-x-1/2 -z-10 w-4/6 max-sm:5/6 max-sm:top-1/2">
	<div class="grid grid-cols-1 sm:grid-cols-2 items-center justify-center w-5/6">
		<div>
			<img src="img/slider/sliderbg.png" alt="">
		</div>
		<div class="skin flex flex-col gap-6 text-center sm:text-end relative">
			<h1 class="Thunder text-8xl text-[#E1726E]">GlowGuru</h1>
			<h2 class="font-bold">MAKEUP REVOLUTION ,<br> BEAUTY COACH, BEAUTY INFLUENCER, YOU KNOW <br> MAQUILLARDO PROFESIONAL</h2>
			<a href="#" class="relative font-semibold flex items-center justify-center text-gray-700 hover:text-black hover:drop-shadow-[4px_4px_1px_rgb(255,150,0,0.50)] hover:transition-all hover:duration-300">
				<img src="img/logo/libg.png" alt="" class="w-52 h-12 absolute mt-2 ml-4 -z-10">
				Check Out More
			</a>
		</div>
	</div>
</section>
<!-- home page end -->

<!-- view all start -->
<section class="relative my-24">
	<img src="img/logo/newarrival.png" alt="" class="w-full absolute -z-10">
	<div class="relative w-5/6 m-auto">
		<div class="my-8 text-end">
			<h3 class="font-semibold tracking-widest">EXPLORE THE <span class="Thunder text-6xl text-[#E1726E]">PRODUCT<span></h3>
		</div>
		<div class="flex justify-center">
			<img src="img/logo/" alt="">
			<strong class="bg-gradient-to-r from-yellow-400 via-yellow-200 to-yellow-600 px-3 py-1 -bottom-2 relative z-10">VIEW All</strong>
		</div>
		<div class="grid grid-cols-1 grid-rows-3 justify-items-center sm:grid-cols-2 sm:grid-rows-2 md:grid-cols-3 md:grid-rows-1 gap-4">
			<div class=" relative border overflow-hidden w-5/6">
				<img src="img/product/pc/p1.png" alt="" class="w-full h-full cursor-pointer hover:scale-125 hover:transition-all hover:duration-500 hover:brightness-50">
			</div>
			<div class=" relative border overflow-hidden w-5/6">
				<img src="img/product/pc/p2.png" alt="" class="w-full h-full cursor-pointer hover:scale-125 hover:transition-all hover:duration-500 hover:brightness-50">
			</div>
			<div class=" relative border overflow-hidden w-5/6">
				<img src="img/product/pc/p5.jpg" alt="" class="w-full h-full cursor-pointer hover:scale-125 hover:transition-all hover:duration-500 hover:brightness-50">
			</div>
		</div>
	</div>
</section>
<!-- view all end -->

<!-- about start -->
<section class="relative my-24 gradient w-full h-[30rem] flex items-center justify-center mx-auto after:content-[''] after:absolute after:bg-gray-100 after:w-full after:h-full after:top-0 after:left-0 after:-z-20 after:-skew-y-2 before:content-[''] before:absolute before:w-11/12 before:h-full before:-bottom-4 before:right-0 before:-z-20 before:-skew-y-2">
	<div class="grid grid-cols-1 md:grid-cols-2 w-5/6 m-auto">
		<div class="flex flex-col justify-around relative z-30">
			<h2 class="font-semibold tracking-widest flex items-center gap-2">
				ABOUT <span class="Thunder text-6xl text-[#E1726E]">GlowGuru</span> 
			</h2>
			<div class="grid gap-6">
				<p class="w-4/6 font-semibold flex">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quasi odit fugiat amet quae iusto nemo similique, distinctio molestiae minima fugit! Ipsum ea similique optio illum assumenda non doloremque alias?</p>
				<a href="#" class="relative font-semibold flex items-center justify-center text-gray-700 hover:text-black hover:drop-shadow-[4px_4px_1px_rgb(255,150,0,0.50)] hover:transition-all hover:duration-300">
					AMAZING
					<img src="img/logo/libg.png" alt="" class="w-40 h-12 absolute mt-2 ml-4 -z-10">
				</a>
			</div>
		</div>
		<div class="relative gradient flex justify-center items-center p-8 before:content-[''] before:absolute before:top-5 before:right-14 before:w-4/6 before:h-4/6 before:-z-10 ">
			<img src="img/product/pc/p5.jpg" alt="" class="relative w-5/6 border-4 border-black z-30">
		</div>
	</div>
</section>
<!-- about end -->




<?php
	include_once APPROOT . '/views/inc/footer.php';
?>

