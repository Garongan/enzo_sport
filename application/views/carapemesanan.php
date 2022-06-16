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
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
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

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Pesan</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/home">Home</a></li>
                        <li class="breadcrumb-item active">Pesan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Barang</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- start form -->
                            
                                <?php 
                                $sub_total = 0;
                                foreach ($pesan as $pesan) : ?>
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="<?php echo base_url();?>index.php/produk">
									<img class="img-fluid" src="<?php echo base_url();?>asset/images/img<?php echo $pesan->id;?>.jpg" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
									<?php echo $pesan->nama;?>
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p><?php echo $pesan->harga;?></p>
                                    </td>
                                    <td class="quantity-box">
                                        <form action="<?php echo base_url('index.php/carapemesanan/update_pesan');?>" method="post">
                                            <input name="jumlah" type="number" value="<?php echo $pesan->jumlah;?>" min="0" step="1" class="c-input-text qty text">
                                            <input type="hidden" name="id" value="<?php echo $pesan->id;?>">
                                            <input type="hidden" name="harga" value="<?php echo $pesan->harga?>">
                                            <button type="submit">OK</button>
                                    </td>
                                    <td class="total-pr">
                                        <p><?php echo $pesan->total; ?></p>
                                        </form>
                                    </td>
                                    <td class="remove-pr">
                                        <form action="<?php echo base_url('index.php/carapemesanan/delete_pesan');?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $pesan->id;?>">
                                        <button type="submit"><i class="fas fa-times"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php 
                                $sub_total += (float) $pesan->total;
                                ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end form -->
            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold">
                                <?php echo number_format($sub_total, 3);?>
                            </div>
                        </div>
                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"> <?php echo number_format($sub_total, 3);?> </div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="<?php echo base_url();?>checkout.html" class="ml-auto btn hvr-hover">Checkout</a> </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

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

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

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
    <script src="<?php echo base_url();?>asset/js/form-validator.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/contact-form-script.js"></script>
    <script src="<?php echo base_url();?>asset/js/custom.js"></script>
</body>

</html>