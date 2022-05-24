<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Semantic UI CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">

    <title>Dashboard</title>
    <style type="text/css">
        body {
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: grayscale;
        }

        #sidebar {
            position: fixed;
            height: 100vh;
            background-color: #f5f5f5;
            padding-top: 68px;
            padding-left: 0;
            padding-right: 0;
        }

        #sidebar .ui.menu>a.item {
            padding: 10px 20px;
            line-height: 20px;
            color: #2c6d00;
            border-radius: 0 !important;
            margin-top: 0;
            margin-bottom: 0;
        }

        #sidebar .ui.menu>a.item.active {
            background-color: #42b733;
            color: white;
            border: none !important;
        }

        #sidebar .ui.menu>a.item:hover {
            background-color: #eee;
            color: #237c32;
        }

        #content {
            padding-top: 56px;
            padding-left: 20px;
            padding-right: 20px;
        }

        #content h1 {
            font-size: 36px;
        }

        #content .ui.dividing.header {
            width: 100%;
        }

        .ui.centered.small.circular.image {
            margin-top: 14px;
            margin-bottom: 14px;
        }

        .ui.borderless.menu {
            box-shadow: none;
            flex-wrap: wrap;
            border: none;
            padding-left: 0;
            padding-right: 0;
        }

        .ui.mobile.only.grid .ui.menu .ui.vertical.menu {
            display: none;
        }
    </style>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
</head>
<?php session_start();
?>
<body id="root">







    <div class="ui tablet computer only padded grid">
        <div class="ui inverted borderless top fixed fluid menu">
            <a class="header item"href="index.php">Easy Publications</a>
           
            </div>
        </div>
    </div>

    <div class="ui padded grid">
        <div class="three wide tablet only three wide computer only column" id="sidebar">
            <div class="ui vertical borderless fluid text menu">

                <div class="ui container center aligned">
                    <div class="padded">
                        <img src="<?php echo $_SESSION["image"]?>" alt="" class="ui centered circular small image">
                        <h3 class="ui row header"><?php echo $_SESSION["username"]?></h3>
                    </div>
                </div>

                <div class="ui hidden divider"></div>

                <a class="item " href="A_dashboard.php"><i class="icon clipboard outline"></i> Profile</a>
              
                <a class="item" href="A_review.php"><i class="icon clipboard outline"></i> Review book</a>
                <a class="item" href="A_report_r.php"><i class="icon clipboard outline"></i> Review report </a>
                <a class="item active" href="A_updatebook.php"><i class="icon clipboard outline"></i> Update book Details </a>

                <div class="ui hidden divider"></div>

        
               
               


              <a class="item"href="Logout.php"><i class="icon bar chart"></i> Logout</a>
            </div>
        </div>

        <div class="sixteen wide mobile thirteen wide tablet thirteen wide computer right floated column" id="content">
            <!-- MAIN CONTENT -->
            <div class="ui thirteen wide padded column">
                <div class="ui padded grid">
                    <div class="ui column">

                        <h2 class="ui huge dividing header">
                           Search Book By Id
                        </h2>

                        <br>

                      

                        <div class="ui segment">

                        <form action="A_updatebook.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">BOOK ID:</label>
    <input type="text" class="form-control" name="book" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">example:10001</div>
  </div>
 
  <button type="submit" class="btn btn-dark">Search</button>
</form>
                         

 

                        </div>
                    </div>
                </div>
            </div>


            <?php 
  require_once('connection.php');


  if(isset($_GET['book'])){
$p=$_GET['book'];

$sql="select *
from book
where book_id='$p'";
  $products=$con->query($sql);
  if($products->num_rows >0){
  while($product=$products->fetch_assoc()){



 
  ?>





            <div class="ui padded grid">
                    <div class="ui column">

                        <h2 class="ui huge dividing header">
                           Search result
                        </h2>

                        <br>

                      

                        <div class="ui segment">

                        <form action="A_update_button.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">BOOK ID:</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" value="<?php echo $product["book_id"]?>" name="id">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Book Name:</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp"value="<?php echo $product["Title"]?>" name="bn">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Book price:</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp"value="<?php echo $product["Price"]?>" name="price">
  
    </div>
    <div class="row">
    <div class="col-4">
            <embed type="application/pdf" src="preview/<?php echo $product['preview']?>" width="400" height="300">
            <div class="form-group col-md-4">
  
    <input type="file"  name="pre">
  </div>

            <h4>Book Preview pdf</h4>
            </div>
            <div class="col-4">
            <embed type="application/pdf" src="book/<?php echo $product['filelink']?>" width="400" height="300">

            <div class="form-group col-md-4">
  
    <input type="file" name="book">
  </div>
            <h4>Book pdf </h4>
            </div>
            <div class="col-4">
            <img src="bookcover/<?php echo $product['b_image']?>" alt="not" width="200px" />
            <div class="form-group col-md-4">
    
    <input type="file" class="form-control-file"   name="img">
  </div>


            <h4>Book image</h4>
            </div></div>
 <br>
  <button type="submit" class="btn btn-success">Update</button>
</form>
                         

 

                        </div>
                    </div>
                </div>
            </div>

<?php
  }}}
  ?>




        </div>

    </div>
    </div>


    </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".ui.toggle.button").click(function () {
                $(".mobile.only.grid .ui.vertical.menu").toggle(100);
            });
        });
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