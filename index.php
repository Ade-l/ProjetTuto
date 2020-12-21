<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="scripts/style.css"/>
    <link rel="stylesheet" href="scripts/style-light-page.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
    />
    <link
            rel="shortcut icon"
            href="img/Faviconico/favicon-light.ico"
            type="image/x-icon"
    />
    <link
            rel="icon"
            href="img/Faviconico/favicon-light.ico"
            type="image/x-icon"
    />
    <title>Télécommunications du futur</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg fixed-top nav-bg">
        <div class="container justify-content-center">
            <a class="navbar-brand d-flex w-50 mr-auto" href="index.php">
                <img
                        src="img/svg/logo/Future-Blue.svg"
                        alt="Logo"
                        style="width: 100px"
                />
            </a>

            <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                    class="collapse navbar-collapse justify-content-end"
                    id="navbarNavDropdown"
            >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="5G.html">5G</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdownMenuLink"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                        >
                            Télécommunications Satelitaires
                        </a>
                        <div
                                class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="navbarDropdownMenuLink"
                        >
                            <a class="dropdown-item" href="starlink.html">Starlink</a>
                            <a class="dropdown-item" href="blue-origin.html"
                            >Blue Origin</a
                            >
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Loon.html">Projet Loon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"
                        ><span class="span-button">Contact</span></a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class="container">
        <!-- Début - Carousel -->
        <div
                id="carousel-example-2"
                class="carousel slide carousel-fade"
                data-ride="carousel"
                data-interval="6000"
        >
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li
                        data-target="#carousel-example-2"
                        data-slide-to="0"
                        class="active"
                ></li>
                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                <li data-target="#carousel-example-2" data-slide-to="2"></li>
                <li data-target="#carousel-example-2" data-slide-to="3"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="view">
                        <a href="5G.html">
                            <img
                                    class="d-block w-100"
                                    src="img/slider/interleaved-antenna-on-a-rooftop.jpg"
                                    alt="First slide"
                            />
                        </a>
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">5G</h3>
                        <p>
                            La 5G est la cinquième génération des standards de
                            télécommunication pour téléphonie mobile succédant à la 4G.
                            Elle propose des débits près de 10 fois supérieurs à ceux de
                            la 4G.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <a href="starlink.html">
                            <img
                                    class="d-block w-100"
                                    src="img/slider/spacex-falcon-9-block-5.jpg"
                                    alt="Second slide"
                            />
                        </a>
                        <div class="mask rgba-black-strong"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Starlink</h3>
                        <p>
                            Starlink est un projet dirigée par la société SpaceX fondée
                            par le célèbre Elon Musk visant à connecter la planète à
                            internet à l'aide d'une constellation de satellites.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <a href="blue-origin.html">
                            <img
                                    class="d-block w-100"
                                    src="img/slider/f58aced389_50146209_newshepard-blueorigin.jpg"
                                    alt="Third slide"
                            />
                        </a>
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Blue Origin</h3>
                        <p>
                            Blue Origin est un projet dirigée le CEO d'Amazon, dont le but
                            est d'abaisser les coûts d'accès à l'espace et fournir un
                            accès internet au monde par satellite.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <!--Mask color-->
                    <div class="view">
                        <a href="Loon.html">
                            <img
                                    class="d-block w-100"
                                    src="img/slider/alphabet_project_loon_puerto_rico_1.jpg"
                                    alt="Third slide"
                            />
                        </a>
                        <div class="mask rgba-black-slight"></div>
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Projet Google Loon</h3>
                        <p>
                            Google Loon est un projet visant à fournir un accès internet à
                            l'aide de ballons flottants dans la stratosphère émettants de
                            la 4G.
                        </p>
                    </div>
                </div>
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a
                    class="carousel-control-prev"
                    href="#carousel-example-2"
                    role="button"
                    data-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a
                    class="carousel-control-next"
                    href="#carousel-example-2"
                    role="button"
                    data-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!-- Fin - Carousel -->

        <!-- Début - Titre -->
        <div class="margin-3">
            <h1 class="display-1">Projet Tuteuré de S1</h1>
        </div>
        <!-- Fin - Titre -->

        <!-- Début - Description -->
        <p class="margin-3">
            Dans le cadre de nos études en DUT Informatique, nous avons été amenés
            à réaliser un projet de groupe portant sur un sujet de notre choix,
            sous la tutelle de trois de nos professeurs. Le but principal de notre
            projet est de transcrire le fruit de nos recherches sur un site
            internet créé par nos soins.
        </p>
        <!-- Fin - Description -->

        <p class="margin-3">
            Bien que notre sondage possède un faible échantillon (104 réponses) et
            une population non représentative de la population française (réponse
            provenant ajoritairement du département informatique), les différences
            de popularité que l’on observe sur Google Trends se retrouve dans
            notre sondage.
        </p>

        <div class="image-container">
            <img
                    class="img-fluid text-center"
                    src="img/Sondage/population-sondage.JPG"
                    alt="Population de notre sondage"
            />
            <p>
            <span class="caption text-muted text-center"
            >Population de notre sondage</span
            >
            </p>
        </div>

        <p>
            La 5G est le projet le plus populaire où 98.1% des répondants
            affirmaient connaître le projet.
        </p>

        <div class="image-container">
            <img
                    class="img-fluid text-center"
                    src="img/Sondage/popularité-5G.JPG"
                    alt="Popularité 5G"
            />
            <p>
            <span class="caption text-muted text-center"
            >Popularité de la 5G</span
            >
            </p>
        </div>

        <p>Cette tendance se vérifie sur Google Trends :</p>
        <!-- Début - Google Trends - 5G vs Starlink vs Google Loon vs Blue Origin-->
        <div class="margin-5">
            <script src="https://ssl.gstatic.com/trends_nrtr/2431_RC04/embed_loader.js"></script>
            <div class="rounded">
                <script>
                    trends.embed.renderExploreWidget(
                        "TIMESERIES",
                        {
                            comparisonItem: [
                                {
                                    keyword: "/m/0c41j8y",
                                    geo: "FR",
                                    time: "2018-12-18 2020-12-20",
                                },
                                {
                                    keyword: "/m/03lwz4",
                                    geo: "FR",
                                    time: "2018-12-18 2020-12-20",
                                },
                                {
                                    keyword: "Google Loon",
                                    geo: "FR",
                                    time: "2018-12-18 2020-12-20",
                                },
                                {
                                    keyword: "/g/11f4pphz_9",
                                    geo: "FR",
                                    time: "2018-12-18 2020-12-20",
                                },
                            ],
                            category: 0,
                            property: "",
                        },
                        {
                            exploreQuery:
                                "date=2018-12-18%202020-12-20&geo=FR&q=%2Fm%2F0c41j8y,%2Fm%2F03lwz4,Google%20Loon,%2Fg%2F11f4pphz_9",
                            guestPath: "https://trends.google.fr:443/trends/embed/",
                        }
                    );
                </script>
            </div>
        </div>
        <!-- Fin - Google Trends - Google Loon vs Blue Origin-->

        <div class="margin-3">
            <p>
                Du côté de StarLink, près de 50% des personnes ayant répondu au
                sondage affirment connaître le projet :
            </p>
        </div>

        <div class="image-container">
            <img
                    class="img-fluid text-center"
                    src="img/Sondage/popularité-Starlink.JPG"
                    alt="Popularité 5G"
            />
            <p>
            <span class="caption text-muted text-center"
            >Popularité du projet
              <a href="https://www.starlink.com/">Starlink</a></span
            >
            </p>
        </div>

        <p>
            Le projet Starlink est aussi plus populaire que le projet Blue Origin
            selon Google Trends :
        </p>

        <!-- Début - Google Trends - Starlink vs Blue Origin-->
        <div class="margin-5">
            <script>
                trends.embed.renderExploreWidget(
                    "TIMESERIES",
                    {
                        comparisonItem: [
                            {
                                keyword: "/g/11f4pphz_9",
                                geo: "FR",
                                time: "2018-12-18 2020-12-20",
                            },
                            {
                                keyword: "/m/03lwz4",
                                geo: "FR",
                                time: "2018-12-18 2020-12-20",
                            },
                        ],
                        category: 0,
                        property: "",
                    },
                    {
                        exploreQuery:
                            "date=2018-12-18%202020-12-20&geo=FR&q=%2Fg%2F11f4pphz_9,%2Fm%2F03lwz4",
                        guestPath: "https://trends.google.fr:443/trends/embed/",
                    }
                );
            </script>
        </div>
        <!-- Fin - Google Trends - Starlink vs Blue Origin-->

        <p>
            Le projet Google Loon est, quant à lui, le moins populaire des quatre
            puisque 75% des répondants affirmaient ne pas le connaître.
        </p>

        <div class="image-container">
            <img
                    class="img-fluid text-center"
                    src="img/Sondage/popularité-Google-Loon.JPG"
                    alt="Débit plus élevé nécessaire ?"
            />
            <p>
            <span class="caption text-muted text-center"
            >Popularité du projet
              <a href="https://loon.com/">Google Loon</a></span
            >
            </p>
        </div>

        <p>Il est moins populaire que Blue Origin selon Google Trends :</p>

        <!-- Début - Google Trends - Google Loon vs Blue Origin-->
        <div class="margin-5">
            <script>
                trends.embed.renderExploreWidget(
                    "TIMESERIES",
                    {
                        comparisonItem: [
                            {
                                keyword: "Google Loon",
                                geo: "FR",
                                time: "2018-12-18 2020-12-20",
                            },
                            {
                                keyword: "/m/03lwz4",
                                geo: "FR",
                                time: "2018-12-18 2020-12-20",
                            },
                        ],
                        category: 0,
                        property: "",
                    },
                    {
                        exploreQuery:
                            "date=2018-12-18%202020-12-20&geo=FR&q=Google%20Loon,%2Fm%2F03lwz4",
                        guestPath: "https://trends.google.fr:443/trends/embed/",
                    }
                );
            </script>
        </div>
        <!-- Fin - Google Trends - Google Loon vs Blue Origin-->

        <p>
            Pour finir, nous avons demandé s’il était nécessaire d’avoir un débit
            plus élevé et environ 70% des répondants ont répondu que oui.
        </p>

        <div class="image-container">
            <img
                    class="img-fluid text-center"
                    src="img/Sondage/Débit-plus-élevé-nécessaire.JPG"
                    alt="Débit plus élevé nécessaire ?"
            />
            <p>
            <span class="caption text-muted text-center"
            >Débit plus élevé nécessaire ?</span
            >
            </p>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="page-footer font-small blue sticky-bottom">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        © 2020 Copyright : Future Team
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"
></script>
<script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"
></script>
</body>
</html>
