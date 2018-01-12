<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo public_url("admin") ?>/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo public_url("admin") ?>/dist/css/AdminLTE.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Đăng nhập</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">

        <div class="box box-info">
            <div class="form-group has-error">
                <div class="col-sm-12">
                    <label class="control-label pull-left"  for="inputError"><?php echo form_error('login'); ?></label>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Username</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Password</label>

                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <input type="submit" value="Login" class="btn btn-primary pull-right">
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
