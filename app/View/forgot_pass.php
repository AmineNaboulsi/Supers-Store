<?php setcookie("salama" ,"salama")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/store.png">
    <link href="../Css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Password</title>
</head>
<body class="font-Inter select-none text-white">
    <header  class="">
        <div class="flex justify-between items-center shadow-2xl  bg-800 py-4 px-10 text-txt-main">
            <a href="./index.php"><img class="w-40 lg:w-56" src="../img/Logo main.png" ></a>
            <div>
                <ul class="hidden lg:flex space-x-5 items-center">
                    <li class=""><a class="font-bold hover:text-500" href="./index.php">HOME</a></li>
                    <div class="relative flex items-center space-x-2 cursor-pointer">
                        <div class="font-bold hover:text-500 space-x-1">
                            <button id="closeshoptab" onclick="openshop()" >SHOP</button>
                            <i class="fa-solid  fa-caret-down"></i>
                        </div>
                        <ul id="openshoptab" class="hidden text-center absolute top-[60PX] left-[-65px] bg-800 w-40 py-4 rounded-md shadow-md">
                            <li class="hover:bg-700 py-2"><a href="./index.php#collection">Collection</a></li>
                            <li class="hover:bg-700 py-2"><a href="./index.php#brands">Brands</a></li>
                            <li class="hover:bg-700 py-2"><a href="./index.php#recommended">Recommended</a></li>
                        </ul>
                    </div>
                    <li><a class="font-bold hover:text-500" href="./contact.php">CONTACT US</a></li>
                    <li><a class="font-bold hover:text-500" href="#">ABOUT US</a></li>
                    <li><a class="font-bold hover:text-500" href="#">BLOG</a></li>
                </ul>
            </div>
            <div class="hidden lg:flex items-center relative space-x-7 cursor-pointer">
                <div>
                    <div class="space-x-1 hover:text-500 select-none">
                        <button class="font-bold " id="currency" onclick="openprice()">CURRENCY</button>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                    <ul id="openCURRENCY" class="hidden text-center z-10 select-none absolute  top-[60PX] left-[-20px] bg-800 w-40 py-4 px-4 rounded-md shadow-md">
                        <li class="cry-btn hover:bg-500 text-sm py-2">USD</li>
                        <li class="cry-btn hover:bg-500 text-sm py-2">EUR</li>
                        <li class="cry-btn hover:bg-500 text-sm py-2">GBP</li>
                        <li class="cry-btn hover:bg-500 text-sm py-2">JPY</li>
                        <li class="cry-btn hover:bg-500 text-sm py-2">CAD</li>
                        <li class="cry-btn hover:bg-500 text-sm py-2">MAD</li>
                    </ul>
                </div>
                <div class="relative space-x-2 select-none ">
                    <input id="search-bar" type="text" class="hidden absolute z-10 top-[59px] right-[-60px] bg-900 rounded-md outline-none py-3 px-3 transition-all focus:animate-searchbaranimation focus:w-[400px] w-[200px]" placeholder="Search">
                    <i id="searchicon" class="fa-solid hover:text-txt-hover text-xl fa-magnifying-glass"></i>
                </div>
                    <i class="fa-solid hover:text-500 text-xl fa-cart-shopping"></i>
                    <div class="relative">
                        <i id="usermenuopen" class="fa-solid hover:text-500 text-xl fa-circle-user"></i>
                        <div id="usermenucloser" class="hidden absolute top-[60px] right-0 bg-800 px-16 py-6 rounded-md shadow-md text-nowrap space-x-2">
                            <a class="hover:bg-400 hover:text-900 font-bold bg-600 py-2 px-10 rounded-md" href="./login.php">LOGIN</a>
                            <a class="hover:bg-400 hover:text-900 font-bold bg-500 py-2 px-10 rounded-md" href="./sign_up.php">SIGN UP</a>
                        </div>
                    </div>
            </div>
            <!-- Mobile-Menu -->
            <div class="lg:hidden z-10">
                <div class="flex justify-between items-center space-x-7">
                    <div class="space-x-4">
                        <div class="space-x-3">
                            <span>
                                <i id="usermenuopenphone"  class="fa-solid hover:text-500 text-xl cursor-pointer fa-circle-user"></i>
                                <div id="usermenucloserphone" class="hidden absolute top-[75px] right-1 bg-800 px-16 py-6 rounded-md shadow-md text-nowrap space-x-2">
                                    <a class="hover:bg-400 hover:text-900 font-bold bg-600 py-2 px-10 rounded-md" href="./login.php">LOGIN</a>
                                    <a class="hover:bg-400 hover:text-900 font-bold bg-500 py-2 px-10 rounded-md" href="./sign_up.php">SIGN UP</a>
                                </div>
                            </span>
                            <i class="fa-solid hover:text-500 text-xl cursor-pointer fa-cart-shopping"></i>
                            
                        </div>
                    </div>
                    <i id="openmenunav" class="fa-solid text-4xl cursor-pointer fa-bars"></i>
                </div>
                <div id="closemenunav" class="hidden lg:hidden absolute  top-[70px] left-0  bg-950/95 w-full py-2 font-bold text-lg text-center">
                    <ul >
                        <li class="py-2 hover:bg-200 hover:text-950" ><a href="#">HOME</a></li>
                        <div class="">
                            <li id="menuopnershop" class="py-2 hover:bg-200 hover:text-950" ><a href="#">SHOP</a></li>
                            <div id="menuhidershop" class="bg-800 hidden">
                                <ul class="menushoperitems">
                                    <li class=" hover:bg-200 hover:text-950 py-2"><a href="./index.php#collection">Collection</a></li>
                                    <li class=" hover:bg-200 hover:text-950 py-2"><a href="./index.php#brands">Brands</a></li>
                                    <li class=" hover:bg-200 hover:text-950 py-2"><a href="./index.php#recommended">Recommended</a></li>
                                </ul>
                            </div>
                        </div>
                        <li class="py-2 hover:bg-200 hover:text-950" ><a href="/src/contact.php">CONTACT US</a></li>
                        <li class="py-2 hover:bg-200 hover:text-950" ><a href="#">ABOUT US</a></li>
                        <li class="py-2 hover:bg-200 hover:text-950" ><a href="#">BLOG</a></li>
                        <div>
                            <li id="currencyopener" class="py-2 hover:bg-200 hover:text-950" ><a href="#">CURRENCY</a></li>
                            <div id="currencyhider" class="bg-800 hidden">
                                <ul class="">
                                    <li class="currencytxtchanger hover:bg-200 hover:text-950 py-2"><a href="#">USD</a></li>
                                    <li class="currencytxtchanger hover:bg-200 hover:text-950 py-2"><a href="#">EUR</a></li>
                                    <li class="currencytxtchanger hover:bg-200 hover:text-950 py-2"><a href="#">GBP</a></li>
                                    <li class="currencytxtchanger hover:bg-200 hover:text-950 py-2"><a href="#">JPY</a></li>
                                    <li class="currencytxtchanger hover:bg-200 hover:text-950 py-2"><a href="#">CAD</a></li>
                                    <li class="currencytxtchanger hover:bg-200 hover:text-950 py-2"><a href="#">MAD</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space-x-2 py-2">
                            <input type="text" class="outline-none px-2 py-1 bg-200 rounded-md" placeholder="Search">
                            <i class="fa-solid hover:text-500 py-2 text-xl fa-magnifying-glass"></i>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <script src="../Js/main.js"></script>
    </header>
    <section>
        <div class="bg-200 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] mx-2 md:mx-20 lg:mx-auto lg:max-w-[800px] my-10 px-10 py-10 flex flex-col items-center text-center gap-5 rounded-md">
            <div>
                <h1 class="text-2xl font-bold text-900">PASSWORD</h1>
            </div>
            <div class="flex flex-col gap-5 ">
                <div class="relative">
                    <input class="py-2 px-12 rounded-md bg-100 placeholder:text-900/50 text-900 outline-none" type="password" placeholder="New Password">
                    <i class="fa-solid  absolute top-[10px] left-[14px] text-900 text-xl fa-lock"></i>
                </div>
                <div class="relative">
                    <input class="py-2 px-12 rounded-md bg-100 placeholder:text-900/50 text-900 outline-none" type="password" placeholder="Confirm Password">
                    <i class="fa-solid  absolute top-[10px] left-[14px] text-900 text-xl fa-lock"></i>
                </div>
                    <a class="bg-500 hover:bg-600 font-semibold py-3 px-10 rounded-md" href="">Confirm</a>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-800  md:fixed md:w-full md:-bottom-0 md:left-0">
        <div class="container mx-auto mt-5 py-6">
            <div class=" grid gap-5 justify-center md:grid-cols-2 md:justify-items-center lg:grid-cols-4">
                <img class="w-[250px]" src="../img/Logo main.png" alt="">
                <div class="flex flex-col">
                    <h1 class="font-bold text-2xl">HELP & INFO</h1>
                    <a class="py-1 px-2 hover:text-neutral-900 font-semibold cursor-pointer" href="/src/contact.php">CONTACT US</a>
                    <a class="py-1 px-2 hover:text-neutral-900 font-semibold cursor-pointer " href="">FAQ</a>
                </div>
                <div class="flex flex-col">
                    <h1 class="font-bold text-2xl">ABOUT SUPRO</h1>
                    <a class="py-1 px-2 hover:text-neutral-900 font-semibold cursor-pointer " href="">ABOUT US</a>
                    <a class="py-1 px-2 hover:text-neutral-900 font-semibold cursor-pointer " href="">BLOG</a>
                </div>
                <div class="flex flex-col">
                    <h1 class="font-bold text-2xl">ONLINE SHOP</h1>
                    <a class="py-1 px-2 hover:text-neutral-900 font-semibold cursor-pointer" href="">GIFT CARTS</a>
                    <a class="py-1 px-2 hover:text-neutral-900 font-semibold cursor-pointer" href="">FREE CARTS</a>
                    <a class="py-1 px-2 hover:text-neutral-900 font-semibold cursor-pointer" href="">STORE LOCATION</a>

                </div>
            </div>
        </div>
        <div  class="bg-950 flex flex-col-reverse text-center justify-center py-3 gap-5 lg:flex lg:flex-row lg:justify-around lg:items-center">
            <div >
                <h1 class="text-sm text-300">@copyrights 2024 SUPERS. All rights reserved. | For permission requests, contact: SUPERS, By Emial</h1>
            </div>
            <div class="space-x-4 text-2xl">
                <i class="fa-brands hover:text-600 cursor-pointer fa-pinterest"></i>
                <i class="fa-brands hover:text-600 cursor-pointer fa-square-instagram"></i>
                <i class="fa-brands hover:text-600 cursor-pointer fa-youtube"></i>
                <i class="fa-brands hover:text-600 cursor-pointer fa-linkedin"></i>
                <i class="fa-brands hover:text-600 cursor-pointer fa-x-twitter"></i>
                <i class="fa-brands hover:text-600 cursor-pointer fa-square-facebook"></i>
            </div>
        </div>
    </footer>
</body>
</html>