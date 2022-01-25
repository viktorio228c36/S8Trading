<html>
<head>
<title>Форма заявки с сайта</title>
</head>
<body>
<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['Name']) and !isset($_POST['E-mail'])){
 ?><form enctype="multipart/form-data" action="mail.php" method="POST">

                            
 <input type="hidden" name="project_name" value="S-8 Trading">
 <input type="hidden" name="admin_email" value="info.s8traiding@gmail.com">
 <input type="hidden" name="form_subject" value="Повідомлення з сайту">

 <div class="form-group">
     <label for="nameFF">Name:</label>
     <input type="text"  name="Name" required><br>
 </div>
 <div class="form-group">
     <label for="emailFF">E-mail:</label>
     <input type="text" name="E-mail" required><br>
 </div>
 <div class="form-group">
     <label for="phoneFF">Phone:</label>
     <input type="text" name="Phone"><br>
 </div>
 <div class="form-group">
     <label for="messageFF">Message</label>
     <textarea class="textArea" name="Textarea" cols="30" rows="4"></textarea><br>
 </div>
 <button>Send</button>
 <input type="submit">

</form>
<?php
} else {
 //показываем форму
 $name = $_POST['Name'];
 $email = $_POST['E-mail'];
 $phone = $_POST['Phone'];
 $textarea = $_POST['Textarea'];
 $name = htmlspecialchars($name);
 $email = htmlspecialchars($email);
 $phone = htmlspecialchars($phone);
 $textarea = htmlspecialchars($textarea);
 $name = urldecode($name);
 $email = urldecode($email);
 $phone = urldecode($phone);
 $textarea = urldecode($textarea);
 $name = trim($name);
 $email = trim($email);
 $phone = trim($phone);
 $textarea = trim($textarea);
 if (mail("info.s8traiding@gmail.com
 ",  "Заявка с сайта", "Имя : ".$fio. ". E-mail: ".$email .". Телефон : ".$phone.". Сообщение : ".$textarea.". From: info.s8traiding@gmail.com \r\n")){
 echo "Message sent successfully";
 } else {
 echo "There were errors sending your message";
 }
}
?>
</body>
</html>