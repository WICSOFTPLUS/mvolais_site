@extends('layouts.app')
@section('content')

    <main class="contact">
        <section class="hero">
            <div class="hero-content p-2">
                <h2 class="text-[40px] font-extrabold uppercase">Contactez nous</h2>
            </div>
        </section>


        <section id="contact">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-md-4 p-7">
                        <div class="w-full mb-4">
                            <h4 class="text-second fw-bold text-zinc-700 mb-1 text-[16px]">ADRESSE</h4>
                            <h6 class="fw-medium  text-zinc-500">
                                Carrefour Anador à 100 m de la Pharmacie Anador - Maroc, Yopougon - 21 BP 4260 Abidjan 21, Abidjan - Côte d’Ivoire
                            </h6>
                        </div>
                        <div class="w-full mb-4">
                            <h4 class="text-second fw-bold text-zinc-700 mb-1 text-[16px]">TÉLÉPHONES</h4>
                            <h6 class="fw-medium text-zinc-500">27 23 50 33 72</h6>
                            <h6 class="fw-medium text-zinc-500">27 23 41 22 35</h6>
                            {{-- <h6 class="fw-medium">+225 00 00 00 00 00</h6> --}}
                        </div>
                        <div class="w-full mb-4 ">
                            <h4 class="text-second  fw-bold text-zinc-700 mb-1 text-[16px]">E- MAIL</h4>
                            <h6 class="fw-medium text-zinc-500">info@groupemvolais.com</h6>
                        </div>

                    </div>
                    <div class="col-md-7 shadow-lg p-4">
                        @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                <form action="{{ route('contact.send') }}" method="post">
                            @csrf
                    <div class="card border-0 bg-transparent">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" class="form-control" id="nom" placeholder="nom">
                                        <label for="floatingInput">Nom</label>
                                    </div>
                                        @error('name')
                                            <div class="text-danger mb-2">*{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="surname" class="form-control" id="prenoms" placeholder="prénoms">
                                        <label for="floatingInput">Prénoms</label>
                                        </div>
                                         @error('surname')
                                                <div class="text-danger mb-2">*{{ $message }}</div>
                                            @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="email">
                                        <label for="floatingInput">E-mail</label>
                                        </div>
                                            @error('email')
                                        <div class="text-danger mb-2">*{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="number" name="phone" class="form-control" id="phone" placeholder="téléphone">
                                        <label for="floatingInput">Téléphone</label>
                                    </div>
                                        @error('phone')
                                            <div class="text-danger mb-2">*{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" name="subject" class="form-control" id="objet" placeholder="téléphone">
                                    <label for="floatingInput">Objet</label>
                                </div>
                                @error('subject')
                                    <div class="text-danger mb-2">*{{ $message }}</div>
                                @enderror

                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control" placeholder="Leave a comment here" id="message"></textarea>
                                    <label for="floatingTextarea">message</label>
                                </div>
                                @error('message')
                                    <div class="text-danger mb-2">*{{ $message }}</div>
                                @enderror

                                {{-- <a class="btn btnsend" id="sendMessage">Envoyer</a>
                                <a class="" id="addloader" style="display: none"><div class="loader"></div></a> --}}
                            </div>
                            <button type="submit" class="md:w-[200px] bg-primary my-3 p-3 rounded-md text-white font-medium">
                                    Envoyer
                            </button>
                        </div>
                       </form>
                    </div>
                </div>
            </div>

        </section>
    </main>

@endsection
