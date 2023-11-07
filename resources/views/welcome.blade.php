<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FEF</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css'])
        <!-- Styles -->

    <body class="antialiased bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#131313] via-zinc-900 to-zinc-950">
        <header class="relative">
            <div class="absolute left-1/2 -translate-x-1/2 flex flex-col gap-1 justify-center items-center top-2">
                <img class="w-52 h-auto" src="{{ asset('images/laligaf.png') }}" alt="La Liga F">
                <h1 class="font-boxing text-6xl text-center text-black">
                    <span class="bg-clip-text text-transparent inline-block leading-relaxed bg-gradient-to-b from-green-800 via-green-400 to-purple-700">Premios F </span>
                    <span class="bg-clip-text text-transparent inline-block leading-relaxed bg-gradient-to-r from-yellow-200 via-yellow-400 to-yellow-700 font-striped">2023</span>
                </h1>
            </div>
        </header>
        <main class="">
            <section
                id="players"
                class="
                    flex justify-between relative
                    [&>div>img]:absolute [&>div>img]:bottom-0
                    [&>div>img]:w-auto
                    [&>div>img]:animate-once animate-duration-1000 animate-ease-in-out
                    h-screen pt-24 border-b border-white/10
                "
            >
                <div class="relative w-full">
                    <img class="-left-12 h-5/6 animate-fade-left animate-delay-300 z-50" src="{{ asset('images/alexiabg.png') }}" alt="Alexia">
                    <img class="left-40 h-4/6 animate-fade-left animate-delay-700 z-40" src="{{ asset('images/atheneabg.png') }}" alt="Athenea">
                    <img class="left-[20rem] h-[56%] animate-fade-left animate-delay-[1600ms] z-30" src="{{ asset('images/catalinabg.png') }}" alt="Catalina">
                </div>
                <div class="relative w-full">
                    <img class="-right-12 h-5/6 animate-fade-right animate-delay-500 z-50" src="{{ asset('images/jennibg.png') }}" alt="Jenni">
                    <img class="right-40 h-4/6 animate-fade-right animate-delay-700 z-40" src="{{ asset('images/olgabg.png') }}" alt="Olga">
                    <img class="right-[20rem] h-[56%] animate-fade-right animate-delay-[1600ms] z-30" src="{{ asset('images/misabg.png') }}" alt="Misa">
                </div>
                <div
                    id="info"
                    class="absolute z-50 bottom-20 mx-auto left-1/2 -translate-x-1/2"
                >
                    <div class="flex flex-col">
                        <div class="px-5 pt-4 pb-4 bg-white text-black text-center">
                            <h2 class="font-boxing text-3xl">31 de diciembre</h2>
                        </div>
                        <div class="px-5 pt-3 pb-3 bg-black text-white text-center">
                            <a class="hover:contrast-150 hover:scale-105 transition inline-block font-boxing text-4xl" href="https:://laligaf.es" target="_blank" rel="noopener noreferrer">laligaf.es</a>
                        </div>
                        <div class="px-5 pt-4 pb-4 bg-sky-500 text-black text-center">
                            <a class="hover:contrast-150 hover:scale-105 transition inline-block font-boxing text-2xl" href="https:://laligaf.es/tickets" target="_blank" rel="noopener noreferrer">laligaf.es/tickets</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer></footer>
    </body>
</html>
