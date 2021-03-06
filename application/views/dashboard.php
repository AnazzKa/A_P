<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA | Contacts</title>
    <link href="<?php $base_url; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
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
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <?php
                        $cnt = 0;
                        foreach ($members as $row) {
                            $cnt++;                                                            
                            ?>
                            <div class="col-lg-3">
                                <div class="contact-box center-version">
                                    <a href="<?php $base_url ?>accounts?anz=<?php echo my_simple_crypt($row->member_id,'e'); ?>">
                                        <img alt="image" class="img-circle" src="<?php $base_url; ?>assets/img/noimage.png">
                                        <h3 class="m-b-xs"><strong><?php echo $row->full_name; ?></strong></h3>
                                        <div class="font-bold"><?php echo $row->mobile; ?></div>
                                        <div class="font-bold"><?php $mem= $this->member_model->get_member_type($row->members_type_id); 
                                        if(!empty($mem)){echo $mem[0]->type; }?></div>
                        <!-- <address class="m-t-md">
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                            </ address>-->
                        </a>
                        <div class="contact-box-footer">
                            <div class="m-t-xs btn-group">
                                <a href="tel:<?php echo $row->mobile; ?>" class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                                <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                                <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Message</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>


            </div>
        </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> Anas &copy; 2014-2017
            </div>
        </div>

    </div>
</div>
<?php $this->load->view('chat');   ?>
<!-- Mainly scripts -->
<script src="<?php $base_url; ?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php $base_url; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php $base_url; ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php $base_url; ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php $base_url; ?>assets/js/inspinia.js"></script>
<script src="<?php $base_url; ?>assets/js/plugins/pace/pace.min.js"></script>


</body>

</html>
