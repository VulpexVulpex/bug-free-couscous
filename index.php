
<?php include("includes/header.php"); ?>

    <body class="fixed-sn">
        <!-- main carousel -->
        <?php include("includes/main-slider.php"); ?>
        <!--Double navigation-->
        <header>
            <!-- Sidebar navigation -->
            <?php include("includes/sidebar.php"); ?>
            <!-- Top Navbar -->
            <?php include("includes/navbar.php"); ?>
        </header>
        
        <!--Main layout-->
        <main>        
            <div class="container-fluid text-center">            
                <?php include("includes/carrusel-news.php"); ?>
                <?php include("includes/carrusel-recents.php"); ?>
                <?php include("includes/carrusel-outlet.php"); ?>
                <?php include("includes/flip-cards.php"); ?>
                <?php include("includes/quote-prices.php"); ?>
                <?php include("includes/pay-methods.php"); ?>
            </div>            
        </main>
        <!--/Main layout-->

        <!--Footer-->
        <?php include("includes/footer.php"); ?>
        <?php include("includes/scripts.php"); ?>
    </body>
</html>