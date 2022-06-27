<?php
include '../functions.php';
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
                <a href="/en/rest_api/using_rest_api.php">REST API using</a>
            </li>
            <li>
                <a href="/en/rest_api/api_caching.php">API caching</a>
            </li>
            <li>
                <a href="/en/rest_api/http_method_request_formats.php">HTTP Methods Formats</a>
            </li>
        </ul>

    </div>

<?php
footer_natec();
?>