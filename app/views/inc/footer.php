

    <footer class="relative h-full">
        <img src="img/logo/footer.png" alt="" class="hidden sm:block w-full h-full">
        <img src="img/logo/footermobile.png" alt="" class="sm:hidden w-full h-full">
        <div class="w-full absolute bottom-0 left-1/2 sm:top-1/2 sm:left-1/2 -translate-x-1/2 px-4 max-sm:py-2">
            <div class="flex flex-col justify-around items-center h-full sm:flex-row pb-6">
                <div class="grid place-items-center gap-2">
                    <div class="text-white font-semibold tracking-widest">COLLABORA CONMIGO</div>
                    <strong class="bg-gradient-to-r from-yellow-400 via-yellow-200 to-yellow-600 p-1 text-sm">LET TALK BEAUTY TOGETHER</strong>
                </div>
                <div class="grid place-items-center gap-2">
                    <strong class="text-white font-semibold  tracking-widest">FOLLOW ME</strong>
                    <div class="social_media flex gap-6 text-xl">
                        <i class="fa-brands fa-facebook text-blue-500 cursor-pointer"></i>
                        <i class="fa-brands fa-instagram text-pink-600 cursor-pointer"></i>
                        <i class="fa-brands fa-twitter text-sky-400 cursor-pointer"></i>
                        <i class="fa-brands fa-pinterest text-red-400 cursor-pointer"></i>
                        <i class="fa-brands fa-linkedin text-blue-400 cursor-pointer"></i>
                    </div>
                </div>
                <div class="grid place-items-center gap-2">
                    <div class="text-white font-semibold tracking-widest">CONTACT ME</div>
                    <strong class="bg-gradient-to-r from-yellow-400 via-yellow-200 to-yellow-600 p-1 text-sm">LET TALK BEAUTY TOGETHER</strong>
                </div>
            </div>
        </div>
    </footer>


    
</body>


    <script src="./js/header.js" type="module"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
    <!-- <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

            // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
            
        });

    </script> -->

</html>