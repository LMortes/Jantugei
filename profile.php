
<head>
<title>Profile | Jantugei Inc</title>
<link rel="stylesheet" type="text/css" href="https://jantugei.ru/style/style.css">
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
  </ul><style>
  .samp_skin {
    width: 200px;
    height: 450px;
    text-align: left;
    border: 1px solid #151f2b;  
    border-left: none;
    border-right: none;
    background-image: url(https://flxrenciaincorporated.com/style/skins/23.png);
    background-size: cover; 
    background-color: #18232f; 
    background-position: center;
  } 
  .user_info {
    float: left;
    display: inline-block; 
    width: 650px;  
    height: 450px;
    text-align: left;
    border: 1px solid #151f2b; 
    background-color: #18232f; 
    padding-top: 25px; 
    padding-left: 50px;
  }
  .user_logs {
    width: 1500px;
  }
  .user_online { 
    float: right; 
    width: 650px;  
    height: 450px;
    text-align: left;
    border: 1px solid #151f2b; 
    background-color: #18232f; 
    padding-top: 25px; 
    padding-left: 50px;
  }
  .user_admin {
    float: right; 
    width: 650px;  
    height: 450px;
    text-align: left;
    border: 1px solid #151f2b; 
    background-color: #18232f;
  }
  .user_organisation {
    display: block; 
    width: 1500px;  
    height: 40px;
    text-align: left;
    border: 1px solid #10171f; 
    border-bottom: none;
    margin-top: 5em;
    background-repeat: no-repeat;
    background-size: 200px 200px; 
    background-color: #18232f; 
    background-position: center;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  .user_logs {
    text-align: left;
  }
  .u_info {
    line-height: 1.5;
    display: flex;
  }
  .param {
    width: 300px;
    float: right;
    color: #ffffff;
    font-weight: bold;
  }
  .info {
    width: 300px;
    float: left;
    color: #00ba66;
  }
</style>

<center><div class="user_organisation">
  <ul style="border-top-left-radius: 9px; border-top-right-radius: 9px;">
    <li><a style="border-top-left-radius: 9px;" onclick="window.location.href = '/';"><i class='fa fa-bookmark'></i> Статистика</a></li>
  </ul>
</div></center>
<move_middle>
  <div class="user_info">
            <div class="u_info">
          <div class="param"><i class="fa fa-user"></i> Игровой Ник</div>
          <div class="info">Luis_Pollot [1062918] <a href='https://vk.com/id205317494'><i class='fa fa-vk'></i></a></div>
        </div> 
        <div class="u_info">
          <div class="param"><i class="fa fa-low-vision"></i> Префикс</div>
          <div class="info">L.Pollot</div>
        </div>
        <div class="u_info">
          <div class="param"><i class="fa fa-globe"></i> Сервер</div>
          <div class="info">Yuma</div>
        </div> 
        <div class="u_info">
          <div class="param"><i class="fa fa-id-card-o"></i> Должность</div>
          <div class="info">Дет.Сад</div>
        </div>
        <div class="u_info">
          <div class="param"><i class="fa fa-star"></i> Уровень доступа</div>
          <div class="info">8</div>
        </div>
        <div class="u_info">
          <div class="param"><i class="fa fa-signal"></i> Статус</div>
          <div class="info">Актив</div>
        </div>
        <div class="u_info">
          <div class="param"><i class="fa fa-mobile"></i> Дискорд ID</div>
          <div class="info">324659289874628610</div>
        </div>
        <div class="u_info">
          <div class="param"><i class="fa fa-envelope-o"></i></i> Форум</div>
          <div class="info"><a href='/'><i class="fa fa-share"></i></a></div>
        </div>
        <div class="u_info">
          <div class="param"><i class="fa fa-hourglass-start"></i> Дата назначения</div>
          <div class="info">06.11.2022</div>
        </div>
        <div class="u_info">
          <div class="param"><i class="fa fa-calendar-minus-o"></i> Дней на должности</div>
          <div class="info">76</div>
        </div>
        <div class="u_info">
          <div class="param"><i class="fa fa-btc"></i> Баллы</div>
          <div class="info">0</div>
        </div>
          </div>
    <div class="samp_skin"></div>
            <div class="user_admin">
        </div>
      </move_middle>
<center>
  <div class="user_logs">
    <button type="button" class="collapsible">Логи действий над пользователем</button>
    <div class="content"><p>
      31.10.2022 00:08:19 <a href='https://flxrenciaincorporated.com/profile.php?id=Luis_Pollot'>Luis_Pollot</a> <a href='https://vk.com/id205317494'><i class='fa fa-vk'></i></a> было установлено -70 баллов от <a href='https://flxrenciaincorporated.com/profile.php?id=Fernando_Adams'>Fernando_Adams</a> <a href='https://vk.com/id517032763'><i class='fa fa-vk'></i></a> по причине: лимит<br></p></div>
  </div>
</center>

<script>
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      }
    });
  }
</script>