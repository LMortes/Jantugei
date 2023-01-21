<html>
<head>
<title>Add to Blacklist | Jantugei Inc</title>
<link rel="stylesheet" type="text/css" href="https://jantugei.ru/style/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<link rel="stylesheet" type="text/css" href="https://jantugei.ru/style/index.css">-->
<link rel="stylesheet" href="https://jantugei.ru/font-awesome/css/font-awesome.min.css">
</head>

<ul>
    <li><a onclick="window.location.href = 'index.php';"><i class='fa fa-home'></i> Главная страница</a></li>
    <li class="dropdown" style="width:min-content;">
      <a style="font-weight: normal;" href="javascript:void(0)" class="dropbtn"><i class="fa fa-list"></i> Пользователи</a>
      <div class="dropdown-content" style="width:inherit;">
        <a class="first_child" onclick="window.location.href = 'index.php';"><i class="fa fa-address-card"></i> Лидеры | Заместители</a>
        <a onclick="window.location.href = 'admins.php';"><i class="fa fa-star-o"></i> Администрация</a>
      </div>
    </li>
    <li class="dropdown" style="width:min-content;">
      <a style="font-weight: normal;" href="javascript:void(0)" class="dropbtn"><i class='fa fa-ban'></i> Черный список</a>
      <div class="dropdown-content" style="width:inherit;">
        <a class="first_child" onclick="window.location.href = 'show_blacklist.php';"><i class="fa fa-table"></i> Посмотреть список</a>
        <a onclick="window.location.href = 'blacklist.php';"><i class="fa fa-pencil-square-o"></i> Внести в список</a>
      </div>
    </li>
    <li class="dropdown" style="width:min-content;">
      <a style="font-weight: normal;" href="javascript:void(0)" class="dropbtn"><i class='fa fa-info'></i> F.A.Q Форм</a>
      <div class="dropdown-content" style="width:inherit;">
        <a class="first_child" onclick="window.location.href = 'form_errors.php';"><i class="fa fa-cogs"></i> Лидер | Заместитель</a>
                  <a onclick="window.location.href = 'form_errors_a.php';"><i class="fa fa-cogs"></i> Администратор</a>
              </div>
    </li>
    <li></li>
    <li style="float:right;border-right:none"><a class="last_header" onclick="window.location.href = 'auth.php';"><i class='fa fa-sign-out'></i> Выйти</a></li>
    <li style="float:right"><a class="last_header" onclick="window.location.href = 'profile.php';"><i class="fa fa-user-o"></i> Aleks_Kutuzov</a></li>
  </ul><body>
<div style="margin: auto;width: 40%;">
<div class="bg">
<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
</div>
<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
</div>
<div class="alert alert-primary alert-dismissible" id="loading"style="display:none;">
<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
</div>
<form id="fupForm" name="form1" method="post">
<div class="form-group">
<ustyle><label for="fraction">Выбор структуры:</label></ustyle>
<select name="fraction" id="fraction" class="form-control">
<option value="">⬇ В чс какой структуры внести? ⬇</option>
<option value="1"><i class="fas fa-building-ngo"></i> Гос.Структуры</option>
<option value="2"><i class="fas fa-people-robbery"></i> Мафии</option>
<option value="3"><i class="fas fa-gun"></i> Гетто</option>
</select>
</div>
<div class="form-group">
<ustyle><label for="nickname">Nick_Name:</label></ustyle>
<input type="text" class="form-control" id="nickname" placeholder="Vladislav_Florencia" name="nickname">
</div>
<div class="form-group">
<ustyle><label for="blacklist_type">Выбор степени чса:</label></ustyle>
<select
name="blacklist_type" id="blacklist_type" class="form-control">
<option value="">⬇ Выберите степень чса для занесения ⬇</option>
<option value="1">Ⅰ Степень чса</option>
<option value="2">Ⅱ Степень чса</option>
<option value="3">Ⅲ Степень чса</option>
<option value="4">Ⅳ Степень чса</option>
<option value="5">Ⓝ Нелегалы</option>
</select>
</div>
<div class="form-group">
<ustyle><label for="reason">Причина занесения в ЧС:</label></ustyle>
<input type="text" class="form-control" id="reason" placeholder="Не отстоял лидерку" name="reason">
</div>
<button type="submit", class="btn btn-primary">Внести в ЧС</button>
</form>
</div>
</div>
<script>
$(document).ready(function() {
$("#fupForm").submit(function(e) {
$('body,html').animate({scrollTop:0},750);
$("#loading").slideDown(325);
$('#loading').html('<i class="fa-solid fa-sync fa-spin"></i> Ваша форма обрабатывается, ожидайте дальнейших инструкций, перезагружать страницу или же нажимать больше ничего не нужно!');
var fraction = $('#fraction').val();
var nickname = $('#nickname').val();
var blacklist_type = $('#blacklist_type').val();
var reason = $('#reason').val();
e.preventDefault();
$.ajax( {
url: "save_blacklist.php",
method: "post",
data: {
fraction: fraction,
nickname: nickname,
blacklist_type: blacklist_type,
reason: reason,
date: 1674124628,
vkid: 205317494 },
dataType: "text",
success: function(dataResult){
$("#loading").slideUp(750);
var dataResult = JSON.parse(dataResult);
if(dataResult.statusCode==200){
$("#error").hide();
$("#success").slideDown(750);
$('#success').html('Игрок был успешно занесен в черный список, переадресация на страницу с внесением в черный список через 5 секунд.');
setTimeout(function(){
$("#success").slideUp(750);
}, 5000);
setTimeout(function(){
location.href = "blacklist.php";
}, 5000);
}
else if(dataResult.statusCode==201){
$("#success").hide();
$("#error").slideDown(750);
$('#error').html('<i class="fas fa-times"></i> Ошибка #201. Вы не заполнили одно из полей!');
setTimeout(function(){
$("#error").slideUp(750);
}, 5000);
}
else if(dataResult.statusCode==202){
$("#success").hide();
$("#error").slideDown(750);
$('#error').html('<i class="fas fa-times"></i> Ошибка #202. Игрок с таким игровым ником уже находится в черном списке!');
setTimeout(function(){
$("#error").slideUp(750);
}, 5000);
}
else if(dataResult.statusCode==203){
$("#success").hide();
$("#error").slideDown(750);
$('#error').html('<i class="fas fa-times"></i> Ошибка #203. Произошла ошибка при заполнении формы, повторите вашу попытку!');
setTimeout(function(){
$("#error").slideUp(750);
}, 5000);
}
else if(dataResult.statusCode==204){
$("#success").hide();
$("#error").slideDown(750);
$('#error').html('<i class="fas fa-times"></i> Ошибка #204. Ник нейм должен быть формата Nick_Name. Пример: Vladislav_Florencia.');
setTimeout(function(){
$("#error").slideUp(750);
}, 5000);
}
else if(dataResult.statusCode==205){
$("#success").hide();
$("#error").slideDown(750);
$('#error').html('<i class="fas fa-times"></i> Ошибка #205. Ник нейм должен состоять только из букв и быть формата Nick_Name. Пример: Vladislav_Florencia.');
setTimeout(function(){
$("#error").slideUp(750);
}, 5000);
}
else if(dataResult.statusCode==206){
$("#success").hide();
$("#error").slideDown(750);
$('#error').html('<i class="fas fa-times"></i> Ошибка #206. Аккаунта с таким ником - не существует.');
setTimeout(function(){
$("#error").slideUp(750);
}, 5000);
}
else if(dataResult.statusCode==207){
$("#success").hide();
$("#error").slideDown(750);
$('#error').html('<i class="fas fa-times"></i> Ошибка #207. Произошла ошибка при записи логов, повторите вашу попытку!');
setTimeout(function(){
$("#error").slideUp(750);
}, 5000);
}
else if(dataResult.statusCode==208){
$("#success").hide();
$("#error").slideDown(750);
$('#error').html('<i class="fas fa-times"></i> Ошибка #208. Логи не авторизованы, повторите попытку через пару минут!');
setTimeout(function(){
$("#error").slideUp(750);
}, 5000);
}
}
});
});
});
</script>
</body>
</html>