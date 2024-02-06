<?php
    ini_set('display_errors', 1);
    require 'connection.php';
    
?>
<?php


if(isset($_COOKIE["msgsend"])){
    $send = $_COOKIE["msgsend"];
    if($send == "sendmsg"){
        echo  "<div class='verify' style='
        background-color: #96e5ffa2;
        width: fit-content;
        padding: 1.2rem;
        border-radius: 15px;
        position: absolute;
        left: 5%;
        top: 6.2rem;
        z-index: 2;
        display: flex;
        align-items: center;
        gap: 0.9rem;
        animation: slideFromLeft 3.3s ease;
        
        ' id='card_verif'>
        <img style='width: 35px;height: 35px;' src='./img/mail.png' />
        <h2>Mail send successfully</h2>
    </div>";
    setcookie("msgsend" , "");
    }
}

if(isset($_POST["send"])) {

    $fullname = mysqli_real_escape_string($con, $_POST["fullname"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $message = mysqli_real_escape_string($con, $_POST["message"]);

    mysqli_query($con , "insert into contact values('$fullname','$email','$message');");
    setcookie("msgsend" ,"sendmsg");
    header("location: contact.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../src/img/store.png">
    <link href="../dist/output.css" rel="stylesheet">
    <link href="./input.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CONTACT FORM</title>
</head>
<script>
            setTimeout(function() {
                document.getElementById("card_verif").style.display = "none";
                console.log("remove")
            }, 2000);
            function done(){
                console.log("done");
            }
          </script>
<body class="font-Inter select-none text-white">
    <body class="font-Inter select-none text-white">
    <header  class="">
            <div class="flex justify-between items-center shadow-2xl  bg-800 py-4 px-10 text-txt-main">
                <a href="./index.php"><img class="w-40 lg:w-56" src="../src/img/Logo main.png" ></a>
                <div>
                    <ul class="hidden lg:flex space-x-5 items-center">
                        <li class=""><a class="font-bold hover:text-500" href="../src/index.php">HOME</a></li>
                        <div class="relative flex items-center space-x-2 cursor-pointer">
                            <div class="font-bold hover:text-500 space-x-1">
                                <button id="closeshoptab" onclick="openshop()" >SHOP</button>
                                <i class="fa-solid  fa-caret-down"></i>
                            </div>
                            <ul id="openshoptab" class="hidden text-center absolute top-[60PX] left-[-65px] bg-800 w-40 py-4 rounded-md shadow-md">
                                <li class="hover:bg-700 py-2"><a href="../src/index.php#collection">Collection</a></li>
                                <li class="hover:bg-700 py-2"><a href="../src/index.php#brands">Brands</a></li>
                                <li class="hover:bg-700 py-2"><a href="../src/index.php#recommended">Recommended</a></li>
                            </ul>
                        </div>
                        <li><a class="font-bold hover:text-500" href="../src/contact.php">CONTACT US</a></li>
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
                                <a class="hover:bg-400 hover:text-900 font-bold bg-600 py-2 px-10 rounded-md" href="../src/login.php">LOGIN</a>
                                <a class="hover:bg-400 hover:text-900 font-bold bg-500 py-2 px-10 rounded-md" href="../src/sign_up.php">SIGN UP</a>
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
                                        <a class="hover:bg-400 hover:text-900 font-bold bg-600 py-2 px-10 rounded-md" href="../src/login.php">LOGIN</a>
                                        <a class="hover:bg-400 hover:text-900 font-bold bg-500 py-2 px-10 rounded-md" href="../src/sign_up.php">SIGN UP</a>
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
                                        <li class=" hover:bg-200 hover:text-950 py-2"><a href="../src/index.php#collection">Collection</a></li>
                                        <li class=" hover:bg-200 hover:text-950 py-2"><a href="../src/index.php#brands">Brands</a></li>
                                        <li class=" hover:bg-200 hover:text-950 py-2"><a href="../src/index.php#recommended">Recommended</a></li>
                                    </ul>
                                </div>
                            </div>
                            <li class="py-2 hover:bg-200 hover:text-950" ><a href="../src/contact.php">CONTACT US</a></li>
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
    </header>
    <section class="my-20 mx-5">
        <div class="bg-100 rounded-xl shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] mx-auto flex flex-col items-center gap-5 py-5 lg:py-16 lg:max-w-[1200px]">
            <div>
                <h1 class="text-900 font-bold text-2xl md:text-4xl">CONTACT US</h1>
            </div>
            <form method="post" enctype="multipart/form-data" class="w-full grid grid-cols-1 justify-items-center gap-5 max-w-[300px] lg:flex lg:flex-row lg:items-start lg:justify-between lg:max-w-[900px]" action="">
                <div class="space-y-2 w-full md:w-full md:flex md:flex-col md:gap-1 ">
                    <div class="relative ">
                        <input required name="fullname" class="bg-200 w-full text-900 placeholder:text-950/45 py-2 px-10 rounded-lg outline-none" type="text" placeholder="Full Name">
                        <i class="fa-solid text-900 absolute top-[11px] left-[20px] fa-user"></i>
                    </div>
                    <div class="relative">
                        <input required name="email" class="bg-200 w-full text-900 placeholder:text-950/45 py-2 px-10 rounded-lg outline-none" type="email" placeholder="Email">
                        <i class="fa-solid absolute text-900 top-[12px] left-[18px] fa-envelope"></i>
                    </div>
                    <div class="relative w-full">
                        <textarea required name="message" class="bg-200 w-full  text-900 placeholder:text-950/45 py-2 px-10 rounded-lg outline-none" rows="10" placeholder="Message"></textarea>
                        <i class="fa-solid absolute text-900 top-[12px] left-[18px]  fa-message"></i>
                    </div>
                    <div class="relative w-full " >
                        <button type="submit" name="send" id="send" class="bg-500 relative hover:bg-600 w-full py-2 rounded-lg">SEND</button>
                        <i class="fa-solid absolute text-50 top-[10px] left-[100px] lg:top-[12px] lg:left-[200px] fa-paper-plane"></i>
                    </div>
                </div>
                <div class="">
                    <img class="w-[200px] md:w-[300px] lg:w-[660px]" src="../src/img/undraw_notebook_ask4.svg" alt="">
                </div>
            </form>
        </div>
    </section>
    <footer class="bg-800  md:fixed md:w-full md:-bottom-0 md:left-0">
        <div class="container mx-auto mt-5 py-6">
            <div class=" grid gap-5 justify-center md:grid-cols-2 md:justify-items-center lg:grid-cols-4">
                <img class="w-[250px]" src="../src/img/Logo main.png" alt="">
                <div class="flex flex-col">
                    <h1 class="font-bold text-2xl">HELP & INFO</h1>
                    <a class="py-1 px-2 hover:text-neutral-900 font-semibold cursor-pointer" href="../src/contact.php">CONTACT US</a>
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
    <script src="./main.js"></script>
</body>
</html>