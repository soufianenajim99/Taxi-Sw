<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body class="h-full">


    <div class="hidden fixed h-full bg-slate-600 bg-opacity-60 blur-2xl z-40 w-screen" id="overlay">
    </div>
    


<div class="min-h-screen">
  <header class="sticky inset-0 z-30 border-b border-slate-100 bg-white/80 backdrop-blur-lg">
    <nav
        class="mx-auto flex justify-around max-w-screen gap-8 px-6 transition-all duration-200 ease-in-out lg:px-12">
        <div class="relative flex items-center justify-center">
            <a href="">
                <img src='/images/—Pngtree—taxi vector icon_3722634.png' loading="lazy" style="color:transparent" width="80"
                    height="80"></a>
        </div>
        <ul class="hidden items-center justify-center gap-6 md:flex">
         
                @auth
                <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                    <a href="{{ url('/dashboard') }}" class=" inline-flex items-center rounded-md border border-transparent bg-yellow-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">Dashboard</a>
                </li>
                @else
                <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                    <a href="{{ route('login') }}" class=" inline-flex items-center rounded-md border border-transparent bg-yellow-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">Log in</a>
                </li>
                    @if (Route::has('register'))
                    <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                        <a href="{{ route('register') }}" class=" inline-flex items-center rounded-md border border-transparent bg-yellow-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">Register</a>
                    </li>
                    @endif
                @endauth
         
            <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                <a href="#">Contact</a>
            </li>
            <li class="pt-1.5 font-dm text-sm font-medium text-slate-700">
                <a href="#">About </a>
            </li>
           
            
        </ul>
  
       
      
        <button id="burger-btn" class="md:hidden"><i class="fa-solid fa-bars text-2xl"></i></button>
  
  
    </nav>
    <div class="md:hidden">
        <div id="burger-menu"
            class="absolute flex hidden flex-col items-center space-y-6 font-bold bg-gray-50 py-8 left-6 right-6 drop-shadow-lg border border-gray-300">
            <a href="" class=" inline-flex items-center rounded-md border border-transparent bg-rose-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">New Recipe</a>

            <a href="#">Contact</a>
       
            <a href="">About</a>
         
  
        </div>
  
    </div>
  </header>
  

  <div class="bg-white/80 h-90vh flex justify-center items-center">
    <div class="dark:bg-transparent">
        <div class="mx-auto flex flex-col items-center py-12 sm:py-24">
            <div class="w-11/12 sm:w-2/3 lg:flex justify-center items-center flex-col mb-5 sm:mb-10">
                <h1
                    class="text-4xl sm:text-5xl md:text-5xl lg:text-5xl xl:text-6xl text-center text-gray-800 dark:text-black font-black leading-10">
                   
                   Choose Your Things And Book Your
                    <span class="text-yellow-600">Reservation</span>
                    Now.
                </h1>
           <div class=""></div>
            </div>
            <div class="flex w-11/12 md:w-8/12 xl:w-6/12">
                <div class="flex rounded-md w-full">
                    <form action="#" method="GET" class="flex w-full">
                        {{-- <input type="text" name="search"
                            class="w-full p-3 rounded-md rounded-r-none border-2 border-gray-400  dark:bg-white-500 "
                            placeholder="keyword" value="" /> --}}
                            <select id="pricingType" name="pricingType"
                            class="w-full p-3 rounded-md rounded-r-none border-2 border-gray-400  dark:bg-white-500">
                            <option value="All" selected="">DEPART</option>
                            <option value="Freemium">Freemium</option>
                            <option value="Free">Free</option>
                            <option value="Paid">Paid</option>
                        </select>
                            <select id="pricingType" name="pricingType"
                            class="w-full p-3  rounded-none border-2 border-gray-400  dark:bg-white-500">
                            <option value="All" selected="">ARRIVEE</option>
                            <option value="Freemium">Freemium</option>
                            <option value="Free">Free</option>
                            <option value="Paid">Paid</option>
                        </select>
                            <select id="pricingType" name="pricingType"
                            class="w-full p-3 rounded-none border-2 border-gray-400  dark:bg-white-500">
                            <option value="All" selected="">DATE DE VOYAGE</option>
                            <option value="Freemium">Freemium</option>
                            <option value="Free">Free</option>
                            <option value="Paid">Paid</option>
                        </select>
                        <button
                            class="inline-flex items-center gap-2 bg-yellow-600 text-white text-lg font-semibold py-3 px-6 rounded-r-md">
                            <span>Find</span>
                            <svg class="text-gray-200 h-5 w-5 p-0 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>

                    </form>
                    </button>
                </div>
            </div>
        </div>
    </div>
  </div>
  






  <div id="popup-window" class="hidden fixed 
  h-48 w-800  p-3 m-auto top-0 right-0 left-0 z-50 ">
     <form class="max-w-md mx-auto p-6 bg-white border rounded-lg shadow-lg" action="{{route('traject.store')}}" method="POST">
         @csrf
         <div class=" mx-auto  bg-white shadow-lg rounded-lg">
             <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
                 Book an Reservation
             </div>
          
                 <div class="mb-4  mt-4">
                     <label class="block text-gray-700 font-bold mb-2" for="name">
                         Nom De Chaffeur
                     </label>
                     <input
                         class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                         id="name" type="text" value={{$traject->driver->user->name}}>
                 </div>
                 <div class="mb-4">
                     <label class="block text-gray-700 font-bold mb-2" for="name">
                         Type de Vehicule
                     </label>
                     <input
                         class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                         id="name" type="text" placeholder="Enter your name">
                 </div>
                 <div class="mb-4">
                     <label class="block text-gray-700 font-bold mb-2" for="name">
                         Traject
                     </label>
                     <input
                         class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                         id="name" type="text" placeholder="Enter your name">
                 </div>
                 <div class="mb-4">
                     <label class="block text-gray-700 font-bold mb-2" for="name">
                         license_plate
                     </label>
                     <input
                         class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                         id="name" type="text" placeholder="Enter your name">
                 </div>
                 
                 <div class="mb-4">
                     <label class="block text-gray-700 font-bold mb-2" for="date">
                         departure_time
                     </label>
                     <input
                         class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                         id="date" type="date" placeholder="Select a date">
                 </div>
                 
                 <div class="mb-4">
                     <label class="block text-gray-700 font-bold mb-2" for="service">
                         Paiment Type
                     </label>
                     <select
                         class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                         id="service" name="service">
                         <option value="">Select a service</option>
                         <option value="haircut">Haircut</option>
                         <option value="coloring">Coloring</option>
                         <option value="styling">Styling</option>
                         <option value="facial">Facial</option>
                     </select>
                 </div>
                 
                 <div class="flex items-center justify-center mb-4">
                     <button
                         class="mb-5 bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                         type="submit">
                         Book Appointment
                     </button>
                     <button
                         class=" close mb-5 bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                         >
                         close
                     </button>
                 </div>
         
             
         </div>
        
     </form>
    
 </div>








  
  <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
  
    <div class="border-b mb-5  text-sm">
        <div class=" flex items-center pb-2 pr-2  gap-10  uppercase">
            <a href="#"
                class="font-semibold inline-block border-b-2 border-yellow-600 pb-2 pr-2 text-yellow-600">Explore</a>
        </div>
        
  
       
    </div>
  
  


          
  
    
  
  
  </div>
  
  <!-- component -->
  <!-- Foooter -->
  <section class="w-full bg-gray-100">
    <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
        <nav class="flex flex-wrap justify-center -mx-5 -my-2 gap-10">
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    About
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Blog
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Team
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Pricing
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Contact
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Terms
                </a>
            </div>
        </nav>
        <div class="flex justify-center mt-8 space-x-6 gap-4">
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                    </path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Dribbble</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>
        <p class="mt-8 text-base leading-6 text-center text-gray-400">
            © 2024 Taxi-Driver, Inc. All rights reserved.
        </p>
    </div>
  </section>
</div>

<script src="{{url('./js/dashdr.js')}}"></script>


</body>
</html>