<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url('assets/vendors/animate.css/animate.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/swal2/sweetalert2.min.css')?>">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/build/css/custom.min.css')?>" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <div class="fd" data-fd="<?= ($this->session->flashdata('notif')); ?>"
                        data-nama="<?= $this->session->userdata('nama')?>"
                        data-lvl="<?= $this->session->userdata('level')?>"></div>
                    <form action="<?= base_url('auth')?>" method="post">
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" name="username"
                                required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                required="" />
                        </div>
                        <div>
                            <button class="btn btn-default" type="submit">Log in</button>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>
                    </form>
                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="<?= base_url('register')?>" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>??2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms
                            </p>
                        </div>
                    </div>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form>
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="index.html">Submit</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>??2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and
                                    Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/vendors/jquery/dist/jquery.min.js')?>"></script>
    <script src="<?= base_url('assets/vendors/swal2/sweetalert2.all.min.js')?>"></script>
    <script src="<?= base_url('assets/scriptku.js')?>"></script>
</body>

</html>