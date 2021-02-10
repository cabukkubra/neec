<!DOCTYPE html>
<html>

    <head>
        <?php include("inc/head.php");?>
    </head>

<body>

<?php include("inc/header.php");?>


<div class="container searchPadding">
    <div class="row">
        <div class="col-md-12 margin21">
            <img class="mobilAbout1" src="assets/img/about1.jpg" alt="">
        </div>
    </div>
    <div class="row mrtop30">
        <div class="col-md-6">
            <img class="mobilAbout2" src="assets/img/about2.jpg" alt="">
        </div>
        <div class="offset-md-1 col-md-5">
            <p class="aboutTitle"> ABOUT </p>
            <p class="aboutText">Founded in 2011 by Chris Stamp - Stampd, the west coast 'avantstreet' lifestyle brand - represents contemporary luxury that has evolved past high street-wear while retaining its iconic styling cues.</p>
            <p class="aboutText">The line has grown to include a full lifestyle collection with 10 capsules born under the Stampd legacy, each being coveted by a new breed of U.S. driven, global fashion influencers, garnering them the award for the Best Men's Wear Designer in America by GQ.</p>
            <p class="aboutText">Stampd is at the forefront of a new movement that at once embraces modern youth culture and the timeless appeal of high quality product mixed with simple form. -GQ</p>
            <p class="aboutText">With quality always preceding quantity, the brand continues to gain inspiration from west and east coast cultures, growing methodically, their valued customers held in the highest regard.</p>
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