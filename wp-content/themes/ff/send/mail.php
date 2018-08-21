<?php

$admin ="admin@ff.ru";
$admin_email = get_bloginfo( 'admin_email' ); 
$admin_email .= "";
$admin_email = "dopimenov@gmail.com,dimonov@i.ua";
$form_subject = "Заявка с сайта - ff";
$exp_toEmail = explode(",", $admin_email);
//var_dump($exp_toEmail) ;
$msg = array();

	if ( !empty( $_FILES['file']['tmp_name'] ) and $_FILES['file']['error'] == 0 ) {
		$filepath = $_FILES['file']['tmp_name'];
		$filename = $_FILES['file']['name'];
	} else {
		$filepath = '';
		$filename = '';
	}

foreach ($exp_toEmail as $val){
 $c = true;
 $message = "";
 $project_name = "ff";

 //$form_subject = trim($_POST["form_subject"]);

	 foreach ( $_POST as $key => $value ) {
	   if(	$key == "form") $key = "Из формы";
	   if(	$key == "kom") $key = "Комментарий";
	   if(	$key == "name" ) $key = "Имя";
	   if(	$key == "phone" || $key == "tmail") $key = "Телефон";
	   if(	$key == "service") $key = "Услуга";
	    if(	$key == "message") $key = "Сообщение";
	   if(	$key == "email" || $key == "fmail") $key = "Email";
	   if(	$key == "data") {
		 $key = "Рассчёт";
		 $value = str_replace('"','\"',$msg);
	   }


	   if ( $key != "nonce_code" &&  $key != "action" &&  $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
		 $message .= "
		 " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
		 <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
		 <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
	   </tr>
	   ";
	   }
	 }


 // if($val=="ivanovo.kuhni@yandex.ru"){
//      	$ref = "<a href=".$_SERVER['HTTP_REFERER'].">".$_SERVER['HTTP_REFERER']."</a>";
//     }else{
//      	$ref = "";
//    }

   if( $ref!=="" ) $message .= "<tr style='background-color: #f8f8f8;padding: 10px; border: #e9e9e9 1px solid;'>".$ref."</tr>";

   $message = "<table style='width: 100%;'>".$message."</table>";

  // $headers = "MIME-Version: 1.0" . PHP_EOL . "Content-Type: text/html; charset=utf-8" . PHP_EOL . 'From: '.adopt($project_name).' <'.$admin.'>' . PHP_EOL . 'Reply-To: '.$admin_email.'' . PHP_EOL;



 
	//$mail = mail($val, adopt($form_subject), $message, $headers );

	$mail = send_mail($val, $form_subject, $message, $admin_email, $filepath, $filename);

	if($mail) {
$msg['f'] = $_FILES;
		$msg["flag"] = "success";
		$msg["recipients"][$val] = "success";
	}else $msg["recipients"][$val] = "error";
	
	if (in_array("success", $msg)) {
		$msg["flag"] = "success";
	}else{
		$msg["flag"] = "error";
	}
}

//header("Content-Type: application/json", true);
echo json_encode($msg);

function adopt($text) {
 return '=?UTF-8?B?'.base64_encode($text).'?=';
}

// Вспомогательная функция для отправки почтового сообщения с вложением
function send_mail($to, $subject, $body, $email, $filepath, $filename)
{

  $boundary = "--".md5(uniqid(time())); // генерируем разделитель
  $headers = "From: ".$email."\r\n";   
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .="Content-Type: multipart/mixed; boundary=\"".$boundary."\"\r\n";
  $multipart = "--".$boundary."\r\n";
  $multipart .= "Content-type: text/html; charset=\"utf-8\"\r\n";
  $multipart .= "Content-Transfer-Encoding: quoted-printable\r\n\r\n";

  $body = $body."\r\n\r\n";
 
  $multipart .= $body;
 
  $file = '';
  if ( !empty( $filepath ) ) {
    $fp = fopen($filepath, "r");
    if ( $fp ) {
      $content = fread($fp, filesize($filepath));
      fclose($fp);
      $file .= "--".$boundary."\r\n";
      $file .= "Content-Type: application/octet-stream\r\n";
      $file .= "Content-Transfer-Encoding: base64\r\n";
      $file .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
      $file .= chunk_split(base64_encode($content))."\r\n";
    }
  }
  $multipart .= $file."--".$boundary."--\r\n";
  $mail = mail($to, $subject, $multipart, $headers);
	return $mail;
}

?>