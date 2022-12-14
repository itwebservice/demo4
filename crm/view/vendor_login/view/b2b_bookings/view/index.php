<?php
include "../../../../../model/model.php";
$booking_id = $_POST['id'];
$vendor_type = $_SESSION['vendor_type'];
$vendor_id =  $_SESSION['user_id'];

if($vendor_type == 'Hotel Vendor'){
	$service='Hotel';
}
else{
	$service = '';
}
$sq_b2b = mysqli_fetch_assoc(mysqlQuery("select * from b2b_booking_master where booking_id='$booking_id'"));
$cart_data = json_decode($sq_b2b['cart_checkout_data']);
$timing_slots = explode(',',$sq_b2b['timing_slots']);
$hotel_detail = array();
$activity_detail = array();
$transfer_detail = array();
foreach($cart_data as $values){
	$adults_count = 0;
	$child_count = 0;
	$count=0;
	if($values->service->name == $service){
		if($values->service->id == $vendor_id){

			// Hotel
			if($service == 'Hotel'){

				$room_cat = array();
				$room_no = array();
				$checkin = array();
				$checkout = array();
				array_push($checkin, $values->service->check_in);
				array_push($checkout, $values->service->check_out);
				foreach($values->service->item_arr as $values_1){
					$room_types = explode('-',$values_1);	
					array_push($room_cat, $room_types[1]);	
					array_push($room_no, $room_types[0]);	
				}
				$hotel_detail[$count]['room_cat'] = $room_cat;
				$hotel_detail[$count]['room_no'] = $room_no;
				$hotel_detail[$count]['checkin'] = $checkin;
				$hotel_detail[$count]['checkout'] = $checkout;
				$final_rooms_arr = ($values->service->final_arr!='') ? $values->service->final_arr : [];
				for ($n = 0; $n < sizeof( $final_rooms_arr); $n++) {
					$adults_count = ($adults_count) + ($final_rooms_arr[$n]->rooms->adults);
					$child_count = ($child_count) + ($final_rooms_arr[$n]->rooms->child);
				}
				$hotel_detail[$count]['adults'] = $adults_count;
				$hotel_detail[$count]['child'] = $child_count;
				$hotel_detail[$count]['number_rooms'] =  sizeof( $final_rooms_arr);$count++;
			}
		}
	}
}
?>

<div class="modal fade profile_box_modal c-bookingInfo" id="b2bsale_details" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
		<div class="modal-body profile_box_padding">

		<div>
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="nav-item active"><a href="#basic_information" aria-controls="home" role="tab" data-toggle="tab" class="nav-link active tab_name"><?= $service ?> Details</a></li>
				<li class="pull-right" class="nav-item"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></li>
			</ul>

			<div class="panel panel-default panel-body fieldset profile_background">

				<!-- Tab panes1 -->
				<div class="tab-content">

				<!-- *****TAb1 start -->
				<div role="tabpanel" class="tab-pane active" id="basic_information">
					<?php include "view_modal.php"; ?>
				</div>
				<!-- ********Tab1 End******** --> 
				
				</div>

			</div>
		</div>
		</div>
	</div>
    </div>
</div>
<script src="<?php echo BASE_URL ?>js/app/footer_scripts.js"></script>
<script>
$('#b2bsale_details').modal('show');
</script>