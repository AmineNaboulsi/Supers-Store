<?php
require './connection.php';

if (isset($_POST["buttonshoe"])) {

    if (isset($_FILES["image"])) {
        $image_name = $_FILES["image"]["name"];
        $filename = uniqid() . $image_name;
        move_uploaded_file($_FILES["image"]["tmp_name"], "./img/Shoes/" . $filename);
        mysqli_query($con, "insert into shoes values('name 2','$filename','300$','test');");
    }
    echo  "<script>
    console.log('nadi');
           </script>";
    /*       
    echo "<pre style='color:black'>";
    print_r($_FILES);
    echo "</pre>";
    */
}
?>

<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/store.png">
    <link href="../Css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>SHOE STORE</title>
    <style>
        .border{
            border : 1px solid red ; 
            
        }
        .card_product{
            width: 250px;
            height: auto;
            border-radius: 12px;
            background: linear-gradient(
                rgba(233, 233, 233, 0.477) ,
                #49498a49
            );
            box-shadow: 2px 2px 20px rgb(220, 220, 220);
            font-family: "roboto" , sans-serif;
            cursor: pointer;
            transition: 0.5s;
        }
        .card_product:hover{
            box-shadow: 2px 2px 20px rgb(175, 175, 175);
            border: 1px solid rgba(128, 128, 128, 0.571);
        }
        .card_product_content_header{
            display: flex;
            height: 50px;
            margin-left: 1rem;
            margin-right: 1rem;
            justify-content: space-between;
            align-items: center;
        }
        .card_product_content_header button{
            all: unset;
            background-color: black;
            padding: 0.5rem 1.2rem;
            color : #fff;
            border-radius: 18px;
            font-size: 0.8rem;
        }
        .card_product_content_header button:hover{
            box-shadow: 2px 2px 20px rgba(179, 179, 179, 0.627);
            font-size: 0.83rem;
        }
        .card_product_img{
            width: fit-content;
            height: 250px;
            transition: 0.7s;
        }
        .card_product_img:hover{
            scale: 1.1;
            rotate: 20deg;
        }
        .card_product_content_main{
            margin-left: 1rem;
            color :#000;
        }
        .card_product_content_footer{
            color :#000;
            margin-left: 1rem;
        }
        .card_product_content_footer h3{
            margin-top: 8px;
            font-weight: bold;
            color :#000;
        }
        .card_product_content{
            margin-bottom:1.2rem ;
            height: 85px;
            color :#000;
        }
    </style>
</head>

<body class="font-Inter select-none text-white">
    <header class="">
        <div class="flex justify-between items-center shadow-2xl  bg-800 py-4 px-10 text-txt-main">
            <a href="./index.php"><img class="w-40 lg:w-56" src="../img/Logo main.png"></a>
            <div>
                <ul class="hidden lg:flex space-x-5 items-center">
                    <li class=""><a class="font-bold hover:text-500" href="./index.php">HOME</a></li>
                    <div class="relative flex items-center space-x-2 cursor-pointer">
                        <div class="font-bold hover:text-500 space-x-1">
                            <button id="closeshoptab" onclick="openshop()">SHOP</button>
                            <i class="fa-solid  fa-caret-down"></i>
                        </div>
                        <ul id="openshoptab" class="hidden text-center absolute top-[60PX] left-[-65px] bg-800 w-40 py-4 rounded-md shadow-md">
                            <li class="hover:bg-700 py-2"><a href="../index.php#collection">Collection</a></li>
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
                                <i id="usermenuopenphone" class="fa-solid hover:text-500 text-xl cursor-pointer fa-circle-user"></i>
                                <div id="usermenucloserphone" class="hidden absolute top-[85px] right-3 bg-800 px-10 py-6 rounded-md shadow-md text-nowrap space-x-2">
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
                    <ul>
                        <li class="py-2 hover:bg-200 hover:text-950"><a href="./index.php">HOME</a></li>
                        <div class="">
                            <li id="menuopnershop" class="py-2 hover:bg-200 hover:text-950"><a href="#">SHOP</a></li>
                            <div id="menuhidershop" class="bg-800 hidden">
                                <ul class="menushoperitems">
                                    <li class=" hover:bg-200 hover:text-950 py-2"><a href="./index.php#collection">Collection</a></li>
                                    <li class=" hover:bg-200 hover:text-950 py-2"><a href="./index.php#brands">Brands</a></li>
                                    <li class=" hover:bg-200 hover:text-950 py-2"><a href="./index.php#recommended">Recommended</a></li>
                                </ul>
                            </div>
                        </div>
                        <li class="py-2 hover:bg-200 hover:text-950"><a href="./contact.php">CONTACT US</a></li>
                        <li class="py-2 hover:bg-200 hover:text-950"><a href="#">ABOUT US</a></li>
                        <li class="py-2 hover:bg-200 hover:text-950"><a href="#">BLOG</a></li>
                        <div>
                            <li id="currencyopener" class="py-2 hover:bg-200 hover:text-950"><a href="#">CURRENCY</a></li>
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
    <section class="bg-100">
        <?php $rows = mysqli_query($con, "select * from shoes order by RAND() limit 1;"); ?>
        <?php foreach ($rows as $row) : ?>
            <div class="flex flex-col items-center justify-center text-center py-20 gap-10 lg:flex lg:flex-row-reverse lg:text-start lg:justify-center">
                <img class="rotate-90 max-w-[300px] lg:max-w-[550px] transition-all animate-shoeanimation" src="../img/Shoes/<?php echo $row["image"] ?>">
                <div class=" space-y-4  text-neutral-900">
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold">GOOD & <span class="text-600 hover:text-800">TRENDY</span></h1>
                    <!-- Pc-Screen -->
                    <p class="hidden lg:flex text-lg font-semibold">Elevate your footwear game with our curated <br> collection of premium shoes <br> From casual kicks to sophisticated heels</p>
                    <!-- Mobile-Screen -->
                    <p class="lg:hidden text-lg font-semibold max-w-[400px]">Elevate your footwear game with our curated collection of premium shoes From casual kicks to sophisticated heels</p>
                    <button class="bg-600 text-100 hover:bg-800 text-xl font-semibold py-2 px-20">SHOP</button>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    <section id="collection">
        <div class="text-center py-4">
            <h1 class="text-600 font-bold">BEST SHOE</h1>
            <h1 class="text-950 text-3xl lg:text-6xl font-extrabold">BRAND OF THE WEEK</h1>
        </div>
        <div class="flex flex-col items-center gap-5">
            <div style="display: flex;flex-wrap: wrap;justify-content: center;row-gap: 2rem;column-gap: 1rem;" >
                <?php $rows = mysqli_query($con, "select * from shoes order by RAND() limit 10;"); ?>
                <?php foreach ($rows as $row) : ?>
                    <div class=" card_product">
                        <div style="display: flex;justify-content: center;">
                            <img class="card_product_img" src="../img/Shoes/<?php echo $row["image"]; ?>" alt="">
                        </div>
                        <hr>
                        <div class="card_product_content">
                            <div class="card_product_content_header">
                                <h2 style="font-size: 1.3rem;font-weight: bold;"><?php echo $row["name"]; ?></h2>
                                <button>+ Add to card</button>
                            </div>
                            <div style="font-size: .5rem;" class="card_product_content_main">
                                <p>Nike</p>
                            </div>
                            <div style="font-size: .9rem;" class="card_product_content_footer">
                                <h3><?php echo $row["price"]; ?></h3>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
            
        </div>
    </section>
    <section id="brands">
        <?php $rows = mysqli_query($con, "select * from shoes order by RAND() limit 1;"); ?>
        <?php foreach ($rows as $row) : ?>
            <div class="bg-950 my-5 ">
                <div class="flex flex-col items-center justify-center text-center py-6 lg:flex lg:flex-row lg:text-start lg:justify-center">
                    <img class="rotate-90 max-w-[350px] lg:max-w-[750px] transition-all animate-shoeanimation" src="../img/Shoes/<?php echo  $row["image"]; ?>">
                    <div class=" space-y-4  text-neutral-900">
                        <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-50">HIROSHI <span class="text-600 hover:text-800">FIJIWANA'S</span></h1>
                        <p class="text-50 text-lg font-semibold">Elevate your footwear game with our curated <br> collection of premium shoes <br> From casual kicks to sophisticated heels</p>
                        <button class="bg-600 text-100 hover:bg-800 text-xl font-semibold py-2 px-20">SHOP</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    <section id="recommended">
        <div class="text-center py-4">
            <h1 class="text-600 font-bold">BEST SHOE</h1>
            <h1 class="text-950 text-3xl lg:text-6xl font-extrabold">BRAND OF THE WEEK</h1>
        </div>
        <div class="flex flex-col items-center gap-5">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:flex lg:flex-row lg:items-center lg:justify-center lg:gap-5">

                <?php $rows = mysqli_query($con, "select * from shoes order by RAND() limit 4;"); ?>
                <?php foreach ($rows as $row) : ?>
                    <div class=" card_product">
                        <div style="display: flex;justify-content: center;">
                            <img class="card_product_img" src="../img/Shoes/<?php echo $row["image"]; ?>" alt="">
                        </div>
                        <hr>
                        <div class="card_product_content">
                            <div class="card_product_content_header">
                                <h2 style="font-size: 1.3rem;font-weight: bold;"><?php echo $row["name"]; ?></h2>
                                <button>+ Add to card</button>
                            </div>
                            <div style="font-size: .5rem;" class="card_product_content_main">
                                <p>Nike</p>
                            </div>
                            <div style="font-size: .9rem;" class="card_product_content_footer">
                                <h3><?php echo $row["price"]; ?></h3>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <footer class="bg-800">
        <div class="container mx-auto   mt-5 py-6">
            <div class=" grid gap-5 justify-center md:grid-cols-2 md:justify-items-center lg:grid-cols-4">
                <img class="w-[250px]" src="../img/Logo main.png" alt="">
                <div class="flex flex-col">
                    <h1 class="font-bold text-2xl">HELP & INFO</h1>
                    <a class="py-1 px-2 hover:text-neutral-900 font-semibold cursor-pointer" href="./contact.php">CONTACT US</a>
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
        <div class="bg-950 flex flex-col-reverse text-center justify-center py-3 gap-5 lg:flex lg:flex-row lg:justify-around lg:items-center">
            <div>
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
    <script src="../Js/main.js"></script>
</body>

</html>