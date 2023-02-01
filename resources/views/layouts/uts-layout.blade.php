<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MangResto 1.0 || Projek Adi Sepriyadi</title>
    <link href="{{ URL::asset('img/logo.svg')}}" rel="shortcut icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">  <!-- animation --><!-- animation -->

    <!-- Scripts -->
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#ffffff',
                        second: '#74A512',
                        third: '#FFF7E',
                        highlight: '#FF9900',
                        content: '#969696'
                    },
                    fontFamily: {
                        logo: 'Roboto',
                        content: 'Poppins'
                    }
                }
            }
        }
        
   
    </script>
</head>

<body class="overflow-x-hidden scroll-smooth">
    
    <nav>       
        <div class="bg-second text-center py-1.5 text-[.8rem] font-medium text-white">
            <p>Fast Food and Healthy Food, Buy 2 Get 20% Free</p>
        </div>
    
        <div class="bg-primary lg:px-32 px-6 shadow-lg py-5 flex lg:items-center font-content">
            
            <div class="logo font-head">
                <a href="" class="flex items-center space-x-3">
                    <img src="{{ URL::asset('img/logo.svg')}}" alt="logo" class="w-10">
                    <h1 class="font-bold md:block hidden font-logo">MangResto</h1>
                </a>
            </div>
    
            <ul
                class="lg:ml-10 lg:flex lg:space-x-8 lg:space-y-0 text-white lg:items-center lg:z-auto lg:static lg:bg-transparent lg:h-0 lg:w-auto lg:pl-0 lg:opacity-100 space-x-0 space-y-8 z-20 absolute bg-white/20 backdrop-blur-md w-full py-10 lg:py-0 text-[1.2rem] lg:text-[1rem] px-7 opacity-0 top-[-500px] top-32  transition-all ease-in duration-500 left-0">
                <li class="list-none text-[.9rem] text-content">
                    <a href="#" class="hover:text-second">Home</a>
                </li>
                <li class="list-none text-[.9rem] text-content">
                    <a href="#" class="hover:text-second">About Us</a>
                </li>
                    <button type="button" class=" text-[.9rem] text-content flex items-center space-x-2" onclick="openDropdown(event,'dropdownId')">
                        <a href="#" class="hover:text-second">Shop</a>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </button>
                    <div id="dropdownId"
                        class="hidden bg-white/20 backdrop-blur-md text-content text-black text-[.9rem] px-3 py-3 z-50 float-left list-none text-left rounded space-y-3 shadow-lg mt-1">
                        <li class="list-none">
                            <a href="#" class="hover:text-second">Healty Food</a>
                        </li>
                        <li class="list-none">
                            <a href="#" class="hover:text-second">Fast Food</a>
                        </li>
                    </div>
                <li class="list-none text-[.9rem] text-content">
                    <a href="#" class="hover:text-second">Contact</a>
                </li>
                <li class="list-none text-[.9rem] text-content">
                    <a href="#" class="hover:text-second">Blog</a>
                </li>
                <button class="lg:hidden block bg-second px-6 py-2.5 rounded-sm text-white text-[.9rem] w-full">
                    <a href="#">Login</a>
                </button>
            </ul>
    
            <div class="ml-auto md:mr-20 lg:mr-0 mr-16 flex items-center lg:space-x-12 md:space-x-10 space-x-5">
               
                <div class="love relative flex">
                    <img src="{{ URL::asset('img/love.svg')}}" alt="love">
                    <span
                        class="absolute ml-3 -mt-2 rounded-full bg-red-600 text-[.7rem] p-1 m-0 text-white font-content leading-tight text-center">10</span>
                </div>
               
                <div class="cart relative flex">
                    <img src="{{ URL::asset('img/cart.svg')}}" alt="cart">
                    <span
                        class="absolute ml-3 -mt-2 rounded-full bg-red-600 text-[.7rem] p-1 m-0 text-white font-content leading-tight text-center">10</span>
                </div>
             
                <div class="text-xl">
                    <ion-icon name="search-outline"></ion-icon>
                </div>
    
                <div class="flex space-x-3 items-center">
                    <div class="w-auto flex items-center bg-white px-3 py-2.5 shadow-md">
                        <button type="button" class=" text-[.9rem] text-content flex items-center space-x-2" onclick="openDropdown(event,'langId')">
                            <div class="flex space-x-1 items-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Square_Flag_of_the_United_Kingdom.svg" alt="" class="w-5">
                                <a href="#" class="hover:text-second">EN</a>
                            </div>
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </button>
                        <div id="langId"
                            class="hidden bg-white/20 backdrop-blur-md text-content text-black text-[.9rem] px-3 py-3 z-50 float-left list-none text-left rounded space-y-3 shadow-lg mt-1">
                            <li class="list-none flex items-center space-x-1">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="" class="w-5">
                                <a href="#" class="hover:text-second">ID</a>
                            </li>
                    </div>
                </div>
              
                <div class="lg:block hidden">
                    <a href="#" class="bg-second px-6 text-white text-[.9rem] py-2.5 rounded-sm">Registration</a>
                </div>
            </div>
    
            <div id="toggle" class="text-back text-[2rem] lg:hidden absolute right-10">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </div>
        </div>
    </nav>

   
    <div class="md:flex flex-row-reverse block lg:mx-32 md:mx-8 lg:space-x-10 items-center mb-40">

        <div id="indicators-carousel" class="relative" data-carousel="static">
           
            <div class="py-32 px-20 rounded bg-[#EAF9CE]">
                
                <div class=" duration-700 ease-in-out" data-carousel-item="active">
                    <img data-aos="zoom-in" data-aos-duration="1000" src="{{ URL::asset('img/bg-hero.svg') }}" alt="">
                </div>
              
            </div>
        </div>

        <div class="hidden bg-[#EAF9CE] py-32 px-20">
            <img data-aos="zoom-in" data-aos-duration="1000" src="{{ URL::asset('img/bg-hero.svg')}}" alt="">
        </div>
       

        <div class="md:mt-0 mt-10 md:mx-0 mx-8">
            <p data-aos="zoom-left fade-center" data-aos-duration="1000"
                class="bg-[#F5FCE8] text-second rounded-full px-2 py-1 w-32 text-[.9rem]" lang="en">Sall Top 20% Off</p>
            <h1 data-aos="fade-right" data-aos-duration="1000"
                class="text-second lg:text-[3.59rem] md:text-[3rem] text-[3rem] font-bold py-2">Will <span
                    class="text-black">Give You </span> <br>Satisfaction <span class="text-black">in Food</span></h1>
            <p data-aos="fade-right" data-aos-duration="1200" class="text-[.9rem] text-content lg:w-[80%]">
                Explore Your Favorite Menu In Here !
            </p>

            <div data-aos="fade-right" data-aos-duration="1400" class="flex items-center space-x-7 mt-8 text-[.9rem]">
                <button class="bg-second px-6 py-2.5 rounded-sm text-white">
                    <a href="#">Shop Now</a>
                </button>
                <button class="flex items-center space-x-3 text-second font-semibold">
                    <a href="#">Explore Our Blog</a>
                    <ion-icon name="arrow-forward-outline" class="text-xl pt-1"></ion-icon>
                </button>
            </div>
        </div>
    </div>
    
   
    <div class="mb-40 ">
        <h4 data-aos="fade-up" data-aos-duration="1000" class="text-center font-content text-content">Company Partner
        </h4>
        <div data-aos="fade-up" data-aos-duration="1200"
            class="justify-evenly grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 gap-6 justify-items-center mt-10 lg:mx-32 mx-8">
            @foreach ($company as $i)
            <img src="{{ URL::asset('storage/media/companies/'.$i->company_image) }}" alt="company">
            @endforeach
        </div>
    </div>
    
   
    <div class="grid md:grid-cols-2 grid-cols-1 gap-5 lg:mx-32 mx-8 font-content mb-40">

        <div class="flex items-center lg:space-x-5 space-x-3 bg-[#EAF9CE] px-5 py-10">
            <img data-aos="zoom-in" data-aos-duration="1000" src="{{ URL::asset('img/fast-food.svg')}}" alt="fast-food"
                class="lg:w-52 md:w-32 w-[12rem]">
            <div class="space-y-2">
                
                <h4 data-aos="fade-up" data-aos-duration="1000" class="font-bold text-[1.2rem]">
                    Fast Food</h4>
                <p data-aos="fade-up" data-aos-duration="1200" class="text-[.9rem] pb-3 text-content">
                    Fast food is food served and served quickly. In other words, ready-to-eat food is food that is prepared immediately.</p>

                <button data-aos="fade-up" data-aos-duration="1400"
                    class="bg-second px-6 py-2.5 rounded-sm text-white text-[.9rem]">
                    <a href="#">Shop Now</a>
                </button>
            </div>
        </div>

        <div class="flex items-center lg:space-x-5 space-x-3 bg-[#FFF7E2] px-5 py-10">
            <img data-aos="zoom-in" data-aos-duration="1000" src="{{ URL::asset('img/healty-food.svg')}}" alt="healty-food"
                class="lg:w-52 md:w-32 w-[12rem]">
           
            <div class="space-y-2">
                <h4 data-aos="fade-up" data-aos-duration="1000" class="font-bold text-[1.2rem]">Healty Food</h4>
                <p data-aos="fade-up" data-aos-duration="1200" class="text-[.9rem] pb-3 text-content">Foods that give you the nutrients you need to support your body's health, and get the energy you need. Water, carbohydrates, protein, fat, vitamins and minerals are the main nutrients that make up a healthy and balanced diet.</p>
                <button data-aos="fade-up" data-aos-duration="1400"
                    class="bg-second px-6 py-2.5 rounded-sm text-white text-[.9rem]">
                    <a href="#">Shop Now</a>
                </button>
            </div>
        </div>
    </div>
  
    <div class="mb-40">
        <div class="md:flex flex-row-reverse block items-center lg:mx-32 mx-8 space-x-5">
           
            <img data-aos="zoom-in" data-aos-duration="1000" src="{{ URL::asset('img/bg-about.svg')}}" alt="about"
                class="lg:mr-52 mx-auto">

            <div data-aos="fade-up" data-aos-duration="1000" class="space-y-2 md:mt-0 mt-10">
                <p data-aos="fade-up" data-aos-duration="1200" class="text-highlight text-[.9rem]">About Us</p>
                <h1 data-aos="fade-up" data-aos-duration="1400" class="text-[2.5rem] font-bold">MangResto</h1>
                <p data-aos="fade-up" data-aos-duration="1600" class="text-[.9rem] lg:w-[70%] pb-5 text-content">Mang Resto is a place or building that is commercially organized, which provides good service to all consumers in the form of food and drinks.</p>
                <button data-aos="fade-up" data-aos-duration="1800"
                    class="bg-second px-6 py-2.5 rounded-sm text-white text-[.9rem]">
                    <a href="#">Shop Now</a>
                </button>
            </div>
        </div>


    </div>
  
    <div class="lg:mx-32 mx-8 mb-40 relative">
        <div class="space-y-2">
            <h1 data-aos="fade-up" data-aos-duration="1100" class="text-[2.5rem] font-bold">Food MangResto</h1>
            <div class="flex items-center">
                <p data-aos="fade-up" data-aos-duration="1200" class="text-highlight text-[.9rem]">Best Food</p>
                <p data-aos="fade-up" data-aos-duration="1400" class="text-[.9rem] text-content lg:w-[30%] w-[40%] ml-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga eaque explic! Here are our best dishes.</p>
            </div>
        </div>

        <div class="text-center text-content flex items-center space-x-10 justify-center pt-10">
            <p data-aos="zoom-in" data-aos-duration="1000" class="hover:text-second cursor-pointer">All Menu</p>
            <p data-aos="zoom-in" data-aos-duration="1200" class="hover:text-second cursor-pointer">Fast Food</p>
            <p data-aos="zoom-in" data-aos-duration="1400" class="hover:text-second cursor-pointer">Healty Food</p>
        </div>&nbsp;

        {{-- //swiper --}}
        <section data-aos="fade-left" data-aos-duration="1600">
            <div class="flex">
              <div class="w-2/12 flex items-center">
                <div class="w-full text-right">
                    <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                          </svg>                                                                      
                    </button>
                </div>
              </div>
              <div id="sliderContainer" class="w-10/12 overflow-hidden">
                <ul id="slider" class="flex w-full">
                    @foreach ($article as $item)
                    <li class="p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="{{ URL::asset('storage/media/articles/'.$item->cover_image) }}" alt="">
                            <h2 class="mt-2 text-2xl font-bold text-gray-700">
                                {{ $item->title }}
                            </h2>
                            <p class="mt-2 text-gray-700">
                                {{ $item->content }}
                            </p>
                            <button class="mt-4 px-6 py-3 rounded-md bg-second text-white font-bold">Buy Now</button>
                        </div>
                    </li>
                    @endforeach
                </ul>
              </div>
              <div class="w-2/12 flex items-center">
                <div class="w-full">
                    <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg ml-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>                                                                                                 
                    </button>
                </div>
              </div>
            </div>   
        </section>

        <button data-aos="fade-up" data-aos-duration="1600"
            class="bg-second px-6 lg:mx-[45%] md:mx-[43%] mx-[35%] py-2.5 items-center text-center rounded-sm text-white text-[.9rem] mt-16">
            <a href="#">See more</a>
        </button>

    </div>

    <div class="mb-56">
        <div class="lg:mx-32 mx-8 bg-[#FFF7E2] px-10 py-10 lg:flex relative">
            <div class="content space-y-2">
                <p data-aos="fade-up" data-aos-duration="1000" class="text-second text-[.9rem]">Healty Food</p>
                <h1 data-aos="fade-up" data-aos-duration="1200" class="text-[2.6rem] lg:w-[50%] md:w-[55%] font-bold">
                    Healthy And you Can Enjoy in The Morning</h1>
                <p data-aos="fade-up" data-aos-duration="1400" class="pb-5 lg:w-[45%] text-[.9rem] text-content">
                    The best food for you who like breakfast.
                </p>
                <button data-aos="fade-up" data-aos-duration="1600"
                    class="bg-second px-6 py-2.5 items-center text-center rounded-sm text-white text-[.9rem]">
                    <a href="#">Shop now</a>
                </button>
                <div data-aos="fade-up" data-aos-duration="1600" class="w-20 h-20 bg-primary rounded-full flex absolute fixed -bottom-60 -right-20 cursor-pointer">
                    <a href="#" class="text-6xl m-auto">🔝</a>
                </div>
            </div>
            <img data-aos="zoom-in" data-aos-duration="1800" src="{{URL::asset('img/bg-healty.svg') }}" alt=""
                class="absolute object-scale-down h-80 w-50 lg:top-10 md:top-10 top-[13rem] right-0 lg:w-auto md:w-[45%] w-[55%]">
        </div>
        
    </div>
    
    
    <div class="bg-[#1F2F00] lg:px-32 px-8 py-10 overflow-hidden" id="contact">
        <div class="lg:flex block font-content lg:space-x-10 space-x-0">
            <div>
              
                <div data-aos="fade-up" data-aos-duration="1000" class="logo font-head flex items-center space-x-3">
                    <img src="{{ URL::asset('img/logo.svg')}}" alt="" class="w-10">
                    <h1 class="font-bold md:block text-white hidden font-logo">MangResto</h1>
                </div>
               
                <div class="mt-6">
                    <p data-aos="fade-up" data-aos-duration="1200"
                        class="text-white text-[.9rem] lg:w-[80%] md:w-[45%]">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Quas rem ab tenetur distinctio cupiditate minus autem.</p>
                    <div data-aos="fade-up" data-aos-duration="1400"
                        class="social-icon flex items-center space-x-5 pt-5">
                        <a href="https://facebok.com">
                            <img src="{{ URL::asset('img/facebok.svg')}}" alt="">
                        </a>
                        <a href="https://instagram.com">
                            <img src="{{ URL::asset('img/instagram.svg')}}" alt="">
                        </a>
                        <a href="https://twitter.com">
                            <img src="{{ URL::asset('img/twitter.svg')}}" alt="">
                        </a>
                        <a href="https://linkedin.com">
                            <img src="{{ URL::asset('linkedin/twitter.svg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-4 grid-cols-2 gap-5 md:gap-y-0 gap-y-10 lg:mt-0 mt-10">
               
                <div data-aos="fade-up" data-aos-duration="1000" class="space-y-3 text-white">
                    <h4 class="font-semibold">Navigation</h4>
                    <li class="list-none text-[.9rem] text-content pt-2">
                        <a href="#" class="hover:text-second">Home</a>
                    </li>
                    <li class="list-none text-[.9rem] text-content">
                        <a href="#" class="hover:text-second">About Us</a>
                    </li>
                    <li class="list-none text-[.9rem] text-content">
                        <a href="#" class="hover:text-second">Shop</a>
                    </li>
                    <li class="list-none text-[.9rem] text-content">
                        <a href="#" class="hover:text-second">Contact</a>
                    </li>
                    <li class="list-none text-[.9rem] text-content">
                        <a href="#" class="hover:text-second">Blog</a>
                    </li>
                </div>

              
                <div data-aos="fade-up" data-aos-duration="1200" class="space-y-3 text-white">
                    <h4 class="font-semibold">Our Product</h4>
                    <li class="list-none text-[.9rem] text-content pt-2">
                        <a href="#" class="hover:text-second">Fast Food</a>
                    </li>
                    <li class="list-none text-[.9rem] text-content">
                        <a href="#" class="hover:text-second">Healty Food</a>
                    </li>
                </div>

                <div data-aos="fade-up" data-aos-duration="1400" class="space-y-3 text-white">
                    <h4 class="font-semibold">Form Member</h4>
                    <li class="list-none text-[.9rem] text-content pt-2">
                        <a href="#" class="hover:text-second">Sign In</a>
                    </li>
                    <li class="list-none text-[.9rem] text-content">
                        <a href="#" class="hover:text-second">Support</a>
                    </li>
                    <li class="list-none md:hidden block text-[.9rem] text-content">
                        <a href="#" class="hover:text-second">Privacy Policy</a>
                    </li>
                    <li class="list-none md:hidden block text-[.9rem] text-content">
                        <a href="#" class="hover:text-second">Merchan Agreement</a>
                    </li>
                </div>
                

                <div data-aos="fade-up" data-aos-duration="1600" class="space-y-3 text-white relative">
                    <h4 class="font-semibold">Address</h4>
                    <li class="list-none text-[.9rem] text-content pt-2 flex items-center space-x-2">
                        <img src="{{ URL::asset('img/maps.svg')}}" alt="maps">
                        <p class="text-content">4517 Washington Ave. Manchester, Kentucky 39495</p>
                    </li>
                    <li class="list-none text-[.9rem] text-content pt-2 flex items-center space-x-2">
                        <img src="{{ URL::asset('img/mail.svg')}}" alt="mail">
                        <p class="text-content">hallo@mangresto123@gmail.com</p>
                    </li>
                    <li class="list-none md:hidden block text-[.9rem] text-content pt-2 flex items-center space-x-2">
                        (021) 678-9102
                    </li>
                </div>
            </div>
        </div>
        <footer class="md:flex block items-center font-content text-white text-[.9rem] mt-20">
            <p class="md:text-left text-center">&copy;Mancoding. All Rights Reserved</p>
            <div class="md:flex hidden ml-auto md:space-x-8">
                <p>(021) 678-9102</p>
                <p>Privacy Policy</p>
                <p>Merchan Agreement</p>
            </div>
        </footer>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- {{-- <script src="./data/apiMenu.js"></script>  --}}
    <script>
        function Menu(e) {
        let list = document.querySelector('ul');
        e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add(
        'opacity-100')) : (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove(
        'opacity-100'))
        }

        function openDropdown(event, dropdown) {
            let element = event.target;
            while (element.nodeName !== "BUTTON") {
                element = element.parentNode;
            }
            var popper = Popper.createPopper(element, document.getElementById(dropdown), {
                placement: 'bottom-start'
            });
            document.getElementById(dropdown).classList.toggle("hidden");
            document.getElementById(dropdown).classList.toggle("block");
        }

        // Next Ind

        AOS.init();
        let sliderContainer = document.getElementById('sliderContainer');
        let slider =  document.getElementById('slider');
        let cards = slider.getElementsByTagName('li');

        let elementsToShow = 2;

        let sliderContainerWidht = sliderContainer.clientWidth;

        let cardWidth = sliderContainerWidht / elementsToShow;

        slider.style.width = cards.length*cardWidth+'px';
        slider.style.transition = 'margin';
        slider.style.transitionDuration = '1s';

        for (let index = 0; index < cards.length; index++) {
        const element = cards[index];
        element.style.width = cardWidth+'px';
        }

        function prev(){
            console.log(+slider.style.marginLeft.slice(0,-1))
            console.log(-cardWidth*(cards.length-elementsToShow))
            if (+slider.style.marginLeft.slice(0,-2) != -cardWidth*(cards.length-elementsToShow))
                slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2))-cardWidth)+'px'; //100px
            
        }

        function next(){
            if (+slider.style.marginLeft.slice(0,-2) != 0)
                slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2))+cardWidth)+'px'; //100px
        }
        
    </script>
    

</body>
</html>