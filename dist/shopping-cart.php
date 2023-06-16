<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CandyPop</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <script defer src="mobile-menu.js"></script>
</head>

<body>
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="fixed top-0 w-full flex items-center justify-between p-3 lg:px-8 bg-white outline outline-2 outline-cyan-700" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="index.html" class="-m-1.5 p-1.5">
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
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="index.html" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-gray-300 hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner">Home</a>
                    <a href="snoep.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-gray-300 hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner">Snoep</a>
                    <a href="contact.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-gray-300 hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner">Contact</a>
                    <a href="about.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-gray-300 hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner">Over ons</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="shopping-cart.php" class="block rounded-lg px-2 py-2 mx-1 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all shadow-inner">
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
                        <a href="index.html" class="-m-1.5 p-1.5">
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
                                <a href="index.html" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all">Home</a>
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
                                <a href="shopping-cart.php" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold border-b-2 border-transparent hover:border-current cursor-pointer select-none text-gray-900 hover:bg-gray-50 transition-all">
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
        <footer class="bg-rose-400">
            <div class="mx-auto max-w-screen-xl space-y-8 px-4 py-16 sm:px-6 lg:space-y-16 lg:px-8">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                    <div class="bg-rose-500 shadow-inner rounded p-4">
                        <div>
                            <div class="text-white"><img src="images/android-chrome-512x512.png" alt="Logo candypop" style="max-width: 5.5em;"></div>
                        </div>
                        <p class="mt-4 max-w-xs text-white"> CandyPop is niet veel actief op sociale media maar als je ons wilt volgen ben je welcome om dat te doen. </p>
                        <ul class="mt-8 flex  p-2 rounded shadow-inner bg-rose-600">
                            <li>
                                <a href="https://www.facebook.com/people/CandyPopBE/100054499223109/" rel="noreferrer" target="_blank" class="transition hover:opacity-75 text-blue-500">
                                    <span class="sr-only">Facebook</span>
                                    <svg class="h-6 w-6 bg-white rounded" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                            <li class="pl-8">
                                <a href="https://www.instagram.com/candypop.be/" rel="noreferrer" target="_blank" class="transition hover:opacity-75 text-white">
                                    <span class="sr-only">Instagram</span>
                                    <svg class="h-6 w-6 bg-gradient-to-br from-violet-500 via-red-500 to-yellow-500 rounded" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:col-span-2 lg:grid-cols-2 shadow-inner rounded bg-rose-500 p-4">
                        <div>
                            <p class="font-medium text-white">Informatie</p>
                            <ul class="mt-6 space-y-4 text-sm">
                                <li>
                                    <a href="#" class="transition hover:opacity-75 text-gray-50"> About us </a>
                                </li>
                                <li>
                                    <a href="#" class="transition hover:opacity-75 text-gray-50"> Legal notice </a>
                                </li>
                                <li>
                                    <a href="#" class="transition hover:opacity-75 text-gray-50"> Terms annd conditions </a>
                                </li>
                                <li>
                                    <a href="#" class="transition hover:opacity-75 text-gray-50"> Refund policy </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-medium text-white">Site maker</p>
                            <ul class="mt-6 space-y-4 text-sm">
                                <li>
                                    <a href="https://larsvanholland.com/" class="transition hover:opacity-75 text-gray-50"> larsvanholland.com </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="mt-8 justify-center flex  p-2 rounded">
                    <li class="text-xs text-white"> &copy; 2023. CandyPop. All rights reserved. </li>
                    <a href="" rel="noreferrer" class="transition-all hover:opacity-75">
                        <li class="text-white pl-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4  h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                    </a>
                    </li>
                </ul>
            </div>
        </footer>
</body>

</html>