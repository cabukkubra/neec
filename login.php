<!DOCTYPE html>
<html>

<head>
    <?php include("inc/head.php");?>
</head>

<body>

<?php include("inc/header.php");?>

<div class="container-fluid forgotHeight">
    <div class="row pt130v2 forgotHeightv2">
        <div class="col-md-6 borderSign">
            <form class="loginForm">
                <div class="form-group">
                    <p class="signInTitle">SIGN IN</p>
                    <input type="email" class="loginEmail"  placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="loginPassword"  placeholder="Password">
                </div>
                <div class="form-group">
                    <button class="signInBtn">SIGN IN</button>
                </div>
                <div class="form-group">
                    <a class="forgotText" href="forgotpassword.php">forgot password?</a>
                </div>
            </form>

        </div>

        <div class="col-md-6">
            <div class="accountLogin">
                <p class="signInTitle">NEW ACCOUNT</p>
                <p class="newText">Faster checkout,<br>
                    multiple shipping addresses,<br>
                    track orders and more.</p>
                <a href="#">
                     <button class="createBtn">CREATE ACCOUNT</button>
                </a>
            </div>
        </div>

        <div class="col-md-12 text-center">
            <p class="continueText">CONTINUE AS A GUEST</p>
            <a href="checkout.
            html"><button class="loginContinueBtn">CONTINUE</button></a>
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