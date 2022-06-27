<?php
include '../../functions.php';
header_natec(
    'Формати запитів для HTTP-методів',
    '/rest_api/http_method_request_formats.php',  // $url_ru,
    '/uk/rest_api/http_method_request_formats.php', // $url_uk,
    '/en/rest_api/http_method_request_formats.php'  // $url_en
);
?>

    <div class="container container-sidebar">
        <?php sidebar_natec(); ?>
        <div class="content">

            <h1>Формати запитів для HTTP-методів</h1>

            <h2 id="paragraph_1">HTTP метод GET: Доступ до списку елементів типу Entity</h2>

            <p>1. Шаблон HTTP запиту: <b>/api/v1/{domain}/{entity}.{format}?query</b></p>

            <table>
                <tbody>
                <tr>
                    <th>Елемент</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Ім'я ресурсу (тип сутності)</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>Формат, в якому буде представлений відповідь. варіанти:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        <table>
                            Підзапит до списку елементів. Все що слід після знаку "?" (Знак питання) вважається запитом
                            <tr>
                                <th>Елемент</th>
                                <th>Тип</th>
                                <th>Опис</th>
                            </tr>

                            <tr>
                                <td>filter</td>
                                <td>string</td>
                                <td>Параметри фільтрації, наприклад filter={abn_LastName:'%НАТЕК%'}</td>
                            </tr>
                            <tr>
                                <td>page</td>
                                <td>int</td>
                                <td>Номер сторінки при паджінаціі</td>
                            </tr>
                            <tr>
                                <td>pagesize</td>
                                <td>string</td>
                                <td>Розмір сторінки для паджінаціі</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>

            <p>2. Заголовки запиту</p>

            <table>
                <tr>
                    <th>Заголовок</th>
                    <th>Допустиме значення</th>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Унікальний ідентифікатор запиту.</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>Код зовнішньої системи для ідентифікації, наприклад = ‘300’</td>
                </tr>
                <tr>
                    <td>Content-type</td>
                    <td>application/json</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
                <tr>
                    <td>If-Modified-Since</td>
                    <td>HTTP Date, наприклад Tue, 22 Sep 2020 09:21:24 GMT</td>
                </tr>
            </table>

            <p>3. заголовки відповіді</p>
            <table>
                <tr>
                    <th>Заголовок</th>
                    <th>Допустиме значення</th>
                </tr>
                <tr>
                    <td>Last-Modified</td>
                    <td>HTTP Date, наприклад Tue, 22 Sep 2020 09:21:24 GMT</td>
                </tr>
            </table>

            <h2 id="paragraph_2">HTTP метод GET: Доступ до певного Елементу типу Entity</h2>

            <p>1. Шаблон HTTP запиту: <b>/api/v1/{domain}/{entity}/{Id}.{format}</b></p>
            <table>
                <tr>
                    <th>Елемент</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Ім'я ресурсу (тип сутності)</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>
                        Формат, в якому буде представлений відповідь. варіанти:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        Підзапит до списку елементів. Все що слід після знаку "?" (Знак питання) вважається запитом
                        <table>
                            <tr>
                                <th>Елемент</th>
                                <th>Тип</th>
                                <th>Опис</th>
                            </tr>
                            <tr>
                                <td>filter</td>
                                <td>string</td>
                                <td>Параметри фільтрації, наприклад filter={abn_LastName:'%НАТЕК%'}</td>
                            </tr>
                            <tr>
                                <td>page</td>
                                <td>int</td>
                                <td>Номер сторінки при паджінаціі</td>
                            </tr>
                            <tr>
                                <td>pagesize</td>
                                <td>string</td>
                                <td>Розмір сторінки для паджінаціі</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>


            <p>2. Заголовки запиту</p>
            <table>
                <tr>
                    <th>Заголовок</th>
                    <th>Допустиме значення</th>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Унікальний ідентифікатор запиту.</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>Код зовнішньої системи для ідентифікації, наприклад = ‘300’</td>
                </tr>
                <tr>
                    <td>Content-type</td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
                <tr>
                    <td>If-Modified-Since</td>
                    <td>HTTP Date, наприклад Tue, 22 Sep 2020 09:21:24 GMT</td>
                </tr>
            </table>

            <p>3. заголовки відповіді</p>
            <table>
                <tr>
                    <th>Заголовок</th>
                    <th>Допустиме значення</th>
                </tr>
                <tr>
                    <td>Last-Modified</td>
                    <td>HTTP Date, наприклад Tue, 22 Sep 2020 09:21:24 GMT</td>
                </tr>
            </table>

            <h2 id="paragraph_3">HTTP метод PUT: Редагування елемента типу Entity</h2>

            <p>1. Шаблон HTTP запиту: <b>/api/v1/{domain}/{entity}/{Id}.{format}?query</b></p>
            <table>
                <tr>
                    <th>Елемент</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Ім'я ресурсу (тип сутності)</td>
                </tr>
                <tr>
                    <td>id</td>
                    <td>Ідентифікатор для редагування запису</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>Необов'язковий параметр. Формат, в якому буде представлений відповідь, за замовчуванням json. варіанти:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>Підзапит до списку елементів. Все що слід після знаку "?" (Знак питання) вважається запитом
                    <table>
                        <tr>
                            <th>Елемент</th>
                            <th>Тип</th>
                            <th>Опис</th>
                        </tr>
                        <tr>
                            <td>lang</td>
                            <td>string</td>
                            <td>Вказівка мови вмісту тіла запиту в форматі ISO 639-1 </td>
                        </tr>
                    </table>
                    </td>
                </tr>
            </table>

            <p>2. Заголовки запиту</p>
            <table>
                <tr>
                    <th>Заголовок</th>
                    <th>Допустиме значення</th>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Унікальний ідентифікатор запиту.</td>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>Content-type </td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>Код зовнішньої системи для ідентифікації, наприклад = ‘300’</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
            </table>

            <p>3. тіло запиту</p>
            <table>
                <tr>
                    <th>Назва поля</th>
                    <th>Тип</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>AttributesNames:<br>AttributesValue</td>
                    <td>Пара<br>Ключ: Значення</td>
                    <td>Масив атрибутів сутності <br>Entities</td>
                </tr>
            </table>

            <h2 id="paragraph_4">HTTP метод POST: Створення нового елемента типу Entity</h2>

            <p>1. Шаблон HTTP запиту: <b>/api/v1/{domain}/{Entity}.{format}?query</b></p>

            <table>
                <tr>
                    <th>Елемент</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Ім'я ресурсу (тип сутності)</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>Необов'язковий параметр. Формат, в якому буде представлений відповідь, за замовчуванням json. варіанти:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        Необов'язковий параметр. Підзапит до списку елементів. Все що слід після знаку "?" (Знак питання) вважається запитом
                        <table>
                            <tr>
                                <th>Елемент</th>
                                <th>Тип</th>
                                <th>Опис</th>
                            </tr>
                            <tr>
                                <td>lang</td>
                                <td>string</td>
                                <td>Вказівка мови вмісту тіла запиту в форматі ISO 639-1 </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>



            <p>2. Заголовки запиту</p>
            <table>
                <tr>
                    <th>Заголовок</th>
                    <th>Допустиме значення</th>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Унікальний ідентифікатор запиту.</td>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>Content-type </td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>Код зовнішньої системи для ідентифікації, наприклад = ‘300’</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
            </table>


            <p>3. тіло запиту</p>
            <table>
                <tr>
                    <th>Назва поля</th>
                    <th>Тип</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>AttributesNames:<br>AttributesValue</td>
                    <td>Пара<br>Ключ: Значення</td>
                    <td>Масив атрибутів сутності <br>Entities</td>
                </tr>
            </table>



            <h2 id="paragraph_5">HTTP метод POST: Виконання дії для елемента типу Entity</h2>

            <p>1. Шаблон HTTP запиту: <b>/api/v1/{domain}/{Entity}/action/{Action}.{format}?query</b></p>

            <table>
                <tr>
                    <th>Елемент</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Ім'я ресурсу (тип сутності)</td>
                </tr>
                <tr>
                    <td>Action</td>
                    <td>Назва действия (операции над сущностью)</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>Необов'язковий параметр. Формат, в якому буде представлений відповідь, за замовчуванням json. варіанти:

                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        Необов'язковий параметр. Підзапит до списку елементів. Все що слід після знаку "?" (Знак питання) вважається запитом
                        <table>
                            <tr>
                                <th>Елемент</th>
                                <th>Тип</th>
                                <th>Опис</th>
                            </tr>
                            <tr>
                                <td>lang</td>
                                <td>string</td>
                                <td>Вказівка мови вмісту тіла запиту в форматі ISO 639-1 </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>


            <p>2. Заголовки запиту</p>
            <table>
                <tr>
                    <th>Заголовок</th>
                    <th>Допустиме значення</th>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Унікальний ідентифікатор запиту.</td>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>Код зовнішньої системи для ідентифікації, наприклад = ‘300’</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
            </table>

            <p>3. тіло запиту</p>
            <table>
                <tr>
                    <th>Назва поля</th>
                    <th>Тип</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>AttributesNames:<br>AttributesValue</td>
                    <td>Пара<br>Ключ: Значення</td>
                    <td>Массив атрибутов сущности<br>Entities</td>
                </tr>
            </table>


            <h2 id="paragraph_6">HTTP метод POST: Створення нового елемента типу Sub-Entity</h2>

            <p>1. Шаблон HTTP запиту: <b>/api/v1/{domain}/{entity}/{ParentId}/{sub-entity}.{format}?query</b></p>

            <table>
                <tr>
                    <th>Елемент</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Ім'я ресурсу (тип сутності)</td>
                </tr>
                <tr>
                    <td>sub-entity</td>
                    <td>Ім'я ресурсу (тип підпорядкованої сутності)</td>
                </tr>
                <tr>
                    <td>ParentId</td>
                    <td>Ідентифікатор вищестоящої сутності</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>
                        Необов'язковий параметр. Формат, в якому буде представлений відповідь, за замовчуванням json. варіанти:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        Необов'язковий параметр. Підзапит до списку елементів. Все що слід після знаку "?" (Знак питання) вважається запитом
                        <table>
                            <tr>
                                <th>Елемент</th>
                                <th>Тип</th>
                                <th>Опис</th>
                            </tr>
                            <tr>
                                <td>lang</td>
                                <td>string</td>
                                <td>Вказівка мови вмісту тіла запиту в форматі ISO 639-1 </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <p>2 Заголовки запиту</p>
            <table>
                <tr>
                    <th>Заголовок</th>
                    <th>Допустиме значення</th>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Унікальний ідентифікатор запиту.</td>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>Код зовнішньої системи для ідентифікації, наприклад = ‘300’</td>
                </tr>
                <tr>
                    <td>Content-type </td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
            </table>

            <p>3. тіло запиту</p>
            <table>
                <tr>
                    <th>Назва поля</th>
                    <th>Тип</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>AttributesNames:<br>AttributesValue</td>
                    <td>Пара<br>Ключ: Значення</td>
                    <td>Масив атрибутів сутності Entities</td>
                </tr>
            </table>



            <h2 id="paragraph_7">HTTP метод DELETE: Видалення елемента типу Entity</h2>

            <p>5.2 Шаблон HTTP запиту: <b>/api/v1/{domain}/{entity}/{Id}.{format}?query</b></p>

            <table>
                <tr>
                    <th>Елемент</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Ім'я ресурсу (тип сутності)</td>
                </tr>
                <tr>
                    <td>id</td>
                    <td>Ідентифікатор ресурсу (сутності)</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>Необов'язковий параметр. Формат, в якому буде представлений відповідь, за замовчуванням json. варіанти:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        Необов'язковий параметр. Підзапит до списку елементів. Все що слід після знаку "?" (Знак питання) вважається запитом
                        <table>
                            <tr>
                                <th>Елемент</th>
                                <th>Тип</th>
                                <th>Опис</th>
                            </tr>
                            <tr>
                                <td>lang</td>
                                <td>string</td>
                                <td>Вказівка мови вмісту тіла запиту в форматі ISO 639-1 </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <p>5.3 Заголовки запиту</p>

            <table>
                <tr>
                    <th>Заголовок</th>
                    <th>Допустиме значення</th>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Унікальний ідентифікатор запиту.</td>
                </tr>
                <tr>
                    <td>Content-type </td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>Код зовнішньої системи для ідентифікації, наприклад значение = ‘300’</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
            </table>

            <h2 id="paragraph_8">HTTP метод PATCH (зарезервировано): Часткове Редагування елемента типу Entity</h2>

            <p>1. Шаблон HTTP запиту: <b>/api/v1/{domain}/{entity}/{Id}.{format}?query</b></p>

            <table>
                <tr>
                    <th>Елемент</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Ім'я ресурсу (тип сутності)</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>Формат, в якому буде представлений відповідь. варіанти:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        Підзапит до списку елементів. Все що слід після знаку "?" (Знак питання) вважається запитом
                        <table>
                            <tr>
                                <th>Елемент</th>
                                <th>Тип</th>
                                <th>Опис</th>
                            </tr>
                            <tr>
                                <td>page</td>
                                <td>int</td>
                                <td>Номер сторінки при паджінаціі</td>
                            </tr>
                            <tr>
                                <td>pagesize</td>
                                <td>string</td>
                                <td>Розмір сторінки для паджінаціі</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <p>2. Заголовки запиту</p>
            <table>
                <tr>
                    <th>Заголовок</th>
                    <th>Допустиме значення</th>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Унікальний ідентифікатор запиту.</td>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>Content-type </td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>Код зовнішньої системи для ідентифікації, наприклад = ‘300’</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
            </table>

            <p>3. тіло запиту</p>
            
            <table>
                <tr>
                    <th>Назва </th>
                    <th>Тип</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>AttributesNames:<br>AttributesValue</td>
                    <td>Пара<br>Ключ: Значення</td>
                    <td>Масив атрибутів сутності Entities</td>
                </tr>
            </table>
            
            <h2 id="paragraph_9">Обробка помилок при виклику HTTP методів</h2>

            <p>На загальному рівні HTTP взаємодії передбачається наступна логіка обробки помилок через статус коди HTTP:</p>
            <p>2xx (Success) - успіх, повторювати запит сенсу немає, статус коди можуть бути деталізовані:</p>
            <ul>
                <li>200 OK (успіх) – якщо PUT виконаний без помилок</li>
                <li>201 Created (Запис доданий) – якщо POST виконаний без помилок</li>
            </ul>

            <p>4хх (Client error responses) - помилка формування запиту, повторювати сенсу немає, крім окремих кодів 408 (негайний повтор) та 409 (відкладений повтор), для інших кодів помилок потрібно змінити формат запиту перед повторним виконанням або вирішити питання з авторизацією, статус коди можуть бути деталізовані:</p>
            <ul>
                <Li> 404 Not Found (Дані не знайдено) - якщо невірний URL запиту </li>
                <Li> 400 Bad Request (Невірний запит) - якщо вказана невірна сутність API </li>
                <Li> 401 Unauthorized (Неавторизований доступ) - якщо зазначена пара логін / пароль невірні </li>
                <Li> 403 Forbidden (Доступ заборонений) - якщо немає доступу до сутностей </li>
                <Li> 408 (Request Timeout) - потрібно повторити запит негайно </li>
                <Li> 409 (Conflict) - вказує, что запит не може буть оброблений через конфлікт, например, конфлікт Паралельно запиту - зазвичай є наслідком неправильного (занадто короткого) таймаута на очікування відповіді або виконання команди. Потрібно повторити запит через деякий час! </li>
            </ul>
            <p>5хх (Server error responses) - логічна помилка на стороні сервера, повторювати сенсу немає, крім окремого коду 503 (Service unavailable) - дана помилка вимагає відкладеного повторення поза часом, визначеним у відповіді запиту. Статус коди деталізовані нижче:</p>
            <ul>
                <Li> 500 Internal Server Error (Внутрішня помилка сервера) - помилка бізнес-логіки, детальне Опис приведено в тегах Message і Data </li>
                 <Li> 501 Not implemented (Не виконано) - якщо спробувати викликати DELETE </li>
                 <Li> 503 Service unavailable - якщо не маєте доступу API до пов'язаним БД або параметри авторизації самого сервера застаріли (не пов'язані з авторизацією API - технічна обліковий запис заблоковано і т.д.) </li>
            </ul>
            <p>ВАЖЛИВО! Невірна конфігурації таймаутів для АПИ при інтеграції між системами може привести до зациклення помилок 408 і 409 - в цьому випадку потрібно виконати узгодження значень таймаутів боку-ініціатора запиту і сторони-виконавця запитів, а саме - затримку читання на стороні ініціатора завжди повинен бути строго більше, ніж таймаут на виконання запиту на стороні-виконавця.</p>
            <p>Нижче наведено Опис структури відповіді повідомлення про помилку рівня сутностей (зазвичай для кодів 5хх і 4хх, крім помилок авторизації і помилок сервера IIS):</p>
            
            <table>
                <tr>
                    <th>Назва поля</th>
                    <th>Обов'язковість</th>
                    <th>Опис</th>
                </tr>
                <tr>
                    <td>LevelMessage</td>
                    <td>так</td>
                    <td>об'єкт </td>
                </tr>
                <tr>
                    <td>ErrNumber</td>
                    <td>так</td>
                    <td>об'єкт </td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td>так</td>
                    <td>Детальний Опис помилки</td>
                </tr>
                <tr>
                    <td>State</td>
                    <td>так</td>
                    <td>Error State</td>
                </tr>
                <tr>
                    <td>HelpLink</td>
                    <td>ні</td>
                    <td>Посилання на документацію, яка розширює інформацію щодо помилки</td>
                </tr>
                <tr>
                    <td>Xml</td>
                    <td>ні</td>
                    <td>Номер ErrNumber найпершої помилки-причини, що міститься в Data</td>
                </tr>
                <tr>
                    <td>Data</td>
                    <td>об'єкт </td>
                    <td>помилка-причина для поточної помилки (іншими словами вкладена помилка) в тій же структурі, для прикладу нижче в форматі XML:

                        <Result>
                            <LevelMessage />
                            <ErrNumber />
                            <Message />
                            <State />
                            <HelpLink />
                            <Xml />
                            <Data />
                            <ResolveUrl />
                        </Result>
                    </td>
                </tr>
                <tr>
                    <td>ResolveUrl</td>
                    <td></td>
                    <td>Посилання на веб-додаток, що дозволяє виправити дані, що впливають на факт появи помилки</td>
                </tr>
            </table>

            <p>Важливо розуміти, що тег Data містить помилки аналогічної структури - тим самим помилки можуть бути вкладеними - тобто коли одна помилка стає причиною для іншого, більш верхнеуровневой, то тоді обидві помилки приходять у відповіді, при це перша помилка міститься в тезі «Data». Для зручності обробки помилок, найперше значення ErrNumber з першої помилки-причини приведено в тезі Xml. Приклад помилкового відповіді з вкладеними помилками-причинами наведено нижче Error Responses</p>

            <p><b>Приклади викликів HTTP</b></>

            <p>Request format</p>
            <p>Приклад запиту GET для отримання записів Customers з ім'ям НАТЕК:</p>
            <p>GET <a style="word-wrap: break-word;" href="http://servername:port/api/v1/Bss/customers.json?lang=uk&pageIndex=0&pageSize=1000&filter=%7babn_LastName%3a%27%25%D0%9D%D0%90%D0%A2%D0%95%D0%9A%25%27%7d HTTP/1.1">http://servername:port/api/v1/Bss/customers.json?lang=uk&pageIndex=0&pageSize=1000&filter=%7babn_LastName%3a%27%25%D0%9D%D0%90%D0%A2%D0%95%D0%9A%25%27%7d HTTP/1.1</a></p>
            <p>accept: application/json<br>
            system: 300<br>
            global_unique_id: 6d07332c-2e63-4d49-91d2-ee01e600f7ff<br>
            Authorization: Basic YXBpX3VzZXI6V2lkZWNvdXAx<br>
            Content-Type: application/json<br>
            Host: servername:port<br>
            Content-Length: 0</p>
            <p><b><i>Приклад запиту GET для отримання запису Customers по ID з передачею If-Modified-Since:</i></b><br><a
                        href="GET http://servername:port/api/v1/Bss/customers/1041838.json HTTP/1.1">GET http://servername:port/api/v1/Bss/customers/1041838.json HTTP/1.1</a></p>

            <p>
            accept: application/json<br>
            if-modified-since: Tue, 22 Sep 2020 09:21:24 GMT<br>
            system: 300<br>
            global_unique_id: 6d07332c-2e63-4d49-91d2-ee01e600f7ff<br>
            Authorization: Basic YXBpX3VzZXI6V2lkZWNvdXAx<br>
            Content-Type: application/json<br>
            Host: servername:port<br>
            Content-Length: 0</p>

            <p><b>Приклад запиту POST для створення клієнта Фізичної особи</b></p>
            <p  style="word-wrap: break-word;">POST <a href="http://servername:port/api/v1/Bss/customers HTTP/1.1">http://servername:port/api/v1/Bss/customers HTTP/1.1</a></p>
            <p>
                Authorization: Basic ZGVtbzpkZW1v<br>
                Content-Type: application/json<br>
                global_unique_id: 6b80d0f6-62df-4507-b115-e5245c0b340c<br>
                Connection: Keep-Alive
            </p>
            <p>
                <code>
                    {<br>
                    "IDType":1,<br>
                    "ProfileType":1<br>
                    "ParentID":1,<br>
                    "Name":"Порошенко Петро",<br>
                    "Customer_FirstName":"Петро",<br>
                    "Customer_MiddleName":"Порошенко",<br>
                    "Customer_SearchName":"Порошенко П.О.",<br>
                    "CustomerLanguageId":1,<br>
                    "StatusId":2,<br>
                    "CustomerDate":"2019-05-08T11:55:39.9285053+03:00",<br>
                    "GroupID":1,<br>
                    "LocationID":1<br>
                    }
                </code>
            </p>

            <p><b>Приклад запиту POST для створення клієнта Юридичної особи з Асоціації</b></p>
            <p>POST <a  style="word-wrap: break-word;" href="http://servername:port/api/v1/Bss/associations/1042338/customers HTTP/1.1">http://servername:port/api/v1/Bss/associations/1042338/customers HTTP/1.1</a></p>
            <p>
                Authorization: Basic ZGVtbzpkZW1v<br>
                Content-Type: application/json<br>
                global_unique_id: 6b80d0f6-62df-4507-b115-e5245c0b350c<br>
                Connection: Keep-Alive
            </p>
            <p>
                <code>
                    {<br>
                    "IDType":1,<br>
                    "ProfileType":2,<br>
                    "Name":"Товариство з обмеженою відповідальністю Первомайський Гірничо-збагачувальний комбінат",<br>
                    "Customer_SearchName":"Первомайський ГЗК ТОВ",<br>
                    "CustomerLanguageId":1,<br>
                    "StatusId":2,<br>
                    "CustomerDate":"2019-05-08T11:55:39+03:00",<br>
                    "GroupID":1,<br>
                    "LocationID":1<br>
                    }
                </code>
            </p>

            <p><b>Приклад запиту PUT для редагування ПІБ клієнта с ID=1041838</b></p>
            <p>PUT <a href="http://servername:port/api/v1/Bss/customers?id=1041838 HTTP/1.1">http://servername:port/api/v1/Bss/customers?id=1041838 HTTP/1.1</a></p>
            <p>
                Authorization: Basic ZGVtbzpkZW1v<br>
                Content-Type: application/json<br>
                global_unique_id: ac6495d1-5118-494a-a737-844f6c76ba46<br>
                Host: servername:port
            </p>
            <p>
                <code>
                    {<br>
                    "IDType":1,<br>
                    "ProfileType":1<br>
                    "ParentID":1,<br>
                    "Name":"Зеленський",<br>
                    "Customer_FirstName":"Володимир",<br>
                    "Customer_MiddleName":"Олександрович",<br>
                    "Customer_SearchName":"Зеленський В.О.",<br>
                    "CustomerLanguageId":1,<br>
                    "StatusId":2,<br>
                    "CustomerDate":"2019-05-08T11:55:39+03:00",<br>
                    "GroupID":1,<br>
                    "LocationID":1<br>
                    }
                </code>
            </p>

            <p>Response format</p>
            <p><b>Приклад відповіді GET для отримання записів Customers по ID:</b></p>
            <p>
                HTTP/1.1 200 OK<br>
                Content-Length: 78597<br>
                Content-Type: aplication/json<br>
                Last-Modified: Tue, 22 Sep 2020 09:21:24 GMT<br>
                Server: Microsoft-IIS/10.0<br>
                cache-scenario: scenario.1<br>
                X-Powered-By: ASP.NET<br>
                Date: Sun, 27 Sep 2020 11:18:51 GMT
            </p>

            <code>
                {<br>
                "data":[<br>
                {<br>
                "abn_Balance":0.000000,<br>
                "abn_CreateDate":"2019-10-31T17:58:35.697",<br>
                "abn_Date":"2019-11-01T00:00:00",<br>
                "abn_Employe_Export_ID":"",<br>
                "abn_Employee_ID":"",<br>
                "abn_ExternalID":8836891,<br>
                "abn_FirstName":"",<br>
                "abn_Guid":"b75d56c7-1b84-4571-8e6c-09a3aeffc0a1",<br>
                "abn_HasNotEmptyPrepaid":0,<br>
                "abn_ID":165,<br>
                "abn_ID_Boss":164,<br>
                "abn_IsExistAD":0,<br>
                "abn_IsGuest":0,<br>
                "abn_LastName":"ТОВАРИСТВО З ОБМЕЖЕНОЮ ВІДПОВІДАЛЬНІСТЮ \"НАТЕК СЕРВІС\"",<br>
                "abn_Login":"",<br>
                "abn_MiddleName":"",<br>
                "abn_ModifiedBy":"IVR_V.BORSHCHEVSKA_35683",<br>
                "abn_ModifiedDate":"2019-10-31T17:58:35.75",<br>
                "abn_ModifiedFrom":"BIS",<br>
                "abn_NestedSets_Left":398155,<br>
                "abn_NestedSets_Right":398156,<br>
                "abn_Password":"09B0B566-2570-4447-BDF5-5304813834B8",<br>
                "abn_PositionCode":"",<br>
                "abn_ShowPhoneDirectory":0,<br>
                "abn_WorkPlace":"01234567890",<br>
                "abonentFullName":"ТОВАРИСТВО З ОБМЕЖЕНОЮ ВІДПОВІДАЛЬНІСТЮ \"НАТЕК СЕРВІС\"",<br>
                "acnt_ID":86,<br>
                "acnt_ID_count":1,<br>
                "acnt_IsPersonal":0,<br>
                "acnt_Number":"8132725",<br>
                "acnt_Number_Personal":"",<br>
                "actp_ID":21,<br>
                "actpd_Name":"ГКО",<br>
                "actpd_Name_Personal":"",<br>
                "aut_ID_count":0,<br>
                "aut_NameAuthCode":"",<br>
                "aut_NumberAts":0,<br>
                "bossFullName":"ТОВАРИСТВО З ОБМЕЖЕНОЮ ВІДПОВІДАЛЬНІСТЮ \"НАТЕК СЕРВІС {01234567890}",<br>
                "cntr_ID_count":0,<br>
                "cntr_Name":"",<br>
                "com_Id":1,<br>
                "dep_ID":202,<br>
                "ext_ExtNum":"",<br>
                "ext_ID_count":0,<br>
                "grp_ID":100,<br>
                "grp_Name":"ByDefault",<br>
                "isEditAllow":1,<br>
                "isEditWorkPlace":0,<br>
                "lng_ID":1,<br>
                "loc_Name":"ГО КС(КС)",<br>
                "location_ID":7,<br>
                "ntw_ID":1000,<br>
                "pbx_networkName":"United",<br>
                "profileType":2,<br>
                "rptURL":"",<br>
                "subsCount":0,<br>
                "tnst_ExternalID":2,<br>
                "tnst_ID":10,<br>
                "tnt_AccountMandatory":1,<br>
                "tnt_ID":130,<br>
                "total":52,<br>
                "treeNodeType":"Customer",<br>
                "trf_ID":2<br>
                }<br>
                ]<br>
                }
            </code>
            <p></p>
            <p>Error Responses</p>
            <p>Приклад помилкової авторизації</p>

            <p>
                HTTP/1.1 401 Unauthorized<br>
                Content-Type: application/problem+json; charset=utf-8<br>
                WWW-Authenticate: Negotiate<br>
                WWW-Authenticate: NTLM<br>
                Proxy-Support: Session-Based-Authentication
            </p>
            <code style="word-wrap: break-word;">
                {
                "type":"https://tools.ietf.org/html/rfc7235#section-3.1",<br>
                "title":"Unauthorized",<br>
                "status":401,<br>
                "traceId":"0HLM1RANTI6TH:00000001"
                }
            </code>
            <p></p>
            <p><b>Приклад спрацювання перевірки на ідемпотентність</b></p>
            <code>
                {<br>
                "headerId": "1892ae73-f1db-47e0-9084-35e8aef993f3",<br>
                "idempotent": {<br>
                "status": "IsCompleted",<br>
                "dateModify": "2019-06-09T15:53:18.5599139Z",<br>
                "data": {<br>
                "id": 100000257,<br>
                "lang": "uk ",<br>
                "idType": 1<br>
                }  }
            </code>
            <p></p>
            <p><b>Приклад помилки рівня БД</b></p>
            <code>
                {<br>
                "LevelMessage":"17",<br>
                "ErrNumber":"50240",<br>
                "Message":"Помилка установки підключеного шаблона тарифного плану (RepresentationTariffPlanBind)",<br>
                "State":"1",<br>
                "HelpLink":"",<br>
                "Xml":"50248",<br>
                "Data":{<br>
                "LevelMessage":"17",<br>
                "ErrNumber":"50271",<br>
                "Message":"Помилка створення підписки на сервіс: ",<br>
                "State":"1",<br>
                "HelpLink":"",<br>
                "Xml":"50248",<br>
                "Data":{<br>
                "LevelMessage":"17",<br>
                "ErrNumber":"50248",<br>
                "Message":"Помилка зміни статусу послуги: невірний srs_id=12345",<br>
                "State":"1",<br>
                "HelpLink":"",<br>
                "Xml":"50248",<br>
                "Data": null,<br>
                "ResolveUrl":""<br>
                },<br>
                "ResolveUrl":""<br>
                },<br>
                "ResolveUrl":""<br>
                }
            </code>
            <p>Перелік помилок, пов'язаних з CRUD операціями кожної REST суті наведено в специфікації REST API Specs в розділі Errors Mapping</p>

        </div>
    </div>

<?php

footer_natec();
?>