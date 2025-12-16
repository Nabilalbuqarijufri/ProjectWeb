<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Navbar --}}
    <nav class="flex items-center bg-black text-white p-4 justify-between">
        <a href="/" class="text-2xl font-bold">BubbleBrush</a>
        <div class="flex gap-4">
            <a href="/" class="">Home</a>
            <a href="#about" class="">About</a>
            <a href="#layanan" class="">Layanan</a>
            <a href="#contact" class="">Contact</a>
            <a href="/login" class="">Sign In</a>
            <a href="/register" class="">Sign Up</a>
        </div>
    </nav>
    
    {{-- Header --}}
    <header class="text-center">
        <h1 class="text-3xl">Welcome to BubbleBrush!</h1>
        <p class="text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, modi!</p>
    </header>
    
    {{-- About Section --}}
    <section id="about" class="text-center">
        <h1 class="text-3xl">About Us</h1>
        <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, veritatis?</p>
    </section>
    
    {{-- Layanan Section --}}
    <section id="layanan" class="text-center">
        <h1 class="text-3xl">Layanan</h1>
        <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, molestias.</p>
    </section>
    
    {{-- Contact Form --}}
    <section id="contact" class="text-center">
        <h1 class="text-3xl">Contact</h1>
        <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, nam?</p>
    </section>
    
    {{-- Footer --}}
    <footer class="text-center my-48">
        <p>&copy; Copyright <strong>BubbleBrush</strong>. All Rights Reserved</p>
    </footer>
</x-layout>