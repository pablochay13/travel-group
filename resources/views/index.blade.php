@extends('layout')

@section('title')
<title>Descubre y Disfruta Explora Sin Límites -  Travel Experience Group</title>
<meta name="description" content="Experience seamless and stress-free travel in Cancun with our premier transportation service. From airport transfers to hotel pickups, we offer reliable and comfortable rides to your destination. Discover the beauty of Cancun without worries, as our professional drivers ensure a safe and efficient journey. Book your Cancun transfer now and enjoy a hassle-free travel experience!">
<meta name="keywords" content="Cancun airport transfer, Cancun shuttle service, Cancun transportation, Cancun hotel transfers, Cancun transport service, atv tours, zipline and atv tour, zipline and atv cancun, activities atv single zipline and cenote, cenote and zipline tour with atvs, Mejores tours en Cancún, Tours todo incluido en Cancún, Tours con transporte incluido, Tours con guía turístico, Tours con entradas a atracciones, Tours con actividades acuáticas, Tours con experiencias gastronómicas">
<meta name="robots" content="index, follow">

<style>
    #header-landing {
        display: none !important;
    }
</style>
@endsection

@section('content')

<div class="text-center pt-12">
    <p class="text-sm leading-7 text-orange-600 font-regular">
        Travel Group
    </p>
    <h3 class="text-3xl sm:text-5xl leading-normal font-extrabold text-gray-900">
        Los mejores lugares por <span class="text-orange-600">descubrir</span>
    </h3>
</div>

<div class="flex flex-wrap justify-center pt-12 pb-16 mb-16">
    <div class="flex flex-col justify-center items-center sm:py-4 px-5">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-lg w-full">
            <a href="/" class="flex">
                <img class="w-full h-64 object-cover" src="{{ asset('/img/cancun-card.webp') }}" />
            </a>
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">
                    <!-- <img class="w-full h-auto object-cover" src="{{ asset('/img/cancun-travel-experience-logo.webp') }}" /> -->
                    <p class="text-center text-blue-900">Cancún <span class="text-orange-600">Travel</span> Experience</p>
                </h2>
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center sm:py-4 px-5">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-lg w-full">
            <a href="/" class="flex">
                <img class="w-full h-64 object-cover" src="{{ asset('/img/cabo-card.webp') }}" />
            </a>
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">
                    <p class="text-center text-blue-900">Cabo <span class="text-orange-600">Travel</span> Experience</p>
                </h2>
                <!-- <p class="text-gray-700 leading-tight mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu sapien porttitor, blandit velit ac,
                    vehicula elit. Nunc et ex at turpis rutrum viverra.
                </p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Avatar" class="w-8 h-8 rounded-full mr-2 object-cover">
                        <span class="text-gray-800 font-semibold">John Doe</span>
                    </div>
                    <span class="text-gray-600">2 hours ago</span>
                </div> -->
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center sm:py-4 px-5">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-lg w-full">
            <a href="/" class="flex">
                <img class="w-full h-64 object-cover" src="{{ asset('/img/huatulco-card.webp') }}" />
            </a>
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">
                    <!-- <img class="w-full h-auto object-cover" src="{{ asset('/img/huatulco-travel-experience-logo.webp') }}" /> -->
                    <p class="text-center text-blue-900">Huatulco <span class="text-orange-600">Travel</span> Experience</p>
                </h2>
            </div>
        </div>
    </div>
</div>

<!-- gallery section -->
<div class="w-full h-[800px] relative my-12 pt-12 hidden md:block 2xl:block">
    <div class="w-full h-[146px] px-5 2xl:px-0 top-0 absolute flex-col justify-center items-center gap-[11px] inline-flex">
        <p class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Experiencias</p>
        <p class="w-full 2xl:w-[771.69px] text-center text-slate-950 text-[26px] 2xl:text-[42px] font-bold font-['Trip Sans'] leading-[40px] 2xl:leading-[60px]">Un pequeño vistazo a nuestro tour, una gran experiencia para siempre</p>
    </div>
    <div class="w-full h-[314px] 2xl:h-[514px] top-[176px] absolute flex justify-center items-center">
        <div class="w-full h-[252px] left-[-50px] top-0 absolute justify-center items-center gap-2.5 flex 2xl:inline-flex">
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-1.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-2.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-3.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-4.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-5.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-6.webp') }}" />
        </div>

        <div class="w-full h-[252px] left-[0px] top-[262px] absolute justify-center items-center gap-2.5 inline-flex">
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-7.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-8.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-9.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-10.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-11.webp') }}" />
            <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-12.webp') }}" />
        </div>
    </div>
</div>

<!-- firts section -->
<div class="w-full h-[1100px] 2xl:w-full md:h-[600px] 2xl:h-[750px] relative mt-12">
    <div class="w-full h-[768px] 2xl:w-[1280px] 2xl:h-[650px] flex items-center justify-center md:justify-start 2xl:justify-center mt-12 absolute">
        <div class="w-[390px] h-[768px] md:left-[250px] md:w-[512px] md:top-[50px] 2xl:w-[712px] 2xl:h-[370px] 2xl:top-[50px] absolute flex-col justify-start items-start gap-4 pl-5 2xl:pl-0 inline-flex">
            <p class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Experiencias</p>
            <p class="flex-col justify-start items-start gap-[30px] flex">
                <span class="2xl:w-[712px]"><span class="text-slate-950 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]">Deseamos </span><span class="text-orange-600 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]">que vivas</span><span class="text-slate-950 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]">, el </span><span class="text-blue-900 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]">mejor</span><span class="text-slate-950 text-2xl 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[30px] 2xl:leading-[60px]"> momento</span></span>
            </p>
            <p class="w-[390px] 2xl:w-[710px] text-zinc-800 text-lg font-normal font-['PP Mori'] leading-[27px]">
                Ya sea que estés buscando una escapada romántica, unas vacaciones familiares llenas de diversión o una emocionante aventura con amigos, en Travel Group tenemos la experiencia perfecta para ti. Deja que nuestros expertos en viajes te guíen en la creación de recuerdos que atesorarás para siempre.
                <br> <br>
                No solo ofrecemos tours y traslados; te llevamos a vivir experiencias inolvidables que te sumergirán en la belleza y la emoción de cada destino. Desde explorar antiguas ruinas hasta relajarte en playas paradisíacas, tenemos una amplia gama de experiencias diseñadas para satisfacer tus deseos de aventura y descubrimiento.
            </p>
            <div class="px-[35px] py-5 bg-orange-600 rounded-[5px] justify-center items-center gap-2.5 inline-flex">
                <a href="tours" class="text-white text-base font-semibold font-['PP Mori']">Reserva ahora</a>
            </div>
        </div>

        <div class="w-[400px] 2xl:w-[532px] h-[597px] md:left-[750px] 2xl:left-[1148px] top-[448px] md:top-[0px] 2xl:top-0 absolute">
            <img class="h-auto max-w-full 2xl:w-[532px] 2xl:h-[597px] left-0 top-0 absolute rounded-lg" src="{{ asset('/img/cancun-travel-experience-transportation.webp') }}" />
        </div>
    </div>
</div>

<!-- reviews section -->
<div class="w-full h-[750px] md:h-[750px] 2xl:h-[750px] relative py-12" id="reviews">
    <div class="w-full h-[152px] 2xl:h-[152px] mx flex-col justify-center items-center gap-[17px] inline-flex py-12 mb-4">
        <p class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest pt-12 mt-12">TESTIMONIOS</p>
        <p class="w-full 2xl:w-[775px] text-center text-slate-950 text-[30px] 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[40px] 2xl:leading-[60px]">Historias inspiradoras de nuestros clientes</p>
    </div>

    <!-- <div class="w-[325px] md:w-full 2xl:w-full h-[350px] left-[55px] md:left-0 2xl:left-0 top-[300px] absolute justify-center items-center 2xl:items-end gap-7 md:inline-flex 2xl:inline-flex grid grid-cols-1">
        <div class="elfsight-app-6a57d6fa-1dcd-4cff-ba53-2dc6a530ac7f" data-elfsight-app-lazy></div>
    </div> -->

    <div class="container mx-auto w-full overflow-hidden relative pt-12 mt-12">
        <div class="w-full h-full absolute">
            <div class="w-1/4 h-full absolute z-50 left-0" style=""></div>
            <div class="w-1/4 h-full absolute z-50 right-0" style=""></div>
        </div>

        <div class="carousel-items flex items-center justify-center" style="width: fit-content; animation: carouselAnim 10s infinite alternate linear;">

            <div class="carousel-focus flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-lg shadow-lg" style="width: 270px; height:350px;">
                <svg class="fill-current text-orange-600 hover:text-orange-600 cursor-pointer h-12 w-12 absolute top-0 right-0 mt-2 -mr-5" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M11.5 0C17.847 0 23 5.153 23 11.5S17.847 23 11.5 23 0 17.847 0 11.5 5.153 0 11.5 0zm0 1C17.295 1 22 5.705 22 11.5S17.295 22 11.5 22 1 17.295 1 11.5 5.705 1 11.5 1zm.5 10h6v1h-6v6h-1v-6H5v-1h6V5h1v6z" />
                </svg>
                <!-- <button class="absolute top-0 right-0 bg-teal-400 rounded-full px-1 py-0 font-bold text-lg">+</button> -->
                <span class="text-orange-600 font-bold text-xl mb-3">Christian K</span>
                <p class="mt-3 text-gray-600 text-center">"We had the most amazing time – Jackie was so informative and we got so much done. Preferred their approach to the Cenote tour over others. Would truly recommend any one in Tulum doing this tour for some fun with friends while visiting."</p>
            </div>

            <div class="carousel-focus flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-lg shadow-lg" style="width: 270px; height:350px;">
                <svg class="fill-current text-orange-600 hover:text-orange-600 cursor-pointer h-12 w-12 absolute top-0 right-0 mt-2 -mr-5" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M11.5 0C17.847 0 23 5.153 23 11.5S17.847 23 11.5 23 0 17.847 0 11.5 5.153 0 11.5 0zm0 1C17.295 1 22 5.705 22 11.5S17.295 22 11.5 22 1 17.295 1 11.5 5.705 1 11.5 1zm.5 10h6v1h-6v6h-1v-6H5v-1h6V5h1v6z" />
                </svg>
                <!-- <button class="absolute top-0 right-0 bg-teal-400 rounded-full px-1 py-0 font-bold text-lg">+</button> -->
                <p class="text-orange-600 font-bold text-xl mb-3">Kar J</p>
                <p class="mt-3 text-gray-600 text-center">"Loved it, amazing tour with great people. Thank you Omar and Hugo for the trip to the cenote and the Mayan ruins. My partner and I had an amazing time!"</p>
            </div>

            <div class="carousel-focus flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-lg shadow-lg" style="width: 270px; height:350px;">
                <svg class="fill-current text-orange-600 hover:text-orange-600 cursor-pointer h-12 w-12 absolute top-0 right-0 mt-2 -mr-5" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M11.5 0C17.847 0 23 5.153 23 11.5S17.847 23 11.5 23 0 17.847 0 11.5 5.153 0 11.5 0zm0 1C17.295 1 22 5.705 22 11.5S17.295 22 11.5 22 1 17.295 1 11.5 5.705 1 11.5 1zm.5 10h6v1h-6v6h-1v-6H5v-1h6V5h1v6z" />
                </svg>
                <!-- <button class="absolute top-0 right-0 bg-teal-400 rounded-full px-1 py-0 font-bold text-lg">+</button> -->
                <p class="text-orange-600 font-bold text-xl mb-3">Sylvia R</p>

                <p class="mt-3 text-gray-600 text-center">"The Cenotes was very nice! However you only get access to one of four. Ours was very nice. We were able to enjoy a dip and swim around."</p>
            </div>

            <div class="carousel-focus flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-lg shadow-lg" style="width: 270px; height:350px;">
                <svg class="fill-current text-orange-600 hover:text-orange-600 cursor-pointer h-12 w-12 absolute top-0 right-0 mt-2 -mr-5" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M11.5 0C17.847 0 23 5.153 23 11.5S17.847 23 11.5 23 0 17.847 0 11.5 5.153 0 11.5 0zm0 1C17.295 1 22 5.705 22 11.5S17.295 22 11.5 22 1 17.295 1 11.5 5.705 1 11.5 1zm.5 10h6v1h-6v6h-1v-6H5v-1h6V5h1v6z" />
                </svg>
                <!-- <button class="absolute top-0 right-0 bg-teal-400 rounded-full px-1 py-0 font-bold text-lg">+</button> -->
                <p class="text-orange-600 font-bold text-xl mb-3">Rachel S</p>

                <p class="mt-3 text-gray-600 text-center">"Mary was an amazing tour guide! We also had great driving service from Rene. Mary provided a very engaging and informative tour of the Tulum ruins and we had a lot of fun at the cenote swim at Casa Tortuga. We also got to enjoy a delicious lunch at a local restaurant organized by Mary."</p>
            </div>

            <div class="carousel-focus flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-lg shadow-lg" style="width: 270px; height:350px;">
                <svg class="fill-current text-orange-600 hover:text-orange-600 cursor-pointer h-12 w-12 absolute top-0 right-0 mt-2 -mr-5" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M11.5 0C17.847 0 23 5.153 23 11.5S17.847 23 11.5 23 0 17.847 0 11.5 5.153 0 11.5 0zm0 1C17.295 1 22 5.705 22 11.5S17.295 22 11.5 22 1 17.295 1 11.5 5.705 1 11.5 1zm.5 10h6v1h-6v6h-1v-6H5v-1h6V5h1v6z" />
                </svg>
                <!-- <button class="absolute top-0 right-0 bg-teal-400 rounded-full px-1 py-0 font-bold text-lg">+</button> -->
                <p class="text-orange-600 font-bold text-xl mb-3">Brad D</p>

                <p class="mt-3 text-gray-600 text-center">"Lylah was an excellent tour guide! Great transportation, which was very smooth. I learned a lot about the region and would recommend it to small groups and families."</p>
            </div>

            <div class="carousel-focus flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-lg shadow-lg" style="width: 270px; height:350px;">
                <svg class="fill-current text-orange-600 hover:text-orange-600 cursor-pointer h-12 w-12 absolute top-0 right-0 mt-2 -mr-5" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M11.5 0C17.847 0 23 5.153 23 11.5S17.847 23 11.5 23 0 17.847 0 11.5 5.153 0 11.5 0zm0 1C17.295 1 22 5.705 22 11.5S17.295 22 11.5 22 1 17.295 1 11.5 5.705 1 11.5 1zm.5 10h6v1h-6v6h-1v-6H5v-1h6V5h1v6z" />
                </svg>
                <!-- <button class="absolute top-0 right-0 bg-teal-400 rounded-full px-1 py-0 font-bold text-lg">+</button> -->
                <p class="text-orange-600 font-bold text-xl mb-3">Melissa P</p>

                <p class="mt-3 text-gray-600 text-center">"Such an amazing experience. The Cenotes was my favorite part and my husband enjoyed the Ruins. Would have loved to spend more time exploring the ruins but realized we were on a shorter trip."</p>
            </div>

            <div class="carousel-focus flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-lg shadow-lg" style="width: 270px; height:350px;">
                <svg class="fill-current text-orange-600 hover:text-orange-600 cursor-pointer h-12 w-12 absolute top-0 right-0 mt-2 -mr-5" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M11.5 0C17.847 0 23 5.153 23 11.5S17.847 23 11.5 23 0 17.847 0 11.5 5.153 0 11.5 0zm0 1C17.295 1 22 5.705 22 11.5S17.295 22 11.5 22 1 17.295 1 11.5 5.705 1 11.5 1zm.5 10h6v1h-6v6h-1v-6H5v-1h6V5h1v6z" />
                </svg>
                <!-- <button class="absolute top-0 right-0 bg-teal-400 rounded-full px-1 py-0 font-bold text-lg">+</button> -->
                <p class="text-orange-600 font-bold text-xl mb-3">LindiSc</p>

                <p class="mt-3 text-gray-600 text-center">"Great tour. Mary was very knowledgeable and shared a lot of interesting information. Renee was a wonderful driver to have. He was very considerate. Great day altogether."</p>
            </div>

            <div class="carousel-focus flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-lg shadow-lg" style="width: 270px; height:350px;">
                <svg class="fill-current text-orange-600 hover:text-orange-600 cursor-pointer h-12 w-12 absolute top-0 right-0 mt-2 -mr-5" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M11.5 0C17.847 0 23 5.153 23 11.5S17.847 23 11.5 23 0 17.847 0 11.5 5.153 0 11.5 0zm0 1C17.295 1 22 5.705 22 11.5S17.295 22 11.5 22 1 17.295 1 11.5 5.705 1 11.5 1zm.5 10h6v1h-6v6h-1v-6H5v-1h6V5h1v6z" />
                </svg>
                <!-- <button class="absolute top-0 right-0 bg-teal-400 rounded-full px-1 py-0 font-bold text-lg">+</button> -->
                <p class="text-orange-600 font-bold text-xl mb-3">Emilie C</p>

                <p class="mt-3 text-gray-600 text-center">"My family and I had a great day exploring the ruins and swimming in a Cenote. Jerry was our tour guide, he was so informative and did a great job at involving the group in discussion. We also had plenty of time to explore the grounds and shops. Rene, our driver, was also very nice. It was a lovely day"</p>
            </div>
        </div>

    </div>
</div>

<div class="w-full h-[550px] relative my-12 pt-12 block md:hidden 2xl:hidden">
    <div class="w-full h-[146px] mb-12 pb-12 px-5 2xl:px-0 F absolute flex-col justify-center items-center gap-[11px] inline-flex">
        <p class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">our Gallery</p>
        <p class="w-full 2xl:w-[771.69px] text-center text-slate-950 text-[30px] 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[40px] 2xl:leading-[60px]">A little look at our tour, a great experience forever</p>
    </div>
    <div class="carousel mt-12 top-[146px]">
        <div class="carousel-inner">
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-1.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-2.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-3.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-4.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-5" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-5.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-6" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-6.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-7" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-7.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-8" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-8.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-9" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-9.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-10" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-10.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-11" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-11.webp') }}" />
            </div>

            <input class="carousel-open" type="radio" id="carousel-12" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item  flex justify-center items-center">
                <img class="w-[252px] h-[252px] rounded-sm" src="{{ asset('/img/gallery/cancun-travel-experience-galleria-12.webp') }}" />
            </div>

            <label for="carousel-3" class="carousel-control prev control-1">‹</label>
            <label for="carousel-2" class="carousel-control next control-1">›</label>
            <label for="carousel-1" class="carousel-control prev control-2">‹</label>
            <label for="carousel-3" class="carousel-control next control-2">›</label>
            <label for="carousel-2" class="carousel-control prev control-3">‹</label>
            <label for="carousel-1" class="carousel-control next control-3">›</label>
            <ol class="carousel-indicators">
                <li>
                    <label for="carousel-1" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-2" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-3" class="carousel-bullet">•</label>
                </li>
            </ol>
        </div>
    </div>
</div>

<!-- contact section -->
<div class="w-[342px] md:w-[742px] 2xl:w-[1100px] h-[1400px] md:h-[950px] 2xl:h-[700px] left-10 md:left-[300px] 2xl:left-[350px] relative my-12">

    <div class="w-[342px] md:w-[742px] 2xl:w-[742px] h-[638px] left-0 top-0 absolute flex-col justify-start items-start gap-10 inline-flex mb-12">
        <div class="flex-col justify-start items-start gap-[47px] flex">
            <div class="flex-col justify-start items-start gap-2 flex">
                <h1 class="text-orange-600 text-sm font-semibold font-['PP Mori'] uppercase tracking-widest">Contactanos</h1>
                <p class="text-left text-slate-950 text-[30px] 2xl:text-[50px] font-bold font-['Trip Sans'] leading-[60px]">¿Necesita ayuda? <br> Ponte en contacto</p>
            </div>

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if ($message = Session::get('success'))
            <!-- <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div> -->
            <?php
            header('Location:/gracias');
            exit;
            ?>
            @endif

            <form method="post" action="{{url('sendemail/send')}}" class="w-[342px] 2xl:w-[742px] shrink-0 2xl:flex 2xl:flex-row 2xl:flex-wrap gap-[30px] text-style grid grid-cols-1 2xl:grid-cols-2">
                {{ csrf_field() }}
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <label class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Nombre</label>

                    <input name="name" type="text" class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex text-slate-500 text-base font-normal font-['PP Mori']">
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <label class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Email</label>

                    <input name="email" type="email" class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex text-slate-500 text-base font-normal font-['PP Mori']">
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <label class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Teléfono</label>

                    <input name="tel" type="tel" class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex text-slate-500 text-base font-normal font-['PP Mori']">
                </div>
                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <label class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Fecha</label>

                    <input name="date" type="date" class="w-[356px] h-[60px] px-[22px] py-4 bg-slate-100 rounded-lg border justify-start items-center gap-[13px] inline-flex text-slate-500 text-base font-normal font-['PP Mori']">
                </div>

                <div class="flex-col justify-start items-start gap-3 inline-flex">
                    <label class="text-slate-950 text-sm font-semibold font-['PP Mori'] capitalize leading-snug">Mensaje</label>

                    <textarea name="message" class="w-[355px] 2xl:w-[742px] h-[165px] relative left-0 top-0 absolute bg-slate-100 rounded-lg border text-slate-500 text-base font-normal font-['PP Mori']"></textarea>
                </div>

                <button class="text-white text-base font-semibold font-['PP Mori'] px-[35px] py-5 bg-orange-600 rounded-[5px] justify-start items-start gap-2.5 inline-flex" type="submit" name="send" value="Send">Enviar</button>
            </form>
        </div>

    </div>

    <div class="2xl:w-[449px] h-[393.96px] left-[0px] top-[1000px] md:left-[450px] md:top-[152px] 2xl:left-[802px] 2xl:top-[152px] absolute flex-col justify-start items-start gap-[19px] inline-flex">
        <div class="text-slate-950 text-[26px] font-medium font-['Trip Sans']">Póngase en contacto con nosotros</div>
        <div class="flex-col justify-start items-start gap-4 flex">
            <div class="pl-[18px] pr-[38px] py-5 bg-orange-50 rounded-[7px] justify-center items-center gap-3.5 inline-flex">
                <div class="w-[58px] h-[52.96px] relative">
                    <div class="w-[58px] h-[52.96px] left-0 top-0 absolute bg-white rounded-[13px]"></div>
                    <div class="w-[31.10px] h-[31.10px] left-[13.45px] top-[10.93px] absolute">
                        <img src="{{ asset('/img/icons/call.png') }}" alt="">
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-[7px] inline-flex">
                    <div class="text-black text-sm 2xl:text-xl font-normal font-['Trip Sans']">1 469 482 0930</div>
                    <div class="text-indigo-950 text-sm 2xl:text-base font-normal font-['PP Mori']">Teléfono</div>
                </div>
            </div>
            <div class="pl-[18px] pr-[38px] py-5 bg-green-50 rounded-[7px] justify-center items-center gap-3.5 inline-flex">
                <div class="w-[58px] h-14 relative">
                    <div class="w-[58px] h-14 left-0 top-0 absolute bg-white rounded-[13px]"></div>
                    <div class="w-[30px] h-[30px] left-[14px] top-[13.04px] absolute">
                        <div class="w-[30px] h-[30px] left-0 top-0 absolute">
                            <img src="{{ asset('/img/icons/mail.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex-col justify-start items-start gap-[7px] inline-flex">
                    <div class="text-black text-sm 2xl:text-xl font-normal font-['Trip Sans']">info@cancuntravelexperience.com</div>
                    <div class="text-indigo-950 text-sm 2xl:text-base font-normal font-['PP Mori']">E-mail</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection