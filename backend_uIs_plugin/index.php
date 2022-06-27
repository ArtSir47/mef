<?php
include '../functions.php';
header_natec(
    'Backend & UIs plugin',
    '/backend_uIs_plugin/',  // Ccылка на перевод RU,
    '/uk/backend_uIs_plugin/', // Ccылка на перевод UA,
    '/en/backend_uIs_plugin/'  // Ccылка на перевод EN
);
?>
<div class="container container-nosidebar">
    <h1>Backend & UIs plugin</h1>

    <ul>
        <li>
            <a href="/backend_uIs_plugin/first_backend_plugin.php">Первый Backend плагин
            </a>
        </li>
        <li>
            <a href="/backend_uIs_plugin/first_ui_plugin.php">Первый UI плагин</a>
        </li>
    </ul>

</div>

<?php
footer_natec();
?>