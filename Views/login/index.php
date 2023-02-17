
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Cellsflux">
    <title>SONAS</title>


    <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />

    <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, Cellsflux, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">

    <meta itemprop="name" content="Argon - Premium Dashboard for Bootstrap 4 by Cellsflux">
    <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">

    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Argon - Premium Dashboard for Bootstrap 4 by Cellsflux">
    <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">

    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Argon - Premium Dashboard for Bootstrap 4 by Cellsflux" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard/index.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg" />
    <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
    <meta property="og:site_name" content="Cellsflux" />

    <link rel="icon" href="<?= URLROOT ?>assets/admin/img/brand/favicon.png" type="image/png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

    <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">

    <link rel="stylesheet" href="<?= URLROOT ?>assets/admin/css/argon.min.css?v=1.2.1" type="text/css">

   
</head>

<body class="bg-default">

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="<?= URLROOT ?>">
<img style="height: 200px;" src="<?= URLROOT ?>assets/img/sonas.png">
</a>
        </div>
    </nav>

    <div class="main-content">

        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Welcome!</h1>
                            <p class="text-lead text-white">
                            Avec plus de 50 ans d'expérience, la Sonas reste la société leader de toutes les sociétés d'assurances existantes en RDC.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
<polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
</svg>
            </div>
        </div>

        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-header bg-transparent pb-5">
                            <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
                            <div class="btn-wrapper text-center">
                                <a href="#" class="btn btn-neutral btn-icon">
<span class="btn-inner--icon"><img src="<?= URLROOT ?>assets/admin/img/icons/common/github.svg"></span>
<span class="btn-inner--text">Github</span>
</a>
                                <a href="#" class="btn btn-neutral btn-icon">
<span class="btn-inner--icon"><img src="<?= URLROOT ?>assets/admin/img/icons/common/google.svg"></span>
<span class="btn-inner--text">Google</span>
</a>
                            </div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Or sign in with credentials</small>
                            </div>
                            <form id="formAuthentication" data-url="./login/loginparam" role="form">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" id="email" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" id="password" placeholder="Password" type="password">
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                    <label class="custom-control-label" for=" customCheckLogin">
<span class="text-muted">Remember me</span>
</label>
                                </div>
                                <div id="result-login"></div>
                                <div class="text-center">
                                    <button type="submit" id="btn-connect" class="btn btn-primary my-4">Se Connecter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a href="#" class="text-light"><small>Forgot password?</small></a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="<?= URLROOT ?>login/register" class="text-light"><small>Creer un Nouveau Compte</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="<?= URLROOT ?>assets/admin/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= URLROOT ?>assets/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= URLROOT ?>assets/admin/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= URLROOT ?>assets/admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= URLROOT ?>assets/admin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

    <script src="<?= URLROOT ?>assets/admin/js/argon.min.js?v=1.2.1"></script>

    <script src="<?= URLROOT ?>assets/admin/js/demo.min.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"75b98058ceb99cda","token":"1b7cbb72744b40c580f8633c6b62637e","version":"2022.8.1","si":100}'
        crossorigin="anonymous"></script>


        <script>  
       $(document).ready(()=>{
        $('#formAuthentication').on('submit', (e)=>{
              e.preventDefault();
            
              var email=$('#email').val();
              var pass= $('#password').val();

             let url_send=$('#formAuthentication').data('url');
             $('#btn-connect').add(Attr, 'disabled')
             $('#btn-connect').text('loading please...')
              $.ajax({
                  url :url_send,
                  type: 'POST',
                  data : {email:email, pass:pass},
                  dataType:'JSON'
                })
                .done(function(response){ 
                  $('#btn-connect').removeAttr('disabled')
                  $('#btn-connect').text('Se connecter')

                      if(response.error){
                        $('#result-login').html(`<div class="alert alert-danger alert-dismissible" role="alert">
                        `+response.message+`
                        
                      </div>`)
                      
                      }else{
                        window.location=response.url;
                      }
                  });

            
             });
         

       })
    </script>
</body>

</html>