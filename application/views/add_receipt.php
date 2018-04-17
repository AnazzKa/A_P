<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA | Basic Form</title>
    <link href="<?php $base_url; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="<?php $base_url; ?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">
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
                    <?php if ($msg != "") { ?>
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title navy-bg">
                                <h5><?php echo $msg; ?></h5>
                                <div class="ibox-tools">
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ibox float-e-margins">

                                <div class="ibox-content">
                                    <span class="label label-primary pull-right" onclick="history.go(-1);"><i class="fa fa-arrow-left"></i></span>
                                    <div class="row">
                                        <div class="col-md-12 b-r"><h3 class="m-t-none m-b">ADD Receipt</h3>
                                            <div class="form-group">
                                                <select name="category" id="category" class="form-control">
                                                    <option value="">Select Single catgeory</option>
                                                    <?php foreach($category as $row){ ?>
                                                    <option value="<?php echo $row->category_id ?>"><?php echo $row->category_name ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="name" id="name" class="form-control">
                                                    <option value="">Select multiple Persons</option>
                                                    <?php foreach($members as $row){ ?>
                                                    <option value="<?php echo $row->member_id ?>"><?php echo $row->full_name ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group" id="btns">

                                            </div>
                                            <div class="form-group"><input type="text" id="amount" placeholder="Amount" class="form-control"></div>
                                            <div>
                                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" id="save" type="button"><strong>Save</strong></button>

                                            </div>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

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
        <!-- iCheck -->
        <script src="<?php $base_url; ?>assets/js/plugins/iCheck/icheck.min.js"></script> 
        <script src="<?php $base_url; ?>assets/js/plugins/toastr/toastr.min.js"></script>   
        <script type="text/javascript">
            var arr=[];
            var arri=[];
            var r;
            $(document).ready(function () {
              btn();
          });
            function btn()
            {
                arr.forEach(function(element) {
                   $('#btns').append(" <span class='label label-primary'>"+element+"</span>");
               });

            }
            $('#name').on('change',function(){
               var id=this.value; 
               var name= $("#name option:selected").text();
               if(id!=''){

                  if (!arr.includes(name)){
                    arr.push(name);
                    arri.push(id);
                } 
                $('#btns').children('span').remove();
                btn();
            }
        });
            $( "#save" ).on('click',function() {
                var amount= $('#amount').val();
                var category= $('#category option:selected').val();                
                $.ajax({
                    type: "POST",
                    url: "<?php $base_url ?>add_receipt_save",
                    async: false,
                    data: {arr:arri,amt:amount,category:category},
                    success: function (response) {
                        setTimeout(function() {
                            toastr.options = {
                                closeButton: true,
                                progressBar: true,
                                showMethod: 'slideDown',
                                timeOut: 4000
                            };
                            toastr.success('Added', 'Receipt');

                        }, 1300);
$('#btns').children('span').remove();
$('#amount').val('');
arr=[];
arri=[];
                    }
                });
            });
        </script>    
    </body>

    </html>
