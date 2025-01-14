<?php

    require_once "headless-cms.php";

    $page = handle_request();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Insert any custom head contents -->
    <?php echo $page->head_content ?>

    <!-- Import the Client Side Router -->
    <!-- Remove this if you don't wish to use the client-side routing function of the Headless CMS -->
    <!-- <script type="module" src="/headless-cms-scripts/client-side-router.js"></script> -->

    <!-- Import Alpine JS -->
    <!-- Remove this if you don't wish to use Alpine JS across you webpages -->
    <script defer src="/scripts/alpine-requests.js"></script>

    <script defer src="/scripts/alpine.js"></script>
    


    <!-- If the title property is set, insert here. -->
    <?php echo $page->get_property('title') ?>

    <!-- If the description property is set, insert here. -->
    <?php echo $page->get_property('description') ?>

    <!-- If the og-image property is set, insert here. -->
    <?php echo $page->get_property('og-image') ?>

    <!-- If the og-type property is set, insert here. -->
    <?php echo $page->get_property('og-type') ?>

    <!-- If the og-url property is set, insert here. -->
    <?php echo $page->get_property('og-url') ?>

    <!-- If the favicon property is set, insert here. Default value is '/resources/favicon.png' -->
    <?php echo $page->get_property('favicon') ?>



    <!-- Add global stylesheet imports here -->
    <link rel="stylesheet" href="/resources/default-styles.css">
    <link rel="stylesheet" href="/resources/globals.css">
    <link rel="stylesheet" href="/resources/utils.css">

    <script type="module" src="/scripts/index.js"></script>


</head>
<body>

    <header>
        <a class="header-link" href="/">
            <img src="/resources/images/Exeter Application Tracker Logo Grey.png" alt="Logo">
            <span>Exeter Application Tracker</span>
        </a>
        
        <div class="flex align-center gap-m">
            <a class="header-link" href="/advice"><span class="m-hide">Application </span>Advice</a>    

            <a href="https://edward-blewitt.uk/application-tracker" class="m-hide">
                <button class="sign-in">Sign in</button>
            </a>
        </div>
    </header>

    
    <main>
        <!-- Insert the page content in here -->
        <?php echo $page->content; ?>
    </main>


    <footer>
        <div class="ed">
            <img src="https://edward-blewitt.uk/resources/images/me.jpg" class="ed-image">
            <div class="ed-desc">
                <p>
                    Exeter application tracker was developed by <a target="_blank" class="text-orange underline" href="https://edward-blewitt.uk">Ed Blewitt</a> to help students track their applications.
                </p>
            </div>
        </div>

        <div class="flex space-between gap-m text-white m-flex-col m-align-center">
            <small>
                <a href="/" class="flex align-center gap-s">
                    <img class="icon icon-large" src="/resources/images/Exeter Application Tracker Logo Large.png" alt="Logo">
                    <span>Exeter Application Tracker</span>
                </a>    
            </small>
            <div class="flex align-center gap-s">
                <small>
                    <a href="/terms-of-service">Terms of Service</a>
                </small>
                <small>|</small>
                <small>
                    <a href="/privacy-policy">Privacy Policy</a>
                </small>
            </div>
        </div>
    </footer>

</body>
</html>