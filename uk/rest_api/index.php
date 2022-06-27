<?php
include '../../functions.php';
header_natec(
    'Rest API',
    '/rest_api/',  // Ccылка на перевод RU,
    '/en/rest_api/', // Ccылка на перевод UA,
    '/en/rest_api/'  // Ccылка на перевод EN
);
?>
    <div class="container container-nosidebar">
        <h1>Rest API</h1>

        <ul>
            <li>
                <a href="/uk/rest_api/using_rest_api.php">Використання REST API</a>
            </li>
            <li>
                <a href="/uk/rest_api/api_caching.php">Кешування API</a>
            </li>
            <li>
                <a href="/uk/rest_api/http_method_request_formats.php">Формати HTTP-методів</a>
            </li>
        </ul>

    </div>

<?php
footer_natec();
?>