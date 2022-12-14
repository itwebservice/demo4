<?php 
class hotel_booking_cancel{

public function hotel_cancel_save()
{

	$entry_id_arr = $_POST['entry_id_arr'];

	for($i=0; $i<sizeof($entry_id_arr); $i++){
		$sq_cancel = mysqlQuery("update hotel_booking_entries set status='Cancel' where entry_id='$entry_id_arr[$i]'");
		if(!$sq_cancel){
			echo "error--Sorry, Cancellation not done!";
			exit;
		}
	}

	//Cancelation notification mail send
	$this->cancel_mail_send($entry_id_arr);

	//Cancelation notification sms send
	$this->cancelation_message_send($entry_id_arr);

	echo "Hotel booking has been successfully cancelled.";
}


public function cancel_mail_send($entry_id_arr)
{
	global $app_name,$encrypt_decrypt,$secret_key;
	$sq_entry = mysqli_fetch_assoc(mysqlQuery("select * from hotel_booking_entries where entry_id='$entry_id_arr[0]'"));
	$sq_booking = mysqli_fetch_assoc(mysqlQuery("select * from hotel_booking_master where booking_id='$sq_entry[booking_id]'"));
	$date = $sq_booking['created_at'];
    $yr = explode("-", $date);
    $year =$yr[0];
	$sq_customer = mysqli_fetch_assoc(mysqlQuery("select * from customer_master where customer_id='$sq_booking[customer_id]'"));
	$email_id = $encrypt_decrypt->fnDecrypt($sq_customer['email_id'], $secret_key);
	if($sq_customer['type']== 'Corporate' || $sq_customer['type']== 'B2B'){
		$cust_name = $sq_customer['company_name'];
	}else{
		$cust_name = $sq_customer['first_name'].' '.$sq_customer['last_name'];
	}

	$content1 = '';

	for($i=0; $i<sizeof($entry_id_arr); $i++)
	{
	$sq_entry = mysqli_fetch_assoc(mysqlQuery("select * from hotel_booking_entries where entry_id='$entry_id_arr[$i]'"));
	$sq_hotel = mysqli_fetch_assoc(mysqlQuery("select * from hotel_master where hotel_id='$sq_entry[hotel_id]'"));

	$content1 .= '
	<tr>
      <td style="text-align:left;border: 1px solid #888888;">'.($i+1).'</td>   <td style="text-align:left;border: 1px solid #888888;">'.$sq_hotel['hotel_name'].'</td>   
    </tr> 
	';

	}

	global $mail_em_style, $mail_font_family, $mail_strong_style, $mail_color;
	$content = '	                    
	<tr>
    <table width="85%" cellspacing="0" cellpadding="5" style="color: #888888;border: 1px solid #888888;margin: 0px auto;margin-top:20px; min-width: 100%;" role="presentation">
    <tr>
      <th style="border: 1px solid #888888;text-align: left;background: #ddd;color: #888888;">Sr.No</th>
      <th style="border: 1px solid #888888;text-align: left;background: #ddd;color: #888888;">Hotel Name
      </th>
    </tr>
    
      '.$content1.'
    
  </table>
</tr>
	';
	$subject = 'Hotel Cancellation Confirmation( '.get_hotel_booking_id($sq_entry['booking_id'],$year).' )';
	global $model;
	$model->app_email_send('38',$cust_name,$email_id, $content,$subject);
}


public function cancelation_message_send($entry_id_arr)
{
	global $secret_key,$encrypt_decrypt;
	$sq_entry = mysqli_fetch_assoc(mysqlQuery("select * from hotel_booking_entries where entry_id='$entry_id_arr[0]'"));
	$sq_booking = mysqli_fetch_assoc(mysqlQuery("select * from hotel_booking_master where booking_id='$sq_entry[booking_id]'"));
	$sq_customer = mysqli_fetch_assoc(mysqlQuery("select * from customer_master where customer_id='$sq_booking[customer_id]'"));
	$contact_no = $encrypt_decrypt->fnDecrypt($sq_customer['contact_no'], $secret_key);
	$message = 'We are accepting your cancellation request for Hotel booking.';
  	global $model;
  	$model->send_message($contact_no, $message);
}
}
?>