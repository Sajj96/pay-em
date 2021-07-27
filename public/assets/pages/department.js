function validateForm() {
    var valid = true;

    var deptName = $("#deptName").val();
    var deptCode = $("#deptCode").val();
    
    if (deptName == "") {
        $("#deptName-info").html("Required.");
        $("#deptName").css('border', '#e66262 1px solid');
        valid = false;
    }

    if(valid) {
        $.ajax({
            url: "departments/add",
            method: 'POST',
            data: {
                _token: $("input[name=_token]").val(),
                name: deptName,
                code: deptCode
            },
            success: function(){
                $.growl({
                    icon: 'icofont icofont-close',
                    title: ' Success: ',
                    message: 'Department created successfully...',
                    url: ''
                },{
                    element: 'body',
                    type: 'success',
                    allow_dismiss: true,
                    placement: {
                        from: 'top',
                        align: 'right'
                    },
                    offset: {
                        x: 30,
                        y: 30
                    },
                    spacing: 10,
                    z_index: 999999,
                    delay: 2500,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: 'animated bounceInDown',
                        exit: 'animated bounceOutUp'
                    },
                    icon_type: 'class',
                    template: '<div data-growl="container" class="alert" role="alert">' +
                    '<button type="button" class="close" data-growl="dismiss">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '<span class="sr-only">Close</span>' +
                    '</button>' +
                    '<span data-growl="icon"></span>' +
                    '<span data-growl="title"></span>' +
                    '<span data-growl="message"></span>' +
                    '<a href="#" data-growl="url"></a>' +
                    '</div>'
                });
                setTimeout(function(){
                    location.reload();
                },1500);
            }, error: function(data){
                $.growl({
                    icon: 'icofont icofont-close',
                    title: ' Error - ',
                    message: 'Problem in Department creation',
                    url: ''
                },{
                    element: 'body',
                    type: 'danger',
                    allow_dismiss: true,
                    placement: {
                        from: 'top',
                        align: 'right'
                    },
                    offset: {
                        x: 30,
                        y: 30
                    },
                    spacing: 10,
                    z_index: 999999,
                    delay: 2500,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: 'animated bounceInDown',
                        exit: 'animated bounceOutUp'
                    },
                    icon_type: 'class',
                    template: '<div data-growl="container" class="alert" role="alert">' +
                    '<button type="button" class="close" data-growl="dismiss">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '<span class="sr-only">Close</span>' +
                    '</button>' +
                    '<span data-growl="icon"></span>' +
                    '<span data-growl="title"></span>' +
                    '<span data-growl="message"></span>' +
                    '<a href="#" data-growl="url"></a>' +
                    '</div>'
                });
            }
        });
    }
    return valid;
}

$(document).on('click', '', function(){
    
});