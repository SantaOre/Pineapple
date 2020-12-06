<!-- don't show long error in input field -->
<?php 
    if(!isset($email)){
        $email = '';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="soc_ic/all.css">
    <script src="js/js.js"></script>
    <title>Pineapple</title>
</head>
<body>
     <div>
        <img class="img" src="img/image_summer.jpg" alt="">
    </div>
     
    <div class="base"></div>
        <nav >
            <div>
                <img class="union"src="img/Union.svg" alt="">
                <img class="pineapple" src="img/pineapple..svg" alt="">
                <a class="links_1" href="javascript:void(0);">About</a>
                <a class="links_2" href="javascript:void(0);">How it works</a>
                <a class="links_3" href="javascript:void(0);">Contact</a>
            </div>
        </nav>
        <div>
            <h1 class="heading"> Subscribe to newsletter</h1>
            <p class="subheading">Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
        </div>    
                
        <form id="both" action="mysql.php" name="form" method="POST" onsubmit="return ((validate() & checked())==1)" >            
            <input  type="text" name="email" placeholder="Type your email address here…" id="input" value="<?php echo htmlspecialchars($email) ?>" />
                    <?php if(isset($email_error)){ ?>
                        <p id="p"> <?php echo $email_error ?></p>
                    <?php } ?>
            <img class="line" src="img/Line.png" alt="">
            <svg class="arrow"  width="24" height="14" viewBox="0 0 24 14" fill="" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.7071 0.2929C17.3166 -0.0976334 16.6834 -0.0976334 16.2929 0.2929C15.9023 
                0.683403 15.9023 1.31658 16.2929 1.70708L20.5858 5.99999H1C0.447693 5.99999 0 6.44772 0 6.99999C0
                 7.55227 0.447693 7.99999 1 7.99999H20.5858L16.2929 12.2929C15.9023 12.6834 15.9023 13.3166 16.2929 
                 13.7071C16.6834 14.0976 17.3166 14.0976 17.7071 13.7071L23.7071 7.70708C24.0977 7.31658 24.0977
                  6.6834 23.7071 6.2929L17.7071 0.2929Z" fill=""/>
                </svg>
            <input id="submit" name="submit" value="" type="submit" />
            <p id="p"></p>

        <div class="group">
            <input type="checkbox" id="check" value="check" name="check">
            <label for="check" class="checkmark" value="check"></label>
            
        </div>
            <p class="text" >I agree to <a class="link" href="javascript:void(0);"> terms of service</a></p>
        </form>

        <div>
            <img class="h_line" src="img/Line.svg" alt="">
        </div>

        <div class="soc_ic">
            <a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a>
            <a href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
            <a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
            <a href="javascript:void(0);"><i class="fab fa-youtube"></i></a>
        </div>
</body>
</html>