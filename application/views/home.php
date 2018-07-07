<!DOCTYPE html>
<html>
    <head>
    <!-- <title>Full Calendar CRUD</title> -->
        <meta charset='utf-8' />
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href='<?php echo base_url();?>assets/css/fullcalendar.css' rel='stylesheet' />
        <link href="<?php echo base_url();?>assets/css/bootstrapValidator.min.css" rel="stylesheet" />        
        <link href="<?php echo base_url();?>assets/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
        <!-- Custom css  -->
        <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" />

        <script src='<?php echo base_url();?>assets/js/moment.min.js'></script>
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrapValidator.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/fullcalendar.min.js"></script>
        <script src='<?php echo base_url();?>assets/js/bootstrap-colorpicker.min.js'></script>
        

        <script src='<?php echo base_url();?>assets/js/main2.js'></script>
        <title>Peminjaman</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="keywords" content="free islamic templates, free, islamic, templates. website templates, prayer times for website, icons, vectors, website themes, islamic themes" />
        <meta name="description" content="Free Islamic website templates, resources, icons, vectors, prayer times for your website, and Islamic content." />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/uncss.css">
        <script src="three/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <link rel="shortcut icon" href="three/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets2/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets2/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets2/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets2/images/ico/apple-touch-icon-57-precomposed.png"></head>
        
    </head>
    <body>
        <header class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a id="logo" class="pull-left" href="<?php echo base_url(); ?>"></a>
      <div class="nav-collapse  pull-right">
        <ul class="nav">
          <li ><a href="<?php echo base_url(); ?>">Beranda</a></li>
          <li><a href="<?php echo site_url('tentang'); ?>">Tentang Kami</a></li>
         <!--  <li><a href="<?php echo site_url('prayers'); ?>">Prayers</a></li> -->
          <li><a href="three-templates">Artikel</a></li>
          <li class="active"><a href="<?php echo site_url('Calendar'); ?>">Peminjaman</a>
          </li>
          
          <!-- <li><a href="<?php echo site_url('welcome'); ?>">Logout</a></li> -->
        </ul>
      </div>
    </div>
  </div>
</header>
<br>


        <div class="container">
                <!-- Notification -->
            <div class="alert"></div>
            <div class="row clearfix">
                <div class="col-md-12 column">
                        <div id='calendar'></div>
                </div>
            </div>
        </div>
        <div class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <div class="error"></div>
                        <form class="form-horizontal" id="crud-form">
                        <input type="hidden" id="start">
                        <input type="hidden" id="end">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="title">Peminjam</label>
                                <div class="col-md-4">
                                    <input id="title" name="title" type="text" class="form-control input-md" />
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Deskripsi</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" id="description" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="color">Pinjam</label>
                                <div class="col-md-4">
                                    <!-- <input id="color" name="color" type="text" class="form-control input-md" readonly="readonly" /> -->
                                    <!-- <input id="color" name="color" type="text" class="form-control input-md" />
                                    <span class="help-block">Click to pick a color</span> -->
                                    <form method='POST' action=''>
                                    <h4><select name="color" id="color">
                                    <option value="#17ff02">Karpet</option>
                                    <option value="#001dff">Ruangan Mushola</option>
                                    <option value="#fffa00">Mic</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



