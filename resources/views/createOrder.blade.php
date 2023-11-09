<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/hallStyle.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style/style.css') }}" />

    <title>halls</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="textNav">
                    <a class="textNavA" href="../profile.php">Главная</a>
                </div>
                <div class="textNav">
                    <a class="textNavA" href="">Оборудование</a>
                </div>
                <div class="logoNav">
                    <a href="../index.php"><img src="../src/logo.png" alt="" /></a>
                </div>
                <div class="textNav">
                    <a class="textNavA btnNav" id="logOpen" href="../logout.php">выход</a>
                </div>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="formContainer">
            <form action="../broncategory.php" method="post" class="formOrder">
                <h1 class="orderTitle">Оформление заказа</h1>
                <input type="text" name="email" placeholder="Email" /><br />
                <div class="category">
                    <label class="orderTitle">Выбор категории</label>
                    <span id="selected-category"></span>
                    <select name="category" id="category">
                        <option value="albom">Фото на альбом</option>
                        <option value="passport">Фото на паспорт</option>
                        <option value="marry">Свадебные фото</option>
                        <option value="crutoe">Художественные фото</option>
                        <option value="advert">Рекламные фото</option>
                        <option value="family">Семейные фото</option>
                    </select>
                </div>
                <br />
                <div class="category">
                    <label class="orderTitle">Выбор студии</label>
                    <span id="selected-study"></span>
                    <select name="study" id="study">
                        <option value="study-berlin">Берлин</option>
                        <option value="study-astrahan">Астрахань</option>
                    </select>
                </div>
                <input class="date" type="datetime-local" name="datetime" />
                <button type="submit" class="btnFormOrder">
                    Отправить
                </button>
            </form>
        </div>
    </div>

    <script src="main.js"></script>
</body>

</html>
