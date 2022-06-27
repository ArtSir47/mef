<?php
include '../functions.php';
header_natec(
    'Первый UI плагин',
    '/backend_uIs_plugin/first_ui_plugin.php',  // Ccылка на перевод RU,
    '/uk/backend_uIs_plugin/first_ui_plugin.php', // Ccылка на перевод UA,
    '/en/backend_uIs_plugin/first_ui_plugin.php'  // Ccылка на перевод EN
);
?>

<div class="container container-sidebar">
    <?php sidebar_natec(); ?>
    <div class="content">
        <h1>Первый UI плагин (preview)</h1>
        <h2 id="creation">Создание плагина на основе шаблона</h2>
        <p>Сейчас мы разработаем базовый UI плагин для публикации на платформе preview MEF.DEV. Для разработки этого плагина необходимы только знания написания кода на Angular</p>
        <p>Следуйте инструкциям и узнайте, как создать свой первый плагин, который в дальнейшем может быть дополнен для использования данных Backend плагинов и реализации Вашей бизнес-логики.</p>
        <h3>Шаг 1. Установка Node.js</h3>
        <p>Установите LTS-версию Node.js:</p>
        <ul>
            <li>Загрузите Node.js</li>
            <li>Откройте командную строку - это терминал в macOS и Linux, или командная строка в Windows.</li>
            <li>Запустите node -v. Если Вы получаете номер версии как результат, значит был установлен node.js. Это должно выглядеть приблизительно так: v12.18.4</li>
        </ul>
        <h3>Шаг 2. Настройка IDE</h3>
        <p>Ми рекомендуем использовать Atom или Visual Code Studio в качестве IDE.
        <h3>Шаг 3. Сделайте копию тестового проекта из репозитория</h3>
        <p>// ссылка на репозиторий <a href="https://github.com/mef-dev/tutorial-ui-plugin">https://github.com/mef-dev/tutorial-ui-plugin</a></p>
        <h3>Шаг 4. Настройка локальной тестовой среды</h3>
        <p>Сначала мы создадим локальную тестовую среду. Это позволит нам проверять наш интерфейс в браузере.</p>
        <ul>
            <li>Откройте IDE</li>
            <li>Перейдите в Файл => Открыть</li>
            <li>Откройте папку tutorial-ui-plugin</li>
            <li>Перейдите в каталог tutorial-ui-plugin cd / your-dir / tutorial-ui-plugin</li>
            <li>Запустите npm install, чтобы установить все необходимые пакеты. Это может занять какое-то время</li>
            <li>Запустите ng serve или npm start для запуска локального тестового веб-сервера, по умолчанию Вы можете увидеть проект в браузере localhost:4200 (если возникнут проблемы с вызовом ng из терминала по причине политики безопасности, то может помочь вызов команды Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy Unrestricted)</li>
        </ul>

        <h2 id="overview">Обзор проекта</h2>
        <p>Структура проекта довольно гибкая, основные файлы проекта находятся в директории plugin. Для запуска проекта локально используется main.ts, для билда плагина перед публикацией main-plugin.ts. Конфигурация angular.json достаточна для всех действий по подготовке и публикации плагина.</p>
        <img src="http://mef.dev/images/image13.png">
        <h3>Шаг 1. Создание названия плагина</h3>
        <p>Для початку внесем изменения в файл package.json</p>
        <img src="http://mef.dev/images/image23.png">
        <p>Указываем уникальное название для Вашего фронтового плагина - во время регистрации оно используется для идентификации пакета. Номер версии изменяем по мере необходимости, обычно каждая новая загрузка на платформу - новая версия.</p>
        <h3>Шаг 2. Создание страницы плагина</h3>
        <p>Откройте браузер файлов IDE и перейдите до библиотеки компонент plugin/components.</p>
        <p>Создание новой компоненты может быть создано вручную hello-world.component.ts или из терминала ng g c hello-world. Этот файл используется для реализации всей необходимой логики.</p>
        <img src="http://mef.dev/images/image12.png">
        <p>В декораторе @Component для корректной работы на платформе используется template и styles для отображения Вашего интерфейса пользователя и стилизации интерфейса пользователя соответственно. Добавьте Вашу ново-созданный компонент в список declarations NgModule , если Вы создавали ее как файл в директории Вашего плагина, если же была использована команда, то компонент автоматически будет добавлен в соответствующий раздел декоратора модуля</p>
        <img src="http://mef.dev/images/image26.png">
        <h3>Шаг 3. Навигация</h3>
        <p>Далее мы применим определенную логику для перехода в наш плагин. Ми создадим для этого новый маршрут.</p>
        <ul>
            <li>Откройте src plugin/plugin-routing.module.ts.</li>
            <li>Добавьте новый объект в массив children, который принадлежит объекту маршрутов плагина</li>
            <li>Добавьте свойство path и установите его значение</li>
            <li>Добавьте свойство компоненты и установите для него значение тип HelloWorldComponent</li>
            <li>Импортируйте компонент<br>
                <img src="http://mef.dev/images/image36.png">
            </li>
            <li>Придерживайтесь указанной структуры, чтобы на платформе были корректно интерпретированы маршруты Вашего плагину.</li>
            <li>Далее запускаем проект - получаем следующий результат <br>
                <img src="http://mef.dev/images/image33.png">
            </li>
        </ul>
        <h3>Шаг 4. Сборка плагина</h3>
        <p>Теперь можем собрать наш простейший (базовый) плагин и загрузить его на платформу. В терминале вызываем команду npm run build - результатом выполнения этого скрипта будет файл app-hello-world-1.0.0.bundle.js - где app-hello-world - name в package.json, 1.0.0 - version в package.json.</p>
        <p>Он находится в директории external_plugins/app-hello-world-1.0.0 в корне проекта.</p>
        <h2 id="publication">Публикация UI плагину на платформе</h2>
        <p>Для этого необходимо быть зарегистрированным пользователем платформы с ролью Developer или Root - если Ви не зарегистрированы, то во время первого входа на платформу по адресу <a href="http://preview.mef.dev">https://preview.mef.dev</a> Вам буде предоставлена возможность пройти регистрацию.</p>
        <p>После захода на платформу:</p>
        <ul>
            <li>Перейдите в список Ваших плагинов, нажмите редактировать – “колесико” на карточке с общей информацией о плагине</li>
            <li>Выберите для Вашего плагина тип UI<br>
                <img src="http://mef.dev/images/image2.png">
                <br>У Вас появится блок для описания Вашего фронтового плагина.</li>
            <li>Заполните информацию про Ваш фронтовый плагин<br>
                <img src="http://mef.dev/images/image22.png">
                <br><b>plugin-uiname</b> - name - з package.json<br><b>modulename</b> название модуля из plugin.module.ts в директории</li>
            <li>добавьте роут который Вы определили как доступный во время разработки плагина</li>
            <li>загрузите на платформу app-hello-world-1.0.0.bundle.js</li>
            <li>После успешной загрузки выберите из списка версию и нажмите “Сохранить”. Плагин появится для предварительного просмотра.</li>
        </ul>
    </div>
</div>

<?php

footer_natec();
?>