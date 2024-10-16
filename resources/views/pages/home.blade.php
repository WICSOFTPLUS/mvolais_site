@extends('layouts.app')
@section('content')
<main class="home">
    <section class="hero">
        <div class="hero-content">
            <h1 data-aos="zoom-in">Bienvenue chez Groupe M'Volais</h1>
            <p data-aos-duration="800" data-aos="zoom-in">Nous offrons des solutions sur mesure pour votre entreprise</p>
            {{-- <a href="#services" class="btn-hero">Découvrir nos services</a> --}}
        </div>
        </section>

        <section class="section-presentation" >
        <div class="container">
            <h1 class="text-primary text-[2.5rem] text-center font-bold">Présentation</h1>
            <div class="row"
            data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-delay="0"
            data-aos-offset="0"
            data-aos-duration="300"
            >
                <div class="col">
                <div class="desc w-full p-2">
                    <h2 class="text-primary text-[2rem] text-center font-bold">Générale</h2>
                    <p class="text-[15px] text-zinc-600 ">Le GROUPE M'VOLAIS SARL est une société commerciale ivoirienne spécialisée dans la fourniture de pièce detaché ou distriution.
                    Depuis 2008 jusqu'au aujourd'hui nous touchons tous les sectuers d'activités et faisons la satisfaction de nos clients une priorité absolue! Ce qui nous a value plusieurs partenariats avec de grandes industries ivoirienne...</p>
                </div>
                </div>
                <div class="col">
                    <div class="content-image">
                        <img src="{{ asset('assets/images/hero.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row"  data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-delay="100"
            data-aos-offset="0">
                <div class="col">
                    <div class="content-image">
                        <img src="{{ asset('assets/images/hero.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col">
                <div class="desc w-full p-2">
                    <h2 class="text-primary text-[2rem] text-center font-bold">Nos philosophie</h2>
                    <p class="text-[15px] text-zinc-600 ">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi beatae ab consequuntur ad cum aperiam distinctio eum? Soluta voluptate ut illum voluptatum. Quisquam velit asperiores reiciendis consectetur accusamus, eveniet nulla cumque nihil omnis. Blanditiis, ea. Quibusdam, sunt et. Harum, aperiam.
                    </p>
                </div>
                </div>
            </div>
        </div>
        </section>


        <section class="section-service ">
        <div class="container">
            <h1 class="text-primary text-[2.5rem] text-center font-bold">Nos Services </h1>
            <h5 class="text-center text-[16px] w-[50%] mx-auto text-zinc-600">Le GROUPE M'VOLAIS SARL met à votre service son expertise afin de vous aider à régler les problèmes relatifs au bon fonctionnement de votre entreprise.</h5>
            <div class="rows mb-3 ">
                    <div class="cols  " data-aos="zoom-in">
                    <div class="card bg-[#fff] shadow-lg borderr p-4 text-center ">
                        <div class="content-image m-auto">
                        <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                        </div>
                            <div class="bas">
                                <h5 class="text-first font-semibold text-[20px] text-primary capitalize my-3">Pièce détachées</h5>
                                <p class="text-[15px] text-zinc-600 "> Pièce de chariots élévateur, machine de mine, carrière, Roulement, courroie...
                                </p>
                            </div>
                    </div>
                    </div>
                    <div class="cols " data-aos="zoom-in">
                    <div class="card shadow-lg borderr bg-[#fff] p-4 text-center ">
                        <div class="content-image m-auto">
                        <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                        </div>
                        <div class="bas">
                             <h5 class="text-first font-semibold text-[20px] text-primary capitalize my-3">Equipement de Protection Individuelle</h5>
                        <p class="text-[15px] text-zinc-600 ">Protection des pieds, des mains, du crane, du corps, antichute, respiratoire, auditive, visuelle...
                            </p>
                        </div>
                    </div>
                    </div>
                    <div class="cols  " data-aos="zoom-in">
                    <div class="card shadow-lg bg-[#fff] borderr p-4 text-center ">
                        <div class="content-image m-auto">
                        <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                        </div>
                        <div class="bas">
                            <h5 class="text-first font-semibold text-[20px] text-primary capitalize my-3">Informatique</h5>
                        <p class="text-[15px] text-zinc-600 "> Ordinateurs, Unité centrale, disque dures, moniteur, imprimante, scaneurs souris, casques, usb, divers pièces...
                            </p>
                        </div>
                    </div>
                    </div>
                    <div class="cols " data-aos="zoom-in">
                    <div class="card shadow-lg borderr bg-[#fff] p-4 text-center ">
                        <div class="content-image mx-auto">
                        <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                        </div>
                        <div class="bas mt-5">
                            <h5 class="text-first font-semibold text-[20px] text-primary capitalize my-3">Maintenance</h5>
                        <p class="text-[15px] text-zinc-600 "> Depanage des chariots élévateur, Depanage des engin de TP, Intervention industriels
                            </p>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
        </section>


        <section class="section-bande bg-blueGray-950">
            <div class="container">
                <div class="rows">
                    <div class="cols">
                        <div class="cards">
                            <div class="ico mx-auto leading-[60px] w-[60px] h-[60px] rounded-[50%] text-center line-[60px] bg-[#fff] text-[30px]">
                            <i class="uil uil-user text-primary"></i></div>
                            <h3 class="text-[18px] text-primary font-[700]">Satisfaction du client</h3>
                            <p  class="text-[15px] text-[#fff]">Trouver ce dont vous avez besoins pour toutes vos activités</p>
                        </div>
                    </div>
                    <div class="cols">
                        <div class="cards">
                            <div class="ico mx-auto leading-[60px] w-[60px] h-[60px] rounded-[50%] text-center line-[60px] bg-[#fff] text-[30px]">
                            <i class="uil uil-user text-primary"></i></div>
                            <h3 class="text-[18px] text-primary font-[700]">Pourquoi Nous ?</h3>
                            <p  class="text-[15px] text-[#fff]">
                                Avec Le GROUPE M'VOLAIS SARL Fini les prix très élevés et les délais de livraison très long; Fini les temps d’arrêt très long de vos engins de travail
                            </p>
                        </div>
                    </div>
                    <div class="cols">
                        <div class="cards">
                            <div class="ico mx-auto leading-[60px] w-[60px] h-[60px] rounded-[50%] text-center line-[60px] bg-[#fff] text-[30px]">
                                <i class="uil uil-headphones-alt text-primary"></i>
                            </div>
                            <h3 class="text-[18px] text-primary font-[700]">24/7 Support</h3>
                            <p  class="text-[15px] text-[#fff]">
                                Contactez au 27 23 50 33 72 pour d'ample information ou pour passer vos commandes
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-row">
            <div class="container no-padding">
                <div class="row">
                    <div class="col"
                    data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-delay="100"
            data-aos-offset="0"
            data-aos-duration="300"
                    >
                        <div class="desc  p-2 text-center">
                            <h2 class="text-primary text-[2rem] text-center font-bold">Confexion de flexible(Miniers, Pétroliers, Hydraulique)</h2>
                            <p class="text-[16px] text-zinc-600 mt-2	">
                                la confection de vos flexibles sur votre site de travail, toute chose qui vous permet de gagner du temps et faire des économies au plan financier. A votre demande notre entreprise peut s’installer sur votre site de travail avec son matériel de confection de flexibles et mettre en place un stock selon vos besoins.
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="content-image">
                            <img src="{{ asset('assets/images/hero.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>
@endsection
