<?php 

require_once('connection.php');
session_start();
 if( $_SESSION['name'] == null){
     header('location:sign-in.php');
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
    <link rel="stylesheet" href="css/dashboard.css">

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
             <a href="#"><h2>Fashion Store</h2></a>
             <input type = "text" placeholder="search....">
        </div>
        <div class = "top-middle-right">
             <a href="mydress.php"></i>My Dress <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class = "profile">
             <div class = "profile-details">
                <h6>Welcome <?php echo $_SESSION['name'] ?></h6>
                <img src = "data:image/webp;base64,UklGRowGAABXRUJQVlA4IIAGAADQIACdASqJAIkAPpE+nEsloqKhp5G6+LASCWkAFtP+Jf7J2p/4no6fTsqy4z+Q/bD8r5Q94PAC/Hv55/k/yo4EEAH1Q/4nhQakap3597AH8t/yn/K9mP+h/Z3zufTH/p9w3+b/27rg+j6Zu4KN799pch2gP/vq3n/xuX4v9zC/a7b6nGMowO/ElMKOrkn5/9w+XOFudKVvPEtZnVNb0ViPfxAZvjkUhUBKae0FmoixCWAm3nbXsd5kUR/2e4vYw5csGU6UoUVnxp7RHTmREB27tT8R9FnJE1x+exxRDEim8V7dywz1fKZP6Isu+zAKCPwr9U9BFWd3MKqlRpGB8YGW5Dm507fmAP6Avm3rkOtAAP77IZrobYOOvWn4j/I0gg4gtme4Gmi6aPQ5Dc/ybcb5cCJite++93GnDrr2wY1Ak77GqurpCjbs2G7mbVnGMwGmrRSMA0sCFm0qPr/Df/3p9BHonSahekTiaK7DzqolBHTi1TGcns8RTwmre4pplH5nN6Dzn6uw3p2AqJhpXei7dhDEGaN0q6F9T/cpaOJ4qOEtzQSPY7hycLgpa+yB5uVV/LA2BMBO71NFWwey9acpS8enXBVvAmJIkFh6eaS0xoHxDJaTiFqrStcGhXepRS+JepR+iPtDCDz4LH9FjKaSb67eYeDnNa1ASmfT/STetCh2YjmUs8gWEvG525tuaqL9rOmp2iXkXvfdWdYhYDAKYLzCVDv1BaL9WhU3XhhJH+0hfKHOz6mCer/auEn+Oy6/OaBRP8FPUpshXH0LjPEfCtehaPuAQKDa022f0l7q5TCwQFF7FIXi6DAvHfWs6v7KeV5W99ya2mpmTjOtbYN0uH3s0qlD/u+oYIoF0YF+O0Y9yQ+6x0DWoWJ8St6n2fNFK9ogSBLdISm7KmiKH9QkU4VCNy1fAdRuSzu1+qZd8eWkhbwRjgCUtJbavBalXdy9/HOM5Dmkxxwtqkv8HrevJ5KUmJMla7+Za89DcvCpDjRa5kbCsTArjuX2We+6Y/qbYm/r6SkluArUXbJsaVPNXN9cRARY+1HaYdOfr4Irzqfy093QbT1P4Aw3TMrZ9OjN61qrW9d//dAaRaiVBT+IVYv2S184GEweIRkjRQmhNAjvd2iqzVDNcrX7LH1jEybqSKpb8sRkhYT4vrPjK84Y5CNjPf7LnHxs3C6aXrXx+RZ1ClCs1uCe7FxtG/ZbcStQApL/8myYjmT38O2POWjUGXHlRPfy2ep9rXUN0XXcTyFUDeXbYmOkuhO+9Mpj/urYI1hO4YQjBN9f8Fz1DuadCwlbRvtlkiDlAZ11xulAfwuUr4mU6zvz16B6uVg6TQlYuimzAJZr/HFHjLuFB6lG/Xplzp8FlmEhHGr7ijZlnbYyTOWiVkdiWT85LBRSpcO+tENnHkEWxyzv9fYzRyRehHUCa670fmGbxhHDrx8yAEFEyCaPDf73Srm55UXH2pVLDwNYUyiIjP/QD3G0VX8zsgcWrzebapNfUaxB27M1I129/UdBkrzSPN6nD19XTt9RtSuPTD97OiQmfXNaGWreY3GifFvF7whhcr97Z+W8W66cK7vJi5k3LeNzl03wWAoVTRG5j36063H/De0ZaebqIIOMiWgIMgZs3px389Qh0d+lqA2PFT0gcNfRkcKHFCXlwiEw9vY8eixDiBxbkvjuxouVzRE8AuZx/YrvFy3LRzml1LvlyPTqxM7bJ/9sF7D6lF+Dpoy0hgIedM/2ydGOtWita9+Zze1k2tXOESRxLaHg6zX5LGWfzoLnV686lNxq1rzMDt2Hf88H18ZONTD0wfGsQLN1k0QirnZPt9ZOFQD2sJCsDj7PRXPUi0CJtcYVGf3SuOLIi+l9MHuSVexfkukczYtluOIg7kzv2MRea7340sh9BhNwQ4oYq97UTMgpkKGBpYybto/XXu9bsKeUs/mn8OSA3ZjOFjlR4czW/7wRTuRi73r3ldx7SplTHUSrWmiFwn6kN+v9uZ9wBxLtqxRsHWzp3YFHgRbbxMSsXfPWz/CGlUw2alCRESC3FW0JmucZZ++PBC6iIBlevKjx3qs5JlaSMU0BUDKFLGYD1HBnyCPNsSd5yFJaXgj3f3Febs4kjVJZzLB/OWziLtVjauDjb020T854t4GuuNFCf6XwDpxs0ElvYwlpreFpq+jul84ca4h9Bu+cdJMHIjIEEW59geBLHs7u8PmQAAAAAA==">
                <a href="backend/logout-servelet.php">SignOut</a>
            </div>
        </div>
    </div>
    <div class = "top-bottom">
        <p>Black Friday In July Sale! Biggest Savings Of The Season Up To 85% Off using code: BLCKJL7</p>
    </div>
    
          <div class = "tittle-1">
            <h2>FRESH NEW LOOKS</h2>
          </div>

          <div class = "sale">
             <div class = "sale-outer">
                <div class = "sale-inner">
                    <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/products/VER3519DW_Navy-Wine_alt1_300x.jpg?v=1656524041">
                    <p>Figueroa and Flower Floral Chiffon Maxi Dress - Plus</p>
                    <h6>$73.95</h6>
                    <h5 class = "sale-price">Sale $66.56</h5>
                    <a href="addcloth.php?id=001&description=Figueroa and Flower Floral Chiffon Maxi Dress - Plus&price=$66.56
                             &image=https://cdn.shopify.com/s/files/1/0281/3837/3173/products/VER3519DW_Navy-Wine_alt1_300x.jpg?v=1656524041">Buy</a>
                </div>
                <div class = "sale-inner">
                    <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/products/ODE3677W_black_rust_alt9_300x.jpg?v=1656448317">
                    <p>Roz and Ali Bell Sleeve Polka Dots Bubble Top</p>
                    <h6>$73.95</h6>
                    <h5 class = "sale-price">Sale $66.56</h5>
                    <a href="addcloth.php?id=002&description=Roz and Ali Bell Sleeve Polka Dots Bubble Top&price=$66.56
                             &image=https://cdn.shopify.com/s/files/1/0281/3837/3173/products/ODE3677W_black_rust_alt9_300x.jpg?v=1656448317">Buy</a>
                </div>
                <div class = "sale-inner">
                    <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/products/APP3641W_navy_alt4_300x.jpg?v=1656448680">
                    <p>Roz and Ali Raglan Step Sleeve Bubble Blouse</p>
                    <h6>$73.95</h6>
                    <h5 class = "sale-price">Sale $66.56</h5>
                    <a href="addcloth.php?id=003&description=Roz and Ali Raglan Step Sleeve Bubble Blouse&price=$66.56
                             &image=https://cdn.shopify.com/s/files/1/0281/3837/3173/products/APP3641W_navy_alt4_300x.jpg?v=1656448680">Buy</a>
                </div>
                <div class = "sale-inner">
                    <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/products/VER3512WD_Orange-Purple_ft_300x.jpg?v=1656448221">
                    <p>Roz and Ali 3/4 Sleeve Popover Side Tie Rouche</p>
                    <h6>$73.95</h6>
                    <h5 class = "sale-price">Sale $10.56</h5>
                    <a href="addcloth.php?id=004&description=Roz and Ali 3/4 Sleeve Popover Side Tie Rouche&price=$10.56
                             &image=https://cdn.shopify.com/s/files/1/0281/3837/3173/products/VER3512WD_Orange-Purple_ft_300x.jpg?v=1656448221">Buy</a>
                </div>
                <div class = "sale-inner">
                    <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/products/VIC2778W_candyapple-red_alt2_300x.jpg?v=1656447839">
                    <p>Sara Michelle Short Sleeve Georgette Print Blouse</p>
                    <h6>$73.95</h6>
                    <h5 class = "sale-price">Sale $50.56</h5>
                    <a href="addcloth.php?id=005&description=Sara Michelle Short Sleeve Georgette Print Blouse&price=$50.56
                            &image=https://cdn.shopify.com/s/files/1/0281/3837/3173/products/VIC2778W_candyapple-red_alt2_300x.jpg?v=1656447839">Buy</a>
                </div>
             </div>

             <br>
             <!-------------------------------------------------------------------------------------------------------------------------------->
             <div class = "sale-outer">
                <div class = "sale-inner">
                    <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/products/Eye_Catching_3_4_Sl_Print_Babydoll_Dress_F1_2048x2670_416cc950-07ab-4cef-af55-c053825f11dd_300x.jpg?v=1656974442">
                    <p>Poppi Short Rouche Sleeve Ruffle Neck Blouse</p>
                    <h6>$73.95</h6>
                    <h5 class = "sale-price">Sale $60.56</h5>
                    <a href="addcloth.php?id=006&description=Poppi Short Rouche Sleeve Ruffle Neck Blouse&price=$60.56
                             &image=https://cdn.shopify.com/s/files/1/0281/3837/3173/products/Eye_Catching_3_4_Sl_Print_Babydoll_Dress_F1_2048x2670_416cc950-07ab-4cef-af55-c053825f11dd_300x.jpg?v=1656974442">Buy</a>
                </div>
                <div class = "sale-inner">
                    <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/products/3QTR_BELL_SLEEVE_BUBBLE_BLOUSE_F1_300x.jpg?v=1652220446">
                    <p>Figueroa and Flower Mixed Floral Peasant - Plus</p>
                    <h6>$73.95</h6>
                    <h5 class = "sale-price">Sale $40.56</h5>
                    <a href="addcloth.php?id=007&description=Figueroa and Flower Mixed Floral Peasant - Plus&price=$40.56
                             &image=https://cdn.shopify.com/s/files/1/0281/3837/3173/products/3QTR_BELL_SLEEVE_BUBBLE_BLOUSE_F1_300x.jpg?v=1652220446">Buy</a>
                </div>
                <div class = "sale-inner">
                    <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/products/SHORT_RAGLAN_STEP_SLEEVE_BUBBLE_BLOUSE_F1_2048x2670_add7093a-c3a1-4f26-8cdf-661fda5cea82_300x.jpg?v=1656970782">
                    <p>Figueroa and Flower Roll Tab Sl Multicolored Blouse - Plus</p>
                    <h6>$73.95</h6>
                    <h5 class = "sale-price">Sale $80.56</h5>
                    <a href="addcloth.php?id=008&description=Figueroa and Flower Roll Tab Sl Multicolored Blouse - Plus&price=$80.56
                            &image=https://cdn.shopify.com/s/files/1/0281/3837/3173/products/SHORT_RAGLAN_STEP_SLEEVE_BUBBLE_BLOUSE_F1_2048x2670_add7093a-c3a1-4f26-8cdf-661fda5cea82_300x.jpg?v=1656970782">Buy</a>
                </div>
                <div class = "sale-inner">
                    <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/products/3QTR_SLV_2PKT_ROUCHE_SD_TIES_POPOVR_BLS_F1_1_2048x2670_22f7f2f5-45c0-4325-b8ab-caf957eaefc6_300x.jpg?v=1656974337">
                    <p>Roz and Ali 3/4 Sleeve Trim Detail Bubble Blouse - Plus</p>
                    <h6>$73.95</h6>
                    <h5 class = "sale-price">Sale $34.56</h5>
                    <a href="addcloth.php?id=009&description=Roz and Ali 3/4 Sleeve Trim Detail Bubble Blouse - Plus&price=$34.56
                             &image=https://cdn.shopify.com/s/files/1/0281/3837/3173/products/3QTR_SLV_2PKT_ROUCHE_SD_TIES_POPOVR_BLS_F1_1_2048x2670_22f7f2f5-45c0-4325-b8ab-caf957eaefc6_300x.jpg?v=1656974337">Buy</a>
                </div>
                <div class = "sale-inner">
                    <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/products/ELBW_PUFF_SLV_KEYHOLE_BACK_TRAPEZE_F1_2048x2670_a7ab6050-3244-4559-8686-8a8076cde1c6_300x.jpg?v=1656975522">
                    <p>Figueroa and Flower Print Tiered Maxi Dress - Plus</p>
                    <h6>$73.95</h6>
                    <h5 class = "sale-price">Sale $66.56</h5>
                    <a href="addcloth.php?id=010&description=Figueroa and Flower Print Tiered Maxi Dress - Plus&price=$50.56
                             &image=https://cdn.shopify.com/s/files/1/0281/3837/3173/products/ELBW_PUFF_SLV_KEYHOLE_BACK_TRAPEZE_F1_2048x2670_a7ab6050-3244-4559-8686-8a8076cde1c6_300x.jpg?v=1656975522">Buy</a>
                </div>
             </div>
          </div>

          <div class = "tittle-2">
            <h2>OPTIONS TO EXPLORE </h2>
          </div>

          <div class = "delivery">
             <div class = "delivery-1">
                  <h4>ALWAYS THE PERFECT GIFT</h4>
                  <p>Share the love with a dressbarn gift card. Put a smile 
                    on her face by giving her access to 1000s of products on our site.</p>
                  <h6><u>Shop Gift Cards</u></h6>
             </div>
             <div class = "delivery-2">
                  <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/files/gift_card_imagery_1080x.jpg?v=1645823142">
            </div>
          </div>
          <br>
          <div class = "delivery">
            <div class = "delivery-1">
                 <h4>UNLOCK EVEN BIGGER SAVINGS</h4>
                 <p>Get free shipping, extra discounts on your favorite styles, and exclusive offers you'll absolutely love.</p>
                 <h6><u>JOIN DRESSBARN REWARDS</u></h6>
            </div>
            <div class = "delivery-2">
                 <img src = "https://cdn.shopify.com/s/files/1/0281/3837/3173/files/357468_Medium_wash_380939_Medium_vintage_life_029_1080x.jpg?v=1647469364">
           </div>
         </div>

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

        <div class = "top-back-image-2"> </div>

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