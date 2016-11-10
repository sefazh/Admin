var Script = function () {

    $.validator.setDefaults({
        submitHandler: function(form) {
            form.submit();
        }
    });

    $().ready(function() {
        // validate the comment form when it is submitted
        $("#commentForm").validate();

        // validate signup form on keyup and submit
        $("#cateCreateForm").validate({
            rules: {
                cat_name: "required",
                pid: "required"
            },
            messages: {
                cat_name: "Please enter the cat_name",
                pid: "Please select the pid"
            },
            submitHandler : function(form) {
                var formData = new FormData(form);
                $.ajax({
                    type: 'POST',
                    url: '/ajax/category_create',
                    data: formData,
                    dataType: 'json',
                    processData : false,    // 使用formData必须false
                    contentType : false,    // 使用formData必须false
                    success: function(result) {
                        console.log(result);
                    },
                    error : function() {
                        console.log('error');
                    }
                });
            }
        });

    });


}();