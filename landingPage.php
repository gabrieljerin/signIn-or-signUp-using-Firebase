<?php ?>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <section class="intro">
            <?php
            require_once './menu.php';
            ?>
            <div class="inner">
                <div class="content animated rollIn">
                    <img class="firebase-icon-cls animated pulse infinite" src="./image/firebase_icon.png"/>
                    <h1 class="heading-h1">Firebase Demo</h1>
                    <div>
                    <img class="firebase-underline-cls" src="./image/underline.jpg"/>
                    </div>
                    <a class="btn-cls" href="#">Get Started</a>
                </div>
            </div>
        </section>
        <p class="dummy-cls">
            Firebase evolved from Envolve, a prior startup founded by James Tamplin and Andrew Lee in 2011. Envolve provided developers an API that enables the integration of online chat functionality into their websites. After releasing the chat service, Tamplin and Lee found that it was being used to pass application data that wasn't chat messages. Developers were using Envolve to sync application data such as game state in real time across their users. Tamplin and Lee decided to separate the chat system and the real-time architecture that powered it. They founded Firebase as a separate company in April 2012.[6]
        </p>
        <p class="dummy-cls">
            Firebase provides a realtime database and backend as a service. The service provides application developers an API that allows application data to be synchronized across clients and stored on Firebase's cloud.[14][15] The company provides client libraries that enable integration with Android, iOS, JavaScript, Java, Objective-C, swift and Node.js applications. The database is also accessible through a REST API and bindings for several JavaScript frameworks such as AngularJS, React, Ember.js and Backbone.js.[16] The REST API uses the Server-Sent Events protocol, which is an API for creating HTTP connections for receiving push notifications from a server. Developers using the realtime database can secure their data by using the company's server-side-enforced security rules.[17]
        </p>
        <p class="dummy-cls">
            Firebase Hosting is a static and dynamic web hosting service that launched on May 13, 2014. It supports hosting static files such as CSS, HTML, JavaScript and other files, as well as dynamic Node.js support through Cloud Functions. The service delivers files over a content delivery network (CDN) through HTTP Secure (HTTPS) and Secure Sockets Layer encryption (SSL). Firebase partners with Fastly, a CDN, to provide the CDN backing Firebase Hosting. The company states that Firebase Hosting grew out of customer requests; developers were using Firebase for its real-time database but needed a place to host their content
        </p>
    </body>
</html>
