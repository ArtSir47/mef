<?php
include '../../functions.php';
header_natec(
    'Использование REST API',
    '/rest_api/using_rest_api.php',  // $url_ru,
    '/uk/rest_api/using_rest_api.php', // $url_uk,
    '/en/rest_api/using_rest_api.php'  // $url_en
);
?>

    <div class="container container-sidebar">
        <?php sidebar_natec(); ?>
        <div class="content">

            <h1>Використання REST API</h1>

            <h2 id="general_ap">Загальний підхід</h2>

            <p>Для зовнішнього взаємодії з платформою використовується RESTful API, однак з огляду на підтримку Legacy-систем (неможливість редагування записів через метод PUT), запропонований API є ідемпотентним щодо всіх методів включаючи POST:</p>
            <img src="http://mef.dev/images/image100600.png">
            <p></p>
            <p>Загальний перелік REST-сутностей і відношень між ними визначається розробниками плагінів і об'єднуються в домени (наприклад, для поділу Customers телеком оператора і Customers Фінтех сектора) - прикладом назви домену є bss в наступному url:<br>
            <b><i><a style="word-wrap: break-word;" href="http://servername:port/api/v1/Bss/addresses/actions/sync.json?lang=uk">http://servername:port/api/v1/Bss/addresses/actions/sync.json?lang=uk</a></i></b></p>
            <p>слід звернути увагу на формування url для вказівки відносин сутностей - що фактично реалізує принцип передачі параметра ParentID при створенні конкретної REST суті - за прикладом нижче ми бачимо створення суті Subscribers в раніше створеної суті Customers з ідентифікатором 10000001:<br>
            <b><i><a style="word-wrap: break-word;" href="POST http://servername:port/api/v1/Bss/customers/1000001/subscribers.json?lang=uk">POST http://servername:port/api/v1/Bss/customers/1000001/subscribers.json?lang=uk</a></i></b></p>
            <p>Важливо розуміти, що прозорість архітектури для всіх розробників платформи досягається стандартизацією іменування сутностей - тому обов'язковою рекомендацією є іменування сутностей іменниками множини, а виконання операцій для них - дієсловами. На прикладі нижче виконається операція активації раніше створеного абонента з ідентифікатором 2000101:<br>
            <b><i><a style="word-wrap: break-word;" href="POST http://servername:port/api/v1/Bss/subscribers/2000101/activate.json?lang=uk">POST http://servername:port/api/v1/Bss/subscribers/2000101/activate.json?lang=uk</a></i></b></p>
            <p>Операції можуть бути застосовані для різних сутностей - це також визначається розробникам конкретного плагіна, що реалізує конкретні сутності. На прикладі нижче представлений метод зміни статусу для різних сутностей:<br>
            <b><i><a style="word-wrap: break-word;" href="POST http://servername:port/api/v1/Bss/subscribers/2000101/changeStatus.json?lang=uk">POST http://servername:port/api/v1/Bss/subscribers/2000101/changeStatus.json?lang=uk</a></i></b><br>
            <b><i><a style="word-wrap: break-word;" href="POST http://servername:port/api/v1/Bss/customers/1000001/changeStatus.json?lang=uk">POST http://servername:port/api/v1/Bss/customers/1000001/changeStatus.json?lang=uk</a></i></b></p>
            </p>У разі необхідності зміни раніше створеної REST суті слід використовувати метод PUT і унікальний ідентифікатор REST суті -нижче наведено приклад редагування даних Customers:<br>
            <b><i><a style="word-wrap: break-word;" href="PUT http://servername:port/api/v1/Bss/customers/1000001.json?lang=uk">PUT http://servername:port/api/v1/Bss/customers/1000001.json?lang=uk</a></i></b><p>
            <p>Фактично для індикації відносини сутностей між собою використовується концепція явної вказівки на вищу сутність (Entity) через параметр ParentID в значенні Path формату Entity / {ParentID} / SubEntity, нижче наведений приклад взаємозв'язків сутностей Associations, Customers і Subscribers, включаючи підпорядковані їм сутності (Sub- Entity) Contracts, Profiles, Addresses і Properties:</p>
            <img src="http://mef.dev/images/image100601.png">
            <p></p>
            <h2 id="interactions">Background API взаимодействия</h2>
            <img src="http://mef.dev/images/image100605.png">

            <p style="text-align: center;"><i>Service Flow</i></p>

            <p><b>API Layer:</b>реалізує REST http-інтерфейс, авторизацію, кешування і ідемпотентність викликів.<br>
            <b>Backend Plugin:</b> реалізує бізнес-логіку, наприклад CRUD-операції для сутності (наприклад Customers).</p>

            <h2 id="idempotency">Ідемпотентність: логіка обробки параметра global_unique_id</h2>
            <p>Параметр <b>global_unique_id</b> використовується для виключення дублювання вставки даних в БД - кожна успішна CRUD операція, в тому числі і для методу POST, зберігається в розподілений кеш сервера Веб-публікацій (реалізований на рівні окремої БД MS SQL Server - SQL Server distributed cache Microsoft.Extensions.Caching. SqlServer package) і в разі отримання повторного запиту, API повертає раніше збережений відповідь з кешу. Запит ідентифікується як повторний за значенням <b>global_unique_id</b>.</p>

            <img src="http://mef.dev/images/image100610.png">
            <p></p>
            <p>Тіло відповіді завжди містить вказівку статусу перевірки ("<b> IsCompleted </b>" інформує про те, що спрацювала перевірка на ідемпотентність і тіло відповіді використано з кешу Веб-сервера, в значення «<b> Added </b>» говорить про те, що перевірка негативна і результат виконання доданий в кеш, приклади нижче - важливо розуміти при цьому, що тег <b> data </b> буде містити <b> Response-модель </b> даних конкретної сутності Entity:</p>
            <p><code>
            {<br>
            "headerId": "1892ae73-f1db-47e0-9084-35e8aef993f3",<br>
            "<b>idempotent</b>": {<br>
            "<b>status</b>": "<b>IsCompleted</b>",<br>
            "dateModify": "2019-06-09T15:53:18.5599139Z",<br>
            "data": {<br>
            <mark>"id": 100000257,<br>
            "lang": "uk ",<br>
            "idType": 1</mark><br>
            }  } }
                </code></p>
            <p><code>
            {<br>
            "headerId": "1892ae73-f1db-47e0-9084-35e8aef993f3",<br>
            "<b>idempotent</b>": {<br>
            "<b>status</b>": "<b>Added</b>",<br>
            "dateModify": "2019-06-09T15:53:18.5580444Z",<br>
            "data": {<br>
            <mark>"id": 100000257,<br>
            "lang": "uk ",<br>
            "idType": 1</mark><br>
            }  } }
                </code></p>

            <h2 id="api_authorization">Авторизація API</h2>

            <p>Для авторизації на методах API реалізована підтримка різних типів авторизації на рівні кожного контролера в 2-х режимах розгортання платформи - Internet і Intranet, підтримувані типи авторизації для кожного типу розгортання перераховані нижче:</p>

            <p>Internet:</p>
            <ul>
                <li>Basic Authorization</li>
                <li>oAuth 2.0</li>
            </ul>
            <p>Intranet:</p>
            <ul>
                <li>URL (токен)</li>
                <li>Basic Authorization</li>
                <li>Kerberos</li>
                <li>NTLM</li>
            </ul>


            <p>Таким чином, для авторизації на методах API досить використовувати Basic Authorization на рівні передачі заголовків http запиту. Актуальні значення пари логін-пароль слід запитати у адміністратора вашої організації.</p>

            <p>Для використання авторизації через токен в URL слід передавати значення <b> Authorization </b> = <credentials>, де <credentials> - стандартна форма для схеми авторизації - Basic Authorization. Важливо розуміти, що так як передача йде через урл, то у вигляді Url Encoded, наприклад:</p>

            <p style="word-wrap: break-word;">http://servername:port/api/v1/Bss/versioninfo.json?<mark>Authorization</mark>=<b>eWl6aGFja0BnbWFpb1234206VGVzdDEyMzQ1Ng</b>%3D%3D</p>

            <h2 id="date_format">Формат дати та часу для параметрів API</h2>

            <p>Для передачі параметрів в форматі дати і часу використовується формат <a href="https://en.wikipedia.org/wiki/ISO_8601"> ISO 8601 </a>, приклад дати і часу в цьому форматі для Києва (Європа): 18.06.2019 0:00:00 буде <b>2019-06-18T00:00:00+03:00</b></p>

            <h2 id="api_methods">Методи API</h2>

            <h2>Призначення HTTP методів</h2>

            <p>Маппінг необхідних Вам операцій на HTTP методи легшає, коли ви знаєте характеристики всіх методів HTTP - оскільки в реалізації REST API використовуються HTTP методи для операцій замість написання різних найменувань сервісів для кожної операції, в цьому розділі розглядається поведінка кожного HTTP методу. Нижче представлений список методів, які використовуються в REST додатках і показані їх властивості по відношенню до кожної сутності Entities:</p>
            <ul>
                <Li> GET: цей метод є безпечним і ідемпотентним. Зазвичай використовується для отримання інформації і не має побічних ефектів </li>
                <Li> POST: цей метод не є безпечним, проте в реалізації REST API він ще є ідемпотентним - це зроблено для підтримки можливості зміни в Legacy-системах, що не підтримує метод PUT. Цей метод найбільш завжди використовується для створення сутностей Entities </li>
                <Li> PUT: цей метод є ідемпотентним спочатку - тому краще використовувати цей метод замість POST для відновлення ресурсів. Уникайте використання POST для відновлення ресурсів, крім тих сутностей Entities де зміни вимагають історичності змін, наприклад Addresses або Profiles </li>
                <Li> DELETE: як випливає з назви, цей метод використовується для видалення сутностей Entities, проте в реалізації REST API він ще є ідемпотентним (зарезервовано) </li>
            </ul>

        </div>
    </div>

<?php

footer_natec();
?>