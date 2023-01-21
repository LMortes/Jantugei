<title>Authorization | Jantugei Inc</title>
<head>

<meta name="viewport" content="initial-scale=1, width=device-width">
<link rel="stylesheet" media="screen and (min-width: 428px)" href="/style/mobile.css">
<link rel="stylesheet" media="screen and (min-width: 1200px)" href="/style/auth.css">
</head>
<style>
* {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
</style>

<script>
  console.log(screen.width);
</script>

<center>
  <div class="auth">
    <div class="auth_label">
      <img style="height: 80px; width: 340px;" src="images/sign_logo.png" alt="Jantugei Inc">
    </div>
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?163"></script>
    <script type="text/javascript">
      VK.init({apiId: 7204370});
    </script>

    <!-- VK Widget -->
    <div style="padding-top: 20px; padding-bottom: 10px;" id="vk_auth"></div>
    <script type="text/javascript">
      VK.Widgets.Auth("vk_auth", {"authUrl":"/auth2.php", "width":"300"});
    </script>
  </div>
</center>