<nav class="navbar sticky top-0 z-10 border-t-[6px] border-primary bg-blueGray-950 flex items-center justify-between py-2 px-10">
<div class="logo w-[80px]">
    <img class="w-full object-contain" src="{{ asset('/assets/images/logo.png') }}" alt="">
</div>

<div class="items flex items-center justify-between  gap-3">
    <a href="{{ route('home') }}" class="item hover:text-primary transition text-[14px] font-normal capitalize text-[#fff]">acceuil</a>
    <a href="{{ route('about') }}" class="item hover:text-primary transition text-[14px] font-normal capitalize text-[#fff]">à propos</a>
    <a href="{{ route('services') }}" class="item hover:text-primary transition text-[14px] font-normal capitalize text-[#fff]">Services</a>
    <a href="{{ route('produit') }}" class="item hover:text-primary transition text-[14px] font-normal capitalize text-[#fff]">Prestations</a>
    <a href="{{ route('actualite') }}" class="item hover:text-primary transition text-[14px] font-normal capitalize text-[#fff]">Actualités</a>
    <a href="{{ route('contact') }}" class="item hover:text-primary transition text-[14px] font-normal capitalize text-[#fff]">Contact</a>
</div>

</nav>
