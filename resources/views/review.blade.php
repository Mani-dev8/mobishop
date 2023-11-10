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
            width: 33%;
        }

        50% {
            width: 66%;
        }

        100% {
            width: 100%;
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
<section class="checkout font-pop h-[100vh] w-[100vw] dark:bg-zinc-900">
    <div class="succ"></div>
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
                            <span class="text-xs sm:text-sm lg:text-base ">Home</span> <span class="text-gray-400">&nbsp;></span>
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
                        <span class="path absolute left-[0%] w-full  z-10 border-[.125rem] sm:border-2 bg-red-500 border-red-500 text-white  text-xs sm:text-sm md:text-base font-semibold ">
                        </span>
                        <span class=" z-20 w-5 h-5 md:w-6 md:h-6 bg-red-500 text-white rounded-full text-xs sm:text-sm md:text-base font-semibold pt-0.5 sm:pt-0">2
                            <div class="relative mt-2 -ml-5 text-zinc-400 font-[450]">
                                <span class="flex flex-row items-center">
                                    <i class="fa-regular fa-circle-user mr-1.5"></i>
                                    Details
                                </span>
                            </div>
                        </span>
                        <span class=" z-20 w-5 h-5 md:w-6 md:h-6 bg-red-500 text-white rounded-full text-xs sm:text-sm md:text-base font-semibold pt-0.5 sm:pt-0">3
                            <div class="relative mt-2 -ml-5 text-zinc-400 font-[450]">
                                <span class="flex flex-row items-center">
                                    <i class="fa-solid fa-indian-rupee-sign mr-1.5"></i>
                                    Payment
                                </span>
                            </div>
                        </span>
                        <span class="active-circle z-20 w-5 h-5 md:w-6 md:h-6 bg-red-500 text-white rounded-full text-xs sm:text-sm md:text-base font-semibold pt-0.5 sm:pt-0">4
                            <div class="relative mt-2 -ml-5 text-zinc-100 font-[450]">
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
    <div class="w-full dark:bg-zinc-900 mb-16 sm:mb-0">
        <p class="font-semibold text-lg m-4">Order Review</p>
        <div class="flex sm:flex-row flex-col  xl:w-[1280px] justify-between  w-auto  m-auto px-4 xl:px-0">
            <!-- PAYMENT DETAILS -->

            <div class="lg:w-8/12 px-4 rounded shadow-md border border-zinc-100 dark:border-zinc-700 dark:shadow-zinc-600  w-full overflow-hidden h-fit mb-4  mt-6  ">
                <section class="items">
                    <div class="flex py-2 flex-row justify-between  border-b mt-4 rounded ">
                        <img src="-original-imagg4xza5rehdqv-removebg-preview.png" class="w-[25%]" alt="" srcset="">
                        <div class="mt-1">
                            <h1 class="font-[500] text-sm sm:text-base">Nothing phone 1</h1>
                            <span class="text-sm font-rubic text-blue-700">$150. <span class="text-[10px]  mr-2">00</span> <span class="text-zinc-700"> x 1</span></span>
                        </div>
                    </div>
                    <div class="flex py-2 flex-row justify-between  border-b mt-4 rounded ">
                        <img src="-original-imagg4xza5rehdqv-removebg-preview.png" class="w-[25%]" alt="" srcset="">
                        <div class="mt-1">
                            <h1 class="font-[500] text-sm sm:text-base">Nothing phone 1</h1>
                            <span class="text-sm font-rubic text-blue-700">$150. <span class="text-[10px]  mr-2">00</span> <span class="text-zinc-700"> x 1</span></span>
                        </div>
                    </div>
                </section>
                <section class="shipping-address mt-4 w-full ">
                    <p class="font-semibold md:text-lg py-2 ">Shipping Address</p>
                    <div class="w-autp h-fit relative m-auto">
<textarea  name="" id="" rows="8" class="text-left border rounded  w-full p-4 pt-6 text-sm  mb-2 focus:border-red-400 relative "  >ht &#10;mello &#10;tello
                    </textarea>
                        <i class="fa-solid fa-pen-to-square absolute top-0.5 right-0.5 z-20 bg-white cursor-pointer opacity-60 p-1.5 hover:opacity-100 text-red-600"></i>
                    </div>

                </section>
            </div>
            <!-- //PAYMENT DETAILS -->
            <!-- ORDER SUMMARY -->
            <div class="sm:w-[30%] h-fit dark:border-zinc-700  min-w-[260px] md:min-w-[300px] rounded w-full sm:block transition-all sm:mt-[-5.5rem] md:-mt-[5.8rem] p-4 sm:ml-4 group/category  bg-white  dark:bg-zinc-900 shadow-md  dark:shadow-gray-600">
                <div class="dark:text-white border-b  text-sm lg:text-base dark:border-gray-500 pb-3  group-hover/category:text-red-500 text-center  text-black font-base  mt-2 ">
                    <h1 class=" text-lg lg:text-2xl font-rubic font-bold ">Order summary </h1>
                </div>

                <div class="mt-3">
                    <div class="flex mt-2 justify-between">
                        <span class="text-sm ">Subtotal:</span>
                        <span class="text-sm font-rubic">$499</span>
                    </div>
                    <div class="flex  mt-2 justify-between">
                        <span class="text-sm">Taxes:</span>
                        <span class="text-sm font-rubic">$49</span>
                    </div>
                    <div class="flex  mt-2 justify-between border-b pb-2 mb-5">
                        <span class="text-sm ">Discount:</span>
                        <span class="text-sm font-rubic">-</span>
                    </div>
                    <h1 class="total font-[500] font-rubic w-fit m-auto tracking-wide text-2xl">$548.<span class="text-base">50</span></h1>
                    <br>
                    <p class="font-thin text-sm">payment method : Razorpay </p>
                </div>

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

@endsection