<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Enzo Sport</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url();?>asset/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>asset/images/apple-touch-icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="<?php echo base_url();?>index.php/home"><img src="<?php echo base_url();?>asset/images/logoenzo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"></li>
                        <li class="nav-item"><?php echo anchor('home','Home', array('class' => 'nav-link active'));?></li>
                        <li class="nav-item"><?php echo anchor('about','About', array('class' => 'nav-link'));?></li>
                        <li class="nav-item"><?php echo anchor('produk','Produk', array('class' => 'nav-link'));?>
                        <li class="nav-item"> <?php echo anchor('carapemesanan','Pesan', array('class' => 'nav-link'));?></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
    </header>
    <!-- End Main Top -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Produk</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/home">Home</a></li>
                        <li class="breadcrumb-item active">Produk</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="#">
                                <input class="form-control" placeholder="Ketik Nama Produk" type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Sort by </span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
									<option data-display="Select">Nothing</option>
									<option value="3">Low Price → High Price</option>
								</select>
                                </div>
                                <p>Showing all 4 results</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content produk -->
                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        <?php foreach ($produk as $produk) : ?>
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Sale</p>
                                                        </div>
                                                        <img src="<?php echo base_url();?>asset/images/img<?php echo $produk->id?>.jpg" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>
                                                            <form action="<?php echo base_url('index.php/carapemesanan/tambah_pesan');?>" method="post">
                                                            <input type="hidden" name="id_produk" value="<?php echo $produk->id; ?>">
                                                            <input type="hidden" name="nama_produk" value="<?php echo $produk->nama; ?>">
                                                            <input type="hidden" name="harga_produk" value="<?php echo $produk->harga; ?>">
                                                            <input type="hidden" name="jumlah_produk" value="1">
                                                            <input type="hidden" name="total_produk" value="<?php echo $produk->harga * 1; ?>">
                                                                <button type="submit">
                                                                    <a class="cart">Add to Cart</a>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="why-text">
                                                        <h3><?php echo $produk->nama; ?></h3>
                                                        <h5> Rp<?php echo $produk->harga;?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- end content produk -->
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo base_url();?>asset/images/jersey1.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo base_url();?>asset/images/jersey2.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo base_url();?>asset/images/jersey3.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo base_url();?>asset/images/jersey4.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo base_url();?>asset/images/jersey5.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo base_url();?>asset/images/jersey6.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo base_url();?>asset/images/jersey7.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo base_url();?>asset/images/jersey8.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo base_url();?>asset/images/jersey9.jpg" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="<?php echo base_url();?>asset/images/jersey10.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="<?php echo base_url();?>index.php/about">About Us</a></li>
                                <li><a href="<?php echo base_url();?>index.php/carapemesanan">Cara Pemesanan</a></li>
                                <li><a href="<?php echo base_url();?>index.php/produk">Produk</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Yogyakarta, 55281 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: +6289621223432</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: enzosport@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2022 <a href="#">Enzo Sport</a></p>
    </div>
    <!-- End copyright  -->

    <a href="<?php echo base_url();?>index.php/home" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="<?php echo base_url();?>asset/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo base_url();?>asset/js/jquery.superslides.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/bootstrap-select.js"></script>
    <script src="<?php echo base_url();?>asset/js/inewsticker.js"></script>
    <script src="<?php echo base_url();?>asset/js/bootsnav.js."></script>
    <script src="<?php echo base_url();?>asset/js/images-loded.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/isotope.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/baguetteBox.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>asset/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/form-validator.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/contact-form-script.js"></script>
    <script src="<?php echo base_url();?>asset/js/custom.js"></script>
</body>

</html>