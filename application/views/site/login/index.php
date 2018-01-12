<div class="bg">
    <div class="login_content">
        <div class="login_top">
            <div class="login_left">
                <div class="login_logo">
                   <a href="<?php echo base_url('') ?>"><img src="public/site/images/logo_login.png"></a>
                </div>
            </div>
        </div>
        <div class="login_left">
            <div class="login_adv">

                       <a href="<?php echo $linklogin?>" target="_blank"> <img src="<?php echo public_url("uploads/adv/".$images)?>" ></a>

            </div>

        </div>
        <div class="login_right">
            <div class="title-bar-login">
                <div class="text-login">Đăng nhập</div>
                <div class="line-top-login"></div>
            </div>
            <form id="login" action="" method="post">
            <div class="form-login">
                <div class="item-login">
                    <div class="item-login-text">Tài khoản</div>
                    <div class="item-login-input"><input type="text" id="txtusername" name="txtusername"></div>
                </div>
                <div class="item-login">
                    <div class="item-login-text">Mật khẩu</div>
                    <div class="item-login-input"><input type="password" id="txtpassword" name="txtpassword"></div>
                </div>
                <h3 id="validate-text"  style="color: #ffff00;float: left; margin-left: 125px;margin-bottom: 25px"></h3>
                <div class="item-login">
                    <a href="#" id="login" class="btn_login1"></a>
                </div>
            </div>
            <div class="line-bot-login"></div>
            <div class="social">
                <ul>
                    <li>
                        <span>Hoặc đăng nhập bằng</span>
                    </li>
                    <li>
                        <div class="bd-login">
                            <div>
                                <a href="#"><img src="public/site/images/icon-face.png" style="width: 43px;height: 43px"></a>
                            </div>
                        </div>
                      </a>
                    </li>
                    <li>
                        <div class="bd-login">
                            <div >
                                <a href="#"> <img src="public/site/images/icon-google.png" style="width: 43px;height: 43px"></a>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#txtpassword').keyup(function(e) {
        var enterKey = 13;
        if (e.which == enterKey){
            login();
        }
    });
    $(document).ready(function () {


        $("#login").click(function() {
            if($("#txtpassword").val()== "" && $("#txtusername").val()== "" ){
                $("#validate-text").html("Bạn chưa nhập tên đăng nhập và mật khẩu");
                return false;
            }
            if($("#txtusername").val()== ""){
                $("#validate-text").html("Bạn chưa nhập tên đăng nhập");
                return false;
            }
            if($("#txtpassword").val()== ""){
                $("#validate-text").html("Bạn chưa nhập mật khẩu");
                return false;
            }
            login();
        })
    });
function login(){

	
    $.ajax({
        type: "GET",
        url: "<?php echo $linkapi ?>",
        data: {
            c: 3,
            un: $("#txtusername").val(),
            pw: $.md5($("#txtpassword").val())
        },

        dataType: 'json',
        success: function (result) {
            if(result.errorCode == 0){
                var info = atob(result.sessionKey);
                obj = JSON.parse(info);
                console.log(obj);
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('home/infouser')?>",
                    data: {
                        name: obj.nickname,
                        vin: obj.vinTotal,
                        ava : obj.avatar,
                        vip : obj.vippoint
                    },
                    dataType: 'json'

                });
              setTimeout(function() {
  window.location.href = "<?php echo base_url()?>";
}, 1000);
              //
            } else if(result.errorCode == 1005){
                $("#validate-text").html("Tên đăng nhập không tồn tại");
            }
            else if(result.errorCode == 1007){
                $("#validate-text").html("Mật khẩu không chính xác");
            }
        }
    });
}

</script>

