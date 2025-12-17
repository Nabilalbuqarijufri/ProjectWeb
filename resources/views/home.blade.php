<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Navbar --}}
    <nav class="flex items-center bg-black text-white p-4 justify-between sticky top-0 z-50">
        <a href="/" class="text-2xl font-bold">BubbleBrush</a>
        <div class="flex gap-4">
            <a href="/" class="nav-link">Home</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#layanan" class="nav-link">Layanan</a>
            <a href="#contact" class="nav-link">Contact</a>
            @auth
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="nav-link cursor-pointer">Logout</button>
                </form>
            @else
                <a href="/login" class="nav-link">Sign In</a>
                <a href="/register" class="nav-link">Sign Up</a>
            @endauth
        </div>
    </nav>
    
    {{-- Header --}}
    <header class="text-center my-48">
        @auth
            <h1 class="text-3xl">Welcome, {{ auth()->user()->name }}!</h1>
        @else
            <h1 class="text-3xl">Welcome to BubbleBrush!</h1>
        @endauth
        <p class="text-base">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, modi!</p>
    </header>
    
    {{-- About Section --}}
    <section id="about" class="text-center my-48">
        <h1 class="text-3xl">About Us</h1>
        <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, veritatis?</p>
    </section>
    
    {{-- Layanan Section --}}
    <section id="layanan" class="text-center my-48">
        <h1 class="text-3xl">Layanan</h1>
        <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, molestias.</p>
    </section>
    
    {{-- Contact Section --}}
    <section id="contact" class="text-center my-48">
        <h1 class="text-3xl">Contact Us</h1>
        <p class="text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, nam?</p>
    </section>
    
    {{-- Footer --}}
    <footer class="text-center my-48">
        <p>&copy; Copyright <strong>BubbleBrush</strong>. All Rights Reserved</p>
    </footer>
</x-layout>