<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA | Clients</title>
    <link href="<?php $base_url; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="<?php $base_url; ?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                                </span>  </span> </a>
                            </div>
                            <div class="logo-element">
                                IN+
                            </div>
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li><a href="index.html">Dashboard v.1</a></li>
                                <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                                <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                                <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                                <li><a href="dashboard_5.html">Dashboard v.5 </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">

                        </div>
                        <ul class="nav navbar-top-links navbar-right">                
                            <li class="pull-right">
                                <a href="login.html">
                                    <i class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="wrapper wrapper-content  animated fadeInRight">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="ibox">
                                <div class="ibox-content">

                                 <span class="label label-primary"><?php echo $receipts_single_acc[0]->full_name; ?></span>
                                 <span class="label label-primary pull-right" onclick="history.go(-1);"><i class="fa fa-arrow-left"></i></span>

                                 <div class="clients-list">
                                    <ul class="nav nav-tabs">

                                        <li class="active"><a data-toggle="tab" href="#tab-1">Receipts</a></li>
                                        <li class=""><a data-toggle="tab" href="#tab-2"> Payment</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tab-1" class="tab-pane active">
                                            <div class="full-height-scroll">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover">
                                                        <tbody>
                                                            <?php 
                                                            $total=0;
                                                            foreach ($receipts_single_acc as $key) {
                                                                $total+=$key->amount;
                                                                ?>
                                                                <tr>
                                                                    <td class="client-avatar"><img alt="image" src="<?php $base_url ?>assets/img/a2.jpg"> </td>
                                                                    <td><a data-toggle="tab" href="#contact-1" class="client-link"><?php echo $key->category_name; ?></a></td>
                                                                    <td class="client-status"><span class="label label-succes"><?php echo $key->amount; ?></span></td>
                                                                </tr>
                                                                <?php } ?>
                                                                <tr>
                                                                    <td class="client-avatar"></td>                                                    
                                                                    <td>Total</td>                                                    
                                                                    <td class="client-status"><span class="label label-primary"><?php echo $total.'.00'; ?></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-2" class="tab-pane">
                                                <div class="full-height-scroll">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-hover">
                                                            <tbody>
                                                                <?php 
                                                            $tot=0;
                                                            foreach ($payment_single_acc as $key) {
                                                                $tot+=$key->amount;
                                                                ?>
                                                                <tr>
                                                                    <td class="client-avatar"><img alt="image" src="<?php $base_url ?>assets/img/a2.jpg"> </td>
                                                                    <td><a data-toggle="tab" href="#contact-1" class="client-link"><?php echo $key->category_name; ?></a></td>
                                                                    <td class="client-status"><span class="label label-succes"><?php echo $key->amount; ?></span></td>
                                                                </tr>
<?php } ?>
<tr>
                                                                    <td class="client-avatar"></td>                                                    
                                                                    <td>Total</td>                                                    
                                                                    <td class="client-status"><span class="label label-primary"><?php echo $tot.'.00'; ?></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="footer">
                    <div class="pull-right">
                        10GB of <strong>250GB</strong> Free.
                    </div>
                    <div>
                        <strong>Copyright</strong> Example Company &copy; 2014-2015
                    </div>
                </div>

            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="<?php $base_url; ?>assets/js/jquery-2.1.1.js"></script>
        <script src="<?php $base_url; ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php $base_url; ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="<?php $base_url; ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="<?php $base_url; ?>assets/js/inspinia.js"></script>
        <script src="<?php $base_url; ?>assets/js/plugins/pace/pace.min.js"></script>
    </body>
    </html>
