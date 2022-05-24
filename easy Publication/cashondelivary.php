<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        /* Cart Items Details */
        .cart-page {
            margin: 30px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        .cart-info {
            display: flex;
            flex-wrap: wrap;
        }

        th {
            text-align: left;
            padding: 5px;
            color: #fff;
            background: #D82148;
            font-weight: normal;
        }

        td {
            padding: 10px 5px;
        }

        td input {
            width: 40px;
            height: 30px;
            padding: 5px;
        }

        td a {
            color: #D82148;
            font-size: 12px;
        }

        td img {
            width: 80px;
            height: 80px;
            margin-right: 10px;
        }

        .total-price {
            display: flex;
            justify-content: flex-end;
        }

        .total-price table {
            border-top: 3px solid #D82148;
            width: 100%;
            max-width: 400px;
        }

        td:last-child {
            text-align: right;
        }

        th:last-child {
            text-align: right;
        }
    </style>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
    <title>Easy Publication</title>
</head>

<body>
    <section id="header">
        <a href="index.php"><img src="./img/logo.png" class="logo" alt="" width="250px"></a>

        <div class="search">
            <div class="ui icon input">
                <input class="prompt" type="text" placeholder="Search">
                <i class="search icon"></i>
            </div>
            <div class="results"></div>
        </div>

        <div>
            <ul id="navbar">
                <li><a href="about.php">About</i></a></li>
                <li><a href="sign-in.php">Sign-in & Accounts </i></a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-plus"></i> Cart</a></li>

            </ul>
        </div>
    </section>



    <br><br><br><br><br><br><br><br><h1 class='text-sucess text-center'>Your Order Placed Sucessfully </h1></p><br><br><br><br>

    <a href="index.php"><button type="button"  class="btn btn-outline-success btn-lg">Continue Shopping</button></a>




    <!-- footer -->




    <!-- JS for Toggle menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/625c31d87b967b11798b1fbb/1g0s25dvo';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->



</body>

</html>