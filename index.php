<?php
require_once('pdo/conf.php');
 ?> 

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>

	<div class="d-sm-flex align-items-center justify-content-center pt-5 mb-4">
    <p class="mbr-fonts-style display-6 mb-3" style="margin-right: 325px !important;">Добавить контакт</p>
  </div>
  <hr>
    <div class="container pt-5">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-7">  
          <form action="form_processing.php" method="POST">
              <div class="form-group mb-3">
                  <input type="text" class="form-control" name="name" required placeholder="Имя">
              </div>
              <div class="form-group mb-3">
                  <input type="text" id="dispatch-mask" class="form-control" name="phone_number" required placeholder="Телефон в формате +7 (000)">
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
               <input type="submit" class="btn mbr-fonts-style display-7 btn-lg" name="submit" value="Добавить" style="background-color: #303d72; color: #fffbfb">
              </div>
          </form>
        </div>
      </div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-center pt-5 mb-4">
    	<p class="mbr-fonts-style display-6 mb-3" style="margin-right: 325px !important;">Список контактов</p>
  	</div>
<?php
$obj = $DB->query("SELECT id, name, phone_number FROM phonebooks ORDER BY id DESC");
?>
<? foreach ($obj as $user): ?>
    <div class="container pt-5">
      <div class="row justify-content-center">
      	<div class="col-12 col-lg-7" style="border: 1px solid #a9a7a7 !important; border-radius: 8px;">  
          <p class="mbr-fonts-style mb-3" style="margin-right: 325px !important;">
          	<?= $user['name']?>
          	<a href="form_processing.php?delete=<?= $user['id'];?>" class="btn-close" aria-label="Close" style="padding-right: 50px;"></a>
          </p>
          <p class="mbr-fonts-style mb-3" style="margin-right: 325px !important;">
          	<?= $user['phone_number']?>
          </p>
        </div>
      </div>
    </div>
<?endforeach?>

<script src="https://unpkg.com/imask"></script>
<script src="script.js"></script>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	
</body>
</html>