function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
let cookiecook = getCookie("cookiecook")


// проверяем, есть ли у нас cookie, с которой мы не показываем окно и если нет, запускаем показ
if (cookiecook != "no") {
    // показываем

    let cookieLang = document.documentElement.lang
    if (cookieLang == 'uk') {
        urlCookiePrivacy = '/uk/privacy-policy.php';
    }
    else if (cookieLang == 'en_US') {
        urlCookiePrivacy = '/en/privacy-policy.php';
    }
    else if (cookieLang == 'ru_RU') {
        urlCookiePrivacy = '/privacy-policy.php';
    }
    else {
        urlCookiePrivacy = '/privacy-policy.php';
    }

    const cookieText = '<div class="cookie_notice">This website uses cookies to improve your experience. See our <a href="'+ urlCookiePrivacy +'">Privacy Policy</a> to learn more.<div><a class="cookie_btn" id="cookie_close" href="#close">Accept</a></div></div>';
    const footerBefore = document.getElementsByTagName('footer')[0];

    footerBefore.insertAdjacentHTML('beforebegin', cookieText)
    // закрываем по клику
    document.getElementById("cookie_close").addEventListener("click", function(){
        let cookiewin = document.getElementsByClassName('cookie_notice')[0];
        cookiewin.style.display="none";
        // записываем cookie на 1 день, с которой мы не показываем окно
        let date = new Date;
        date.setDate(date.getDate() + 7);
        document.cookie = "cookiecook=no; path=/; expires=" + date.toUTCString();
    });
}