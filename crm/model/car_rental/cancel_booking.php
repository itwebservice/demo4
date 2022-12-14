<?php 
class cancel_booking{

public function cancel_booking_save()
{
	$booking_id = $_POST['booking_id'];
	$sq_count = mysqli_fetch_assoc(mysqlQuery("select * from car_rental_booking where booking_id='$booking_id' and status='Cancel'"));
	if($sq_count==0){
		$sq_booking = mysqlQuery("update car_rental_booking set status='Cancel' where booking_id='$booking_id'");
		if($sq_booking){
			//Cancelation notification mail send
			$this->cancel_mail_send($booking_id);
			//Cancelation notification sms send
			$this->cancelation_message_send($booking_id);

			echo "Car rental booking has been successfully Cancelled.";
			exit;
		}
		else{
			echo "error--Sorry, Booking not cancelled!";
			exit;
		}
	}else{
		echo "error--Sorry, Booking already cancelled!";
		exit;
	}
}

public function cancel_mail_send($booking_id){
	global $secret_key,$encrypt_decrypt;
	$sq_booking = mysqli_fetch_assoc(mysqlQuery("select * from car_rental_booking where booking_id='$booking_id'"));
	$sq_customer = mysqli_fetch_assoc(mysqlQuery("select * from customer_master where customer_id='$sq_booking[customer_id]'"));
	
	if($sq_customer['type'] == 'Corporate' || $sq_customer['type']=='B2B'){
		$cust_name = $sq_customer['company_name'];
	}else{
		$cust_name = $sq_customer['first_name'].' '.$sq_customer['last_name'];
	}

	$contact_no = $encrypt_decrypt->fnDecrypt($sq_customer['contact_no'], $secret_key);
	$email_id = $encrypt_decrypt->fnDecrypt($sq_customer['email_id'], $secret_key); 
	$date = $sq_booking['created_at'];
    $yr = explode("-", $date);
    $year =$yr[0];
	global $mail_em_style, $mail_font_family, $mail_strong_style, $mail_color;
	$content = '';
	$subject = 'Car rental Cancellation Confirmation( '.get_car_rental_booking_id($sq_booking['booking_id'],$year).' )'; 
	global $model;
	
	$model->app_email_send('40',$cust_name,$email_id, $content,$subject);
}

public function cancelation_message_send($booking_id)
{
	global $secret_key,$encrypt_decrypt;
	$sq_booking = mysqli_fetch_assoc(mysqlQuery("select * from car_rental_booking where booking_id='$booking_id'"));
	$sq_customer = mysqli_fetch_assoc(mysqlQuery("select * from customer_master where customer_id='$sq_booking[customer_id]'"));
	$contact_no = $encrypt_decrypt->fnDecrypt($sq_customer['contact_no'], $secret_key);
	$message = 'We are accepting your cancellation request for Car Rental booking.';
	global $model;
	$model->send_message($contact_no, $message);
}


}
?>