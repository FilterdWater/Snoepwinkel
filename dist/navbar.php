        <header class="absolute inset-x-0 top-0 z-50">
        <nav class="fixed top-0 w-full flex items-center justify-between p-3 lg:px-8 bg-white outline outline-2 outline-cyan-700" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="index.php" class="-m-1.5 p-1.5">
                    <span class="sr-only">Logo</span>
                    <div class="block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner"><img src="images/android-chrome-512x512.png" alt="Logo candypop" style="max-width: 2em;"></div>
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" onclick="show()">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex pl-4 lg:gap-x-14">
                <a href="index.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-gray-300 hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner">Home</a>
                <a href="snoep.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-gray-300 hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner">Snoep</a>
                            <div class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-black hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner"><?php echo $pagetitle;?></div>
                <a href="contact.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-gray-300 hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner">Contact</a>
                <a href="about.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-gray-300 hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner">Over ons</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="winkelmand.php" class="block rounded-lg px-2 py-2 mx-1 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </a>
                <a href="login.php" class="block rounded-lg px-2 py-2 mx-1 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </a>
            </div>
        </nav>
        <!-- Mobile menu -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
            <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 navigation">
                <div class="flex items-center justify-between">
                    <a href="index.php" class="-m-1.5 p-1.5">
                        <span class="sr-only">Logo</span>
                        <div class="block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner"><img src="images/android-chrome-512x512.png" alt="Logo candypop" style="max-width: 2em;"></div>
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" onclick="show()">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="index.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all">Home</a>
                            <a href="snoep.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all">Snoep</a>
                            <a href="contact.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all">Contact</a>
                            <a href="about.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all">Over ons</a>
                        </div>
                        <div class="py-6">
                            <a href="login.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </a>
                        </div>
                        <div class="py-6">
                            <a href="winkelmand.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>