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
        <header class="bg-white py-2">
            <?php include('components/header.php'); ?>
        </header>

        <main class="main">
            <!--hero Section-->
            <section class="hero custom_align" style="height:30vh;background:var(--firstC)">
                <?php
                $head = "Search";
                include('partials/hero.php');
                ?>
            </section>

            <!--category list Section-->
            <section class="sections  py-5">
                <div class="product container">
                    <div class="row">
                        <div class="col-9">
                            <p style="font-weight:bold;opacity:0.4;margin-bottom:0.2rem;">Search Results </p>
                            <div class="table-responsive">


                                <table class="table ">
                                    <tbody>
                                        <tr>
                                            <td class="col-10">
                                                <a href="" class="text-success">1 Electronics name lorem </a>
                                                <span> | Oraimo | Type C | Thunder Bolt/Iphone </span>
                                            </td>
                                            <td class="text-end">
                                                ksh 45
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-10">
                                                <a href="" class="text-success">2. Electronics name lorem </a>
                                                <span> | Oraimo | Type C </span>
                                            </td>
                                            <td class="text-end">
                                                ksh 45
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-10">
                                                <a href="" class="text-success">2. Electronics name lorem </a>
                                                <span> | Oraimo | Type C </span>
                                            </td>
                                            <td class="text-end">
                                                ksh 45
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-10">
                                                <a href="" class="text-success">2. Electronics name lorem </a>
                                                <span> | Oraimo | Type C </span>
                                            </td>
                                            <td class="text-end">
                                                ksh 45
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-10">
                                                <a href="" class="text-success">2. Electronics name lorem </a>
                                                <span> | Oraimo | Type C </span>
                                            </td>
                                            <td class="text-end">
                                                ksh 45
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-10">
                                                <a href="" class="text-success">2. Electronics name lorem </a>
                                                <span> | Oraimo | Type C </span>
                                            </td>
                                            <td class="text-end">
                                                ksh 45
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-10">
                                                <a href="" class="text-success">2. Electronics name lorem </a>
                                                <span> | Oraimo | Type C </span>
                                            </td>
                                            <td class="text-end">
                                                ksh 45
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-10">
                                                <a href="" class="text-success">2. Electronics name lorem </a>
                                                <span> | Oraimo | Type C </span>
                                            </td>
                                            <td class="text-end">
                                                ksh 45
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-10">
                                                <a href="" class="text-success">2. Electronics name lorem </a>
                                                <span> | Oraimo | Type C </span>
                                            </td>
                                            <td class="text-end">
                                                ksh 45
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-10">
                                                <a href="" class="text-success">2. Electronics name lorem </a>
                                                <span> | Oraimo | Type C </span>
                                            </td>
                                            <td class="text-end">
                                                ksh 45
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="col-10">
                                                <a href="" class="text-primary">2. <b>Electronics name lorem</b> </a>
                                                <span> | Oraimo | Type C | <br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur provident, sed, esse non optio quis iste temporibus expedita repellat harum qui exercitationem unde id. Blanditiis provident voluptatem dignissimos quibusdam aspernatur!</span>
                                            </td>
                                            <td class="text-end">
                                                ksh 45
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-10">
                                                <a href="" class="text-success">3. Electronics name lorem </a>
                                                <span> | Oraimo | Type C </span>
                                            </td>
                                            <td class="text-end">
                                                ksh 45
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="product_menu col-3">
                            <ul class="bg-third p-4">
                                <li class="py-2">lorem ipsum content <span>></span></li>
                                <li class="py-2">lorem ipsum content <span>></span></li>
                                <li class="py-2">lorem ipsum content <span>></span></li>
                                <li class="py-2">lorem ipsum content <span>></span></li>
                                <li class="py-2">lorem ipsum content <span>></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!--footer-->
        <!-- <footer class="btn-mast pt-5 bg-first">
            <?php
            $head = "About ELECTRONICS AND<br> HOME <br>APPLIANCES";
            include("partials/section-titling-2.php");
            ?>
        </footer> -->

        <section class="popup_menu">
            <?php include("components/popup_menu.php"); ?>
        </section>
    </section>
</body>

</html>