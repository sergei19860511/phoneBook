<?php
require_once('pdo/conf.php');


$phone_number = $_POST['phone_number'];
$pattern = "#^[-+0-9()\s]+$#";
$name = trim(htmlspecialchars($_POST['name']));

if ((preg_match($pattern, $phone_number)) && !empty($name) && !empty($phone_number)) {
	$obj = $DB->query("SELECT count(*) as colums FROM phonebooks WHERE phone_number=?", array($phone_number));

	  if ($obj[0]['colums'] > 0) {
	  			echo '<div class="d-sm-flex align-items-center justify-content-center pt-5 mb-4">
                <p class="mbr-fonts-style display-6 mb-3" style="margin-right: 325px !important; color: #e20404;">Номер уже добавлен</p>
                </div>';
      echo "<meta http-equiv='refresh' content='1; url=http://phonebook/'>";
      require_once 'index.php';
	  }else {
	  	$DB->query("INSERT INTO phonebooks(name,phone_number) VALUES(?,?)", array($_POST['name'],$_POST['phone_number']));
	  	echo "<meta http-equiv='refresh' content='0; url=http://phonebook/'>";
	  }
}

if (!empty($_GET['delete'] && (int)$_GET['delete'])) {
	$DB->query("DELETE FROM phonebooks WHERE id = ?", array($_GET['delete']));
	echo "<meta http-equiv='refresh' content='0; url=http://phonebook/'>";
}










