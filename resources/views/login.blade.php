<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- GOOGLE-FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Poppins&family=Rubik&family=Ubuntu&family=VT323&display=swap" rel="stylesheet">

    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        *:focus {
            outline: none;
        }

        * {
            -ms-overflow-style: none;
            /* Internet Explorer 10+ */
            scrollbar-width: none;
            /* Firefox */
        }

        *::-webkit-scrollbar {
            display: none;
            /* Safari and Chrome */
        }

        .logo_bg {
            background: linear-gradient(to right, #008aff, #00ffe7);
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: animate 5s linear infinite;
        }

        /* .login_box .login {
             background: linear-gradient(to right, #008aff, #00ffe7); 
             animation: anim_login 1.2s ease-in-out infinite; 
        } 
        */
        .model {
            perspective: 1000px;
            transform-style: preserve-3d;
        }

        .perspective {
            transform-style: preserve-3d;
            perspective: 1000px;
        }

        .three_d_top-1 {
            overflow: hidden;
            position: fixed;
            top: -.6rem;
            right: -1.8rem;
            height: 1rem;
            width: 2rem;
            transform-style: preserve-3d;
            transition: all;
            transform: rotateY(82deg) rotateZ(20deg);
            animation: depth_corner 1.25s;
        }

        .three_d_top-2 {
            overflow: hidden;
            position: fixed;
            top: -1.6rem;
            right: -1.5rem;
            height: 1rem;
            transform-style: preserve-3d;
            width: 2rem;
            transition: all;
            transform: rotateY(82deg) rotateZ(48deg);
            animation: depth_corner 1.25s;
        }

        .three_d {
            overflow: hidden;
            transform-style: preserve-3d;
            position: fixed;
            width: 2rem;
            right: -1.8rem;
            bottom: 0;
            height: 32rem;
            transition: all;
            transform: rotateY(-90deg);
            animation: depth 1.25s linear;
        }

        @keyframes depth {
            0% {
                transform: rotateY(0deg);

            }

            10% {
                transform: rotateY(-9deg);
            }

            20% {
                transform: rotateY(-18deg);
            }

            30% {
                transform: rotateY(-27deg);
            }

            40% {
                transform: rotateY(-36deg);
            }

            50% {
                transform: rotateY(-45deg);
            }

            60% {
                transform: rotateY(-54deg);
            }

            70% {
                transform: rotateY(-63deg);
            }

            80% {
                transform: rotateY(-72deg);
            }

            90% {
                transform: rotateY(-81deg);
            }

            100% {
                transform: rotateY(-90deg);
            }
        }

        @keyframes depth_corner {
            0% {
                transform: rotateY(0deg);

            }

            10% {
                transform: rotateY(-9deg);
            }

            20% {
                transform: rotateY(-18deg);
            }

            30% {
                transform: rotateY(-27deg);
            }

            40% {
                transform: rotateY(-36deg);
            }

            50% {
                transform: rotateY(-45deg);
            }

            60% {
                transform: rotateY(-54deg);
            }

            70% {
                transform: rotateY(-63deg);
            }

            80% {
                transform: rotateY(-72deg);
            }

            90% {
                transform: rotateY(-81deg);
            }

            100% {
                transform: rotateY(-90deg);
            }
        }

        .login_box:hover .login {
            animation: none;

        }


        @keyframes animate {

            0%,
            100% {
                filter: hue-rotate(0deg);
            }

            50% {
                filter: hue-rotate(360deg);
            }
        }
    </style>
    <title>Document</title>
</head>


<body class="font-rubic  text-white overflow-hidden bg-zinc-900">
    <!-- <div class="logo_bg flex absolute h-fit  top-10 left-10 z-10 cursor-pointer ">
        <i class="logo fa-solid fa-mobile md:text-5xl xs:text-4xl text-3xl"></i>
        <span class="logo w-1.5 mx-2 rounded md:text-5xl xs:text-4xl text-3xl ">|</span>
        <h1 class="logo font-extrabold md:text-5xl xs:text-4xl text-3xl">MobiShop</h1>
    </div> -->
    <div class=" min-h-[100vh] model  flex justify-center  items-center flex-row relative">
        <div class="w-full h-full overflow-hidden absolute ">
            <!-- <img src="Vector 1.svg" class="md:hidden absolute min-h-[1400px] min-w-[1200px]" style="top:-100px;rotate:60deg;left:100px;filter: drop-shadow(0px 0px 10px rgb(251 113 133));"> -->
        </div>
        <div class="absolute w-1/2 h-full bg-red-600  right-0 -z-10"></div>
        <div data-aos="flip-left" data-aos-duration="2000" class="w-64 rounded-2xl bg-zinc-100 blur  -z-10 h-[33.5rem]  absolute"></div>
        <div data-aos="flip-left" data-aos-duration="2000" class="w-[17rem] rounded-[2rem] bg-zinc-900 bg-opacity-50   -z-10 h-[34rem] border border-zinc-900 absolute"></div>
        <div data-aos="flip-left" data-aos-duration="2000" class="w-[16.5rem] rounded-[2rem] bg-white -z-10 h-[33.5rem] border-[10px]  relative before:w-6/12 before:h-5 before:bg-black before:top-0 before:absolute before:left-0 before:right-0 before:m-auto before:rounded-b-2xl  border-black">
            <!-- <div class="three_d bg-zinc-800 border-l-2 border-r-2 border-zinc-400"></div>
            <div class="perspective">

                <div class="three_d_top-1 bg-zinc-800 border-l-2 border-r-2 border-zinc-400"></div>
                <div class="three_d_top-2 bg-zinc-800 border-l-2 border-r-2 border-zinc-400"></div>
                <div class="three_d_top-3 bg-zinc-800 border-l-2 border-r-2 border-zinc-400"></div>
                <div class="three_d_top-4 bg-zinc-800 border-l-2 border-r-2 border-zinc-400"></div>
            </div> -->

        </div>
        <div data-aos="flip-left" data-aos-duration="2000" class="w-[16.5rem]   overflow-hidden border-[10px] border-black rounded-[2rem]  flex flex-col  h-[33.5rem] absolute px-3 text-black ">
            <!-- LOGIN -->
            <div>
                <a href="home" class="bottom-2 right-3 text-zinc-400 select-none hover:text-zinc-500 absolute z-50">
                    <div class="text-xs flex flex-row items-center font-[500] cursor-pointer">
                        go to home &nbsp; <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </a>
                <div class="flex header mt-24 w-full h-8 flex-row items-center justify-center">
                    <!-- <button class="w-7 h-7 focus:bg-zinc-300 shadow  rounded-full z-50 border-black ">

                    <i class="fa-solid fa-angle-left w-1/12 -ml-2 text-sm font-thin "></i>
                </button> -->
                    <div class=" text-center uppercase border-b-2 border-black">
                        Sign In Page
                    </div>
                </div>
                <div class="min-w-[230px] w-full mt-8 login">

                    <h1 class="text-sm text-zinc-500 text-center">
                        enter your email and password
                    </h1>
                    <form action="/login_page" method="POST" autocomplete="false" enctype="multipart/form-data " class="flex flex-col items-center">
                        @csrf
                        <div class="h-fit w-full relative mt-8   flex ">
                            <i class="fa-solid fa-envelope text-zinc-500 text-lg my-auto ml-1  mr-2"></i>
                            <div class="w-10/12  h-fit relative">
                                <input tabindex="1" type="email" onfocus="console.log(this.nextElementSibling.checked=true)" autocomplete="off" name="login_email" class="outline-none text-black border text-sm h-7 bg-zinc-50 border-zinc-400 rounded-sm pl-2 w-full " required>
                                <input type="radio" name="" onclick="focusIn(this)" class="w-full absolute h-7 left-0 peer checked:-z-10 z-20 opacity-0">
                                <h1 class="text-sm peer-checked:text-zinc-500 peer-checked:z-10 -z-10   peer-checked:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5 peer-checked:-top-2 absolute top-1.5 text-zinc-500 peer-checked:transition-all delay-200 ">
                                    email
                                </h1>
                                <h1 class="text-sm  peer-checked:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-[7.5px]  " style="color:rgb(161 161 176);">
                                    enter email address ...
                                </h1>
                            </div>
                        </div>
                        <div class="h-fit w-full relative mt-8 flex">
                            <i class="fa-solid fa-key text-zinc-500 text-lg my-auto ml-1  mr-2"></i>

                            <div class="w-10/12 h-fit ">
                                <input type="radio" id="" name="" onclick="passFocus(this)" class="w-full absolute h-7  left-0 peer/pass checked:-z-10 z-20 opacity-0">
                                <div class="flex w-full bg-zinc-50 border border-zinc-400 rounded-sm items-center relative">
                                    <input type="checkbox" name="" class="show_pass absolute right-0 peer/show z-20 opacity-0 h-6 w-6 ">
                                    <input tabindex="2" type="password" onfocus="console.log(this.parentNode.previousElementSibling.checked=true)" autocomplete="new-password" name="login_password" class="pass outline-none text-black text-sm h-7  w-10/12 bg-zinc-50  pl-2 " required>
                                    <i class="fa-solid   fa-eye text-zinc-500 peer-checked/show:opacity-0 absolute right-0 mr-2 "></i>
                                    <i class="fa-solid fa-eye-slash opacity-0 absolute right-0 text-zinc-500 peer-checked/show:opacity-100 mr-2"></i>
                                </div>
                                <h1 class="text-sm  peer-checked/pass:text-zinc-500 peer-checked/pass:z-10 z-10 peer-checked/pass:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5  peer-checked/pass:-top-2 absolute top-0.5 peer-checked/pass:transition-all delay-200 ">
                                    password
                                </h1>
                                <h1 class="text-sm  peer-checked/pass:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-1.5  " style="color:rgb(161 161 176);">
                                    enter password ...
                                </h1>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between items-center text-center mt-8">
                            <button type="submit" class=" bg-red-500 text-white hover:bg-red-500 px-7 rounded-full  py-1.5  shadow-md shadow-red-200 border-[1.5px] border-red-500 active:shadow-none active:opacity-80"><span>Login &nbsp;&nbsp;&nbsp; <i class="fa-solid fa-arrow-right-long m-auto login "></i></span></span></button>
                        </div>
                    </form>
                    <div class="w-full flex flex-col items-center   gap-1  md:mt-8 mt-8">
                        <button class="btn_forgot text-rubic text-sm md:text-base text-zinc-500   w-fit underline hover:text-zinc-900 focus:text-zinc-900">forgot password ?</button>
                        <button onclick=" signUp()" class=" text-rubic text-sm md:text-base  text-zinc-500   w-fit underline hover:text-zinc-900 focus:text-zinc-900">dont have an account ?</button>
                    </div>
                </div>
            </div>
            <!-- //LOGIN -->

            <!-- SIGNUP -->
            <div style="z-index:100" class="signup_box  absolute left-[100%] bg-white mt-8   h-[calc(100%-2.6rem)] rounded-b-2xl  w-[90%] transition-all delay-300">
                <button tabindex="-1" class="back absolute -top-1 text-red-600 ">&lt;&nbsp; back</button>

                <div class="flex header mt-16 w-full h-8 flex-row items-center justify-center">
                    <!-- <button class="w-7 h-7 focus:bg-zinc-300 shadow  rounded-full z-50 border-black ">

                    <i class="fa-solid fa-angle-left w-1/12 -ml-2 text-sm font-thin "></i>
                </button> -->
                    <div class=" text-center ml-[1rem] uppercase border-b-2 border-black">
                        Sign Up Page
                    </div>
                </div>
                <div class="min-w-[230px] bg-white w-full  mt-8 ">
                    <!-- <h1 class="text-sm text-zinc-500 text-center">
                        create your account
                    </h1> -->
                    <form action="/send" method="post" class=" bg-white">
                        @csrf
                        <div class="h-fit w-full relative mt-8   flex">
                            <i class="fa-solid fa-envelope text-zinc-500 text-lg my-auto ml-1  mr-2"></i>
                            <div class="w-full h-fit relative">
                                <input tabindex="-2" type="email" name="email" onfocus="console.log(this.nextElementSibling.checked=true)" class="outline-none text-black border text-sm h-7 bg-zinc-50 border-zinc-400 rounded-sm pl-2 w-full" required>
                                <input type="radio" tabindex="-4" name="" onclick="focusIn(this)" class="w-full absolute h-7 left-0 z-40 peer checked:-z-10 opacity-0">
                                <h1 class="text-sm peer-checked:text-zinc-500 peer-checked:z-20 -z-10   peer-checked:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5 peer-checked:-top-2 absolute top-1.5 text-zinc-500 peer-checked:transition-all delay-200 ">
                                    email
                                </h1>
                                <h1 class="text-sm  peer-checked:-z-10 z-20    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-[7.5px]  " style="color:rgb(161 161 176);">
                                    enter email address ...
                                </h1>
                            </div>
                        </div>
                        <div class="h-fit w-full relative mt-8   flex">
                            <i class="fa-solid fa-key text-zinc-500 text-lg my-auto ml-1 mr-2"></i>

                            <div class="w-full h-fit rounded-sm  border border-zinc-400 bg-zinc-50">
                                <input type="radio" tabindex="-5" id="" onclick="passFocus(this)" name="" class="w-full absolute h-7  left-0 peer/pass checked:-z-10 z-40 opacity-0">
                                <div class="flex w-full items-center relative border-b">
                                    <input type="checkbox" tabindex="-1" name="" class="show_pass absolute right-0 peer/show z-20 opacity-0 h-6 w-6">
                                    <input tabindex="-1" type="password" onfocus="console.log(this.parentNode.previousElementSibling.checked=true)" autocomplete="new-password" name="password" class="pass outline-none text-black text-sm h-7  w-10/12 bg-zinc-50  pl-2" required>
                                    <i class="fa-solid   fa-eye text-zinc-500 peer-checked/show:opacity-0 absolute right-0 mr-2 "></i>
                                    <i class="fa-solid fa-eye-slash opacity-0 absolute right-0 text-zinc-500 peer-checked/show:opacity-100 mr-2"></i>
                                </div>
                                <h1 class="text-sm peer-checked/pass:text-zinc-500 peer-checked/pass:z-20 z-10 peer-checked/pass:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5  peer-checked/pass:-top-2 absolute top-0.5 peer-checked/pass:transition-all delay-200 ">
                                    password
                                </h1>
                                <h1 class="text-sm  peer-checked/pass:-z-10 z-20    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-1.5  " style="color:rgb(161 161 176);">
                                    enter password ...
                                </h1>
                            </div>
                        </div>
                        <div class="h-fit w-full relative mt-8   flex">
                            <i class="fa-solid fa-key text-zinc-500 text-lg my-auto ml-1 mr-2"></i>

                            <div class="w-full h-fit">
                                <input type="radio" tabindex="-6" id="" onclick="passFocus(this)" name="" class="w-full absolute h-7  left-0 peer/pass checked:-z-10 z-40 opacity-0">
                                <div class="flex w-full border border-zinc-400 rounded-sm items-center relative bg-zinc-50">
                                    <input type="checkbox" tabindex="-1" name="" class="show_pass absolute right-0 peer/show z-20 opacity-0 h-6 w-6">
                                    <input tabindex="-3" type="password" name="confirm_pass" class="pass outline-none text-black text-sm h-7  w-10/12 bg-transparent  pl-2" required>
                                    <i class="fa-solid fa-eye text-zinc-500 peer-checked/show:opacity-0 absolute right-0 mr-2 "></i>
                                    <i class="fa-solid fa-eye-slash opacity-0 absolute right-0 text-zinc-500 peer-checked/show:opacity-100 mr-2 "></i>
                                </div>
                                <h1 class="text-sm peer-checked/pass:text-zinc-500 peer-checked/pass:z-10 z-10 peer-checked/pass:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5  peer-checked/pass:-top-2 absolute top-0.5 peer-checked/pass:transition-all delay-200 ">
                                    confirm password
                                </h1>
                                <h1 class="text-sm  peer-checked/pass:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-1.5  " style="color:rgb(161 161 176);">
                                    enter password ...
                                </h1>
                            </div>
                        </div>
                        <div class="flex flex-row justify-center items-center text-center mt-8">
                            <button tabindex="-1" type="submit" class=" bg-red-500 text-white hover:bg-red-600 px-7 rounded-full   py-1.5  shadow-md shadow-zinc-300 border-[1.5px] border-red-500 active:shadow-none active:opacity-80"><span>Sign Up&nbsp;&nbsp;&nbsp; <i class="fa-solid fa-arrow-right-long m-auto login"></i></span></span></button>

                        </div>
                    </form>
                </div>
            </div>
            <!-- //SIGNUP -->

            <!-- FORGOT PASSWORD  -->
            <div style="z-index:100" class="forgot_passbox   absolute left-[100%] bg-white mt-8   h-[calc(100%-2.6rem)] rounded-b-2xl  w-[90%] transition-all delay-300">
                <button tabindex="-1" class="back absolute -top-1 text-red-600 ">&lt;&nbsp; back</button>

                <div class="flex header mt-16 w-full h-8 flex-row items-center justify-center">
                    <!-- <button class="w-7 h-7 focus:bg-zinc-300 shadow  rounded-full z-50 border-black ">

                    <i class="fa-solid fa-angle-left w-1/12 -ml-2 text-sm font-thin "></i>
                </button> -->
                    <div class=" text-center ml-[1rem] uppercase border-b-2 border-black">
                        forgot password Page
                    </div>
                </div>
                <div class="min-w-[230px] bg-white w-full  mt-8 ">

                    <form action="/login_page" method="post" class=" bg-white">
                        @csrf
                        <div class="h-fit w-full relative mt-8   flex">
                            <i class="fa-solid fa-envelope text-zinc-500 text-lg my-auto ml-1  mr-2"></i>
                            <div class="w-full h-fit relative">
                                <input tabindex="-2" type="email" name="email" onfocus="console.log(this.nextElementSibling.checked=true)" class="outline-none text-black border text-sm h-7 bg-zinc-50 border-zinc-400 rounded-sm pl-2 w-full" required>
                                <input type="radio" tabindex="-4" name="" onclick="focusIn(this)" class="w-full absolute h-7 left-0 z-40 peer checked:-z-10 opacity-0">
                                <h1 class="text-sm peer-checked:text-zinc-500 peer-checked:z-20 -z-10   peer-checked:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5 peer-checked:-top-2 absolute top-1.5 text-zinc-500 peer-checked:transition-all delay-200 ">
                                    email
                                </h1>
                                <h1 class="text-sm  peer-checked:-z-10 z-20    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-[7.5px]  " style="color:rgb(161 161 176);">
                                    enter email address ...
                                </h1>
                            </div>
                        </div>
                        <div class="h-fit w-full relative mt-8   flex">
                            <i class="fa-solid fa-key text-zinc-500 text-lg my-auto ml-1 mr-2"></i>

                            <div class="w-full h-fit rounded-sm  border border-zinc-400 bg-zinc-50">
                                <input type="radio" tabindex="-5" id="" onclick="passFocus(this)" name="" class="w-full absolute h-7  left-0 peer/pass checked:-z-10 z-40 opacity-0">
                                <div class="flex w-full items-center relative border-b">
                                    <input type="checkbox" tabindex="-1" name="" class="show_pass absolute right-0 peer/show z-40 opacity-0 h-6 w-6">
                                    <input tabindex="-1" type="password" onfocus="console.log(this.parentNode.previousElementSibling.checked=true)" autocomplete="new-password" name="password" class="pass outline-none text-black text-sm h-7  w-10/12 bg-zinc-50  pl-2" required>
                                    <i class="fa-solid   fa-eye text-zinc-500 peer-checked/show:opacity-0 absolute right-0 mr-2 "></i>
                                    <i class="fa-solid fa-eye-slash opacity-0 absolute right-0 text-zinc-500 peer-checked/show:opacity-100 mr-2"></i>
                                </div>
                                <h1 class="text-sm peer-checked/pass:text-zinc-500 peer-checked/pass:z-20 z-10 peer-checked/pass:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5  peer-checked/pass:-top-2 absolute top-0.5 peer-checked/pass:transition-all delay-200 ">
                                    password
                                </h1>
                                <h1 class="text-sm  peer-checked/pass:-z-10 z-20    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-1.5  " style="color:rgb(161 161 176);">
                                    enter new password ...
                                </h1>
                            </div>
                        </div>
                        <div class="h-fit w-full relative mt-8 mb-8  flex">
                            <i class="fa-solid fa-key text-zinc-500 text-lg my-auto ml-1 mr-2"></i>

                            <div class="w-full h-fit">
                                <input type="radio" tabindex="-6" id="" onclick="passFocus(this)" name="" class="w-full absolute h-7  left-0 peer/pass checked:-z-10 z-40 opacity-0">
                                <div class="flex w-full border border-zinc-400 rounded-sm items-center relative bg-zinc-50">
                                    <input type="checkbox" tabindex="-1" name="" class="show_pass absolute right-0 peer/show z-40 opacity-0 h-6 w-6">
                                    <input tabindex="-3" type="password" name="confirm_pass" class="pass outline-none text-black text-sm h-7  w-10/12 bg-transparent  pl-2" required>
                                    <i class="fa-solid fa-eye text-zinc-500 peer-checked/show:opacity-0 absolute right-0 mr-2 "></i>
                                    <i class="fa-solid fa-eye-slash opacity-0 absolute right-0 text-zinc-500 peer-checked/show:opacity-100 mr-2 "></i>
                                </div>
                                <h1 class="text-sm peer-checked/pass:text-zinc-500 peer-checked/pass:z-10 z-10 peer-checked/pass:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5  peer-checked/pass:-top-2 absolute top-0.5 peer-checked/pass:transition-all delay-200 ">
                                    confirm password
                                </h1>
                                <h1 class="text-sm  peer-checked/pass:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-1.5  " style="color:rgb(161 161 176);">
                                    enter new password ...
                                </h1>
                            </div>
                        </div>
                        <h1 class="text-[10px] font-thin text-red-600 text-center">
                            Note: email id should be that which you have used during login and new password should be unique.
                        </h1>
                        <div class="flex flex-row justify-center items-center text-center mt-8">
                            <button tabindex="-1" type="submit" class=" bg-red-500 text-white hover:bg-red-600 px-7 rounded-full   py-1.5  shadow-md shadow-zinc-300 border-[1.5px] border-red-500 active:shadow-none active:opacity-80"><span>Create&nbsp;&nbsp;&nbsp; <i class="fa-solid fa-arrow-right-long m-auto login"></i></span></span></button>

                        </div>
                    </form>
                </div>
            </div>


            <!-- //FORGOT PASSWORD  -->
        </div>
        <!-- SIDE MOBILEPHONES -->
        <!-- <div class="h-[100vh]  overflow-hidden md:block hidden">
            <img src="Vector 1.svg" height="1500px" width="1500px" class="absolute " style="top:-120px;rotate:5deg;left:600px;filter: drop-shadow(0px 0px 10px rgb(251 113 133));">
            <img src="-original-imaghxen343tbjgj-removebg-preview.png" alt="" srcset="" class="absolute h-[450px] top-48 left-[40rem]  " style="rotate: 20deg;filter:drop-shadow(20px 20px 12px rgb(24 24 27 / 1))">
            <img src="-original-imagg4xza5rehdqv-removebg-preview.png" alt="" srcset="" class="absolute h-[550px] top-[20rem] left-[56rem]  shadow-sm " style="rotate: 20deg;filter:drop-shadow(20px 20px 12px rgb(24 24 27 / 1))">
            <img src="black-pixel.png" alt="" srcset="" class="absolute h-[450px] top-[-5rem] left-[74rem] rounded-md " style="rotate: 20deg;filter:drop-shadow(20px 20px 12px rgb(24 24 27  / 1))">
        </div> -->
        <!-- //SIDE MOBILEPHONES -->
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        function focusIn(e) {
            console.log('email sibling = ', e.previousElementSibling.focus())
        }

        function passFocus(e) {
            console.log('pass sibling = ', e.nextElementSibling.children[1].focus())
        }

        let btn_signup = document.querySelector('.btn_signup');
        let btn_forgot = document.querySelector('.btn_forgot');
        document.addEventListener('click', (e) => {
            console.log(e.target)
            if (e.target.className.slice(0, 9) == 'show_pass') {
                console.log('yes');
                if (e.target.checked) {

                    e.target.parentNode.children[1].setAttribute('type', 'text')
                } else {
                    e.target.parentNode.children[1].setAttribute('type', 'password')
                }
            }
            if (e.target.className.slice(0, 4) == 'back') {
                console.log(e.target.parentNode.parentNode.className.slice(0, 13))
                // if (e.target.parentNode.parentNode.className.slice(0, 13) == "email_veribox") {
                //     document.querySelector('.email_veribox').style.left = "105%";
                //     document.querySelector('.email_veribox').style.display = "none";

                // }
                // if (e.target.parentNode.parentNode.className.slice(0, 10) == "signup_box") {
                document.querySelector('.signup_box').style.left = "105%";
                setTimeout(() => {

                    document.querySelector('.signup_box').style.width = "none";
                }, 200);

                // }

                document.querySelector('.forgot_passbox').style.left = "105%";
                setTimeout(() => {
                    document.querySelector('.forgot_passbox').style.display = "none";
                }, 200);



                document.querySelector('.login').style.display = "block";

            }
            console.log(e.target.className.slice(0, 10))
        })

        // let showpass = document.getElementsByClassName('show_pass');
        // let pass = document.getElementsByClassName('pass');

        // showpass.addEventListener('click', () => {
        //     console.log(pass)
        //     let a = showpass.checked;
        //     if (a == true) {
        //         pass.setAttribute("type", "text")
        //     } else {
        //         pass.setAttribute("type", "password")

        //     }

        // })

        // let back = document.querySelector('.back');
        // back.addEventListener('click', () => {
        // })
        function signUp() {
            console.log("sign up clicked")
            document.querySelector('.signup_box').style.display = "block";
            setTimeout(() => {
                document.querySelector('.login').style.display = "none";

            }, 200);
            document.querySelector('.signup_box').style.left = "4px";

        }
        btn_forgot.addEventListener('click', () => {
            document.querySelector('.forgot_passbox').style.display = "block";
            setTimeout(() => {
                document.querySelector('.login').style.display = "none";

            }, 200);

            document.querySelector('.forgot_passbox').style.left = "4px";

        })
    </script>
</body>

</html>