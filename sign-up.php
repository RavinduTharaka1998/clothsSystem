<!DOCTYPe html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SignUp Page</title>
    <!--stylesheet link-->
    <link rel="stylesheet" href="css/sign-up.css">

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
                    <a href="index.php"><h2>Fashion Store</h2></a>
                    <input type = "text" placeholder="search....">
                </div>
                <div class = "top-middle-right">
                    <a href="#">SignUp</a>
                    <a href="sign-in.php">SignIn</a>

                    <button type="button" class="btn btn-link">
                      <i class="fab fa-facebook-f"></i>
                    </button>
                    <button type="button" class="btn btn-link">
                      <i class = "fab fa-instagram"></i>
                    </button>
                    <button type="button" class="btn btn-link">
                      <i class = "fab fa-twitter"></i>
                    </button>
                    <button type="button" class="btn btn-link">
                      <i class = "fab fa-youtube"></i>
                    </button>
                </div>
            </div>
            <div class = "top-bottom">
                <p>Black Friday In July Sale! Biggest Savings Of The Season Up To 85% Off using code: BLCKJL7</p>
            </div>
           <br>
           <hr>
           <div class = "reg">
                <div class = "frm">
                    <h3>Join with Us Free.....</h3>
                    <br>
                    <form action = "backend/sign-up-servelet.php" method = "POST">
                        <div class="form-outline mb-4">
                            <input type="text" name = "name" class="form-control" required/>
                            <label class="form-label" for="form2Example1">Full Name</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="email" name = "email" id="mail" class="form-control" onInput="checkEmail()" required/>
                          <label class="form-label" for="form2Example1">Email address</label>
                          <br>
                          <span id = "check_email"></span>
                        </div>
                       
                      
                        <div class="form-outline mb-4">
                          <input type="password" name = "password" id="password" class="form-control"  onInput="checkpassword()" required/>
                          <label class="form-label" for="form2Example2">Password</label>
                          <br>
                          <span id = "check_password" style = 'font-size: 15px; color: red;'></span>
                        </div>
                       

                        <div class="form-outline mb-4">
                            <input type="password" name = "cpassword" id="cpassword" class="form-control"  onInput="checkcpassword()" required/>
                            <label class="form-label" for="form2Example2">Confirm Password</label>
                            <br>
                            <span id = "check_cpassword" style="color: red; font-size: 15px;"></span>
                        </div>

                        <center>
                          <div class = "signup">
                            <button type="submit" name = "signup" class="btn btn-block mb-4 sign" id = "signup">SignUp</button>
                          </div>
                        </center>
                      
                        
                        <div class="text-center">
                          <p>Already Have you Acoount ? <a href="sign-in.html">Login</a></p>
                          <p>or sign up with:</p>

                          <div class = "social-media">
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                              </button>
                              <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                              </button>
                              <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                              </button>
                          </div>
                        </div>
                      </form>
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
    <script src = "js/sign-up.js"></script>
    <script src = "https://code.jQuery.com/jquery-3.6.0.min.js"></script>
    
</body>
</html>