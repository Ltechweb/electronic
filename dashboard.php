<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Document</title>
</head>

<body>
    <section class="website_wrapper">
        <!-- <div style="background:var(--thirdC);width:100%;padding:1rem 0;"></div> -->

        <header class="bg-white py-2">
            <?php include('components/header.php'); ?>
        </header>

        <main class="main">
            <section class="user_main_wr">
                <section class="container py-5">
                    <div class="user_wr row">
                        <div class="user_content col-9">
                            <div class="row">
                                <section class="col-6">
                                    <?php include('components/user_content_i.php'); ?>

                                    <!--User Screen-->
                                    <div class="user_content_s">
                                        <p>12.00 <span>Ksh</span> </p>
                                        <h2>Net Income</h2>
                                    </div>


                                    <!--user content Main-->
                                    <div class="user_content_m">
                                        <h3>PRODUCT <a href="">View All</a></h3>
                                        <p class="user_content_m_p">
                                        <ul>
                                            <li><a href=""><span class="icons bg-warning">Ii</span> <span>sapiente </span></a></li>
                                            <li><a href=""><span class="icons bg-dark">Ii</span> <span>spanLorem</span></a></li>
                                            <li><a href=""><span class="icons bg-success">Ii</span> <span>quisquam </span></a></li>

                                        </ul>
                                        </p>
                                    </div>
                                </section>
                                <section class="col-6">
                                    <?php include('components/form_card.php');?>
                                </section>
                            </div>
                        </div>


                        <!--User menu-->
                        <?php include('partials/user_menu_main.php');?>
                    </div>
                </section>
            </section>
        </main>

        <footer class="user_footer bg-first">
            <section class="copy-right container  row">
                <p href="" class="col-8">&copy All Right Reserved to my electronics shop</p>
                <a href="" class="col-4">Disigned by LtechWebConstultant</a>
            </section>
        </footer>

    </section>
</body>

</html>