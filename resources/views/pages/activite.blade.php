@extends('layouts.app')
@section('content')

    <main class="activite">
        <section class="hero">
            {{-- {{$activite}} --}}
            <div class="hero-content p-2">
                <h2 class="text-[40px] font-extrabold uppercase">Nos activiteés</h2>
            </div>
            </section>

            <section class="section-presentation">
                <div class="container">
                    <h1 class="text-primary2 md:text-[2.5rem] text-[18px] mb-2 text-center font-bold">Ce que nous faisons</h1>
                    <p class="md:text-[16px] text-[13px] text-zinc-600 text-center	lowercase">
                        Le GROUPE M’VOLAIS SARL est spécialisé dans la distribution de:
                        Le GROUPE M’VOLAIS SARL est spécialisé dans la distribution de matériels de grandes marques tel que :
                        PARKER pour les:
                        FLEXIBLES (Miniers, Pétroliers, Hydraulique); TUYAUX; EMBOUTS; RACCORDS; FILTRES ENGINS.
                        STRACAU pour les:
                        ROBINETERIE POUR INDUSTRIE; MESURES CONTROLE DE NIVEAU; GENIE CLIMATIQUE; ELECTROVANNE MOTORISATION REGULATION; BRIDES RACCORDS; ADDUCTION D’EAU. MAXDRILL et KEMAICO pour les éléments de forages. PRODUITS DE DERIVATION ET TUNNELS PRODUITS DE PERCAGE DE BANC ET DE TROU LONGS.
                    </p>
                    {{-- <div class="row">
                        <div class="col">
                        <div class="desc w-full p-2">
                            <h2 class="text-primary text-[2rem] text-center font-bold">Notre mission</h2>
                            <p class="text-[18px] text-zinc-500 text-center	">
                            Le GROUPE M'VOLAIS SARL met à votre service son expertise afin de vous aider à régler les problèmes relatifs au bon fonctionnement de votre entreprise. Car pendant longtemps vous avez souffert des prix très élevés et des délais de livraison très long, des temps d’arrêt très long de vos engins de travail.
                        </p>
                        </div>
                        </div>
                        <div class="col">
                            <div class="content-image">
                                <img src="{{ asset('assets/images/afri4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col">
                            <div class="content-image">
                                <img src="{{asset('assets/images/afri4.jpg')  }}" alt="">
                            </div>
                        </div>
                        <div class="col">
                        <div class="desc w-full p-2">
                            <h2 class="text-primary text-[2rem] text-center font-bold">Notre vision</h2>
                            <p class="text-[18px] text-zinc-500	text-zinc-500 text-center">
                            Votre satisfaction est notre préoccupation au quotidien
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <div class="desc w-full p-2">
                            <h2 class="text-primary text-[2rem] text-center font-bold">Pourquoi nous choisir</h2>
                            <p class="text-[18px] text-zinc-500 text-center	">
                            En plus de la distribution de ces pièces, LE GROUPE M’VOLAIS Fait la confection de vos flexibles sur votre site de travail, toute chose qui vous permet de gagner du temps et faire des économies au plan financier
                        </p>
                        </div>
                        </div>
                        <div class="col">
                            <div class="content-image">
                                <img src="{{ asset('assets/images/afri4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div> --}}
                </div>
            </section>


            <section class="section-service ">
            <div class="container">
                {{-- <h1 class="text-primary text-[2.5rem] text-center font-bold">PRESENTATION DE NOS ACTIVITES </h1>
                <h5 class="text-center text-[18px] w-[90%] mx-auto text-zinc-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id praesentium doloribus, voluptatem amet pariatur corporis eius consequatur qui, repellat, eveniet ullam necessitatibus doloremque! Ad dolor, cupiditate asperiores totam placeat reprehenderit? Dignissimos accusantium similique nulla quasi necessitatibus nesciunt? Minus non, dicta, iure corporis cupiditate sequi debitis facilis esse sunt eligendi qui.
                </h5> --}}
                <div class="rows mb-3 " data-aos="zoom-in">
                    @foreach ($activite as $data)
                    <div class="col" >
                        <div class="card shadow-xl ">
                            <h5 class="text-first font-semibold text-[20px] text-primary2 capitalize my-3">{{$data->name}}</h5>
                            <div class="content-image m-auto">
                            <img class="w-full" src="{{ asset($data->img) }}" alt="">
                            </div>
                            <p class="text-[15px] text-zinc-600 ">
                                {{$data->description}}
                            </p>
                            <a href="{{ route('activite.service', ['id'=>$data->id]) }}" class="border-1 gap-2 flex justify-between border-primary2 text-primary2  max-w-max p-[12px] mt-3 rounded-md">
                                Voir les services
                               <i class="uil uil-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
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
