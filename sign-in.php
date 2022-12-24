<!DOCTYPe html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SignIn Page</title>
    <!--stylesheet link-->
    <link rel="stylesheet" href="css/sign-in.css">

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
                    <a href="sign-up.php">SignUp</a>
                    <a href="#">SignIn</a>

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
           <div class = "login">
               
                <div class = "frm">
                    <h3>Sign In</h3>
                    <form action = "backend/sign-in-servelet.php" method = "POST">
                       
                        <div class="form-outline mb-4">
                          <input type="email" name = "email" class="form-control" required/>
                          <label class="form-label" for="form2Example1">Email address</label>
                        </div>
                      
                        
                        <div class="form-outline mb-4">
                          <input type="password" name = "password" class="form-control" required/>
                          <label class="form-label" for="form2Example2">Password</label>
                        </div>
                      
                       
                        <div class="row mb-4">
                          <div class="col" style="text-align: center;">
                            <a href="#!">Forgot password?</a>
                          </div>
                        </div>
                      
                        
                        <center>
                          <div class = "signin">
                            <button type="submit" class="btn btn-block mb-4 sign" name = "signin">Sign in</button>
                          </div>
                        </center>
                      
                       
                        <div class="text-center">
                          <p>Not a member? <a href="sign-up.html">Register</a></p>
                          <p>or sign in with:</p>

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
    <script src = "js/sign-in.js"></script>
    <script src = "https://code.jQuery.com/jquery-3.6.0.min.js"></script>
</body>
</html>