<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Admin</title>

<meta name="robots" content="noindex, nofollow" />

<link rel="shortcut icon" href="<?php echo public_url('admin')?>/images/icon.png" type="image/x-icon"/>
<link rel="stylesheet" href="<?php echo public_url('admin') ?>/bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo public_url('admin') ?>/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo public_url('admin') ?>/dist/css/simplePagination.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo public_url('admin') ?>/dist/css/skins/_all-skins.min.css">

<link rel="stylesheet" href="<?php echo public_url('admin') ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<script src="<?php echo public_url('site') ?>/js/jquery-1.9.1.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo public_url('site') ?>/js/jquery-ui.js"></script>
<script src="<?php echo public_url('admin') ?>/dist/js/jquery.simplePagination.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo public_url('admin') ?>/bootstrap/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo public_url('admin') ?>/dist/js/app.min.js"></script>

<script src="<?php echo public_url('admin') ?>/plugins/ckeditor/ckeditor.js"></script>
<script src="<?php echo public_url('site') ?>/js/jquery.validate.min.js"></script>
<link rel="stylesheet" href="<?php echo public_url('admin') ?>/dist/css/jquery-ui.css">
<script src="<?php echo public_url('admin') ?>/dist/css/jquery-ui.js"></script>
<script>
    $('a.verify_action').click(function(){
        if(!confirm('Bạn chắc chắn muốn xóa ?'))
        {
            return false;
        }
    });
</script>