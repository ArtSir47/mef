// Copyright (c) Microsoft. All rights reserved. Licensed under the MIT license. See LICENSE file in the project root for full license information.

(function() {

    // let script=document.createElement("script");
    // script.type="text/javascript";
    // script.src="https://spikmi.com/Widget?Id=5372";
    // script.classList.add("ambn");
    // document.body.insertBefore(script, document.body.firstChild);

    let scriptCookie=document.createElement("script");
    scriptCookie.type="text/javascript";
    scriptCookie.src="https://mef.dev/api/styles/coocie.js";
    scriptCookie.classList.add("ambn");
    document.body.insertBefore(scriptCookie, document.body.firstChild);

    let langattr = document.documentElement.lang
    console.log(langattr)
    let el = document.getElementsByClassName("footer");
    if (langattr == 'uk') {
        urlprivacy = '/uk/privacy-policy.php';
    }
    else {
        urlprivacy = '/privacy-policy.php';
    }

    el[0].innerHTML = '<div class="container"><div class="footer-flex"><div class="footer-logo"><img src="/images/nuget.png"><a href="https://www.nuget.org/profiles/natec"></a></div><div class="footer-logo footer-logo-mobile"><img src="/images/git.png"><a href="https://github.com/mef-dev"></a></div><p class="footer-text">© 2021 The <a href="https://youtu.be/CRbDMFil0_8"><b>MEF.DEV Authors</b></a> | Distributed under GNU AGPL 3.0<br><a href="/terms-of-use.php">Terms of use</a> | <a href="'+ urlprivacy +'">Privacy Policy</a></p><div class="footer-logo footer-logo-desctop"><img src="/images/git.png"><a href="https://github.com/mef-dev"></a></div></div></div>';
	
    
    let before = document.querySelector('#navbar');
    let p = document.createElement('div');
    p.classList.add("header-logo-box");
    p.innerHTML = '<div class="header-l"><img src="/images/nuget.png"><a href="https://www.nuget.org/profiles/natec"></a></div><div class="header-l"><img src="/images/git.png"><a href="https://github.com/mef-dev"></a></div>';

    before.after(p);

    let tagManager = document.createElement('script');
    tagManager.src = "https://www.googletagmanager.com/gtag/js?id=UA-185622376-1";
    document.getElementsByTagName('head')[0].appendChild(tagManager);
    
    let googleCode = document.createElement('script');
    googleCode.src = "https://mef.dev/api/styles/google.js";
    document.getElementsByTagName('head')[0].appendChild(googleCode);
    
    let docSearch = document.createElement('script');
    docSearch.src = "https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js";
    document.getElementsByTagName('head')[0].appendChild(docSearch);

    let sendLoader = document.createElement('script');
    sendLoader.setAttribute('data-chats-widget-id', 'a234e328-f5d7-4829-b13b-384f085f7bc2');
    sendLoader.src = "https://widget.13chats.com/assets/loader.js";
    document.getElementsByTagName('head')[0].appendChild(sendLoader);
    
    let docSearchCss = document.createElement('link');
   
    docSearchCss.setAttribute('rel', 'stylesheet');
    docSearchCss.setAttribute('type', 'text/css');
    docSearchCss.href = "https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css";
    document.getElementsByTagName('head')[0].appendChild(docSearchCss);   
    
    setTimeout(function () {
        docsearch({
            apiKey: 'cd6b0db3a66eec772afa54cdd256ed6d',
            indexName: 'mef',
            inputSelector: '#docsearch',
            debug: false // Set debug to true if you want to inspect the dropdown
        });
        docsearch({
            apiKey: 'cd6b0db3a66eec772afa54cdd256ed6d',
            indexName: 'mef',
            inputSelector: '#docsearch-mob',
            debug: false // Set debug to true if you want to inspect the dropdown
        });
        
    }, 3000);
    

})();

 
_linkedin_partner_id = "3547489";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
 
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();

/*******
function bssElement() {
    var urlElement = document.getElementById('top_lvl_href')
    var urlElementBreadcrumbs = document.querySelectorAll('.hide-when-search ul li a')
        if(urlElement) {
            urlElement.href = "/bss/"
            urlElement.innerHTML = "About"
        }
        if(urlElementBreadcrumbs[0]) {
            urlElementBreadcrumbs[0].href = "/bss/"
            urlElementBreadcrumbs[0].innerHTML = "About"
        }
};
window.addEventListener('load', bssElement)


function deleteAbout() {
    var deleteAb = document.querySelectorAll('.sidetoc ul li')
    if(deleteAb[0]) {
        deleteAb[0].style.display = "none"
    }
};
window.addEventListener('load', deleteAbout)
***/