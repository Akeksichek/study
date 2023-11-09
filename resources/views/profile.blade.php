<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('css/style/reset.css')}}" />
    <link rel="stylesheet" href="{{asset('css/profile.css')}}" />

    <title>StudioDesign</title>
  </head>
  <body>
    <header class="header">
      <div class="container">
        <nav class="nav">
          <div class="textNav">
            <a class="textNavA" href="halls/createOrder.php">Записаться</a>
          </div>
          <div class="textNav">
            <a class="textNavA" href="/equipment.php">О нас</a>
          </div>
          <div class="logoNav">
            <a href=""><img src="src/logo.png" alt="" /></a>
          </div>
          <div class="textNav">
            <a class="textNavA" href="appelation/appelation.php">Помощь</a>
          </div>
          <div class="textNav">
            <a class="textNavA btnNav" href="logout.php" id="logOpen">выход</a>
          </div>
        </nav>
      </div>
    </header>

    <div class="container">
      <div class="services">
        <div class="twoBlocks">
          <div class="leftBlock">
            <a href="halls/createOrder.php?category=albom">
              <div class="albom">
                <img src="src/albomPhoto.png" alt="" />
                <p class="albomtext">Фото на альбом</p>
              </div>
            </a>
            <div class="rightphoto">
              <a href="halls/createOrder.php?category=passport">
                <div class="pasblock">
                  <img src="src/pasPhoto.png" alt="" />
                  <p class="pastexttop">Фото на паспорт</p>
                </div>
              </a>
              <a href="halls/createOrder.php?category=marry">
                <div class="marryphoto">
                  <img src="src/marryphoto.png" alt="" />
                  <p class="marrytext">Свадебные фото</p>
                </div>
              </a>
            </div>
          </div>
          <div class="rightBlock">
            <div class="rightblockphoto2">
              <a href="halls/createOrder.php?category=crutoe">
                <div class="epick">
                  <img src="src/epick.png" alt="" />
                  <p class="pastext">Художественные фото</p>
                </div>
              </a>
              <a href="halls/createOrder.php?category=advert">
                <div class="marryphoto">
                  <img src="src/advertisementphoto.png" alt="" />
                  <p class="marrytext">Рекламные фото</p>
                </div>
              </a>
            </div>

            <a href="halls/createOrder.php?category=family">
              <div class="albom albomR">
                <img src="src/familyphoto.png" alt="" />
                <p class="albomtext">Семейные фото</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <script src="main.js"></script>
  </body>
</html>
