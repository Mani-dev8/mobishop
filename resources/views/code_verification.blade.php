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

/*         .login_box .login {
            background: linear-gradient(to right, #008aff, #00ffe7); 
            animation: anim_login 1.2s ease-in-out infinite;
        }
 */
        /* .logo_bg {
            background: linear-gradient(to right, #008aff, #00ffe7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: animate 5s linear infinite;
        }


        .login_box:hover .login {
            animation: none;

        }

        @keyframes anim_login {
            0% {
                translate: 0px;
            }

            50% {
                translate: 10px 0px;
            }

            100% {
                translate: 0px;
            }

        }

        @keyframes animate {

            0%,
            100% {
                filter: hue-rotate(0deg);
            }

            50% {
                filter: hue-rotate(360deg);
            }
        } */

        .notifications {
            position: fixed;
            top: 30px;
            right: 20px;
        }

        .notifications :where(.toast, .column) {
            display: flex;
            align-items: center;
        }

        .notifications .toast {
            width: 400px;
            position: relative;
            overflow: hidden;
            list-style: none;
            border-radius: 4px;
            padding: 16px 17px;
            margin-bottom: 10px;
            background: var(--light);
            justify-content: space-between;
            animation: show_toast 0.3s ease forwards;
        }

        @keyframes show_toast {
            0% {
                transform: translateX(100%);
            }

            40% {
                transform: translateX(-5%);
            }

            80% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-10px);
            }
        }

        .notifications .toast.hide {
            animation: hide_toast 0.3s ease forwards;
        }

        @keyframes hide_toast {
            0% {
                transform: translateX(-10px);
            }

            40% {
                transform: translateX(0%);
            }

            80% {
                transform: translateX(-5%);
            }

            100% {
                transform: translateX(calc(100% + 20px));
            }
        }

        .toast::before {
            position: absolute;
            content: "";
            height: 3px;
            width: 100%;
            bottom: 0px;
            left: 0px;
            animation: progress 5s linear forwards;
        }

        @keyframes progress {
            100% {
                width: 0%;
            }
        }

        .toast.success::before,
        .btn#success {
            background: var(--success);
        }

        .toast.error::before,
        .btn#error {
            background: var(--error);
        }

        .toast.warning::before,
        .btn#warning {
            background: var(--warning);
        }

        .toast.info::before,
        .btn#info {
            background: var(--info);
        }

        .toast .column i {
            font-size: 1.75rem;
        }

        .toast.success .column i {
            color: var(--success);
        }

        .toast.error .column i {
            color: var(--error);
        }

        .toast.warning .column i {
            color: var(--warning);
        }

        .toast.info .column i {
            color: var(--info);
        }

        .toast .column span {
            font-size: 1.07rem;
            margin-left: 12px;
        }

        .toast i:last-child {
            color: #aeb0d7;
            cursor: pointer;
        }

        .toast i:last-child:hover {
            color: var(--dark);
        }

        @media screen and (max-width: 530px) {
            .notifications {
                width: 95%;
            }

            .notifications .toast {
                width: 100%;
                font-size: 1rem;
                margin-left: 20px;
            }

            .buttons .btn {
                margin: 0 1px;
                font-size: 1.1rem;
                padding: 8px 15px;
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
            <a href="login" class="top-6 left-2 text-red-500  absolute z-50">
                <div class="font-bold cursor-pointer">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
            </a>
            <a href="home" class="bottom-2 right-3 text-zinc-400 select-none hover:text-zinc-500 absolute z-50">
                <div class="text-xs flex flex-row items-center font-[500] cursor-pointer">
                    go to home &nbsp; <i class="fa-solid fa-arrow-right"></i>
                </div>
            </a>
            <div>
                <div class="flex header mt-24 w-full h-8 flex-row items-center justify-center">
                    <!-- <button class="w-7 h-7 focus:bg-zinc-300 shadow  rounded-full z-50 border-black ">

                    <i class="fa-solid fa-angle-left w-1/12 -ml-2 text-sm font-thin "></i>
                </button> -->
                    <div class=" text-center uppercase border-b-2 border-black">
                        Verify your Email
                    </div>
                </div>
                <div class="min-w-[230px] w-full mt-8 login">

                    <h1 class="text-sm text-zinc-500 text-center">
                        enter the 5 digit code which has been sent to your email id
                    </h1>
                    <form action="/login_page" method="POST" autocomplete="false" enctype="multipart/form-data " class="flex flex-col items-center">
                        @csrf
                        <div class="h-fit w-full relative mt-8   flex ">
                            <i class="fa-solid fa-lock text-zinc-500 text-lg my-auto ml-1  mr-2"></i>
                            <div class="w-10/12  h-fit relative">

                                <input tabindex="1" name="seven_code" maxlength="5" type="text" onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));" onfocus="console.log(this.nextElementSibling.checked=true)" autocomplete="off" class="outline-none text-black border text-sm h-7 bg-zinc-50 border-zinc-400 rounded-sm pl-2 w-full tracking-widest " required>
                                <input type="radio" name="" onclick="this.previousElementSibling.focus()" class="w-full absolute h-7 left-0 peer checked:-z-10 z-20 opacity-0">
                                <h1 class="text-sm peer-checked:text-zinc-500 peer-checked:z-10 -z-10   peer-checked:bg-white text-transparent p-0 -my-1 ml-2 -pb-0.5 peer-checked:-top-2 absolute top-1.5 text-zinc-500 peer-checked:transition-all delay-200 ">
                                    code
                                </h1>
                                <h1 class="text-sm  peer-checked:-z-10 z-10    text-transparent p-0 -my-1 ml-2 -pb-0.5  absolute top-[7.5px]  " style="color:rgb(161 161 176);">
                                    # # # # #
                                </h1>
                            </div>
                        </div>

                        <div class="flex flex-row justify-between items-center text-center mt-8">
                            <button type="submit" class=" bg-red-500 text-white hover:bg-red-500 px-7 rounded-full  py-1.5  shadow-md shadow-red-200 border-[1.5px] border-red-500 active:shadow-none active:opacity-80"><span>Verify now &nbsp;&nbsp;&nbsp; <i class="fa-solid fa-arrow-right-long m-auto login "></i></span></span></button>
                        </div>
                    </form>
                    <div class="w-full flex flex-col items-center   gap-1  md:mt-8 mt-8">

                        <button class="btn_verify text-rubic text-sm md:text-base  text-zinc-400   w-fit underline hover:text-zinc-900 focus:text-zinc-900">dont received resend again ?</button>
                        <h1 class="text-xs text-red-500  w-fit m-auto text-center mt-6">
                            note: sometime email get deliver into spam folder, if not received then retry again
                        </h1>
                    </div>
                </div>
            </div>
            <!-- //LOGIN -->

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

</body>


</html>