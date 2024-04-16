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
        <div style="background:var(--thirdC);width:100%;padding:1rem 0;"></div>

        <header class="bg-white py-2">
            <?php include('components/header.php'); ?>
        </header>

        <main class="main">
            <section class="login custom_align">
                <section class="login_wr container my-5">
                    <form action="" class="p-4">
                        <div class="form_head text-center mb-4">
                            <h1>SIGN IN</h1>
                            <p>Sign In to update</p>
                        </div>
                        <label for="" class="mb-2">Email <i>*</i></label>
                        <input type="text" class="p-2 mb-4">
                        <label for="" class="mb-2">Password <i>*</i></label>
                        <input type="text" class="p-2 mb-4">
                        <button class="btn btn-dark">Sign-in</button>
                        <p class="mt-4">New User ? <a href="">Sign Up</a></p>
                    </form>
                </section>
            </section>
        </main>

        <footer class="pt-5 bg-first">
            <?php include('components/footer.php'); ?>
        </footer>

    </section>
</body>

</html>