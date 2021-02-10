<!DOCTYPE html>
<html>

<head>
    <?php include("inc/head.php");?>
</head>

<body>

    <?php include("inc/header.php");?>

    <div class="container searchPadding">
        <div class="row">
            <div class="margin22">
                <div class="col-12 order-md-12">
                    <div class="card">
                        <img src="assets/img/journal2.jpg" class="journalDetail-img" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row margintop50">
            <div class="col-md-7 col-12 paddingleft0 order-12">
                <img class="journalDetailImgLeft" src="assets/img/journalDetail1.jpg" alt="">
                <img class="journalDetailImgLeft" src="assets/img/journalDetail2.jpg" alt="">
            </div>

            <div class="col-md-5 col-12 order-1">
                <p class="dateText">JUL 05 '19</p>
                <p class="journalDetailTitle">INDEPENDENCE DAY</p>
                <p class="journalDetailText">Happy 4th of July. American Flag shot on location in Venice Beach, California.</p>
                <img class="journalLeftImg" src="assets/img/journalLeft1.jpg" alt="">
                <img class="journalLeftImg" src="assets/img/journalLeft2.jpg" alt="">
            </div>
        </div>

        <div class="row marginbottom40">
            <div class="col-6">
                <a href="#" class="previousEntry">
                    <i class="fa fa-caret-left previousLeftCaret" aria-hidden="true"></i>PREVIOUS
                    ENTRY
                </a>
            </div>
            <div class="col-6 text-right">
                <a href="#" class="nextEntry">
                    NEXT ENTRY <i class="fa fa-caret-right nextRightCaret" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <?php include("inc/footer.php");?>

    <script type="text/javascript">
        $(window).scroll(function () {
            if ($(this).scrollTop() > 25) {
                $('header').addClass('stick');
            } else {
                $('header').removeClass('stick');
            }

        });
    </script>


</body>

</html>