var Script = function () {

    $.validator.setDefaults({
        submitHandler: function(form) {
            form.submit();
        }
    });

    $().ready(function() {
        // validate signup form on keyup and submit
        // validate the comment form when it is submitted
        $("#commentForm").validate();

        // category
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
                    url: '/ajax/category_edit',
                    data: formData,
                    dataType: 'json',
                    processData : false,    // 使用formData必须false
                    contentType : false,    // 使用formData必须false
                    success: function(result) {
                        if (result) {
                            window.location.href = '/category/lst';
                        } else {
                            alert('操作失败！');
                        }
                    },
                    error : function() {
                        console.log('error');
                    }
                });
            }
        });

        // brand
        $("#brandCreateForm").validate({
            rules: {
                brand_name: "required"
            },
            messages: {
                brand_name: "Please enter the brand_name"
            },
            submitHandler : function(form) {
                var formData = new FormData(form);
                $.ajax({
                    type: 'POST',
                    url: '/ajax/brand_edit',
                    data: formData,
                    dataType: 'json',
                    processData : false,    // 使用formData必须false
                    contentType : false,    // 使用formData必须false
                    success: function(result) {
                        if (result) {
                            window.location.href = '/brand/lst';
                        } else {
                            alert('操作失败！');
                        }
                    },
                    error : function() {
                        console.log('error');
                    }
                });
            }
        });
    });


}();