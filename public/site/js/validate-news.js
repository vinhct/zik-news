$(function() {
    // Setup form validation on the #register-form element
    $("#form-news-add").validate({
        ignore: [],
        debug: false,
        rules: {
            title: "required",
            category:"required",
            desc:{
                required: function()
                {
                    CKEDITOR.instances.desc.updateElement();
                },

                minlength:10
            },
            content:{
                required: function()
                {
                    CKEDITOR.instances.content.updateElement();
                },

                minlength:10
            },
            images: "required",
            orderno:"required"

        },
        // Specify the validation error messages
        messages: {
            title: "Tiêu đề không được để trống",
            category:"Chưa chọn danh mục",
            desc: "Mô tả không được để trống",
            content: "Nội dung không được để trống",
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