<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>MobiShop</title>
    <!-- FONTS -->
    <script src="https://cdn.tailwindcss.com"></script>    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Poppins&family=Rubik&family=Ubuntu&display=swap" rel="stylesheet">
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- ZOOM -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.6.1/jquery.zoom.min.js" integrity="sha512-xhvWWTTHpLC+d+TEOSX2N0V4Se1989D03qp9ByRsiQsYcdKmQhQ8fsSTX3KLlzs0jF4dPmq0nIzvEc3jdYqKkw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <!-- FOOTER-ICONS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- MOBILEPHONES ISSUE FIX -->
    <style>
        html {
            height: --webkit-fill-available;
        }

        .main_container {
            height: --webkit-fill-available;
        }
    </style>
    <!-- //MOBILEPHONES ISSUE FIX -->

    <!-- FOOTER-STYLING-START -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all 0.3s ease;

            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
            scrollbar-width: none;
            /* Firefox */

        }

        *::-webkit-scrollbar {
            display: none;
            /* Safari and Chrome */
        }

        .container {
            padding-top: 70px;
            max-width: 100%;
            margin: auto;
        }

        .row {

            display: flex;

            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;
            color: white;




        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {

            width: fit-content;


            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 50%;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {

            text-transform: capitalize;

            text-decoration: none;
            font-weight: 300;



            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {



            padding-left: 8px;
        }

        .footer-col .social-links {
            display: flex;
            flex-direction: column;
            justify-content: center;
            list-style: none;

        }

        .footer-col .social-links li {
            margin: 0 10px 0px 0px;
        }

        .footer-col .social-links .social {
            display: flex;
            flex-direction: row;
            height: 36px;
            width: 36px;
            background-image: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            margin: 0 10px 0px 0;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: white;
            transition: 0.5s ease;
            font-size: 30px;
            text-decoration: none;
            position: relative;
        }

        .footer-col .social-links .social:hover {
            background-image: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            font-size: 40px;
        }

        .footer-col .social-icons .social::before {
            content: '';
            position: absolute;
            z-index: -1;
            height: 78px;
            width: 78px;

            border-radius: 50%;
            background: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            transform: scale(1);
            transition: 0.5s ease-in-out;
        }

        .footer-col .social-icons li .social:hover::before {
            transform: scale(8);

        }

        .fab {
            font-size: 20px
        }

        /*responsive*/
        @media(max-width:767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
                padding-left: 40px;
            }
        }

        @media (max-width: 574px) {
            .footer-col {
                width: 50%;
                padding-left: 40px;
            }

            .footer-col .social-links .social {
                height: 26px;
                width: 26px;
            }

            .fab {
                font-size: 16px;
            }
        }

        @media (max-width: 420px) {
            .footer-col {
                width: 100%;
                padding-left: 40px;
            }

            .footer-col .social-links .social {
                height: 26px;
                width: 26px;
            }

            .fab {
                font-size: 16px;
            }
        }

        *:focus {
            outline: none;
        }

        /*  body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            
        }*/
    </style>

    <!-- NOTIFICATION -->
    <style>
        .notify {
            animation: disappear 5s;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            appearance: textfield;
        }

        @keyframes disappear {
            0% {
                transform: translateX(-300px);
            }

            20% {
                transform: translateX(0px);
            }

            70% {
                transform: translateX(0px);

            }

            80% {
                transform: translateX(-100px)
            }

            100% {
                transform: translateX(1000px);
            }

        }

        .progress::after {
            animation: progress 3s ease-in-out;

        }

        @keyframes progress {
            0% {
                width: 100%;
            }

            100% {

                width: 0%;
            }
        }
    </style>
    <!-- //NOTIFICATION -->


    <!-- NOTIFICATION DELETE -->
    <style>
        .notify_delete {
            animation: disappear_delete 5s;
        }

        @keyframes disappear_delete {
            0% {
                scale: 10%;
                /* transform: translateY(-600px); */
            }

            20% {
                scale: 130%;
                transform: translateX(0px);
            }

            25% {
                scale: 100%;
            }

        }
    </style>
    <!-- //NOTIFICATION DELETE -->

    <!-- Fonts -->

</head>


<body>

    <div id="theme" class="">
        <!-- NAVBAR MOBILE FOOTER -->
        <div id="bottom-navigation" class="fixed z-50 bottom-0 h-12 w-full sm:hidden  bg-zinc-600  dark:bg-zinc-600 grid grid-cols-5 text-white  ">
            <div class="absolute w-full h-1 dark:bg-zinc-900 bottom-12  z-0"></div>
            <div class="w-11 m-auto flex flex-row items-center justify-center h-11 rounded-full  relative ">
                <a href="home" class="z-20 absolute w-full h-full opacity-0"></a>

                <input type="radio" name="button" id="nav_home" class="absolute w-full z-50 h-full opacity-0 peer/button checked:z-0" onclick="location.href='home'">
                <div class="transition-all   w-11 h-11 relative flex flex-row items-center justify-center rounded-full   peer-checked/button:ring-4 ring-white dark:ring-zinc-900 bg-zinc-600 dark:bg-zinc-600 peer-checked/button:-translate-y-5 peer-checked/button:before:absolute peer-checked/button:before:w-2 peer-checked/button:before:h-2 peer-checked/button:before:-left-2.5 before:top-4 peer-checked/button:before:bg-white dark:peer-checked/button:before:bg-zinc-900 dark:peer-checked/button:after:bg-zinc-900 peer-checked/button:after:absolute peer-checked/button:after:w-2 peer-checked/button:after:h-2 peer-checked/button:after:-right-2.5 peer-checked/button:after:bg-white after:top-4 before:transition-all before:delay-100 after:transition-all after:delay-100 ">
                    <i class="fa-solid fa-house  "></i>
                </div>
                <div class="dark:bg-zinc-600  transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-zinc-600 -left-3 -top-0.5  rounded-tr-lg"></div>
                <div class="dark:bg-zinc-600 transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-zinc-600 -right-3 -top-0.5 rounded-tl-lg z-40 "></div>
                <div class="absolute  bottom-0 text-xs  peer-checked/button:h-4 peer-checked/button:transition-all delay-100  h-0 overflow-hidden  ">Home</div>
            </div>
            <div class="w-11 m-auto flex flex-row items-center justify-center h-11 rounded-full  relative ">
                <input type="radio" name="button" id="nav_shop" class="absolute w-full z-50 h-full opacity-0 peer/button checked:z-0" onclick="location.href='shop'">
                <div class="transition-all   w-11 h-11 relative flex flex-row items-center justify-center rounded-full   peer-checked/button:ring-4 ring-white dark:ring-zinc-900 bg-zinc-600 dark:bg-zinc-600 peer-checked/button:-translate-y-5 peer-checked/button:before:absolute peer-checked/button:before:w-2 peer-checked/button:before:h-2 peer-checked/button:before:-left-2.5 before:top-4 peer-checked/button:before:bg-white dark:peer-checked/button:before:bg-zinc-900 dark:peer-checked/button:after:bg-zinc-900 peer-checked/button:after:absolute peer-checked/button:after:w-2 peer-checked/button:after:h-2 peer-checked/button:after:-right-2.5 peer-checked/button:after:bg-white after:top-4 before:transition-all before:delay-100 after:transition-all after:delay-100 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-ui-checks-grid " viewBox="0 0 17 17">
                        <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z" />
                    </svg>
                </div>
                <div class="dark:bg-zinc-600  transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-zinc-600 -left-3 -top-0.5  rounded-tr-lg"></div>
                <div class="dark:bg-zinc-600 transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-zinc-600 -right-3 -top-0.5 rounded-tl-lg z-40 "></div>
                <div class="absolute  bottom-0 text-xs  peer-checked/button:h-4 peer-checked/button:transition-all delay-100  h-0 overflow-hidden  ">category</div>
            </div>
            <div class="w-11 m-auto flex flex-row items-center justify-center h-11 rounded-full  relative ">
                <input onclick="location.href='mycart'" type="radio" name="button" id="" class=" absolute w-full z-50 h-full opacity-0  peer/button checked:bottom-5">
                <div class="transition-all   w-11 h-11 relative flex flex-row items-center justify-center rounded-full   peer-checked/button:ring-4 ring-white dark:ring-zinc-900 bg-zinc-600 dark:bg-zinc-600 peer-checked/button:-translate-y-5 peer-checked/button:before:absolute peer-checked/button:before:w-2 peer-checked/button:before:h-2 peer-checked/button:before:-left-2.5 before:top-4 peer-checked/button:before:bg-white dark:peer-checked/button:before:bg-zinc-900 dark:peer-checked/button:after:bg-zinc-900 peer-checked/button:after:absolute peer-checked/button:after:w-2 peer-checked/button:after:h-2 peer-checked/button:after:-right-2.5 peer-checked/button:after:bg-white after:top-4 before:transition-all before:delay-100 after:transition-all after:delay-100 ">
                    <i class="fa-solid fa-cart-shopping  p-3 rounded-full"></i>
                </div>
                <div class="dark:bg-zinc-600  transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-zinc-600 -left-3 -top-0.5  rounded-tr-lg"></div>
                <div class="dark:bg-zinc-600 transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-zinc-600 -right-3 -top-0.5 rounded-tl-lg z-40 "></div>
                <div class="absolute  bottom-0 text-xs  peer-checked/button:h-4 peer-checked/button:transition-all delay-100  h-0 overflow-hidden ">Cart</div>
            </div>
            <div class="w-11 m-auto flex flex-row items-center justify-center h-11 rounded-full  relative ">
                <a href="cart" class="z-20 absolute w-full h-full opacity-0"></a>
                <input onclick="location.href='setting'" type="radio" name="button" id="nav_setting" class=" absolute w-full z-50 h-full opacity-0  peer/button checked:bottom-5">
                <div class="transition-all   w-11 h-11 relative flex flex-row items-center justify-center rounded-full   peer-checked/button:ring-4 ring-white dark:ring-zinc-900 bg-zinc-600 dark:bg-zinc-600 peer-checked/button:-translate-y-5 peer-checked/button:before:absolute peer-checked/button:before:w-2 peer-checked/button:before:h-2 peer-checked/button:before:-left-2.5 before:top-4 peer-checked/button:before:bg-white dark:peer-checked/button:before:bg-zinc-900 dark:peer-checked/button:after:bg-zinc-900 peer-checked/button:after:absolute peer-checked/button:after:w-2 peer-checked/button:after:h-2 peer-checked/button:after:-right-2.5 peer-checked/button:after:bg-white after:top-4 before:transition-all before:delay-100 after:transition-all after:delay-100 ">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="dark:bg-zinc-600  transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-zinc-600 -left-3 -top-0.5  rounded-tr-lg"></div>
                <div class="dark:bg-zinc-600 transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-zinc-600 -right-3 -top-0.5 rounded-tl-lg z-40 "></div>
                <div class="absolute  bottom-0 text-xs  peer-checked/button:h-4 peer-checked/button:transition-all delay-100  h-0 overflow-hidden  ">Account</div>
            </div>
            <div class="w-11 m-auto flex flex-row items-center justify-center h-11 rounded-full  relative ">
                <input type="radio" name="button" id="" class="absolute w-full z-50 h-full opacity-0 peer/button">
                <div class="transition-all   w-11 h-11 relative flex flex-row items-center justify-center rounded-full   peer-checked/button:ring-4 ring-white dark:ring-zinc-900 bg-zinc-600 dark:bg-zinc-600 peer-checked/button:-translate-y-5 peer-checked/button:before:absolute peer-checked/button:before:w-2 peer-checked/button:before:h-2 peer-checked/button:before:-left-2.5 before:top-4 peer-checked/button:before:bg-white dark:peer-checked/button:before:bg-zinc-900 dark:peer-checked/button:after:bg-zinc-900 peer-checked/button:after:absolute peer-checked/button:after:w-2 peer-checked/button:after:h-2 peer-checked/button:after:-right-2.5 peer-checked/button:after:bg-white after:top-4 before:transition-all before:delay-100 after:transition-all after:delay-100 ">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div class="dark:bg-zinc-600  transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-zinc-600 -left-3 -top-0.5  rounded-tr-lg"></div>
                <div class="dark:bg-zinc-600 transition-all  opacity-0 peer-checked/button:opacity-100 w-2 h-2 absolute bg-zinc-600 -right-3 -top-0.5 rounded-tl-lg z-40 "></div>
                <div class="absolute  bottom-0 text-xs  peer-checked/button:h-4 peer-checked/button:transition-all delay-100  h-0 overflow-hidden  ">Settings</div>
            </div>



        </div>
        <!-- //NAVBAR MOBILE FOOTER-->
        <div class="notific_class absolute top-0 right-0" style="z-index:100"></div>
        <div class="max-h-[100vh] main_container overflow-scroll">
            <!--Mobile NAVBAR HEADER -->
            <section id='mobile_nav' style="z-index: 60;" class="sm:hidden  h-[56px] flex w-full shadow-md dark:shadow-zinc-800  bg-zinc-100  dark:bg-zinc-900 fixed top-0">
                <a href="home" class="w-[30%] flex items-center flex-row hover:cursor-pointer"> <img src="mobishop_logo.png" alt="logo" srcset="" class=" min-w-[160px] rounded ml-[.95rem]  ">
                    <!-- style="filter: drop-shadow(0px 1px 3px rgb(39 39 42/0.5));" -->
                </a>
                <div class="w-[70%] flex flex-row items-center justify-end pr-4 relative ">
                    <div class="absolute block sm:hidden">
                        <input type="checkbox" name="" id="search_check2" class="absolute  right-0 h-full w-[25px] cursor-pointer peer/search opacity-0" style="z-index: 70;">
                        <button class="border-2  border-zinc-500 relative overflow-hidden  search h-8 w-8  rounded-full flex flex-row peer-checked/search:w-48 items-center "><input type="search" onkeyup="searchItems(this)" name="" id="search_input2" class="ml-4 w-28 text-sm bg-transparent dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5  font-semibold m-auto dark:text-zinc-100 fa-solid fa-magnifying-glass absolute right-[5px] text-sm ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>
                    </div>

                </div>
                <button class="min-w-[3.4rem]   h-8 rounded-full m-auto mr-5  bg-transparent border-2 md:hidden border-zinc-500 flex items-center transition duration-300 focus:outline-none shadow" onclick="toggleTheme()">
                    <div id="switch-toggle" class="w-6 h-6 relative rounded-full transition duration-500 transform bg-yellow-500 -translate-x-[-0.25rem] p-1 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                </button>
            </section>
            <!--mobile //NAVBAR HEADER -->
            <!-- HEADER START-->
            <!-- DESKTOP -->
            <section id="header-desk" class="dark:bg-zinc-900 px-4 xl:px-0 md:pt-4 pt-2">
                <div class="hidden sm:flex   flex-row  justify-between  xl:w-[90vw] w-full m-auto  border-b md:pb-2  dark:border-zinc-500">
                    <div class="relative">
                        <a href="home" class="flex">
                            <img src="mobishop_logo.png" class="max-h-[4rem]" alt="" srcset="">
                        </a>
                    </div>
                    <div class="relative w-auto flex ">

                        <div class="flex flex-row ">
                            <div class="relative hidden sm:block m-auto mr-[4vw] ">
                                <input type="checkbox" name="" id="search_check" class="absolute  right-0 h-[25px] w-[25px] cursor-pointer peer/search opacity-0" style="z-index: 70;">
                                <button class="border-2  border-zinc-500 relative overflow-hidden  search h-8 w-8  rounded-full flex flex-row peer-checked/search:w-48 items-center "><input type="search" onkeyup="searchItems(this)" name="" id="search_input" class="ml-4 w-28 text-sm bg-transparent dark:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5  font-semibold m-auto dark:text-zinc-100 fa-solid fa-magnifying-glass absolute right-[5px] text-sm ">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="flex relative">
                                <nav class="">
                                    <ul class="list-none  font-pop h-full mr-[4vw] flex dark:text-white flex-row items-center gap-[4vw] ">
                                        <!-- <fieldset class="w-full  dark:text-gray-100 ">
                                            <label for="Search" class="hidden">Search</label>
                                            <div class="relative">
                                                <input type="search" name="Search" placeholder="Search..." class="w-32 py-2 pl-10 text-sm rounded-md sm:w-auto focus:outline-none dark:bg-gray-800 dark:text-gray-100 focus:dark:bg-gray-900 focus:dark:border-violet-400">
                                                <span class="absolute inset-y-0 right-0 flex items-center pr-2">
                                                    <button type="button" title="search" class="p-1 focus:outline-none focus:ring">
                                                        <svg fill="currentColor" viewBox="0 0 512 512" class="w-4 h-4 dark:text-gray-100">
                                                            <path d="M479.6,399.716l-81.084-81.084-62.368-25.767A175.014,175.014,0,0,0,368,192c0-97.047-78.953-176-176-176S16,94.953,16,192,94.953,368,192,368a175.034,175.034,0,0,0,101.619-32.377l25.7,62.2L400.4,478.911a56,56,0,1,0,79.2-79.195ZM48,192c0-79.4,64.6-144,144-144s144,64.6,144,144S271.4,336,192,336,48,271.4,48,192ZM456.971,456.284a24.028,24.028,0,0,1-33.942,0l-76.572-76.572-23.894-57.835L380.4,345.771l76.573,76.572A24.028,24.028,0,0,1,456.971,456.284Z"></path>
                                                        </svg>
                                                    </button>
                                                </span>

                                            </div>
                                        </fieldset> -->
                                        <a href="home">
                                            <li class="cursor-pointer active:opacity-70 select-none dark:hover:text-zinc-200 hover:text-rose-700 relative before:opacity-0 before:-translate-x-4 hover:before:translate-x-0 hover:before:opacity-100 before:transition-all  before:absolute hover:before:bg-rose-400 before:bg-rose-500 dark:before:bg-zinc-200  before:bottom-0 before:w-full before:h-[2.5px]">Home</li>
                                        </a>
                                        <a href="shop">
                                            <li class="cursor-pointer active:opacity-70 select-none dark:hover:text-zinc-200 hover:text-rose-700 relative before:opacity-0 before:-translate-x-4 hover:before:translate-x-0 hover:before:opacity-100 before:transition-all  before:absolute hover:before:bg-rose-400 before:bg-rose-500 dark:before:bg-zinc-200  before:bottom-0 before:w-full before:h-[2.5px]">Shop
                                            </li>
                                        </a>
                                        @if(session('user'))
                                        <a href="setting">
                                            <li class="cursor-pointer active:opacity-70 select-none dark:hover:text-zinc-200 hover:text-rose-700 relative before:opacity-0 before:-translate-x-4 hover:before:translate-x-0 hover:before:opacity-100 before:transition-all  before:absolute hover:before:bg-rose-400 before:bg-rose-500 dark:before:bg-zinc-200  before:bottom-0 before:w-full before:h-[2.5px]">
                                                Account
                                            </li>
                                        </a>
                                        @else
                                        <a href="login">
                                            <li class="cursor-pointer active:opacity-70 select-none dark:hover:text-zinc-200 hover:text-rose-700 relative before:opacity-0 before:-translate-x-4 hover:before:translate-x-0 hover:before:opacity-100 before:transition-all  before:absolute hover:before:bg-rose-400 before:bg-rose-500 dark:before:bg-zinc-200  before:bottom-0 before:w-full before:h-[2.5px]">
                                                Sign in
                                            </li>
                                        </a>
                                        @endif
                                    </ul>
                                </nav>

                                <!-- <div class="  w-8 ml-4 ">
                                <svg class="absolute bottom-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25" height="25">
                                    <path d="M24 8c-4.42 0-8 3.58-8 8 0 4.41 3.58 8 8 8s8-3.59 8-8c0-4.42-3.58-8-8-8zm0 20c-5.33 0-16 2.67-16 8v4h32v-4c0-5.33-10.67-8-16-8z" fill="#000000" class="color000 svgShape"></path>
                                    <path fill="none" d="M0 0h48v48H0z"></path>
                                </svg>
                                <svg class="absolute opacity-0 dark:opacity-100 bottom-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25" height="25">
                                    <path d="M24 8c-4.42 0-8 3.58-8 8 0 4.41 3.58 8 8 8s8-3.59 8-8c0-4.42-3.58-8-8-8zm0 20c-5.33 0-16 2.67-16 8v4h32v-4c0-5.33-10.67-8-16-8z" fill="#ffff" class="color000 svgShape"></path>
                                    <path fill="none" d="M0 0h48v48H0z"></path>
                                </svg>
                            </div>
                            <div class="block  ">
                                <h1 class=" dark:text-white text-xs border h-fit mt-2  font-bold lg:text-xs">Hello @if(session('umail') )                                    {{explode('@',session('umail'))[0]}}
                                    @else
                                    {{"Sign In"}}
                                    @endif
                                </h1>
                            </div> -->
                            </div>
                            <button class="w-[3.4rem]   h-8 rounded-full m-auto mr-5 bg-transparent border-2  border-zinc-500 items-center transition duration-300 focus:outline-none shadow" onclick="toggleTheme()">
                                <div id="switch-toggle-desktop" class="w-6 h-6 relative rounded-full transition duration-500 transform bg-yellow-500 -translate-x-[-0.25rem] p-1 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                            </button>

                            <a href="mycart" class="cart shadow-red m-auto dark:shadow-none border-rose-600 dark:border-zinc-500 border-2 focus:border-red-400 active:opacity-80  items-center bg-transparent dark:bg-gray-800 ml-4 p-0.5 justify-center align-middle justify-items-center  rounded-full w-8 h-8">
                                <div class="relative ml-0.5  w-full h-full">
                                    <i class="fa-solid fa-cart-shopping text-rose-600 dark:text-white"></i>
                                    <div class="absolute -top-1 -right-1 rounded-full h-4 w-4 bg-red-500  text-center   text-white overflow-hidden font-thin" style="font-size: 9.5px;">
                                        <h1 class="m-auto " id="cart_qty" style="margin-top: 1px;">{{$session}}</h1>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </section>

            @yield('content')
            <!-- HERO-START -->

            <!-- HERO-END -->

            <!-- FOOTER-SECTION-START -->
            <footer id="footer_desk" class="footer hidden sm:block  dark:bg-black relative w-full ">

                <div class="container md:pl-6 lg:pl-12    bg-opacity-10 dark:bg-opacity-10 h-fit  border-t dark:border-zinc-600 overflow-hidden">
                    <div class="row">
                        <div class="footer-col">
                            <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">company</h4>
                            <ul>
                                <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">about us</a></li>
                                <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">our services</a></li>
                                <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">privacy policy</a></li>
                                <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">affiliate program</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">get help</h4>
                            <ul>
                                <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">FAQ</a></li>
                                <li><a href="#" class="text-xs sm:text-sm  md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black ">shipping</a></li>
                                <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">returns</a></li>
                                <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">order status</a></li>
                                <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">payment options</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">online shop</h4>
                            <ul>
                                <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">watch</a></li>
                                <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">bag</a></li>
                                <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">shoes</a></li>
                                <li><a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:hover:text-white text-gray-500 hover:text-black">dress</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4 class="text-sm sm:text-base md:text-lg dark:text-white text-black">follow us</h4>

                            <div class="social-links">
                                <li>
                                    <div class="flex flex-row group my-1  items-center">

                                        <a href="#" class=" social text-xs sm:text-sm md:text-base"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-500 group-hover:text-black font-thin group-hover:pl-2  transition-all ease-linear group-hover:underline">Facebook</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex flex-row group my-1  items-center">

                                        <a href="#" class="social text-xs sm:text-sm md:text-base"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-500 group-hover:text-black font-thin group-hover:pl-2  transition-all ease-linear group-hover:underline">Tweeter</a>
                                    </div>
                                </li>

                                <li>
                                    <div class="flex flex-row group my-1  items-center">

                                        <a href="#" class="social text-xs sm:text-sm md:text-base"><i class="fab fa-instagram"></i></a>
                                        <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-500 group-hover:text-black font-thin group-hover:pl-2  transition-all ease-linear group-hover:underline">Instagram</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex flex-row group my-1  items-center ">

                                        <a href="#" class="social text-xs sm:text-sm md:text-base"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#" class="text-xs sm:text-sm md:text-base dark:text-gray-400 dark:group-hover:text-white text-gray-500 group-hover:text-black font-thin group-hover:pl-2  transition-all ease-linear group-hover:underline">Linkedin</a>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>

        </div>

        <!-- DARK-MODE END -->
        <!-- Swiper JS -->
        <div class=" h w-full flex flex-row justify-end text-center py-4 lg:px-4 absolute top-16">
            <div id='search_parent' class="p-2  mr-2 text-indigo-100 leading-none rounded-full items-center inline-flex " role="alert">



            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
        const switchToggle = document.querySelector('#switch-toggle');
        const switchToggleDesktop = document.querySelector('#switch-toggle-desktop');
        const theme = document.querySelector('#theme');
        // document.onload = () => {

        //     console.log("local storage ===", localStorage.getItem('isDarkmode'))
        //     themeDark = Boolean(localStorage.getItem('isDarkmode'))
        //     console.log(theme)
        //     if (themeDark === false) {

        //         theme.className.remove('dark')
        //         switchToggle.classList.add('bg-yellow-500', '-translate-x-[-0.25rem]')
        //         localStorage.setItem('isDarkmode', false)
        //         switchToggle.classList.remove('bg-gray-700', 'translate-x-full')
        //         setTimeout(() => {
        //             switchToggle.innerHTML = lightIcon

        //         }, 250);
        //     } else {

        //         theme.className = 'dark'

        //         switchToggle.classList.remove('bg-yellow-500', '-translate-x-[-0.25rem]')
        //         switchToggle.classList.add('bg-gray-700', 'translate-x-full')
        //         setTimeout(() => {
        //             switchToggle.innerHTML = darkIcon
        //         }, 250);
        //     }
        // }


        const darkIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                </svg>`

        const lightIcon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>`

        console.log('is dark mode === ', localStorage.getItem('isDarkmode'))
        console.log(switchToggle);
        if (localStorage.getItem('isDarkmode') === "true") {
            theme.className = 'dark'
            switchToggle.classList.remove('bg-yellow-500', '-translate-x-[-0.25rem]');
            switchToggle.classList.add('bg-gray-700', 'translate-x-full');
            switchToggleDesktop.classList.remove('bg-yellow-500', '-translate-x-[-0.25rem]');
            switchToggleDesktop.classList.add('bg-gray-700', 'translate-x-full');
            setTimeout(() => {
                console.log(switchToggle.innerHTML)
                switchToggle.innerHTML = darkIcon
                switchToggleDesktop.innerHTML = darkIcon
            }, 250);

        }


        let isDarkmode = Boolean(localStorage.getItem('isDarkmode'))

        function toggleTheme() {

            console.log(isDarkmode)
            theme.classList.toggle("dark")
            console.log("contains ", theme.classList.contains('dark'))
            if (theme.classList.contains('dark')) {
                switchToggle.classList.remove('bg-yellow-500', '-translate-x-[-0.25rem]')
                switchToggle.classList.add('bg-gray-700', 'translate-x-full')
                switchToggleDesktop.classList.remove('bg-yellow-500', '-translate-x-[-0.25rem]');
                switchToggleDesktop.classList.add('bg-gray-700', 'translate-x-full');
                setTimeout(() => {
                    switchToggle.innerHTML = darkIcon
                    switchToggleDesktop.innerHTML = darkIcon
                }, 250);
                localStorage.setItem('isDarkmode', true)
            } else {
                switchToggle.classList.add('bg-yellow-500', '-translate-x-[-0.25rem]')
                switchToggle.classList.remove('bg-gray-700', 'translate-x-full')
                switchToggleDesktop.classList.add('bg-yellow-500', '-translate-x-[-0.25rem]');
                switchToggleDesktop.classList.remove('bg-gray-700', 'translate-x-full');
                setTimeout(() => {
                    switchToggle.innerHTML = lightIcon
                    switchToggleDesktop.innerHTML = lightIcon

                }, 250);
                localStorage.setItem('isDarkmode', false)

            }

        }



        const page = window.location.href;

        if (window.location.href.includes("home")) {
            // console.log(localStorage.getItem("nav"))
            console.log("yes")
            document.querySelector("#nav_home").setAttribute("checked", "true")
        }
        if (page.includes('setting')) {
            console.log("settng tab")
            document.querySelector('#nav_setting').setAttribute("checked", true);
        };
        if (page.includes('shop')) {
            console.log("settng tab")
            document.querySelector('#nav_shop').setAttribute("checked", true);
        };


        if (window.location.href.includes("cart") || window.location.href.includes("checkout") || window.location.href.includes("payment") || window.location.href.includes("review")) {
            document.getElementById('bottom-navigation').style.display = "none";
            document.getElementById('mobile_nav').style.display = "none";
            document.getElementById('header-desk').style.display = "none";
            document.getElementById('footer_desk').style.display = "none";
            // console.log(localStorage.getItem("nav"))
            console.log("cart yes")
            // document.querySelector("#nav_cart").setAttribute("checked", "true")
        }
        if (window.location.href.includes("shop")) {
            document.getElementById('mobile_nav').style.display = "none";
            document.getElementById('header-desk').style.display = "none";  
        }
        if (window.location.href.includes("setting")) {
            document.getElementById('footer_desk').style.display = "none";
        }
        const search_input = document.getElementById('search_input');
        const search_input2 = document.getElementById('search_input2');
        const search_check = document.getElementById('search_check');
        const search_check2 = document.getElementById('search_check2');
        search_input.value = ""
        search_check.checked = false;
        search_check.addEventListener('change', (e) => {
            if (!e.target.checked) {
                search_input.setAttribute("placeholder", "")
                search_input.value = ""
            } else {
                search_input.setAttribute("placeholder", "enter keywords ..")
            }
        })
        search_input.addEventListener('keyup', function(event) {
            if (!search_check.checked) {
                search_input.value = ""
                search_input.setAttribute("placeholder", "")
            } else {
                search_input.active = true
                search_input.setAttribute("placeholder", "enter keywords ..")
            }
            const keyCode = event.keyCode;
            // Allow only alphabetic characters (A-Z and a-z)
            if ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (keyCode === 8)) {
                const search_parent = document.querySelector('#search_parent');
                if ((event.target.value !== " ") || (event.target.value !== "")) {
                    fetch(`/search_items?key=${event.target.value}`, {
                            method: 'GET',

                        })
                        .then(response => response.text())
                        .then(data => {
                            // handle the fetched data
                            // loader.style.display = 'none';
                            console.log(data)
                            if (data > 0) {
                                console.log(search_parent.children.length, "===lenght")

                                console.log("yr")
                                search_parent.innerHTML = `
                                <span class="flex z-50  border border-gray-300 bg-red-500 uppercase px-2 ml-1 py-1 text-xs font-semibold mr-3 ">${data} products found</span>
                                <a href='shop' class='z-50'><svg class="fill-current opacity-75 h-6 w-6 rounded-full bg-red-500 border-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                </svg></a>`

                            } else {
                                search_parent.innerHTML = `<span class="flex  border border-gray-300 bg-red-500 uppercase px-2 ml-1 py-1 text-xs font-semibold mr-3 z-50">${data} products found</span>`;
                            }
                            console.log("e.val", event.target.value)
                        })
                        .catch(error => {
                            // handle the error
                            // loader.style.display = 'none';
                        });
                } else {
                    search_parent.innerHTML = ``;
                }
            } else {
                event.preventDefault();
                return false;
            }
        });


        search_input2.value = ""
        search_check2.checked = false;
        search_check2.addEventListener('change', (e) => {
            if (!e.target.checked) {
                search_input2.setAttribute("placeholder", "")
                search_input2.value = ""
            } else {
                search_input2.setAttribute("placeholder", "enter keywords ..")
            }
        })
        search_input2.addEventListener('keyup', function(event) {
            if (!search_check2.checked) {
                search_input2.value = ""
                search_input2.setAttribute("placeholder", "")
            } else {
                search_input2.active = true
                search_input2.setAttribute("placeholder", "enter keywords ..")
            }
            const keyCode = event.keyCode;
            // Allow only alphabetic characters (A-Z and a-z)
            if ((keyCode >= 65 && keyCode <= 90) || (keyCode >= 97 && keyCode <= 122) || (keyCode === 8)) {
                const search_parent = document.querySelector('#search_parent');
                if ((event.target.value !== " ") || (event.target.value !== "")) {
                    fetch(`/search_items?key=${event.target.value}`, {
                            method: 'GET',

                        })
                        .then(response => response.text())
                        .then(data => {
                            // handle the fetched data
                            // loader.style.display = 'none';
                            console.log(data)
                            if (data > 0) {
                                console.log(search_parent.children.length, "===lenght")

                                console.log("yr")
                                search_parent.innerHTML = `
                                <span class="flex z-50  border border-gray-300 bg-red-500 uppercase px-2 ml-1 py-1 text-xs font-semibold mr-3 ">${data} products found</span>
                                <a href='shop' class='z-50'><svg class="fill-current opacity-100 h-6 w-6 rounded-full bg-red-500 border-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                </svg></a>`

                            } else {
                                search_parent.innerHTML = `<span class="flex  border border-gray-300 bg-red-500 uppercase px-2 ml-1 py-1 text-xs font-semibold mr-3 z-50">${data} products found</span>`;
                            }
                            console.log("e.val", event.target.value)
                        })
                        .catch(error => {
                            // handle the error
                            // loader.style.display = 'none';
                        });
                } else {
                    search_parent.innerHTML = ``;
                }
            } else {
                event.preventDefault();
                return false;
            }
        });


        function searchItems(e) {
            console.log(e.id)
            // if (!search_check.checked) {
            //     search_input.value = ""
            //     search_input.setAttribute("placeholder", "")
            // } else {
            //     search_input.active = true
            //     search_input.setAttribute("placeholder", "enter keywords ..")
            // }
            // if (e.value !== " ") {
            //     console.log(e.code)
            //     fetch(`/search_items?key=${e.value}`, {
            //             method: 'GET',

            //         })
            //         .then(response => response.text())
            //         .then(data => {
            //             // handle the fetched data
            //             // loader.style.display = 'none';
            //             const search_parent = document.querySelector('#search_parent');
            //             console.log(data)
            //             if (data > 0) {
            //                 console.log(search_parent.children.length, "===lenght")
            //                 if (search_parent.children.length === 1) {
            //                     console.log("yr")
            //                     search_parent.innerHTML += `<svg class="fill-current opacity-75 h-5 w-5 rounded-full bg-red-500 border-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            //         <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
            //     </svg>`
            //                 }
            //             } else {
            //                 search_parent.innerHTML = `<span class="flex rounded-full border border-gray-300 bg-red-500 uppercase px-2 ml-1 py-1 text-xs font-semibold mr-3 ">products found</span>`;
            //             }
            //             console.log("e.val", e.value)
            //         })
            //         .catch(error => {
            //             // handle the error
            //             // loader.style.display = 'none';
            //         });
            // }
        }

        /* 
                window.addEventListener('load', function() {

                    var divs = document.querySelectorAll("body div");
                    var lastDiv = divs[divs.length - 1];
                    console.log("last element ==", lastDiv.remove());
                });
        */
    </script>

</body>

</html>