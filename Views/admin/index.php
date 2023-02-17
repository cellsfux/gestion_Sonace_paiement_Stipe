

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
<meta name="author" content="Creative Tim">
<title>Sanas Administration</title>


<link rel="canonical" href="https://www.cellsflux.com/product/argon-dashboard-pro" />

<meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
<meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">

<meta itemprop="name" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
<meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
<meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">

<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@creativetim">
<meta name="twitter:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
<meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
<meta name="twitter:creator" content="@creativetim">
<meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">

<meta property="fb:app_id" content="655968634437471">
<meta property="og:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://demos.cellsflux.com/argon-dashboard/index.html" />
<meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg" />
<meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
<meta property="og:site_name" content="Creative Tim" />

<link rel="icon" href="<?= URLROOT ?>assets/admin/img/brand/favicon.png" type="image/png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

<link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendor/nucleo/css/nucleo.css" type="text/css">
<link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">

<link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="<?= URLROOT ?>assets/admin/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">

<link rel="stylesheet" href="<?= URLROOT ?>assets/admin/css/argon.min.css?v=1.2.1" type="text/css">

<script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>

</head>
<body>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
<div class="scrollbar-inner">

<div class="sidenav-header  d-flex  align-items-center">
<a class="navbar-brand" href="javascript:void(0)">
<img src="<?= URLROOT ?>assets/admin/img/brand/blue.png" class="navbar-brand-img" alt="...">
</a>
<div class=" ml-auto ">

<div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
<div class="sidenav-toggler-inner">
<i class="sidenav-toggler-line"></i>
<i class="sidenav-toggler-line"></i>
<i class="sidenav-toggler-line"></i>
</div>
</div>
</div>
</div>
<div class="navbar-inner">

<div class="collapse navbar-collapse" id="sidenav-collapse-main">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="<?= URLROOT ?>admin" >
<i class="ni ni-shop text-primary"></i>
<span class="nav-link-text">Dashboards</span>
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="<?= URLROOT ?>admin/user" >
<i class="ni ni-shop text-primary"></i>
<span class="nav-link-text">Users</span>
</a>

<li class="nav-item">
<a class="nav-link" href="<?= URLROOT ?>admin/souscription" >
<i class="ni ni-shop text-primary"></i>
<span class="nav-link-text">Souscription</span>
</a>
</li>
</li>
</ul>
</div>
</li>

</div>
</div>
</div>
</nav>

<div class="main-content" id="panel">

<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
<div class="container-fluid">
<div class="collapse navbar-collapse" id="navbarSupportedContent">

<form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
<div class="form-group mb-0">
<div class="input-group input-group-alternative input-group-merge">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-search"></i></span>
</div>
<input class="form-control" placeholder="Search" type="text">
</div>
</div>
<button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</form>

<ul class="navbar-nav align-items-center  ml-md-auto ">
<li class="nav-item d-xl-none">

<div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
<div class="sidenav-toggler-inner">
<i class="sidenav-toggler-line"></i>
<i class="sidenav-toggler-line"></i>
<i class="sidenav-toggler-line"></i>
</div>
</div>
</li>
<li class="nav-item d-sm-none">
<a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
<i class="ni ni-zoom-split-in"></i>
</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="ni ni-bell-55"></i>
</a>
<div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">

<div class="px-3 py-3">
<h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
</div>

<div class="list-group list-group-flush">
<a href="#!" class="list-group-item list-group-item-action">
<div class="row align-items-center">
<div class="col-auto">

<img alt="Image placeholder" src="<?= URLROOT ?>assets/admin/img/theme/team-1.jpg" class="avatar rounded-circle">
</div>
<div class="col ml--2">
<div class="d-flex justify-content-between align-items-center">
<div>
<h4 class="mb-0 text-sm">John Snow</h4>
</div>
<div class="text-right text-muted">
<small>2 hrs ago</small>
</div>
</div>
<p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
</div>
</div>
</a>
<a href="#!" class="list-group-item list-group-item-action">
<div class="row align-items-center">
<div class="col-auto">

<img alt="Image placeholder" src="<?= URLROOT ?>assets/admin/img/theme/team-2.jpg" class="avatar rounded-circle">
</div>
<div class="col ml--2">
<div class="d-flex justify-content-between align-items-center">
<div>
<h4 class="mb-0 text-sm">John Snow</h4>
</div>
<div class="text-right text-muted">
<small>3 hrs ago</small>
</div>
</div>
<p class="text-sm mb-0">A new issue has been reported for Argon.</p>
</div>
</div>
</a>
<a href="#!" class="list-group-item list-group-item-action">
<div class="row align-items-center">
<div class="col-auto">

<img alt="Image placeholder" src="<?= URLROOT ?>assets/admin/img/theme/team-3.jpg" class="avatar rounded-circle">
</div>
<div class="col ml--2">
<div class="d-flex justify-content-between align-items-center">
<div>
<h4 class="mb-0 text-sm">John Snow</h4>
</div>
<div class="text-right text-muted">
<small>5 hrs ago</small>
</div>
</div>
<p class="text-sm mb-0">Your posts have been liked a lot.</p>
</div>
</div>
</a>
<a href="#!" class="list-group-item list-group-item-action">
<div class="row align-items-center">
<div class="col-auto">

<img alt="Image placeholder" src="<?= URLROOT ?>assets/admin/img/theme/team-4.jpg" class="avatar rounded-circle">
</div>
<div class="col ml--2">
<div class="d-flex justify-content-between align-items-center">
<div>
<h4 class="mb-0 text-sm">John Snow</h4>
</div>
<div class="text-right text-muted">
<small>2 hrs ago</small>
</div>
</div>
<p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
</div>
</div>
</a>
<a href="#!" class="list-group-item list-group-item-action">
<div class="row align-items-center">
<div class="col-auto">

<img alt="Image placeholder" src="<?= URLROOT ?>assets/admin/img/theme/team-5.jpg" class="avatar rounded-circle">
</div>
<div class="col ml--2">
<div class="d-flex justify-content-between align-items-center">
<div>
<h4 class="mb-0 text-sm">John Snow</h4>
</div>
<div class="text-right text-muted">
<small>3 hrs ago</small>
</div>
</div>
<p class="text-sm mb-0">A new issue has been reported for Argon.</p>
</div>
</div>
</a>
</div>

<a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="ni ni-ungroup"></i>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
<div class="row shortcuts px-4">
<a href="#!" class="col-4 shortcut-item">
<span class="shortcut-media avatar rounded-circle bg-gradient-red">
<i class="ni ni-calendar-grid-58"></i>
</span>
<small>Calendar</small>
</a>
<a href="#!" class="col-4 shortcut-item">
<span class="shortcut-media avatar rounded-circle bg-gradient-orange">
<i class="ni ni-email-83"></i>
</span>
<small>Email</small>
</a>
<a href="#!" class="col-4 shortcut-item">
<span class="shortcut-media avatar rounded-circle bg-gradient-info">
<i class="ni ni-credit-card"></i>
</span>
<small>Payments</small>
</a>
<a href="#!" class="col-4 shortcut-item">
<span class="shortcut-media avatar rounded-circle bg-gradient-green">
<i class="ni ni-books"></i>
</span>
<small>Reports</small>
</a>
<a href="#!" class="col-4 shortcut-item">
<span class="shortcut-media avatar rounded-circle bg-gradient-purple">
<i class="ni ni-pin-3"></i>
</span>
<small>Maps</small>
</a>
<a href="#!" class="col-4 shortcut-item">
<span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
<i class="ni ni-basket"></i>
</span>
<small>Shop</small>
</a>
</div>
</div>
</li>
</ul>
<ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
<li class="nav-item dropdown">
<a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<div class="media align-items-center">
<span class="avatar avatar-sm rounded-circle">
<img alt="Image placeholder" src="<?= URLROOT ?>uploads/img/<?= $user->profilpic ?>">
</span>
<div class="media-body  ml-2  d-none d-lg-block">
<span class="mb-0 text-sm  font-weight-bold"><?= ucfirst($user->prenom).' '. ucfirst($user->nom) ?></span>
</div>
</div>
</a>
<div class="dropdown-menu  dropdown-menu-right ">
<div class="dropdown-header noti-title">
<h6 class="text-overflow m-0">Welcome!</h6>
</div>
<a href="#!" class="dropdown-item">
<i class="ni ni-single-02"></i>
<span>My profile</span>
</a>
<a href="#!" class="dropdown-item">
<i class="ni ni-settings-gear-65"></i>
<span>Settings</span>
</a>
<a href="#!" class="dropdown-item">
<i class="ni ni-calendar-grid-58"></i>
<span>Activity</span>
</a>
<a href="#!" class="dropdown-item">
<i class="ni ni-support-16"></i>
<span>Support</span>
</a>
<div class="dropdown-divider"></div>
<a href="<?= URLROOT ?>login" class="dropdown-item">
<i class="ni ni-user-run"></i>
<span>Se deconneter</span>
</a>
</div>
</li>
</ul>
</div>
</div>
</nav>


<div class="header bg-primary pb-6">
<div class="container-fluid">
<div class="header-body">
<div class="row align-items-center py-4">
<div class="col-lg-6 col-7">
<h6 class="h2 text-white d-inline-block mb-0">Assurenece</h6>
<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="#">Liste</a></li>
<li class="breadcrumb-item active" aria-current="page">Les assurences</li>
</ol>
</nav>
</div>
<div class="col-lg-6 col-5 text-right">
<a href="#" data-toggle="modal" data-target="#modal-form" class="btn btn-sm btn-neutral">Ajouter une assurence</a>

</div>
</div>
</div>
</div>
</div>

<div class="container-fluid mt--6">

<div class="row">
<div class="col">
<div class="card">

<div class="card-header">
<h3 class="mb-0">Assurence</h3>
<p class="text-sm mb-0">
Dans cette partie sont repertorier toutes les assurances de la sonas
</p>
</div>
<div class="table-responsive py-4">
<table class="table table-flush" id="datatable-basic">
<thead class="thead-light">
<tr>
<th>numero</th>
<th>Libele</th>
 <th>Echeance</th>
<th>Montant</th>
<th>Validite</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<?php
$i=1;
foreach($assurance as $lis): ?>
<tr>
<td><?= $i ?></td>
<td><?= $lis->nom_assurence ?></td>
<td><?= $lis->eheance ?></td>
<td>$ <?= $lis->montant ?></td>
<td><?=$lis->validite ?></td>
<td>
  
  <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-form-update"  onclick="dusplay('data-<?= $lis->id ?>')" class="btn btn-success"> <i class="fa fa-edit"></i>
  <div hidden id="data-<?= $lis->id ?>">
      <?= json_encode($lis) ?>
  </div>
  <a href="<?= URLROOT ?>admin/deleteass/<?= $lis->id ?>" class="btn btn-danger" id="delete">Supprimer</a>

</a>

</td>
</tr>
<?php $i+=1; endforeach ?>
</tbody>
</table>
</div>
</div>
















<footer class="footer pt-0">
<div class="row align-items-center justify-content-lg-between">
<div class="col-lg-6">
<div class="copyright text-center  text-lg-left  text-muted">
&copy; 2021 <a href="https://www.cellsflux.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
</div>
</div>
<div class="col-lg-6">
<ul class="nav nav-footer justify-content-center justify-content-lg-end">
<li class="nav-item">
<a href="https://www.cellsflux.com" class="nav-link" target="_blank">Creative Tim</a>
</li>
<li class="nav-item">
<a href="https://www.cellsflux.com/" class="nav-link" target="_blank">About Us</a>
</li>
<li class="nav-item">
<a href="http://blog.cellsflux.com" class="nav-link" target="_blank">Blog</a>
</li>
<li class="nav-item">
<a href="https://www.cellsflux.com/license" class="nav-link" target="_blank">License</a>
</li>
</ul>
</div>
</div>
</footer>
</div>
</div>


<script src="<?= URLROOT ?>assets/admin/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= URLROOT ?>assets/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= URLROOT ?>assets/admin/vendor/js-cookie/js.cookie.js"></script>
<script src="<?= URLROOT ?>assets/admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= URLROOT ?>assets/admin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

<script src="<?= URLROOT ?>assets/admin/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= URLROOT ?>assets/admin/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= URLROOT ?>assets/admin/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= URLROOT ?>assets/admin/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= URLROOT ?>assets/admin/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= URLROOT ?>assets/admin/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= URLROOT ?>assets/admin/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= URLROOT ?>assets/admin/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

<script src="<?= URLROOT ?>assets/admin/js/argon.min.js?v=1.2.1"></script>

<script src="<?= URLROOT ?>assets/admin/js/demo.min.js"></script>
<script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script>



<script>
   function dusplay(data){
  
     let htmlval=  $('#'+data).html();

     donne= JSON.parse(htmlval)

     let html=`
     <div class="form-group ">
              <labele class="labele">Nom de l'assurence</labele>
                <input type="text" name="libele" required value="`+donne.nom_assurence+`" class="form-control" placeholder="Nom assurence">
            </div>

            <input name='id' value=`+donne.id+` hidden/>
            <div class="form-group ">
              <labele class="labele">Echeanse</labele>
                <input type="text" value="`+donne.eheance+`" name="echeanse" required class="form-control" placeholder="Echeanse">
            </div>


            <div class="form-group ">
              <labele class="labele">Description</labele>
                <textarea type="text"  name="description" required class="form-control" placeholder="Description....">
                `+donne.description+`
                </textarea>
            </div>

            <div class="form-group ">
              <labele class="labele">Validite</labele>
                <select name="validite" id="" class="form-control">
                <option>`+donne.validite+`</option> 
                <option>6 mois</option>
                  <option>12 mois</option>
                </select>
            </div>

            
            <div class="form-group ">
              <labele class="labele">Montant en USD</labele>
                <input type="number" value="`+donne.montant+`" name="montant" required class="form-control" placeholder="30000">
            </div>
            <div id='result-up'></div>

            <button class="btn btn-primary" type="submit" id="btn-save-up">Enregistrer le modifications</button>

     
     
     `;

     $('#form-update-data').html(html);

         
   }








  </script>


<script>
  $(document).ready(()=>{
  $('#form-submit').on('submit', (e)=>{
           e.preventDefault();
          let  form= e.target;

          $.ajax({
              url:$('#form-submit').data('url'),
              type:'POST',
              enctype: 'multipart/form-data',
		          data:new FormData(form),
		          processData: false,
		          contentType: false,
		         cache: false,
		         timeout: 600000,
             dataType:'json',
             beforeSend:function(){
                  $('#btn-save').text('Saving please wait..')
             },success:function(response){
              $('#btn-save').text('Eregistrer')
              if(response.error){
                $('#result').html('<strong class="text-danger text-center">'+response.message+'</strong>')
              }else{
                $('#result').html('<strong class="text-primary text-center">'+response.message+'</div> ')
              }
              $('#form-submit')[0].reset();
             }
            
          })



        })









        $('#form-update-data').on('submit', (e)=>{
           e.preventDefault();
          let  form= e.target;

          $.ajax({
              url:$('#form-update-data').data('url'),
              type:'POST',
              enctype: 'multipart/form-data',
		          data:new FormData(form),
		          processData: false,
		          contentType: false,
		         cache: false,
		         timeout: 600000,
             dataType:'json',
             beforeSend:function(){
                  $('#btn-save-up').text('Saving please wait..')
             },success:function(response){
              $('#btn-save-up').text('Enregistrer le modifications')
              if(response.error){
                $('#result-up').html('<strong class="text-danger text-center">'+response.message+'</strong>')
              }else{
                $('#result-up').html('<strong class="text-primary text-center">'+response.message+'</div> ')
              }
              $('#form-update-data')[0].reset();
             }
            
          })



        })
})

</script>






<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"75b99a415bf19cf5","token":"1b7cbb72744b40c580f8633c6b62637e","version":"2022.8.1","si":100}' crossorigin="anonymous"></script>
</body>
</html>

















     
      <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
        	
            <div class="modal-body p-0">
            	

<div class="card bg-secondary border-0 mb-0">
    
    <div class="card-body px-lg-5 py-lg-5">
        <div class="text-center text-muted mb-4">
            <h3>Ajouter Une Assurence</h3>
        </div>
        <form  id="form-submit" role="form" data-url="./admin/saveass">
            <div class="form-group ">
              <labele class="labele">Nom de l'assurence</labele>
                <input type="text" name="libele" required class="form-control" placeholder="Nom assurence">
            </div>

            <div class="form-group ">
              <labele class="labele">Echeanse</labele>
                <input type="text" name="echeanse" required class="form-control" placeholder="Echeanse">
            </div>


            <div class="form-group ">
              <labele class="labele">Description</labele>
                <textarea type="text" name="description" required class="form-control" placeholder="Description...."></textarea>
            </div>

            <div class="form-group ">
              <labele class="labele">Validite</labele>
                <select name="validite" id="" class="form-control">
                  <option>6 mois</option>
                  <option>12 mois</option>
                </select>
            </div>

            
            <div class="form-group ">
              <labele class="labele">Montant en USD</labele>
                <input type="number" name="montant" required class="form-control" placeholder="30000">
            </div>

            <div id="result"></div>
            <button class="btn btn-primary" type="submit" id="btn-save">Enregistrer</button>
            
        </form>
    </div>
</div>



</div>
        </div>
    </div>
      </div>


























    <div class="modal fade" id="modal-form-update" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
        	
            <div class="modal-body p-0">
            	

<div class="card bg-secondary border-0 mb-0">
    
    <div class="card-body px-lg-5 py-lg-5">
        <div class="text-center text-muted mb-4">
            <h3> Modifier</h3>
        </div>
        <form role="form" id="form-update-data" data-url="./admin/updateass">
                        
        </form>
    </div>
</div>



</div>
        </div>
    </div>

      </div>
      