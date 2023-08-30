<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <title>SKO - Shop</title>
    <link rel="stylesheet" href="dist/output.css">
   <link href="/css/style.css" rel="stylesheet" />
</head>

<body class="max-h-full">

    <!-- Start Navbar -->
    <nav class="navbar absolute bg-transparent w-full text-black py-4 lg:py-2 px-5">
        <div class="px-4 mx-auto items-center flex justify-between relative">

            <!-- Start Menu Button -->
            <div class="lg:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-gray-400 " x-show="!showMenu" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Start Logo -->
            <div class="px-4">
                <a id="logo" class="py-6 text-xl hidden lg:static lg:block" href="">SKO<sup
                        style="font-family: Poppins; font-size: 14px;">®</sup></a>
            </div>
            <!-- Start Menu Navbar -->
            <div id="nav-menu"
                class="hidden absolute pt-4  bg-white shadow-lg rounded-lg max-w-[150px] w-full top-full lg:block lg:static lg:max-w-fit lg:shadow-none lg:bg-transparent  lg:pl-20">
                <ul id="navbar-nav" class="block lg:flex">
                    <li class="group"><a class="mx-8 py-2  lg:py-0 lg:mx-14" href="/">Home</a></li>
                    <li class="group"><a class="mx-8 py-2  lg:py-0 lg:mx-14" href="shop">Shop</a></li>
                    <li class="group"><a class="mx-8 py-2  lg:py-0 lg:mx-14" href="ourstory">Our Story</a></li>
                    <li class="group"><a class="mx-8 py-2  lg:py-0 lg:mx-14" href="blog">Blog</a></li>
                </ul>
            </div>

            <!-- Start Search -->
            <div class="w-5/6 md:w-1/4 xl:w-1/5">
                <form class="flex mx-3" action="">
                    <input class="focus:outline-none w-full mr-5 rounded-lg px-2" type="text" />
                    <button class="p-[6px] hover:bg-black hover:text-white rounded-full">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </form>
            </div>
            <!-- End Search -->

        </div>
    </nav>
    <!-- End Navbar -->

    <section>
        <div class="container px-6 xl:px-32 w-full pt-[150px] justify-center">
            <div class="w-full ml-50 ">
                <p class="text-2xl" style="font-weight: 400px;">Sepatu Compass</p>
            </div>
            <div id="card-scroll"
                class="w-full h-full pr-32 mt-4 flex flex-no-wrap overflow-x-scroll space-x-2 xl:space-x-4 scrolling-touch items-center">
                <div id="card" class="flex-none w-1/2 xl:w-1/3 border-[1px] border-orange-300 rounded-md">
                    <div class="max-w-full  h-2/3"><img class="" src="img/Cmp1.png" alt=""></div>
                    <div class="w-fit mx-2 h-1/3">
                        <p id="card-title" class="pt-10">Compass Gazelle Low Black Gum</p>
                        <p id="card-price" class="pt-5 pb-4 xl:pb-8">IDR 408.000</p>
                    </div>
                </div>
                <div id="card" class="flex-none w-1/2 xl:w-1/3 border-[1px] border-orange-300 rounded-md">
                    <div class="max-w-full h-2/3"><img class="" src="img/Cmp1.png" alt=""></div>
                    <div class="mx-2 h-1/3">
                        <p id="card-title" class="pt-10">Compass Gazelle Low Black Gum</p>
                        <p id="card-price" class="pt-5 pb-4 xl:pb-8">IDR 408.000</p>
                    </div>
                </div>
                <div id="card" class="flex-none w-1/2 xl:w-1/3 border-[1px] border-orange-300 rounded-md">
                    <div class="max-w-full  h-2/3"><img class="" src="img/Cmp1.png" alt=""></div>
                    <div class="mx-2 h-1/3">
                        <p id="card-title" class="pt-10">Compass Gazelle Low Black Gum</p>
                        <p id="card-price" class="pt-5 pb-4 xl:pb-8">IDR 408.000</p>
                    </div>
                </div>
                <div id="card" class="flex-none w-1/2 xl:w-1/3 border-[1px] border-orange-300 rounded-md">
                    <div class="max-w-full h-2/3"><img class="" src="img/Cmp1.png" alt=""></div>
                    <div class="mx-2 h-1/3">
                        <p id="card-title" class="pt-10">Compass Gazelle Low Black Gum</p>
                        <p id="card-price" class="pt-5 pb-4 xl:pb-8">IDR 408.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="dist/script.js"></script>
</body>

</html>