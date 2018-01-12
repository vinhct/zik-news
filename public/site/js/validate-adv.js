$(function() {
    // Setup form validation on the #register-form element
    $("#form-news-add").validate({
        ignore: [],
        debug: false,
        rules: {
            title: "required",
            link:"required",
            images: "required",
            orderno:"required"

        },
        // Specify the validation error messages
        messages: {
            title: "Tiêu đề không được để trống",
            link:"Đường dẫn không được để trống và phải theo định dạng http://abc.com",
            images: "Chưa chọn ảnh đại diện",
            orderno:"Thứ tự không được để trống và nhập số"
        },

        submitHandler: function(form) {
            form.submit();
        }
    });

});
$('#orderno').keyup(function () {
    this.value = this.value.replace(/[^0-9.]/g,'');
});
