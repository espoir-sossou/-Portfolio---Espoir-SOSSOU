@extends('layouts.master')

@section('content')
<p>{{ asset('assets/css/style.css') }}</p>

    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="banner_content">
                            <h4 class="" style="font-size: 54px"> Espoir SOSSOU</h4>
                            <h5 class="text-uppercase">Développeur Web Full-Stack</h5>
                            <div class="d-flex align-items-center">
                                <a class="primary_btn" href="{{ route('contact') }}" aria-label="Engagez-moi">
                                    <span>Contactez-moi</span>
                                </a>
                                <a class="primary_btn tr-bg"  href="https://wa.me/90803347?text=Bonjour,%20je%20suis%20un%20client%20ou%20un%20chef%20d%27entreprise%20et%20je%20voudrais%20discuter%20de%20mes%20projets%20avec%20vous."  aria-label="Contact via WhatsApp" target="_blank">
                                    <span>Voir mon CV</span>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="home_right_img">
                            <img class="" src="{{ asset('assets/img/banner/home-right.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start About Us Area =================-->
    <section class="about_area section_gap" id="experience">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="" src="{{ asset('assets/img/about-us.png') }}" alt="À propos de moi" />
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <h2>
                            Laissez-moi <br />
                            me présenter <br />
                            à vous
                        </h2>
                        <p>
                            Ingénieur en génie logiciel, Passionné par la technologie, je suis spécialisé dans
                            la conception et le développement d’applications et de sites web. Je mets un
                            point d’honneur à renforcer mes compétences techniques à travers des
                            formations continues et des projets pratiques, afin de proposer des solutions et
                            de répondre efficacement aux exigences des missions qui me sont confiées.
                        </p>
                        <a class="primary_btn"  href="https://wa.me/90803347?text=Bonjour,%20je%20suis%20un%20client%20ou%20un%20chef%20d%27entreprise%20et%20je%20voudrais%20discuter%20de%20mes%20projets%20avec%20vous."  target="_blank"><span>Télécharger Mon CV</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================ End About Us Area =================-->

<!--================ Start Brand Area =================-->
<section class="brand_area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Section des logos -->
            <div class="col-lg-6">
                <div class="row gy-4 gx-3 justify-content-center">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/brands/html.png') }}" class="img-fluid" alt="HTML" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/brands/vue-js.png') }}" class="img-fluid" alt="Vue.js" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/brands/laravel.png') }}" class="img-fluid" alt="Laravel" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/brands/flutter.png') }}" class="img-fluid" alt="Flutter" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/brands/postman.png') }}" class="img-fluid" alt="Postman" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/brands/sql.png') }}" class="img-fluid" alt="SQL" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Infos Client -->
            <div class="col-lg-4 col-md-6 text-center text-md-start ml-5">
                <div class="client-info">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-4">
                        <span class="lage display-4 fw-bold text-primary">3</span>
                        <span class="smll ms-3 fs-5">Années d'expérience</span>
                    </div>

                    <!-- Contact par téléphone -->
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                        <div class="icon-box d-flex align-items-center justify-content-center bg-primary text-white rounded-circle p-3" style="width: 50px; height: 50px;">
                            <span class="fa fa-phone fs-4"></span>
                        </div>
                        <div class="ms-3">
                            <p class="mb-1">Appelez-moi maintenant</p>
                            <h3 class="fw-bold">+228 90-80-33-47</h3>
                        </div>
                    </div>

                    <!-- Contact WhatsApp -->
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="icon-box d-flex align-items-center justify-content-center bg-success text-white rounded-circle p-3" style="width: 50px; height: 50px;">
                            <span class="fa fa-whatsapp fs-4"></span>
                        </div>
                        <div class="ms-3">
                            <p class="mb-1">Mon WhatsApp</p>
                            <h3 class="fw-bold">
                                <a href="https://wa.me/+22890803347" target="_blank" class="text-success text-decoration-none">
                                    +228 90-80-33-47
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--================ End Brand Area =================-->


    <!--================ Start Features Area =================-->
    <section class="features_area" id="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2>Mes Services</h2>
                        <p>
                            Offrir des services de qualité, adaptés à vos besoins, avec un esprit
                            d'innovation et d'expertise. <br />
                            Je crée des solutions efficaces et performantes pour votre projet.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row feature_inner">
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('assets/img/services/s1.png') }}" alt="" />
                        <h4>Développement Web</h4>
                        <p>
                            Création et optimisation de sites web performants et sécurisés.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('assets/img/services/s3.png') }}" alt="" />
                        <h4>Développement Mobile</h4>
                        <p>
                            Création des Applications modernes performants et sécurisés.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('assets/img/services/s2.png') }}" alt="" />
                        <h4>Design UI/UX</h4>
                        <p>
                            Expérience utilisateur optimisée et interface intuitive pour vos projets.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="feature_item">
                        <img src="{{ asset('assets/img/services/s3.png') }}" alt="" />
                        <h4> le Graphisme</h4>
                        <p>
                            Création de logos, affiches attractives et bien plus pour donner vie à vos idées.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--================ End Features Area =================-->

    <!--================Start Portfolio Area =================-->
    <section class="portfolio_area" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title text-left">
                        <h2>
                            Travail de qualité <br />
                            Projets récemment réalisés
                        </h2>
                    </div>
                </div>
            </div>
            <div class="filters portfolio-filter">
                <ul>
                    <li class="active" data-filter="*">Tous</li>
                    <li data-filter=".popular">Populaires</li>
                    <li data-filter=".latest">Derniers</li>
                    <li data-filter=".following">Suivis</li>
                    <li data-filter=".upcoming">À venir</li>
                </ul>
            </div>

            <div class="filters-content">
                <div class="row portfolio-grid justify-content-center">
                    <div class="col-lg-4 col-md-6 all latest">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/payticket.png') }}"
                                    alt="" />
                                <div class="overlay"></div>
                                <a href="{{ asset('assets/img/portfolio/payticket.png') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="https://devpayticket.payticketdigital.com/" target="_blank">PayTicket</a></h4>
                                <p>Payticket, l'application ultime pour l'achat de tickets, le vote payant, le transfert d'argent et bien plus encore</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all popular">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/envol_magazine.png') }}"
                                    alt="" />
                                <div class="overlay"></div>
                                <a href="{{ asset('assets/img/portfolio/envol_magazine.png') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="https://market.envolafrica.org/" target="_blank">EnvolAfrica</a></h4>
                                <p>EnvolAfrica est une plateforme innovante dédiée à la promotion et au développement des opportunités en Afrique</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all latest">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/votémoi.png') }}" alt="" />
                                <div class="overlay"></div>
                                <a href="{{ asset('assets/img/portfolio/votémoi.png') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="http://votingsystem.mygamesonline.org/LightVotingSystem/index.php" target="_blank">VotéMoi</a></h4>
                                <p>Votémoi est une plateforme de vote en ligne innovante, conçue pour offrir une expérience simple, sécurisée et transparente pour tous types d’élections et de sondages.</p>
                            </div>
                        </div>
                    </div>
<!--================End Portfolio Area =================
                    <div class="col-lg-4 col-md-6 all following">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/espo_hotel.jpeg') }}"
                                   height="20px" alt="" />
                                <div class="overlay"></div>
                                <a href="{{ asset('assets/img/portfolio/clinic_helene.jpeg') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">Ensemble signe</a></h4>
                                <p>Animé, portfolio</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 all upcoming">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/clinic_helene.jpeg') }}" height="20px" alt="" />
                                <div class="overlay"></div>
                                <a href="{{ asset('assets/img/portfolio/espo_hotel.jpeg') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="portfolio-details.html">Foulée multipliée</a></h4>
                                <p>Animé, portfolio</p>
                            </div>
                        </div>
                    </div>

                    -->
                    <div class="col-lg-4 col-md-6 all popular">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/votemoi_2.png') }}"
                                    alt="" />
                                <div class="overlay"></div>
                                <a href="{{ asset('assets/img/portfolio/votemoi_2.png') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="http://votingsystem.mygamesonline.org/LightVotingSystem/admin/index.php" target="_blank">LightVotingSystem</a></h4>
                                <p>LightVotingSystem est une plateforme d'administration conçue pour gérer et superviser des processus de vote de manière efficace et intuitive.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 all popular">
                        <div class="portfolio_box">
                            <div class="single_portfolio">
                                <img class="img-fluid w-100" src="{{ asset('assets/img/portfolio/globalGPlus.png') }}"
                                    alt="" />
                                <div class="overlay"></div>
                                <a href="{{ asset('assets/img/portfolio/globalGPlus.png') }}" class="img-gal">
                                    <div class="icon">
                                        <span class="lnr lnr-cross"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="short_info">
                                <h4><a href="https://globalgplus-production.up.railway.app/" target="_blank">LightVotingSystem</a></h4>
                                <p>Global G+ est une entreprise sociale togolaise qui œuvre dans le bien-être, la formation et l’amélioration de la qualité de la vie des populations.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--================End Portfolio Area =================-->

    <!--================ Start Testimonial Area =================-->
    <div class="testimonial_area section_gap_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <h2>Ce que les clients disent de mon travail</h2>
                        <p>
                            Grâce à mes compétences en développement, j'ai pu créer des solutions innovantes et efficaces
                            qui répondent aux besoins de mes clients.
                        </p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="testi_slider owl-carousel">

                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset('assets/img/testimonials/h3.jpg') }}" width="150" height="150" alt="icon"
                                    style="border-radius: 8px;" />
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Alassane Kouadio</h4>
                                    <p>
                                        Grâce à son expertise et à son professionnalisme, le projet a été un véritable
                                        succès. Il a su répondre à nos attentes avec une efficacité.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset('assets/img/testimonials/f1.jpg') }}" width="150" height="150" alt="icon"
                                    style="border-radius: 8px;" />
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Hélène Dossou</h4>
                                    <p>
                                        Un développeur talentueux et très professionnel. Il a su comprendre nos besoins dès
                                        le départ et a livré un travail de qualité.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="testi_item">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset('assets/img/testimonials/h12.jpg') }}" width="150" height="150"
                                    alt="icon" style="border-radius: 8px;" />
                            </div>
                            <div class="col-lg-8">
                                <div class="testi_text">
                                    <h4>Adjoa Koffi</h4>
                                    <p>
                                        Travailler avec lui a été une expérience incroyablement fluide. Il a toujours été
                                        disponible pour répondre à toutes nos questions et a respecté tous les délais.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--================ End Testimonial Area =================-->

    <!--================ Start Newsletter Area =================-->
    <section class="banner_area" id="contact">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Confiez-moi la création de votre site web !</h2>
                    <p class="text-white">Je suis là pour donner vie à vos idées et booster votre présence en ligne.</p>
                    <div class="page_link">
                        <a href="tel:+22890803347">Appelez-moi au +228 90-80-33-47</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--================ End Newsletter Area =================-->

@endsection
