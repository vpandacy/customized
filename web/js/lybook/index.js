;
var contact_us_ops = {
    init: function () {
        this.eventBind();
    },
    eventBind: function () {
        var that = this;
        $("#lybook-from .lxwm-btn").on('click',function () {
            var btn_target = $(this);
            if (btn_target.hasClass("disabled")) {
                alert("正在保存，请不要重复提交~~");
                return false;
            }
            var name_target = $("#lybook-from input[name=name]");
            var name = name_target.val();
            if (name == undefined || name.length < 1) {
               alert("请输入姓名~~");
                return;
            }

            var mobile_target = $("#lybook-from input[name=mobile]");
            var mobile = mobile_target.val();
            if (!that.mobile(mobile)) {
                alert("请输入合法的手机号~~");
                return;
            }

            var email_target = $("#lybook-from input[name=email]");
            var email = email_target.val();
            if (!that.email(email)) {
                alert("请输入合法的邮箱~~");
                return;
            }

            var content_target = $("#lybook-from textarea[name=content]");
            var content = content_target.val();
            if (content == undefined || content.length < 1) {
                alert("请输入留言内容~~");
                return;
            }

            var data =$("#lybook-from").serialize();
            btn_target.addClass("disabled");
            $.ajax({
                type:'POST',
                url:'/contact-us',
                data:data,
                success: function (res) {
                    btn_target.removeClass("disabled");
                    var callback = {};
                    if (res.code == 200) {
                        callback = function () {
                            window.location.href = window.location.href;
                        };
                    }
                    alert(res.msg);
                }
            });

        });
    },
    mobile:function( param ){
        if( param == undefined ){
            return false;
        }
        var match = /^1[0-9]{10}$/;
        return match.test( param );
    },
    email:function( param ){
        if( param == undefined ){
            return false;
        }
        return /^\w+((.\w+)|(-\w+))@[A-Za-z0-9]+((.|-)[A-Za-z0-9]+).[A-Za-z0-9]+$/.test( param );
    },
};


$(document).ready(function () {
    contact_us_ops.init();
});