<?php
require 'connection.php';

if (isset($_POST["addshoe"])) {

    $name = $_POST["name"];
    $price = $_POST["price"];
    if ($_FILES["imageshoe"]) {

        $image_name = $_FILES["imageshoe"]["name"];

        $imgname = uniqid() . $image_name;

        move_uploaded_file($_FILES["imageshoe"]["tmp_name"], "./img/Shoes/" . $imgname);

        mysqli_query($con, "insert into shoes values ('$name','$imgname','$price','l1');");
    }
    header('location:admindashboard.php');
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/store.png">
    <link href="../Css/input.css" rel="stylesheet">
    <link href="../Css/adm.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
    <style>
        .inputfile {
            width: 0px;
            height: 0px;
        }

        .file-input-wrapper .imageshoe {
            display: inline-block;
            padding: 10px 15px;
            background-color: #c4c4c4;
            border-start-start-radius: 6px;
            border-bottom-left-radius: 6px;
            color: #000;
            cursor: pointer;
        }

        .file-input-wrapper {
            border: 1px solid gray;
            border-radius: 6px;
        }

        .file-input-wrapper .imageshoe:hover {
            background-color: #9B9897;
        }
    </style>
</head>

<body class="font-Inter select-none text-white h-screen">
    <header class="">
        <div class="actionbar">
            <img src="./img/Logo main.png">
            <h2>Admin Dashboard</h2>
        </div>
    </header>
    <div class="tablayout">
        <div class="flex tablayoutheader" style="justify-content: space-between;align-items: center;">
            <div>
                <button class="tab1" onclick="selecttab1()">List shoes</button>
                <button class="tab2" onclick="selecttab2()">Add shoe</button>
            </div>
            <div><a href="./index.php">View Store</a></div>
        </div>
        <div id="tablayoutcontent" class="tablayoutcontent">

            <form method="post" >
                <table class="li_shoes">
                    <head>
                        <tr>
                            <th>id</td>
                            <th>name</td>
                            <th>discount</td>
                            <th>prix</td>
                            <th>operations</td>
                        </tr>
                        <?php
                        $li = [];
                        $shoes = mysqli_query($con, "select * from shoes");
                        foreach ($shoes as $shoe) : ?>
                            <tr>
                                <?php $li[] = $shoe["name"]; ?>
                                <td>
                                    <img style="width:50px ;height: 50px;" src="./img/Shoes/<?php echo $shoe["image"] ?>" />
                                </td>
                                <td> <?php echo $shoe["name"] ?></td>
                                <td>0%</td>
                                <td> <?php echo $shoe["price"] ?></td>
                                <td>
                                    <button  class="update">Update</button>
                                    <button class="delete">Delete</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                </table>
            </form>

        </div>
    </div>


    <script>
        function seefilename(input) {
            const fileNameSpan = document.getElementById("file_name");
            if (input.files.length > 0) {
                fileNameSpan.textContent = input.files[0].name;
            } else {
                fileNameSpan.textContent = "";
            }
        }
        selecttab1();

        function selecttab1() {
            const tab_li = document.getElementById("tablayoutcontent");
            tab_li.innerHTML = `<table class="li_shoes">
                <head>
                <tr>
                    <th>id</td>
                    <th>name</td>
                    <th>discount</td>
                    <th>prix</td>
                    <th>operations</td>
                </tr>
                <?php
                $li = [];
                $shoes = mysqli_query($con, "select * from shoes");
                foreach ($shoes as $shoe) : ?>
                <tr>
                        <?php $li[] = $shoe["name"]; ?>
                    <td>
                        <img style="width:50px ;height: 50px;" src="./img/Shoes/<?php echo $shoe["image"] ?>" />
                    </td>
                    <td> <?php echo $shoe["name"] ?></td>
                    <td>0%</td>
                    <td> <?php echo $shoe["price"] ?></td>
                    <td>
                    <button class="update">Update</button>
                    <button class="delete">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>

            <?php if (count($li) == 0) : ?>
                <div class="flex" style=' width : 100% ; height:300px ;
         justify-content: center;align-items: center;'>
                    No Data fount , try to add new shoes
                    </div>
                <?php endif; ?>
    `;
        }

        function selecttab2() {
            const tab_li = document.getElementById("tablayoutcontent");
            tab_li.innerHTML = `
            <form class="flex" style="flex-direction: column;gap: 0.7rem;" method="post" enctype="multipart/form-data">
                <div class="flex row_item_addshoe" style="flex-direction: column;gap: 0.5rem;">
                    <label style="margin-left:0.3rem ;" for="">Name</label>
                    <input required  style="padding: 0.45rem 0.8rem;border: 1px solid gray;
                    border-radius: 6px;" type="text" name="name" id="name">
                </div>
                <div class="flex row_item_addshoe" style="flex-direction: column;gap: 0.5rem;">
                    <label style="margin-left:0.3rem ;" for="">Prix</label>
                    <input required  style="padding: 0.5rem 0.8rem;border: 1px solid gray;
                    border-radius: 6px;" type="text" name="price" id="price">
                </div>
                <div class="flex" style="flex-direction: column;gap: 0.8rem;">
                    <div>
                        <label style="margin-left:0.3rem ;">Image shoe</label>
                    </div>
                    <div class="file-input-wrapper">
                        <label class="imageshoe" for="imageshoe">Choose a file</label>
                        <input required  class="inputfile" type="file" name="imageshoe" id="imageshoe" onchange="seefilename(this)" />
                        <span id="file_name">vdvsdv</span>
                    </div>

                </div>
                <div style="margin-top: 25px;">
                    <label  for="addshoe" style="cursor: pointer; width: fit-content; color: #fff;border-radius: 0.5rem; padding: 0.9rem 2rem;background-color: #000;">Add</label>
                    <input  type="submit" name="addshoe" id="addshoe" style="width: 0px;height: 0px;opacity: 0;" />

                </div>

            </form>
    `;
        }
    </script>

</body>

</html>