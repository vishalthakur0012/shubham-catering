<?php

$ip = getenv("REMOTE_ADDR");
$Fecha= date('d-m-Y');
$Hora= date('H:i:s');

$correo="shubhamcatering1970@gmail.com";

$subj="New Enquiry From Website- $ip";
$from= "From: Shubham Catering - $ip <futuretouch.chd@gmail.com>";

$user_agent = getenv("HTTP_USER_AGENT");

$usuarioname=$_POST['S_name'];
$usuariomobile=$_POST['S_phone'];
$usuarioemail=$_POST['S_email'];
$usuariodate=$_POST['S_date'];
$usuarioselect=$_POST['S_select'];
$usuariomessage=$_POST['message'];


$content = "
Date: $Fecha / Hour: $Hora

User-Agent: $user_agent

Login IP: $ip Details:

----------------------------------------------------------------------------------------
Full Name: $usuarioname
Mobile: $usuariomobile
Email: $usuarioemail
Date: $usuariodate
Services: $usuarioselect
Message : $usuariomessage


----------------------------------------------------------------------------------------";

mail($correo, $subj, $content, $from);

?>
<SCRIPT LANGUAGE="JavaScript">
location.href='thanks.html';
</SCRIPT>
