<?php

$show = false;

if (isset($_GET['debug'])) {
    $show = true;
}
$availableSection = array(
    'menu' => false,
    'agenda' => false,
    'sponsors' => true,
    'footer' => true,
);

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta seo -->
    <meta name="keywords" content="conference, iot, blockchain, timisoara, IT, event, october, 2018"/>
    <meta name="description"
          content="Conference on IoT eHealth Blockchain and more happening in Timisoara on 15-16 October 2018"/>
    <meta name="subject" content="Hacktalks 2018 conference official website">
    <meta name="robots" content="index,follow"/>
    <meta name="google-site-verification" content="a8eHtYxHXmK9qd_8MlhGYP9elKBJ7TBH1QYdkDrL9DM"/>
    <meta name="msvalidate.01" content="5B12513B8ED560E7F4FE84A74F539860"/>

    <!-- open graph -->
    <meta property="og:title" content="Hacktalks 2018"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://hacktalks.ro"/>
    <meta property="og:image" content="https://hacktalks.ro/assets/images/hacktalks_2018_logo.png"/>
    <meta property="og:site_name" content="Hacktalks 2018"/>
    <meta property="og:description"
          content="Conference on IoT, eHealth, Blockchain and more happening in Timisoara on 15-16 October 2018"/>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/hacktalks.css?ver=1.0.9">
    <title>Hacktalks 2018 Conference - IoT, eHealth, Blockchain & more</title>
</head>
<body data-spy="scroll" data-target=".navbar-nav" data-offset="120">

<?php if ($show || $availableSection['menu']): ?>
    <nav  class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <a class="navbar-brand abs" href="/">
                <object type="image/svg+xml" data="assets/images/hacktalks_2018_logo.svg" class="logo-nav">
                    Your browser does not support SVG
                </object>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="collapsingNavbar">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#agenda">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sponsors">Sponsors</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php endif; ?>
<section id="intro" class="container">
    <div class="row">
        <div class="col logo-section">
            <object type="image/svg+xml" data="assets/images/hacktalks_2018_logo.svg" class="logo">
                Your browser does not support SVG
            </object>
        </div>
    </div>
    <div class="row">
        <div class="col heading text-center">{IoT.eHealth.Blockchain.AI}</div>
    </div>
    <div class="row">
        <div class="col date">15-16 - Oct.2018</div>
    </div>
    <div class="row">
        <div class="col text-center intro">
           HackTalks is a 2 day conference that aims to give to the local community 
           opportunities for joint learning and to inspire the people around it to 
           innovate and thrive. HackTalks is creating an environment that encourages sharing, 
           learning from each other, and experimenting with new technologies and ideas.
        </div>
    </div>
    <div class="row register">
        <div class="col col-12 text-center mt-5 mb-2">
            <a class="btn button-green" target="_blank" href="https://banatit.ro/event/hacktalks-2018/">Register here</a>
        </div>
    </div>


</section>

<?php if ($show || $availableSection['agenda']): ?>
    <section id="agenda" class="content agenda white-bg ">
        <h1>Agenda</h1>
        <div class="container hacktalks-schedule">
            <div class="row">
                <div class="col green">
                    <div class="room">Room 01</div>


                    <div class="talk">
                        <div class="time break-time">
                            09:00
                        </div>
                        <div class="speech">
                            <div class="break">
                                Registration &amp; Welcome
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            09:45
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            10:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            11:00
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            11:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            12:00
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time break-time">
                            12:30
                        </div>
                        <div class="speech">
                            <div class="break">
                                Lunch Break
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            13:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            14:00
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            14:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time break-time">
                            15:00
                        </div>
                        <div class="speech">
                            <div class="break">
                                Coffee break
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            15:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk green ">
                        <div class="time break-time">
                            16:00
                        </div>
                        <div class="speech">
                            <div class="break panell-slot">
                                PANEL:<br>Starting from Technology - Building Businesses
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            17:00
                        </div>
                        <div class="speech last">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col yellow">
                    <div class="room">Room 01</div>


                    <div class="talk">
                        <div class="time break-time">
                            09:00
                        </div>
                        <div class="speech">
                            <div class="break">
                                Registration &amp; Welcome
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            09:45
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            10:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            11:00
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            11:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            12:00
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time break-time">
                            12:30
                        </div>
                        <div class="speech">
                            <div class="break">
                                Lunch Break
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            13:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            14:00
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            14:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time break-time">
                            15:00
                        </div>
                        <div class="speech">
                            <div class="break">
                                Coffee break
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            15:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk green ">
                        <div class="time break-time">
                            16:00
                        </div>
                        <div class="speech">
                            <div class="break panell-slot">
                                PANEL:<br>Starting from Technology - Building Businesses
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            17:00
                        </div>
                        <div class="speech last">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col red">
                    <div class="room">Room 01</div>


                    <div class="talk">
                        <div class="time break-time">
                            09:00
                        </div>
                        <div class="speech">
                            <div class="break">
                                Registration &amp; Welcome
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            09:45
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            10:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            11:00
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            11:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            12:00
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time break-time">
                            12:30
                        </div>
                        <div class="speech">
                            <div class="break">
                                Lunch Break
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            13:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            14:00
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            14:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time break-time">
                            15:00
                        </div>
                        <div class="speech">
                            <div class="break">
                                Coffee break
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            15:30
                        </div>
                        <div class="speech">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="talk green ">
                        <div class="time break-time">
                            16:00
                        </div>
                        <div class="speech">
                            <div class="break panell-slot">
                                PANEL:<br>Starting from Technology - Building Businesses
                            </div>
                        </div>
                    </div>
                    <div class="talk">
                        <div class="time">
                            17:00
                        </div>
                        <div class="speech last">
                            <h3>A Team Effort </h3>
                            <div class="details" data-toggle="modal" data-target="#ioanaiordan">
                                <div class="avatar"
                                     style="background-image: url('https://2017.hacktm.ro/wp-content/uploads/2017/05/8490e7c3960a-yoyo.jpg')"></div>
                                <div class="info">
                                    <div class="tag-line">speaker</div>
                                    <div class="name">Ioana Iordan</div>
                                    <div class="title">UX/UI Designer</div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="ioanaiordan" tabindex="-1" role="dialog"
                             aria-labelledby="ioanaiordan" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Ioana Iordan - A team
                                            Effort</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Bio</h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
<?php endif; ?>


<?php if ($show || $availableSection['sponsors']): ?>
    <section id="sponsors" class="content sponsors text-center white-bg">
        <h1>SPONSORS</h1>
        <h2>Platinum Sponsors</h2>
        <ul class="thumbnails-list">
            <li>
                <a title="Flex" target="_blank" href="https://flex.com/">
                    <img width="226" height="219" src="/assets/logo/hacktalks_logo_flex.png" alt="Flex">
                </a>
            </li>
            <li>
                <a title="Hella" target="_blank" href="https://www.hella.com/hella-ro/">
                    <img width="226" height="219" src="/assets/logo/hacktalks_logo_hella.png" alt="Hella">
                </a>
            </li>
            <li>
                <a title="Intel" target="_blank"
                   href="https://www.intel.com/content/www/us/en/jobs/locations/romania.html">
                    <img width="226" height="219" src="/assets/logo/hacktalks_logo_intel.png" alt="Intel">
                </a>
            </li>
        </ul>
        <h2>Banking Partner</h2>
        <ul class="thumbnails-list">
            <li>
                <a title="BRD" target="_blank" href="https://www.brd.ro/">
                    <img width="226" height="219" src="/assets/logo/hacktalks_logo_brd.png" alt="BRD">
                </a>
            </li>
        </ul>

        <h2>Gold Sponsors</h2>
        <ul class="thumbnails-list">
            <li>
                <a title="Ness" target="_blank" href="http://flex.ro/">
                    <img width="175" height="175" src="/assets/logo/hacktalks_logo_ness.png" alt="Ness">
                </a>
            </li>
        </ul>
        <h2>Partners</h2>
        <ul class="thumbnails-list">
            <li>
                <a title="Devplant" target="_blank" href="http://devplant.ro/">
                    <img width="175" height="175" src="/assets/logo/hacktalks_logo_devplant.png" alt="Devplant">
                </a>
            </li>
        </ul>
        <h2>BROUGHT TO YOU BY</h2>
        <ul class="thumbnails-list">
            <li>
                <a title="BanatIT" target="_blank" href="http://banatit.ro/">
                    <img width="227" height="220" src="/assets/logo/hacktalks_logo_banat_it.png" alt="Banat IT">
                </a>
            </li>
        </ul>
        <div class="content">

            <div class="title text-center">
                <h3>Interested in becoming a sponsor ?</h3>
                <p>
                    Get in touch with us over the phone or email: <br>
                    <a href="tel:+40747375957">(+40) 747 375 957<br></a>
                    <a href="mailto:info@banatit.ro">info@banatit.ro</a>
                </p>
            </div>

    </section>

<?php endif; ?>

<?php if ($show || $availableSection['footer']): ?>
    <section id="footer" class="container footer">
        <div class="row">
            <div class="col">
                <div class="previous-editions">
                    <p>Previous editions</p>
                    <ul>
                        <li>
                            <a href="http://2016.hacktm.ro/modules/cms/img/hacktalks.png" target="_blank">2016</a>
                        </li>
                        <li>
                            <a href="https://2017.hacktm.ro/hacktalks" target="_blank">2017</a>
                        </li>
                    </ul>
                </div>


            </div>
            <div class="col">
                <div class="subscribe-form text-right">

                    <form action="https://banatit.us11.list-manage.com/subscribe/post?u=b0ca77226362a7371c265896d&amp;id=4f6d7fa540"
                          method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                          class="validate" target="_blank" novalidate>
                        <div class="row">
                            <div class="col">
                                <label for="mce-EMAIL" class="subscribe-msg">Subscribe to get updates</label>

                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
                                       placeholder="Enter email" required>

                                <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe"
                                       class="button subscribe">
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                <input type="text" name="b_b0ca77226362a7371c265896d_4f6d7fa540" tabindex="-1" value="">
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </section>


    <div id="map" class="map">

    </div>
    <div class="footer-ending">
        <div class="container">
            <div class="row">
                <div class="col text-right">
                    &copy; Hacktalks 2018. All rights reserved.
                </div>
            </div>
        </div>

    </div>
<?php endif; ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119873806-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-119873806-1');
</script>
<script type="text/javascript">
    var map;
    var mapCraft;
    $(document).ready(function(){
        $('[data-spy="scroll"]').each(function () {
            var $spy = $(this).scrollspy('refresh')
        });
    });
    function initMap() {

        var bibilioteca = {lat: 45.7471671, lng: 21.2266917};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: bibilioteca,
            draggable: false,
            zoomControl: false,
            scrollwheel: false,
            disableDoubleClickZoom: true
        });

        var marker = new google.maps.Marker({
            position: bibilioteca,
            map: map,
            title: 'Cantina Politehnica'
        });

    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwtD15NnMp34yFbzMpnUsh0RfTvhgrkL0&callback=initMap"
        async defer></script>
</body>
</html>