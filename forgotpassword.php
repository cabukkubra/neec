<!DOCTYPE html>
<html>

<head>
    <?php include("inc/head.php");?>
</head>

<body>

    <?php include("inc/header.php");?>


    <div class="container-fluid forgotHeight">
        <div class="row pt130v2 forgotHeightv2">
            <div class="offset-3 col-md-6">
                <form class="loginForm">
                    <div class="form-group">
                        <p class="resetTitle">RESET PASSWORD</p>
                        <p class="sendText">We will send you an email to reset your password.</p>
                        <input type="email" class="loginEmail"  placeholder="Email">
                    </div>
                    <div class="form-group">
                        <button class="submitBtn">SUBMIT</button>
                    </div>
                    <div class="form-group margintop7">
                        <a class="forgotText" href="login.php"><i class="fa fa-caret-left cancelCaret" aria-hidden="true"></i>
                            cancel
                        </a>
                    </div>
                </form>
            </div>


            <div class="col-md-12 text-center">
                <p class="continueText">CONTINUE AS A GUEST</p>
                <a href="checkout.php"><button class="loginContinueBtn">CONTINUE</button></a>
            </div>
        </div>

    </div>
    
    <?php include("inc/footer.php");?>

    <script type="text/javascript">
        $(window).scroll(function () {
            if($(this).scrollTop() > 50) {
                $('header').addClass('stick');
            } else {
                $('header').removeClass('stick');
            }
        });
    </script>
</body>

</html>