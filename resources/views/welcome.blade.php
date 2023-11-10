<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FEF</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->

    <body class="antialiased bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#131313] via-zinc-900 to-zinc-950">
        <header class="relative">
            <div class="md:absolute md:left-1/2 md:-translate-x-1/2 flex flex-col gap-1 justify-center items-center mt-4 md:mt-0 md:top-2">
                <img class="w-52 h-auto" src="{{ asset('images/laligaf.png') }}" alt="La Liga F">
                <h1 class="font-boxing text-6xl text-center text-black">
                    <div class="flex flex-col md:flex-row gap-x-0 md:gap-x-6">
                        <span class="bg-clip-text text-transparent inline-block leading-relaxed bg-gradient-to-b from-green-800 via-green-400 to-purple-700">Premios F </span>
                        <span class="bg-clip-text text-transparent inline-block leading-relaxed bg-gradient-to-r from-yellow-200 via-yellow-400 to-yellow-700 font-striped">2023</span>
                    </div>
                </h1>
            </div>
        </header>
        <main class="relative">
            <section
                id="players"
                class="
                    flex justify-between relative
                    [&>div>img]:absolute [&>div>img]:bottom-0
                    [&>div>img]:w-auto
                    [&>div>img]:animate-once animate-duration-1000 animate-ease-in-out
                    h-[40vh] md:h-[65vh] lg:h-screen pt-2 md:pt-24 border-b border-white/10
                "
            >
            {{-- <div class="absolute inset-0 flex gap-x-3 left-1/2 -translate-x-1/2 justify-center opacity-20">
                <div class="w-2 blur-sm h-full bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-green-200 via-green-300 to-blue-500"></div>
                <div class="w-2 blur-sm h-full bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-green-200 via-green-300 to-blue-500"></div>
            </div> --}}
                <div class="relative w-full">
                    <img class="-left-12 h-5/6 animate-fade-left animate-delay-300 z-50" src="{{ asset('images/alexiabg.png') }}" alt="Alexia">
                    <img class="left-6 md:left-40 h-4/6 animate-fade-left animate-delay-700 z-40" src="{{ asset('images/atheneabg.png') }}" alt="Athenea">
                    <img class="left-[6rem] md:left-[20rem] h-[56%] animate-fade-left animate-delay-[1600ms] z-30" src="{{ asset('images/catalinabg.png') }}" alt="Catalina">
                </div>
                <div class="relative w-full">
                    <img class="-right-12 h-5/6 animate-fade-right animate-delay-500 z-50" src="{{ asset('images/jennibg.png') }}" alt="Jenni">
                    <img class="right-6 md:right-40 h-4/6 animate-fade-right animate-delay-700 z-40" src="{{ asset('images/olgabg.png') }}" alt="Olga">
                    <img class="right-[6rem] md:right-[20rem] h-[56%] animate-fade-right animate-delay-[1600ms] z-30" src="{{ asset('images/misabg.webp') }}" alt="Misa">
                </div>

            </section>

            <div
                id="info"
                class="md:absolute z-50 md:bottom-20 mx-auto md:left-1/2 md:-translate-x-1/2"
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

            <div
                id="versus"
                class="absolute z-50 bottom-6 md:bottom-20 mx-auto left-1/2 -translate-x-1/2 flex flex-col gap-y-8 opacity-0 invisible"
            >
                <div class="flex flex-col">
                    <div class="px-6 pt-4 pb-4 bg-black text-white text-center">
                        <h3 class="font-boxing text-7xl">ALEXIA</h3>
                    </div>
                    <span class="left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 font-striped text-yellow-500 text-7xl md:block absolute">
                        AND
                    </span>
                    <div class="px-6 pt-4 pb-4 bg-white text-black text-center">
                        <h3 class="font-boxing text-7xl">JENNI</h3>
                    </div>
                </div>
            </div>
        </main>
        <footer></footer>
    </body>
</html>

<script>
    const $players = document.querySelector("#players")
    const $playersImages = $players.querySelectorAll("img")

    const $info = document.querySelector("#info")
    const $versus = document.querySelector("#versus")

    $playersImages.forEach(($img) => {
        $img.addEventListener("mouseleave", () => {
            $playersImages.forEach(($img) => {
                $img.setAttribute("style", "transition: all 1s ease-in-out")
            })

            $info.setAttribute("style", "opacity: 1; transition: all .3s ease-in-out")
            $versus.setAttribute("style", "opacity: 0; transition: all .3s ease-in-out; visibility: hidden")
        })

        $img.addEventListener("mouseenter", () => {
            const sectionImages = $img.parentNode.children
            const position = Array.from(sectionImages).indexOf($img)
            // left images and right images
            const [leftPlayer, rightPlayer] = [
                $playersImages[position], // left side
                $playersImages[position + $playersImages.length / 2],
            ]
            // console.log(leftPlayer, rightPlayer)

            //hide info players
            $info.setAttribute("style", "opacity: 0; transition: all .3s ease-in-out")
            $versus.setAttribute("style", "opacity: 1; transition: all .3s ease-in-out; visibility: visible")
            const [firstPlayerName, secondPlayerNmae] = $versus.querySelectorAll("h3")
            firstPlayerName.innerText = leftPlayer.alt
            secondPlayerNmae.innerText = rightPlayer.alt

            // hide players not included
            $playersImages.forEach(($img) => {
                $img.setAttribute(
                    "style",
                    "filter: blur(2px) grayscale(.8); transition: all 1s ease-in-out"
                )
            })

            leftPlayer.setAttribute(
                "style",
                "scale: 1.05; contrast: 1.1; transition: all .3s ease-in-out"
            )
            rightPlayer.setAttribute(
                "style",
                "scale: 1.05; contrast: 1.1; transition: all .3s ease-in-out"
            )
        })
    })
</script>
