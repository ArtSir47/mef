<?php
include '../../functions.php';
header_natec(
    'Архітектрура платформи',
    '/plugin_basics/platform_architecture.php',  // $url_ru,
    '/uk/plugin_basics/platform_architecture.php', // $url_uk,
    '/en/plugin_basics/platform_architecture.php'  // $url_en
);
?>

    <div class="container container-sidebar">
        <?php sidebar_natec(); ?>
        <div class="content">

            <h1>Архітектрура платформи</h1>

            <p>Архітектура платформи розділяє сервіси та бізнес-логіку стандартизованих підходів від кастомной бізнес-логіки розробника конкретного плагіна, і тим самим надаючи можливість перевикористання плагінів іншими розробниками в своїх плагінах (через принципи експозиції MEF)</p>
            <img src="http://mef.dev/images/image100510.jpg">
            <p></p>
            <p>Важливою перевагою є принципи експозиції на основі MEF, які разом з приведенням кастомних моделей даних на загальноприйняті (канонічні) дають <b>можливості гнучкої розробки різними розробниками без занурення в деталі кінцевої реалізації, в тому числі рівня даних</b>:</p>
            <img src="http://mef.dev/images/image100511.jpg">
            <p></p>
            <p></p>
            <img src="http://mef.dev/images/image7.jpg">
            <p></p>
            <p>Крім переваг перевикористання плагінів, платформа дає можливість зовнішнього використання плагінів через автоматично генерується REST інтерфейс для плагінів - даний підхід дає можливість швидкої інтеграції «старих» систем без необхідності доопрацювання на їхньому боці:</p>
            <img src="http://mef.dev/images/image100513.jpg">
        </div>
    </div>

<?php

footer_natec();
?>