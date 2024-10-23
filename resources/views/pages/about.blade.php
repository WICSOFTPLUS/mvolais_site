@extends('layouts.app')
@section('content')

    <main class="about">
        <section class="hero">
            <div class="hero-content p-2">
                <h2 class="md:text-[40px] text-[20px] font-extrabold uppercase" data-aos="zoom-in">A propos du GROUPE M'VOLAIS</h2>
            </div>
            </section>

            <section class="section-presentation ">
                <div class="container">
                    <h1 class="text-primary2 md:text-[2.5rem] text-[1.5rem] text-center font-bold">Présentation</h1>
                    <p class="md:text-[16px] text-[13px] text-zinc-500 text-center	">Le GROUPE M'VOLAIS SARL est une société commerciale ivoirienne spécialisée dans la fourniture de pièce detaché ou distriution
                    La société a existé sous la forme juridique d'entreprise individuelle depuis janvier 2008 avant de muter en société à responsabilité limitée (SARL) en août 2011. C’est une société de droit ivoirien, fondée par des jeunes ivoiriens avec de longues années d'expériences acquises dans une multinationale de la place.</p>
                    <div class="row">
                        <div class="col" data-aos="fade-right">
                        <div class="desc w-full p-2">
                            <h2 class="text-primary2 md:text-[2rem] text-[1.5rem] text-center font-bold">Notre mission</h2>
                            <p class="md:text-[16px] text-[13px]  text-zinc-500 text-center	">
                            Le GROUPE M'VOLAIS SARL met à votre service son expertise afin de vous aider à régler les problèmes relatifs au bon fonctionnement de votre entreprise. Car pendant longtemps vous avez souffert des prix très élevés et des délais de livraison très long, des temps d’arrêt très long de vos engins de travail.
                        </p>
                        </div>
                        </div>
                        <div class="col" data-aos="fade-left">
                            <div class="content-image">
                                <img src="{{ asset('assets/images/afri4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row sm">
                        <div class="col" data-aos="fade-right">
                            <div class="content-image">
                                <img src="{{asset('assets/images/el.jpg')  }}" alt="">
                            </div>
                        </div>
                        <div class="col" data-aos="fade-left">
                        <div class="desc w-full p-2">
                            <h2 class="text-primary2 md:text-[2rem] text-[1.5rem] text-center font-bold">Notre vision</h2>
                            <p class="md:text-[16px] text-[13px]  text-zinc-500 text-center">
                            Votre satisfaction est notre préoccupation au quotidien
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" data-aos="fade-right">
                        <div class="desc w-full p-2">
                            <h2 class="text-primary2 md:text-[2rem] text-[1.5rem] text-center font-bold">Pourquoi nous choisir</h2>
                            <p class="md:text-[16px] text-[13px]  text-zinc-500 text-center	">
                            En plus de la distribution de ces pièces, LE GROUPE M’VOLAIS Fait la confection de vos flexibles sur votre site de travail, toute chose qui vous permet de gagner du temps et faire des économies au plan financier
                        </p>
                        </div>
                        </div>
                        <div class="col" data-aos="fade-left">
                            <div class="content-image">
                                <img src="{{ asset('assets/images/afri4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        <section class="section-service " data-aos="fade-zoom-in"
            data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-delay="80"
            data-aos-offset="0"
            >
            <div class="container">
                <h1 class="text-primary2 md:text-[2.5rem] text-[1.5rem] text-center font-bold">PRESENTATION DE NOS ACTIVITES </h1>
                <h5 class="text-center md:text-[16px] text-[13px] w-[90%] mx-auto text-zinc-500">
                   Découvrez l'ensemble de nos services et solutions conçus pour répondre aux besoins spécifiques de votre entreprise, alliant expertise et innovation pour vous accompagner vers le succès.
                </h5>
                <div class="content-image md:w-[80%] mx-auto mt-2 h-[500px] relative">
                    <div class="absolute p-9 bg-blueGray-950 bottom-10 left-[-5%]">
                        <h1 class="text-white text-[30px] font-extrabold">GROUPE M'VOLAIS</h1>
                        <h1 class="text-white text-[30px] font-extrabold">société commerciale ivoirienne</h1>
                    </div>
                    <img class="w-full h-full object-cover" src="{{ asset('assets/images/istockphoto-1329936196-170667a.jpg') }}" alt="">
                </div>

                {{-- <div class="row mb-3 ">
                    <div class="col  " data-aos="zoom-in">
                    <div class="card bg-[#fff] shadow-md borderr p-4 text-center rounded-5">
                        <div class="content-image m-auto">
                        <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                        </div>
                        <h5 class="text-first font-semibold text-[20px] text-primary2 capitalize my-3">Pièce détachées</h5>
                        <p class="text-[16px]"> Pièce de chariots élévateur, machine de mine, carrière, Roulement, courroie...
                            </p>
                    </div>
                    </div>
                    <div class="col " data-aos="zoom-in">
                    <div class="card shadow-md borderr bg-[#fff] p-4 text-center rounded-5">
                        <div class="content-image m-auto">
                        <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                        </div>
                        <h5 class="text-first font-semibold text-[20px] text-primary2 capitalize my-3">Equipement de Protection Individuelle</h5>
                        <p class="text-[16px]">Protection des pieds, des mains, du crane, du corps, antichute, respiratoire, auditive, visuelle...
                            </p>
                    </div>
                    </div>
                    <div class="col  " data-aos="zoom-in">
                    <div class="card shadow-md bg-[#fff] borderr p-4 text-center rounded-5">
                        <div class="content-image m-auto">
                        <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                        </div>
                        <h5 class="text-first font-semibold text-[20px] text-primary2 capitalize my-3">Informatique</h5>
                        <p class="text-[16px]"> Ordinateurs, Unité centrale, disque dures, moniteur, imprimante, scaneurs souris, casques, usb, divers pièces...
                            </p>
                    </div>
                    </div>
                    <div class="col " data-aos="zoom-in">
                    <div class="card shadow-md borderr bg-[#fff] p-4 text-center rounded-5">
                        <div class="content-image mx-auto">
                        <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                        </div>
                        <div class="bas mt-5">
                            <h5 class="text-first font-semibold text-[20px] text-primary2 capitalize my-3">Maintenance</h5>
                        <p class="text-[16px]"> Depanage des chariots élévateur, Depanage des engin de TP, Intervention industriels
                            </p>
                        </div>
                    </div>
                    </div>
                </div> --}}

            </div>
        </section>

    <section class="section-presentation">
        <div class="container">
            <div class="row"  data-aos="fade-up">
                <div class="col">
                    <div class="content-image">
                        <img src="{{ asset('assets/images/businessman-307732_1280.webp') }}" alt="">
                    </div>
                </div>
                <div class="col">
                <div class="desc w-full p-2">
                    <h2 class="text-zinc-500 text-[2rem]  font-bold">DIRECTEUR GÉNÉRAL</h2>
                    <h2 class="text-primary2 text-[2rem]  font-bold capitalize">
                       Lorem, ipsum dolor.
                    </h2>
                    <p class="text-[18px] text-zinc-500	">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi
                    </p>
                </div>
                </div>
            </div>
        </div>
        </section>

            {{-- <section class="section-bande bg-[#2c2c2c]">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="ico mx-auto leading-[60px] w-[60px] h-[60px] rounded-[50%] text-center line-[60px] bg-[#fff] text-[30px]">
                                <i class="uil uil-user text-primary2"></i></div>
                                <h3 class="text-[18px] text-primary2 font-[700]">Satisfaction du client</h3>
                                <p  class="text-[15px] text-[#fff]">Trouver ce dont vous avez besoins pour toutes vos activités</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="ico mx-auto leading-[60px] w-[60px] h-[60px] rounded-[50%] text-center line-[60px] bg-[#fff] text-[30px]">
                                <i class="uil uil-user text-primary2"></i></div>
                                <h3 class="text-[18px] text-primary2 font-[700]">Satisfaction du client</h3>
                                <p  class="text-[15px] text-[#fff]">Trouver ce dont vous avez besoins pour toutes vos activités</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="ico mx-auto leading-[60px] w-[60px] h-[60px] rounded-[50%] text-center line-[60px] bg-[#fff] text-[30px]">
                                    <i class="uil uil-headphones-alt"></i>
                                </div>
                                <h3 class="text-[18px] text-primary2 font-[700]">Satisfaction du client</h3>
                                <p  class="text-[15px] text-[#fff]">Trouver ce dont vous avez besoins pour toutes vos activités</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-row">
                <div class="container no-padding">
                    <div class="row">
                        <div class="col">
                            <div class="desc  p-2 text-center">
                                <h2 class="text-primary2 text-[2rem] text-center font-bold">Confexion de flexible(Miniers, Pétroliers, Hydraulique)</h2>
                                <p class="text-[18px] text-zinc-900	">
                                    la confection de vos flexibles sur votre site de travail, toute chose qui vous permet de gagner du temps et faire des économies au plan financier.
            A votre demande notre entreprise peut s’installer sur votre site de travail avec son matériel de confection de flexibles et mettre en place un stock selon vos besoins.
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
            </section> --}}
    </main>

@endsection
