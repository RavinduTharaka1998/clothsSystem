<?php 

require_once('connection.php');
session_start();
 if( $_SESSION['name'] == null){
     header('location:sign-in.php');
}

if(isset($_POST['editcloth'])){
	
	$id = $_POST['id'];
	$select = mysqli_query($conn,"select * from cloth where order_id = '$id'");
	$row = mysqli_fetch_assoc($select);
}
?>

<!DOCTYPe html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashborad Page</title>
    <!--stylesheet link-->
    <link rel="stylesheet" href="css/editcloth.css">

    <!-- bootstrap css-->
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!--icon url-->
    <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">

    <link rel="icon" type="image/png" href="https://img.icons8.com/external-wanicon-lineal-color-wanicon/2x/external-clothes-shop-shop-and-store-wanicon-lineal-color-wanicon.png" sizes="100x100">
</head>
<body>
    
            <br>
            <div class = "top">
                <p>You are only $99.00 away from free shipping!</p>
            </div>
            <div class = "top-middle">
                <div class = "top-middle-left">
                    <a href="dashboard.php"><h2>Fashion Store</h2></a>
                    <input type = "text" placeholder="search....">
                </div>
                <div class = "top-middle-right">
                    <a href="mydress.php"></i>My Dress <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class = "profile">
                    <div class = "profile-details">
                        <h6>Welcome <?php echo $_SESSION['name'] ?></h6>
                        <img src = "data:image/webp;base64,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">
                        <a href="backend/logout-servelet.php">SignOut</a>
                    </div>
                </div>
            </div>
            <div class = "top-bottom">
                <p>Black Friday In July Sale! Biggest Savings Of The Season Up To 85% Off using code: BLCKJL7</p>
            </div>

            <hr>
            <div class = "rows">
                <div class = "colum c-left">
                   <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/files/WhatsApp_Image_2022-07-07_at_4.40.54_PM.jpg?v=1657204902">
                </div>
                <div class = "colum">
                    <div class = "add">
                        <div class = "frm">
                            <h3>Update Your Cloth..</h3>
                            <br>
                            <form action = "backend/cloth-update-servelet.php" method = "POST">
                                <input type = "text" name = "id"  value="<?=$row['order_id'];?>" hidden>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Cloth Id</label>
                                    <input type="text" name = "c_id" value="<?=$row['cloth_id'];?>" class="form-control" required readonly/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">Description</label>
                                    <textarea type="email" name = "description"  class="form-control"  required readonly><?php echo $row['description']; ?></textarea>
                                </div>
                            
                            
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example2">Price</label>
                                    <input type="text" name = "price" value="<?=$row['price'];?>" class="form-control" readonly required/>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example2">Date</label>
                                    <input type="date" name = "date" value="<?=$row['date'];?>" class="form-control"  required/>
                                </div>
                            

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example2">Address</label>
                                    <textarea type="text" name = "address" class="form-control"  onInput="checkcpassword()" required><?php echo $row['address']; ?></textarea>
                                </div>

                                <center>
                                <div class = "signup">
                                    <button type="submit" name = "update" class="btn btn-block mb-4 sign">Update</button>
                                </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
            <hr>

          <div class = "tittle-3">
            <h2>SHOP BY CATEGORY</h2>
          </div>

          <div class = "bottom-cloths">
            <div class = "cloth">
                <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/files/WhatsApp_Image_2022-06-01_at_12.54.28_AM.jpg?v=1654098193">
            </div>
            <div class = "cloth">
                <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/files/WhatsApp_Image_2022-06-01_at_12.54.29_AM_1.jpg?v=1654098211">
            </div>
            <div class = "cloth">
                <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/files/WhatsApp_Image_2022-06-01_at_12.54.29_AM.jpg?v=1654098228">
            </div>
            <div class = "cloth">
                <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/files/WhatsApp_Image_2022-06-01_at_6.31.59_PM.jpg?v=1654098247">
            </div>
        </div>

        <div class = "footer-top">
              <h5>Follow us on Instagram #dressbarn</h5>
              <p>Check out our favorite looks and inspiration here</p>
        </div>
        <div  class = "footer-bottom">
            <h4>SUBSCRIBE TO OUR NEWSLETTER</h4>
            <p>Sign up for our newsletter to get exclusive deals, insider news, and more.</p>
        </div>
    <!-- </div> -->
    <!--Javascript Links-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>
</html>