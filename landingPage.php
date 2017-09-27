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
                    <a class="btn-cls scroll-cls" href="#info">Get Started</a>
                </div>
            </div>
        </section>
        <div id="info" class="remove-dotted-lines">
            <h3 class="heading-h3">An Overview</h3>
            <section class="sc-cls">
                <p class="para-cls">
                    Firebase evolved from Envolve, a prior startup founded by James Tamplin and Andrew Lee in 2011. Envolve provided developers an API that enables the integration of online chat functionality into their websites. After releasing the chat service, Tamplin and Lee found that it was being used to pass application data that wasn't chat messages. Developers were using Envolve to sync application data such as game state in real time across their users. Tamplin and Lee decided to separate the chat system and the real-time architecture that powered it. They founded Firebase as a separate company in April 2012.[6]
                </p>
                <p class="para-cls">
                    Firebase provides a realtime database and backend as a service. The service provides application developers an API that allows application data to be synchronized across clients and stored on Firebase's cloud.[14][15] The company provides client libraries that enable integration with Android, iOS, JavaScript, Java, Objective-C, swift and Node.js applications. The database is also accessible through a REST API and bindings for several JavaScript frameworks such as AngularJS, React, Ember.js and Backbone.js.[16] The REST API uses the Server-Sent Events protocol, which is an API for creating HTTP connections for receiving push notifications from a server. Developers using the realtime database can secure their data by using the company's server-side-enforced security rules.[17]
                </p>
            </section>
        </div>
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
    </body>
</html>
