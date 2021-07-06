"use strict";var KTUserAdd=function(){var e,t,r;return{init:function(){var n;e=$("#kt_user_add_form"),(r=new KTWizard("kt_user_add_user",{startStep:1,clickableSteps:!0})).on("beforeNext",function(e){!0!==t.form()&&e.stop()}),r.on("change",function(e){KTUtil.scrollTop()}),t=e.validate({ignore:":hidden",rules:{profile_avatar:{},profile_first_name:{required:!0},profile_last_name:{required:!0},profile_phone:{required:!0},profile_email:{required:!0,email:!0}},invalidHandler:function(e,t){KTUtil.scrollTop(),swal.fire({title:"",text:"There are some errors in your submission. Please correct them.",type:"error",buttonStyling:!1,confirmButtonClass:"btn btn-brand btn-sm btn-bold"})},submitHandler:function(e){}}),(n=e.find('[data-ktwizard-type="action-submit"]')).on("click",function(r){
    r.preventDefault(),t.form()&&(KTApp.progress(n),e.ajaxSubmit({success:function(){
        var url = document.getElementsByName('form')[0].getAttribute("action");
        var formData = $(form).serializeArray();
        $.post(url, formData).done(function (data) {
            alert(data);
            //window.location.href="/Tours/All";
        });
        KTApp.unprogress(n),swal.fire({title:"",text:"The application has been successfully submitted!",type:"success",confirmButtonClass:"btn btn-secondary"})}}))
}),new KTAvatar("kt_user_add_avatar")}}}();jQuery(document).ready(function(){KTUserAdd.init()});
