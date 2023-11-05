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

    <body class="antialiased">
        <header></header>
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
                    <img class="left-44 h-4/6 animate-fade-left animate-delay-700 z-40" src="{{ asset('images/atheneabg.png') }}" alt="Athenea">
                    <img class="left-[22rem] h-[56%] animate-fade-left animate-delay-[1600ms] z-30" src="{{ asset('images/catalinabg.png') }}" alt="Catalina">
                </div>
                <div class="relative w-full">
                    <img class="-right-12 h-5/6 animate-fade-right animate-delay-500 z-50" src="{{ asset('images/jennibg.png') }}" alt="Jenni">
                    <img class="right-44 h-4/6 animate-fade-right animate-delay-700 z-40" src="{{ asset('images/olgabg.png') }}" alt="Olga">
                    <img class="right-[22rem] h-[56%] animate-fade-right animate-delay-[1600ms] z-30" src="{{ asset('images/misabg.png') }}" alt="Misa">
                </div>
            </section>
        </main>
        <footer></footer>
    </body>
</html>
