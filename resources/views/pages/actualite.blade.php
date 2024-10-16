@extends('layouts.app')
@section('content')

    <main class="actualite">
        <section class="hero">
            <div class="hero-content">
                <h2 class="text-[40px] font-extrabold">Actualités</h2>
            </div>
            </section>

            {{-- <section class="section-presentation">
                <div class="container">
                    <h1 class="text-primary text-[2.5rem] text-center font-bold">Ce que nous faisons</h1>
                    <p class="text-[15px] text-zinc-600 text-center	lowercase">
                        Le GROUPE M’VOLAIS SARL est spécialisé dans la distribution de:
                        Le GROUPE M’VOLAIS SARL est spécialisé dans la distribution de matériels de grandes marques tel que :
                        PARKER pour les:
                        FLEXIBLES (Miniers, Pétroliers, Hydraulique); TUYAUX; EMBOUTS; RACCORDS; FILTRES ENGINS.
                        STRACAU pour les:
                        ROBINETERIE POUR INDUSTRIE; MESURES CONTROLE DE NIVEAU; GENIE CLIMATIQUE; ELECTROVANNE MOTORISATION REGULATION; BRIDES RACCORDS; ADDUCTION D’EAU. MAXDRILL et KEMAICO pour les éléments de forages. PRODUITS DE DERIVATION ET TUNNELS PRODUITS DE PERCAGE DE BANC ET DE TROU LONGS.
                    </p>

                </div>
            </section> --}}


            <section class="section-service ">
            <div class="container">
                {{-- <h1 class="text-primary text-[2.5rem] text-center font-bold">PRESENTATION DE NOS ACTIVITES </h1>
                <h5 class="text-center text-[18px] w-[90%] mx-auto text-zinc-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id praesentium doloribus, voluptatem amet pariatur corporis eius consequatur qui, repellat, eveniet ullam necessitatibus doloremque! Ad dolor, cupiditate asperiores totam placeat reprehenderit? Dignissimos accusantium similique nulla quasi necessitatibus nesciunt? Minus non, dicta, iure corporis cupiditate sequi debitis facilis esse sunt eligendi qui.
                </h5> --}}
                <div class="rows mb-3 ">

                    <div class="cols  " data-aos="zoom-in" data-aos-offset="50" >
                        <div class="card shadow-xl ">
                            <div class="content-image mx-auto">
                            <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                            </div>
                            <div class="body">
                                <p class="text-[15px] text-zinc-600 ">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur et eaque alias possimus ratione quis?
                                </p>
                            <h5 class="text-first font-semibold text-[20px] text-primary capitalize my-3">Lorem, ipsum.</h5>
                                <p>Feb 1, 2022</p>
                            </div>
                        </div>
                    </div>
                     <div class="cols  " data-aos="zoom-in" data-aos-offset="50">
                        <div class="card shadow-xl ">
                            <div class="content-image mx-auto">
                            <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                            </div>
                            <div class="body">
                                <p class="text-[15px] text-zinc-600 ">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur et eaque alias possimus ratione quis?
                                </p>
                            <h5 class="text-first font-semibold text-[20px] text-primary capitalize my-3">Lorem, ipsum.</h5>
                                <p>Feb 1, 2022</p>
                            </div>
                        </div>
                    </div>
                     <div class="cols  " data-aos="zoom-in" data-aos-offset="50">
                        <div class="card shadow-xl ">
                            <div class="content-image mx-auto">
                            <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                            </div>
                            <div class="body">
                                <p class="text-[15px] text-zinc-600 ">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur et eaque alias possimus ratione quis?
                                </p>
                            <h5 class="text-first font-semibold text-[20px] text-primary capitalize my-3">Lorem, ipsum.</h5>
                                <p>Feb 1, 2022</p>
                            </div>
                        </div>
                    </div>
                     <div class="cols  " data-aos="zoom-in" data-aos-offset="50">
                        <div class="card shadow-xl ">
                            <div class="content-image mx-auto">
                            <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                            </div>
                            <div class="body">
                                <p class="text-[15px] text-zinc-600 ">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur et eaque alias possimus ratione quis?
                                </p>
                            <h5 class="text-first font-semibold text-[20px] text-primary capitalize my-3">Lorem, ipsum.</h5>
                                <p>Feb 1, 2022</p>
                            </div>
                        </div>
                    </div>
                     <div class="cols  " data-aos="zoom-in" data-aos-offset="50">
                        <div class="card shadow-xl ">
                            <div class="content-image mx-auto">
                            <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                            </div>
                            <div class="body">
                                <p class="text-[15px] text-zinc-600 ">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur et eaque alias possimus ratione quis?
                                </p>
                            <h5 class="text-first font-semibold text-[20px] text-primary capitalize my-3">Lorem, ipsum.</h5>
                                <p>Feb 1, 2022</p>
                            </div>
                        </div>
                    </div>
                     <div class="cols  " data-aos="zoom-in" data-aos-offset="50">
                        <div class="card shadow-xl ">
                            <div class="content-image mx-auto">
                            <img class="" src="{{ asset('assets/images/hero.jpg') }}" alt="">
                            </div>
                            <div class="body">
                                <p class="text-[15px] text-zinc-600 ">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur et eaque alias possimus ratione quis?
                                </p>
                            <h5 class="text-first font-semibold text-[20px] text-primary capitalize my-3">Lorem, ipsum.</h5>
                                <p>Feb 1, 2022</p>
                            </div>
                        </div>
                    </div>


                </div>


            </div>


            </section>

        {{-- <section class="section-presentation">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="content-image">
                        <img src="{{ asset('assets/images/businessman-307732_1280.webp') }}" alt="">
                    </div>
                </div>
                <div class="col">
                <div class="desc w-full p-2">
                    <h2 class="text-zinc-500 text-[2rem]  font-bold">DIRECTEUR GÉNÉRAL</h2>
                    <h2 class="text-primary text-[2rem]  font-bold capitalize">
                       Lorem, ipsum dolor.
                    </h2>
                    <p class="text-[18px] text-zinc-500	">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi
                    </p>
                </div>
                </div>
            </div>
        </div>
        </section> --}}

            {{-- <section class="section-bande bg-[#2c2c2c]">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="ico mx-auto leading-[60px] w-[60px] h-[60px] rounded-[50%] text-center line-[60px] bg-[#fff] text-[30px]">
                                <i class="uil uil-user text-primary"></i></div>
                                <h3 class="text-[18px] text-primary font-[700]">Satisfaction du client</h3>
                                <p  class="text-[15px] text-[#fff]">Trouver ce dont vous avez besoins pour toutes vos activités</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="ico mx-auto leading-[60px] w-[60px] h-[60px] rounded-[50%] text-center line-[60px] bg-[#fff] text-[30px]">
                                <i class="uil uil-user text-primary"></i></div>
                                <h3 class="text-[18px] text-primary font-[700]">Satisfaction du client</h3>
                                <p  class="text-[15px] text-[#fff]">Trouver ce dont vous avez besoins pour toutes vos activités</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="ico mx-auto leading-[60px] w-[60px] h-[60px] rounded-[50%] text-center line-[60px] bg-[#fff] text-[30px]">
                                    <i class="uil uil-headphones-alt"></i>
                                </div>
                                <h3 class="text-[18px] text-primary font-[700]">Satisfaction du client</h3>
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
                                <h2 class="text-primary text-[2rem] text-center font-bold">Confexion de flexible(Miniers, Pétroliers, Hydraulique)</h2>
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
