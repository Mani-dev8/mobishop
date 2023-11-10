@extends('welcome')
@section('content')

<style>
    .path {
        animation: fill 1s;
    }

    .active-circle {
        animation: active 0.8s 0.5s;
    }

    @keyframes active {
        0% {
            scale: 90%;
        }

        50% {
            scale: 200%;
        }

        100% {
            scale: 100%;
        }
    }

    @keyframes fill {
        0% {
            width: 25%;
        }

        50% {
            width: 50%;
        }

        100% {
            width: 75%;
        }

    }

    .pay_card_flip {
        transform: rotate3d(0, 1, 0, 0.5turn);
        transition-duration: 1s;

        /* transition: all; */
    }

    .pay_card_back {
        transform: scalex(-1);

        /* transition: all; */
    }

    .bar {
        position: absolute;
    }
</style>
<div class="succ absolute top-0 left-0 flex flex-row items-center justify-center "></div>
<section class="checkout font-pop h-[100vh] w-[100vw] dark:bg-zinc-900 overflow-scroll ">
    <div class="w-full dark:bg-gray-50 bg-zinc-900">
        <div class="flex lg:h-40 h-36 xl:w-[1280px] w-auto flex-col m-auto px-4 xl:px-0">
            <div class="h-1/2 w-full flex items-center justify-between ">
                <h1 class="text-2xl  text-white dark:text-black font-bold uppercase ">Payment</h1>
                <div class="flex">
                    <a href="home">
                        <div class="flex text-white items-center dark:text-black mr-2">
                            <div class="flex relative items-center mr-1 ">
                                <i class="fa-sharp fa-solid fa-house   text-xs sm:text-sm lg:text-base  dark:text-black text-white "></i>
                            </div>
                            <span class="text-xs sm:text-sm lg:text-base ">Home</span> <span class="text-gray-400">&nbsp;&gt; </span>
                        </div>
                    </a>
                    <a href="cart">
                        <div class="flex text-white items-center dark:text-black mr-2">
                            <div class="flex relative font-bold items-center mr-1 text-base md:text-xl  dark:text-black text-white  ">
                                ₹
                            </div>
                            <span class="text-xs sm:text-sm lg:text-base">Payment</span> <span class="text-gray-400">&nbsp;></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="h-1/2 w-full pb-12 flex flex-row ">
                <div class="lg:w-2/3  w-full flex justify-between items-center text-center ">
                    <div class="w-full relative justify-around flex flex-row items-center ">
                        <span class=" border-[.125rem] sm:border-2 md:border-3  border-zinc-500 absolute w-full z-0"></span>
                        <span class="  z-20 w-5 h-5 md:w-6 md:h-6 bg-red-500 text-white rounded-full text-xs sm:text-sm md:text-base font-semibold pt-0.5 sm:pt-0 ">1
                            <div class="relative mt-2 -ml-3 text-zinc-400 font-[450]">
                                <span class="flex flex-row items-center">
                                    <i class="fa-solid fa-cart-shopping mr-1.5"></i>
                                    Cart
                                </span>
                            </div>
                        </span>
                        <span class="path absolute left-[0%] w-3/4  z-10 border-[.125rem] sm:border-2 bg-red-500 border-red-500 text-white  text-xs sm:text-sm md:text-base font-semibold ">
                        </span>
                        <span class=" z-20 w-5 h-5 md:w-6 md:h-6 bg-red-500 text-white rounded-full text-xs sm:text-sm md:text-base font-semibold pt-0.5 sm:pt-0">2
                            <div class="relative mt-2 -ml-5 text-zinc-400 font-[450]">
                                <span class="flex flex-row items-center">
                                    <i class="fa-regular fa-circle-user mr-1.5"></i>
                                    Details
                                </span>
                            </div>
                        </span>
                        <span class="active-circle z-20 w-5 h-5 md:w-6 md:h-6 bg-red-500 text-white rounded-full text-xs sm:text-sm md:text-base font-semibold pt-0.5 sm:pt-0">3
                            <div class="relative mt-2 -ml-5 text-zinc-100 dark:text-gray-800  font-[450]">
                                <span class="flex flex-row items-center">
                                    <i class="fa-solid fa-indian-rupee-sign mr-1.5"></i>
                                    Payment
                                </span>
                            </div>
                        </span>
                        <span class="z-20 w-5 h-5 md:w-6 md:h-6 bg-zinc-500 text-white rounded-full text-xs sm:text-sm md:text-base font-semibold pt-0.5 sm:pt-0">4
                            <div class="relative mt-2 -ml-5 text-zinc-400 font-[450]">
                                <span class="flex flex-row items-center">
                                    <i class="fa-regular fa-circle-check mr-2"></i>
                                    Review
                                </span>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="sm:min-w-[280px] md:min-w-[330px] xl:w-1/3"></div>
            </div>
        </div>
    </div>
    <div class="w-full dark:bg-zinc-900 mb-16 sm:mb-0 dark:text-gray-100">
        <h1 class="text-md  font-semibold text-lg pl-4 pt-4  mt-2">Select Payment Method</h1>
        <div class="flex sm:flex-row flex-col  xl:w-[1280px] justify-between  w-auto  m-auto px-4 xl:px-0">
            <!-- PAYMENT DETAILS -->
            <div class="lg:w-8/12 rounded shadow-md border border-zinc-100 dark:border-zinc-600 dark:shadow-zinc-700  w-full overflow-hidden h-fit mb-4  mt-6  ">
                <div class="w-full h-fit  ">
                    <div class="block  relative  pt-4 dark:border-zinc-600  h-fit min-h-[3.5rem] w-full border-b items-center px-2">
                        <span class="text-sm  font-semibold ml-2">Pay with Card</span>
                        <input type="checkbox" name="card" class="cb opacity-0 peer z-20 absolute w-full h-6 cursor-pointer " value="on" onchange="showpayment(this)" id="">

                        <i class="absolute top-5 right-5 fa-sharp fa-solid p-1 text-xs  peer-checked:text-white rounded-full peer-checked:bg-opacity-70 dark:peer-checked:bg-rose-500 peer-checked:bg-red-600  fa-chevron-up dark:text-white    sm:text-sm peer-checked:rotate-180"></i>
                        <div class="h-0 flex flex-col md:peer-checked:h-[24rem] peer-checked:h-[27rem] pb-2 overflow-hidden w-full items-center">
                            <div class=" pay_card  w-[300px]  my-5  h-40 border m-auto rounded shadow-md border-opacity-80 border-zinc-100 px-1 shadow-zinc-400 bg-zinc-900  dark:bg-white dark:bg-opacity-10 dark:border-zinc-500 dark:shadow-zinc-700 bg-opacity-20 relative pl-5">
                                <div class="front ">
                                    <div class="absolute w-12 h-9 top-5  bg-zinc-600 rounded before:absolute before:bg-yellow-400 before:opacity-40 before:w-9 before:mt-[.45rem] before:rounded-r  before:h-5 "></div>
                                    <div class="flex flex-col mt-[4.5rem]">
                                        <span id="s_id" class="text-base font-semibold opacity-50 dark:opacity-70">•••• •••• •••• ••••</span>
                                        <div class="flex flex-row justify-between mt-5">
                                            <span class="text-base font-semibold opacity-50  dark:opacity-70">FULL &nbsp; NAME </span>
                                            <span class="text-base font-semibold opacity-50 dark:opacity-70 mr-4">••/••</span>
                                        </div>

                                    </div>

                                </div>
                                <div class="back hidden relative">
                                    <div class="bar w-[299px] -left-1 right-0  -top-16 absolute h-9 bg-zinc-600">
                                    </div>
                                    <div class="flex mt-20">
                                        <div class="w-4/5 h-6 ml-2 bg-white "></div>
                                        <span class="text-base font-semibold opacity-50 ml-4 dark:opacity-70">***</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex md:flex-row flex-col gap-3 items-center justify-between mt-5">
                                <input type="text" onkeydown="assign(this)" onkeypress="return event.charCode >=48 && event.charCode<=57" name="cnum" id="cnum" onclick="original_orientation(this)" maxlength="12" placeholder="CARD NUMBER" class="border border-zinc-300 placeholder:text-sm focus:border-red-300 focus:shadow-sm focus:shadow-red-200 rounded-sm w-full py-0.5 sm:py-1 px-2 max-w-[300px] dark:focus:border-red-500 dark:bg-zinc-800 dark:border-zinc-600">
                                <input type="text" name="cname" id="cname" onkeypress="return (event.charCode>=65 &&event.charCode<=90)||(event.charCode>=97 &&event.charCode<=112)" onclick="original_orientation(this)" placeholder="FULL NAME" class="border border-zinc-300 placeholder:text-sm focus:border-red-300 focus:shadow-sm focus:shadow-red-200 rounded-sm w-full py-0.5 sm:py-1 px-2 max-w-[300px] dark:focus:border-red-500 dark:bg-zinc-800 dark:border-zinc-600">
                            </div>
                            <div class="flex max-w-[300px] md:max-w-none gap-3 mt-4 ">
                                <input type="text" name="fn" id="" onclick="original_orientation(this)" placeholder="MM/YY" class="border border-zinc-300 placeholder:text-sm focus:border-red-300 focus:shadow-sm focus:shadow-red-200 rounded-sm w-full py-0.5 sm:py-1 px-2 max-w-[300px] dark:focus:border-red-500 dark:bg-zinc-800 dark:border-zinc-600">
                                <input type="text" maxlength="3" onkeypress="return (event.charCode>=48 && event.charCode<=57)  " name="fn" id="" onclick="flip(this)" placeholder="CVV" class="border border-zinc-300 placeholder:text-sm focus:border-red-300 focus:shadow-sm focus:shadow-red-200 rounded-sm w-full py-0.5 sm:py-1 px-2 max-w-[300px] dark:focus:border-red-500 dark:bg-zinc-800 dark:border-zinc-600">
                            </div>
                            <div class="flex flex-row items-center w-full md:justify-end justify-center">
                                <button class="max-w-[300px] mt-5  active:opacity-70  rounded bg-red-500 shadow-md  shadow-zinc-200 hover:shadow-none border-[1.6px] border-red-500 dark:shadow-red-700 hover:bg-red-600 text-center text-white px-2 sm:py-2 py-1.5 w-full">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="block relative pt-4 h-fit min-h-[3.5rem] w-full items-center pl-4 ">
                        <span class="text-sm  font-semibold ">Pay with rayzorpay</span>
                        <input type="checkbox" name="card" class="cb opacity-0 peer z-20 absolute w-full h-6 cursor-pointer " value="on" onchange="showpayment(this)" id="">
                        <i class="absolute top-5 right-5 fa-sharp fa-solid p-1 text-xs  peer-checked:text-white rounded-full peer-checked:bg-opacity-70 dark:peer-checked:bg-rose-500 peer-checked:bg-red-600  fa-chevron-up dark:text-white    sm:text-sm peer-checked:rotate-180"></i>
                        <div class="h-0 peer-checked:h-20  mt-2 overflow-hidden  w-full flex flex-row items-center justify-between">
                            <div class="dark:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#072654" viewBox="0 0 1896 401" width="160" height="160">
                                    <path fill="#3395ff" d="m122.63 105.7-15.75 57.97 90.15-58.3-58.96 219.98 59.88.05L285.05.48" class="color3395FF svgShape "></path>
                                    <path d="M25.6 232.92.8 325.4h122.73l50.22-188.13L25.6 232.92m426.32-81.42c-3 11.15-8.78 19.34-17.4 24.57-8.6 5.22-20.67 7.84-36.25 7.84h-49.5l17.38-64.8h49.5c15.56 0 26.25 2.6 32.05 7.9 5.8 5.3 7.2 13.4 4.22 24.6m51.25-1.4c6.3-23.4 3.7-41.4-7.82-54-11.5-12.5-31.68-18.8-60.48-18.8H324.4l-66.5 248.1h53.67l26.8-100h35.2c7.9 0 14.12 1.3 18.66 3.8 4.55 2.6 7.22 7.1 8.04 13.6l9.58 82.6h57.5l-9.32-77c-1.9-17.2-9.77-27.3-23.6-30.3 17.63-5.1 32.4-13.6 44.3-25.4a92.6 92.6 0 0 0 24.44-42.5m130.46 86.4c-4.5 16.8-11.4 29.5-20.73 38.4-9.34 8.9-20.5 13.3-33.52 13.3-13.26 0-22.25-4.3-27-13-4.76-8.7-4.92-21.3-.5-37.8 4.42-16.5 11.47-29.4 21.17-38.7 9.7-9.3 21.04-13.95 34.06-13.95 13 0 21.9 4.5 26.4 13.43 4.6 8.97 4.7 21.8.2 38.5zm23.52-87.8-6.72 25.1c-2.9-9-8.53-16.2-16.85-21.6-8.34-5.3-18.66-8-30.97-8-15.1 0-29.6 3.9-43.5 11.7-13.9 7.8-26.1 18.8-36.5 33-10.4 14.2-18 30.3-22.9 48.4-4.8 18.2-5.8 34.1-2.9 47.9 3 13.9 9.3 24.5 19 31.9 9.8 7.5 22.3 11.2 37.6 11.2a82.4 82.4 0 0 0 35.2-7.7 82.11 82.11 0 0 0 28.4-21.2l-7 26.16h51.9L709.3 149h-52zm238.65 0H744.87l-10.55 39.4h87.82l-116.1 100.3-9.92 37h155.8l10.55-39.4h-94.1l117.88-101.8m142.4 52c-4.67 17.4-11.6 30.48-20.75 39-9.15 8.6-20.23 12.9-33.24 12.9-27.2 0-36.14-17.3-26.86-51.9 4.6-17.2 11.56-30.13 20.86-38.84 9.3-8.74 20.57-13.1 33.82-13.1 13 0 21.78 4.33 26.3 13.05 4.52 8.7 4.48 21.67-.13 38.87m30.38-80.83c-11.95-7.44-27.2-11.16-45.8-11.16-18.83 0-36.26 3.7-52.3 11.1a113.09 113.09 0 0 0-41 32.06c-11.3 13.9-19.43 30.2-24.42 48.8-4.9 18.53-5.5 34.8-1.7 48.73 3.8 13.9 11.8 24.6 23.8 32 12.1 7.46 27.5 11.17 46.4 11.17 18.6 0 35.9-3.74 51.8-11.18 15.9-7.48 29.5-18.1 40.8-32.1 11.3-13.94 19.4-30.2 24.4-48.8 5-18.6 5.6-34.84 1.8-48.8-3.8-13.9-11.7-24.6-23.6-32.05m185.1 40.8 13.3-48.1c-4.5-2.3-10.4-3.5-17.8-3.5-11.9 0-23.3 2.94-34.3 8.9-9.46 5.06-17.5 12.2-24.3 21.14l6.9-25.9-15.07.06h-37l-47.7 176.7h52.63l24.75-92.37c3.6-13.43 10.08-24 19.43-31.5 9.3-7.53 20.9-11.3 34.9-11.3 8.6 0 16.6 1.97 24.2 5.9m146.5 41.1c-4.5 16.5-11.3 29.1-20.6 37.8-9.3 8.74-20.5 13.1-33.5 13.1s-21.9-4.4-26.6-13.2c-4.8-8.85-4.9-21.6-.4-38.36 4.5-16.75 11.4-29.6 20.9-38.5 9.5-8.97 20.7-13.45 33.7-13.45 12.8 0 21.4 4.6 26 13.9 4.6 9.3 4.7 22.2.28 38.7m36.8-81.4c-9.75-7.8-22.2-11.7-37.3-11.7-13.23 0-25.84 3-37.8 9.06-11.95 6.05-21.65 14.3-29.1 24.74l.18-1.2 8.83-28.1h-51.4l-13.1 48.9-.4 1.7-54 201.44h52.7l27.2-101.4c2.7 9.02 8.2 16.1 16.6 21.22 8.4 5.1 18.77 7.63 31.1 7.63 15.3 0 29.9-3.7 43.75-11.1 13.9-7.42 25.9-18.1 36.1-31.9 10.2-13.8 17.77-29.8 22.6-47.9 4.9-18.13 5.9-34.3 3.1-48.45-2.85-14.17-9.16-25.14-18.9-32.9m174.65 80.65c-4.5 16.7-11.4 29.5-20.7 38.3-9.3 8.86-20.5 13.27-33.5 13.27-13.3 0-22.3-4.3-27-13-4.8-8.7-4.9-21.3-.5-37.8 4.4-16.5 11.42-29.4 21.12-38.7 9.7-9.3 21.05-13.94 34.07-13.94 13 0 21.8 4.5 26.4 13.4 4.6 8.93 4.63 21.76.15 38.5zm23.5-87.85-6.73 25.1c-2.9-9.05-8.5-16.25-16.8-21.6-8.4-5.34-18.7-8-31-8-15.1 0-29.68 3.9-43.6 11.7-13.9 7.8-26.1 18.74-36.5 32.9-10.4 14.16-18 30.3-22.9 48.4-4.85 18.17-5.8 34.1-2.9 47.96 2.93 13.8 9.24 24.46 19 31.9 9.74 7.4 22.3 11.14 37.6 11.14 12.3 0 24.05-2.56 35.2-7.7a82.3 82.3 0 0 0 28.33-21.23l-7 26.18h51.9l47.38-176.7h-51.9zm269.87.06.03-.05h-31.9c-1.02 0-1.92.05-2.85.07h-16.55l-8.5 11.8-2.1 2.8-.9 1.4-67.25 93.68-13.9-109.7h-55.08l27.9 166.7-61.6 85.3h54.9l14.9-21.13c.42-.62.8-1.14 1.3-1.8l17.4-24.7.5-.7 77.93-110.5 65.7-93 .1-.06h-.03z" fill="#000000" class="color000 svgShape"></path>
                                </svg>
                            </div>
                            <div class="hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#072654" viewBox="0 0 1896 401" width="160" height="160">
                                    <path fill="#3395ff" d="m122.63 105.7-15.75 57.97 90.15-58.3-58.96 219.98 59.88.05L285.05.48" class="color3395FF svgShape "></path>
                                    <path d="M25.6 232.92.8 325.4h122.73l50.22-188.13L25.6 232.92m426.32-81.42c-3 11.15-8.78 19.34-17.4 24.57-8.6 5.22-20.67 7.84-36.25 7.84h-49.5l17.38-64.8h49.5c15.56 0 26.25 2.6 32.05 7.9 5.8 5.3 7.2 13.4 4.22 24.6m51.25-1.4c6.3-23.4 3.7-41.4-7.82-54-11.5-12.5-31.68-18.8-60.48-18.8H324.4l-66.5 248.1h53.67l26.8-100h35.2c7.9 0 14.12 1.3 18.66 3.8 4.55 2.6 7.22 7.1 8.04 13.6l9.58 82.6h57.5l-9.32-77c-1.9-17.2-9.77-27.3-23.6-30.3 17.63-5.1 32.4-13.6 44.3-25.4a92.6 92.6 0 0 0 24.44-42.5m130.46 86.4c-4.5 16.8-11.4 29.5-20.73 38.4-9.34 8.9-20.5 13.3-33.52 13.3-13.26 0-22.25-4.3-27-13-4.76-8.7-4.92-21.3-.5-37.8 4.42-16.5 11.47-29.4 21.17-38.7 9.7-9.3 21.04-13.95 34.06-13.95 13 0 21.9 4.5 26.4 13.43 4.6 8.97 4.7 21.8.2 38.5zm23.52-87.8-6.72 25.1c-2.9-9-8.53-16.2-16.85-21.6-8.34-5.3-18.66-8-30.97-8-15.1 0-29.6 3.9-43.5 11.7-13.9 7.8-26.1 18.8-36.5 33-10.4 14.2-18 30.3-22.9 48.4-4.8 18.2-5.8 34.1-2.9 47.9 3 13.9 9.3 24.5 19 31.9 9.8 7.5 22.3 11.2 37.6 11.2a82.4 82.4 0 0 0 35.2-7.7 82.11 82.11 0 0 0 28.4-21.2l-7 26.16h51.9L709.3 149h-52zm238.65 0H744.87l-10.55 39.4h87.82l-116.1 100.3-9.92 37h155.8l10.55-39.4h-94.1l117.88-101.8m142.4 52c-4.67 17.4-11.6 30.48-20.75 39-9.15 8.6-20.23 12.9-33.24 12.9-27.2 0-36.14-17.3-26.86-51.9 4.6-17.2 11.56-30.13 20.86-38.84 9.3-8.74 20.57-13.1 33.82-13.1 13 0 21.78 4.33 26.3 13.05 4.52 8.7 4.48 21.67-.13 38.87m30.38-80.83c-11.95-7.44-27.2-11.16-45.8-11.16-18.83 0-36.26 3.7-52.3 11.1a113.09 113.09 0 0 0-41 32.06c-11.3 13.9-19.43 30.2-24.42 48.8-4.9 18.53-5.5 34.8-1.7 48.73 3.8 13.9 11.8 24.6 23.8 32 12.1 7.46 27.5 11.17 46.4 11.17 18.6 0 35.9-3.74 51.8-11.18 15.9-7.48 29.5-18.1 40.8-32.1 11.3-13.94 19.4-30.2 24.4-48.8 5-18.6 5.6-34.84 1.8-48.8-3.8-13.9-11.7-24.6-23.6-32.05m185.1 40.8 13.3-48.1c-4.5-2.3-10.4-3.5-17.8-3.5-11.9 0-23.3 2.94-34.3 8.9-9.46 5.06-17.5 12.2-24.3 21.14l6.9-25.9-15.07.06h-37l-47.7 176.7h52.63l24.75-92.37c3.6-13.43 10.08-24 19.43-31.5 9.3-7.53 20.9-11.3 34.9-11.3 8.6 0 16.6 1.97 24.2 5.9m146.5 41.1c-4.5 16.5-11.3 29.1-20.6 37.8-9.3 8.74-20.5 13.1-33.5 13.1s-21.9-4.4-26.6-13.2c-4.8-8.85-4.9-21.6-.4-38.36 4.5-16.75 11.4-29.6 20.9-38.5 9.5-8.97 20.7-13.45 33.7-13.45 12.8 0 21.4 4.6 26 13.9 4.6 9.3 4.7 22.2.28 38.7m36.8-81.4c-9.75-7.8-22.2-11.7-37.3-11.7-13.23 0-25.84 3-37.8 9.06-11.95 6.05-21.65 14.3-29.1 24.74l.18-1.2 8.83-28.1h-51.4l-13.1 48.9-.4 1.7-54 201.44h52.7l27.2-101.4c2.7 9.02 8.2 16.1 16.6 21.22 8.4 5.1 18.77 7.63 31.1 7.63 15.3 0 29.9-3.7 43.75-11.1 13.9-7.42 25.9-18.1 36.1-31.9 10.2-13.8 17.77-29.8 22.6-47.9 4.9-18.13 5.9-34.3 3.1-48.45-2.85-14.17-9.16-25.14-18.9-32.9m174.65 80.65c-4.5 16.7-11.4 29.5-20.7 38.3-9.3 8.86-20.5 13.27-33.5 13.27-13.3 0-22.3-4.3-27-13-4.8-8.7-4.9-21.3-.5-37.8 4.4-16.5 11.42-29.4 21.12-38.7 9.7-9.3 21.05-13.94 34.07-13.94 13 0 21.8 4.5 26.4 13.4 4.6 8.93 4.63 21.76.15 38.5zm23.5-87.85-6.73 25.1c-2.9-9.05-8.5-16.25-16.8-21.6-8.4-5.34-18.7-8-31-8-15.1 0-29.68 3.9-43.6 11.7-13.9 7.8-26.1 18.74-36.5 32.9-10.4 14.16-18 30.3-22.9 48.4-4.85 18.17-5.8 34.1-2.9 47.96 2.93 13.8 9.24 24.46 19 31.9 9.74 7.4 22.3 11.14 37.6 11.14 12.3 0 24.05-2.56 35.2-7.7a82.3 82.3 0 0 0 28.33-21.23l-7 26.18h51.9l47.38-176.7h-51.9zm269.87.06.03-.05h-31.9c-1.02 0-1.92.05-2.85.07h-16.55l-8.5 11.8-2.1 2.8-.9 1.4-67.25 93.68-13.9-109.7h-55.08l27.9 166.7-61.6 85.3h54.9l14.9-21.13c.42-.62.8-1.14 1.3-1.8l17.4-24.7.5-.7 77.93-110.5 65.7-93 .1-.06h-.03z" fill="#fff" class="color000 svgShape"></path>
                                </svg>
                            </div>

                            <button id="rzp-button1" class="mt-4  px-8 mr-5 py-1.5 
                             active:opacity-70  rounded bg-red-500 shadow-md  shadow-zinc-200 hover:shadow-none border-[1.6px] border-red-500 dark:shadow-red-700 hover:bg-red-600 text-center text-white">Pay</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //PAYMENT DETAILS -->
            <!-- ORDER SUMMARY -->
            <div class="sm:w-[30%] h-fit dark:border-zinc-700 border  min-w-[260px] md:min-w-[300px] rounded w-full sm:block transition-all sm:mt-[-5.5rem] md:-mt-[5.8rem] p-4 sm:ml-4 group/category  bg-white  dark:bg-zinc-900 shadow-md  dark:shadow-gray-600">
                <div class="dark:text-white border-b  text-sm lg:text-base dark:border-gray-500 pb-3  group-hover/category:text-red-500 text-center  text-black font-base  mt-2 ">
                    <h1 class=" text-lg lg:text-2xl font-rubic font-bold ">Order summary </h1>
                </div>
                <section class="items">

                    <input type="hidden" name="" value="{{$total=0}}">
                    @foreach($cartItems as $item)
                    <div class="flex py-2 flex-row justify-between  text-right xs:pr-5 sm:px-1 px-1 sm:pr-0 border-b dark:border-zinc-600 darK:bg-zinc-800  mt-4 rounded ">
                        <img src="productimages/{{$item->p_image}}" class="w-[25%]" alt="" srcset="">
                        <div class="mt-1 pr-2">
                            <input type="hidden" name="" value="{{$total=$total+($item->p_price*$item->qty)}}">
                            <h1 class="font-[500] text-sm sm:text-base">{{$item->p_name}}</h1>
                            <span class="text-sm font-rubic text-red-500">₹ {{$item->p_price}}. <span class="text-[10px]  mr-2">00</span> <span class="text-zinc-700 dark:text-zinc-400"> x {{$item->qty}}</span></span>
                        </div>
                    </div>
                    @endforeach
                </section>
                <div class="mt-3">
                    <div class="flex mt-2 justify-between">
                        <span class="text-sm ">Subtotal:</span>
                        <span class="text-sm font-rubic">₹ {{$total}}
                        </span>
                    </div>
                    <div class="flex  mt-2 justify-between border-b pb-2 mb-4">
                        <span class="text-sm ">Shipping:</span>
                        <span class="text-sm font-rubic">₹ 49</span>
                    </div>
                    <!-- <div class="flex  mt-2 justify-between border-b pb-2 mb-4">
                        <span class="text-sm ">Discount:</span>
                        <span class="text-sm font-rubic">-</span>
                    </div> -->
                    <h1 class="total font-[500] font-rubic w-fit m-auto tracking-wide text-2xl">₹ <span class="totalAmount">{{$total+49}}</span>.<span class="text-base">00</span></h1>
                </div>
                <div class="w-full">
                    <!-- relative  before:rounded-lg before:absolute dark:before:bg-gray-600  before:w-full before:h-[1px] before:bottom-0 -->
                    <!-- <div class="flex w-full  group/promo   transition-all ease-linear delay-200 mt-6 cursor-pointer relative   my-2">
                        <input class="w-full pr-4 h-6 z-10 opacity-0  absolute peer " type="checkbox" name="category" id="">
                        <i class="fa-sharp fa-solid p-1 text-xs  peer-checked:text-white rounded-full peer-checked:bg-opacity-70 dark:peer-checked:bg-rose-500 peer-checked:bg-red-600  fa-chevron-up dark:text-white absolute right-2  sm:text-sm peer-checked:rotate-180"></i>
                        <div class="peer-checked:h-auto h-4 mb-4">
                            <h1 class=" absolute dark:text-white text-sm  group-hover/promo:text-red-400 group-hover/promo:underline ">Promocode</h1>
                        </div>
                        <div class=" h-0    absoute peer-checked:my-4 pt-3 peer-checked:h-16   peer-checked:transition-all ease-in-out overflow-hidden peer-checked:block w-full pl-1 pr-2   ">
                            <div class="w-full items-center relative mt-4 flex  h-8">
                                <input type="text" class="w-full focus:outline-none  border h-full bg-transparent dark:text-white px-2">
                                <i class="dark:text-white text-black  absolute fa-solid fa-magnifying-glass right-2"></i>
                                </input>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- <button class="active:opacity-70 rounded bg-red-500 shadow-md  shadow-red-400 hover:shadow-none hover:bg-red-600 text-white text-center px-2 py-2  w-full">
                    <i class="fa-regular fa-credit-card text-white"></i> Proceed to checkout
                </button> -->
            </div>
            <!-- //ORDER SUMMARY -->
        </div>
    </div>

</section>
<script>
    const cb = document.querySelectorAll('.cb');

    function showpayment(e) {
        console.log(e.checked)
        if (e.checked) {
            console.log(e.value)
            e.value = "off"
            if (e.value === "off") {
                console.log("ck off")
                for (let i = 0; i < cb.length; i++) {
                    cb[i].checked = false;
                }
                e.checked = true;
            }

        } else {
            console.log(e.value)
            e.value = "on"
        }
    }

    const pay_card = document.querySelector('.pay_card');
    const back = document.querySelector('.back');
    const front = document.querySelector('.front');

    function flip(e) {
        pay_card.classList.add("pay_card_flip");
        setTimeout(() => {
            front.style.display = "none";
            back.classList.add("pay_card_back");
            console.log(e)
            back.classList.remove("hidden")
        }, 300);

    }

    function original_orientation(e) {
        back.classList.add("hidden")

        front.style.display = "block";
        pay_card.classList.remove("pay_card_flip")
    }
    const cnum = document.querySelector('#cnum');
    cnum.addEventListener('onkeypress', () => {
        console.log(cnum.value)

    })
    console.log(cnum)

    function assign(e) {
        const s_id = document.querySelector('#s_id');
        s_id.innerHTML = e.value
    }
</script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    const totalAmount = document.querySelector('.totalAmount').innerText;
    console.log(totalAmount);
    let payment_id;
    var options = {
        "key": "rzp_test_A0kVgihb52ODEI", // Enter the Key ID generated from the Dashboard
        "amount": totalAmount * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "currency": "INR",
        "name": "MOBISHOP",
        "description": "Test Transaction",
        "image": "https://i.postimg.cc/HxgvNNgs/mobishop-logo.png",
        "handler": function(response) {
            // console.log(response.razorpay_payment_id);
            if (response.razorpay_payment_id != null) {
                console.log(response.razorpay_payment_id);
                payment_id = response.razorpay_payment_id
                setTimeout(() => {
                    downloadPDF(payment_id)
                }, 1000);
                const succ = document.querySelector('.succ');
                console.log(succ.classList = 'z-50')
                document.querySelector('.checkout').remove();

                succ.innerHTML = ` 
            <div class=" bg-white dark:bg-zinc-900 flex flex-row items-center justify-center dark:text-white w-[100vw] h-[100vh]">
            <section class=" " >
            <div class="container px-4 mx-auto">
                <div class="max-w-2xl mx-auto text-center">
                <span class="inline-block mx-auto mb-6">
                    <svg width="54" height="54" viewbox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.9999 0.333374C12.3066 0.333374 0.333252 12.3067 0.333252 27C0.333252 41.6934 12.3066 53.6667 26.9999 53.6667C41.6933 53.6667 53.6666 41.6934 53.6666 27C53.6666 12.3067 41.6933 0.333374 26.9999 0.333374ZM39.7466 20.8667L24.6266 35.9867C24.2532 36.36 23.7466 36.5734 23.2133 36.5734C22.6799 36.5734 22.1733 36.36 21.7999 35.9867L14.2533 28.44C13.4799 27.6667 13.4799 26.3867 14.2533 25.6134C15.0266 24.84 16.3066 24.84 17.0799 25.6134L23.2133 31.7467L36.9199 18.04C37.6933 17.2667 38.9733 17.2667 39.7466 18.04C40.5199 18.8134 40.5199 20.0667 39.7466 20.8667Z" fill="#AFFF0F"></path>
                    </svg>
                </span>
                <span class="block mb-1 text-sm font-bold text-green-500">SUCCESS</span>
                <h3 class="text-2xl font-black mb-5">Your order has been placed</h3>
                
                <a class="group relative inline-block h-12 w-full xs:w-60 bg-blueGray-900 rounded-md" href="home">
                    <div class="absolute top-0 left-0 transform -translate-y-1 -translate-x-1 w-full h-full group-hover:translate-y-0 group-hover:translate-x-0 transition duration-300">
                    <div class="flex h-full w-full items-center justify-center bg-red-500 border-2 border-black rounded-md">
                        <span class="text-base font-black text-black">Continue Shopping</span>
                    </div>
                    </div>
                </a>
                </div>
            </div>
            </section>
            </div>`;
            }
        },
        "prefill": {
            "name": "Gaurav Kumar",
            "email": "gaurav.kumar@example.com",
            "contact": "9000090000"
        },
        "notes": {
            "address": "Razorpay Corporate Office"
        },
        "theme": {
            "color": "#EF4444"
        }
    };
    var rzp1 = new Razorpay(options);

    function downloadPDF(pay_id) {
        console.log("payment_id==", pay_id)
        fetch(`/generatepdf?o_amount=${totalAmount}&payment_id=${'#pay-10109201'}`)
            /* .then(response => response.text())
            .then(text => console.log(text)) */
            .then(response => response.blob())
            .then(blob => {
                const url = window.URL.createObjectURL(new Blob([blob], {
                    type: 'application/pdf'
                }));

                const link = document.createElement('a');
                link.href = url;
                link.download = 'example.pdf';

                link.click();

                window.URL.revokeObjectURL(url); 
            })
            .catch(error => console.error(error));

        console.log(" hii");
    }
    document.getElementById('rzp-button1').onclick = function(e) {
        rzp1.open();

        /*  async function addAddress() {
             const response = await fetch('/orderdetail', {
                 method: "GET"
             })
             const data = await response.text()
             console.log(data)
         }
         addAddress() */


        e.preventDefault();

    }
</script>
@endsection