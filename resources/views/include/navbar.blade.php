<nav class="navbar sticky top-0 z-10 border-t-[6px] border-primary2 bg-white flex items-center justify-between py-2 md:px-10">
<div class="logo w-[120px]">
    <img class="w-full object-contain" src="{{ asset('/assets/images/logo2.jpeg') }}" alt="">
</div>
<div class="hamburger text-[25px] cursor-pointer md:hidden" id="toggle">
    <i class="uil uil-bars"></i>
</div>
<div class="items menu flex md:items-center justify-between  gap-3 " id="menu">
    <a href="{{ route('home') }}" class="item hover:text-primary transition text-[16px] font-[400] capitalize text-zinc-900">acceuil</a>
    <a href="{{ route('about') }}" class="item hover:text-primary transition text-[16px] font-[400] capitalize text-zinc-900">à propos</a>
    <a href="{{ route('activite') }}" class="item hover:text-primary transition text-[16px] font-[400] capitalize text-zinc-900">Activités</a>
    {{-- <a href="{{ route('produit') }}" class="item hover:text-primary transition text-[16px] font-[400] capitalize text-zinc-900">Prestations</a> --}}
    {{-- <a href="{{ route('actualite') }}" class="item hover:text-primary transition text-[16px] font-[400] capitalize text-zinc-900">Actualités</a> --}}
    <a href="{{ route('contact') }}" class="item hover:text-primary transition text-[16px] font-[400] capitalize text-zinc-900">Contact</a>
</div>

</nav>
