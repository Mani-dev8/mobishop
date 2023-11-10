@extends('welcome')
@section('content')
<style>
    .card {
        position: relative;


        display: flex;
        align-items: center;
        transition: 0.5s;
    }

    .card .circle {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 20px;
        overflow: hidden;
    }

    .card .circle::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #696464;
        clip-path: circle(80px at center);
        transition: 0.5s;
    }

    .phone {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        height: 200px;
        pointer-events: none;
        transition: 0.5s;
        display: none;
    }

    .card:hover .circle::before {
        background: #000;

        clip-path: circle(400px at center);

    }

    .card:hover .phone {
        display: block;
        left: 75%;

        height: 100%;


    }

    .card .content {
        bottom: 50px;
        position: relative;
        height: 20px;
        left: 20%;
        padding: 20px 20px 20px 40px;
        transition: 0.5s;
        opacity: 0;
        visibility: hidden;
        border: 1px solid #696464;
        border-radius: 10px;
        background-color: #696464;
        margin-left: -50%;
    }

    .card:hover .content {

        opacity: 1;
        left: 0;
        visibility: visible;
    }
</style>
<input type="hidden" id="is_user" value="{{session('user')}}">

<section class="dark:bg-zinc-900 pt-2 ">
    <!-- <h1 class='dark:text-white text-black'>{{$name}}{{$session}}</h1> -->
    <div class="md:flex w-full md:h-[500px] xl:h-[520px]   sm:h-64 h-52    py-2 px-4 lg:px-16 mb-10 md:pt-14 pt-16 sm:pt-0">
        <div class="md:w-3/12  md:h-full md:flex md:flex-col hidden justify-between relative mr-1  ">
            <div class="w-full  flex  h-[32%] lg:scale-x-90  bg-red-300 bg-opacity-10 hover:bg-opacity-30">
                <div class="w-1/2 h-full flex flex-col justify-end">
                    <img src="banner\flip_samsung_banner.png" class="w-4/5 h-40 ml-4" alt="">
                </div>
                <div class="w-1/2 flex flex-col items-start justify-center h-full">
                    <h1 class=" xl:text-lg text-gray-400 ">Next Gen</h1>
                    <h1 class=" text-gray-400 xl:text-lg  "><span class="font-semibold xl:text-2xl text-xl mr-2 text-gray-800 dark:text-white">Flip</span>phone
                        <h1 class="font-semibold xl:text-2xl text-xl mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                        <button type="submit " class=" text-red-500 hover:text-red-300 mt-1 hover:underline ">
                            Shop now >
                        </button>
                </div>
            </div>
            <div class="w-full flex  h-[32%]   lg:scale-x-90 bg-blue-300 bg-opacity-10 hover:bg-opacity-30">
                <div class="w-1/2 h-full flex flex-col justify-end">
                    <img src="banner\flip_samsung_banner.png " class="w-4/5 h-40 ml-4" alt="">
                </div>
                <div class="w-1/2 flex flex-col items-start justify-center h-full">
                    <h1 class=" xl:text-lg text-gray-400 ">Next Gen</h1>
                    <h1 class=" text-gray-400 xl:text-lg  "><span class="font-semibold xl:text-2xl text-xl mr-2 text-gray-800 dark:text-white">Flip</span>phone
                        <h1 class="font-semibold xl:text-2xl text-xl mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                        <button type="submit " class=" text-blue-500 hover:text-blue-300 mt-1 hover:underline ">
                            Shop now >
                        </button>
                </div>
            </div>
            <div class="w-full flex  h-[32%]  lg:scale-x-90 bg-green-300 bg-opacity-10 hover:bg-opacity-30">
                <div class="w-1/2 h-full flex flex-col justify-end">
                    <img src="banner\flip_samsung_banner.png " class="w-4/5 h-40 ml-4" alt="">
                </div>
                <div class="w-1/2 flex flex-col items-start justify-center h-full">
                    <h1 class=" xl:text-lg text-gray-400 ">Next Gen</h1>
                    <h1 class=" text-gray-400 xl:text-lg  "><span class="font-semibold xl:text-2xl text-xl mr-2 text-gray-800 dark:text-white">Flip</span>phone
                        <h1 class="font-semibold xl:text-2xl text-xl mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                        <button type="submit " class=" text-green-500 hover:text-green-300 mt-1 hover:underline ">
                            Shop now >
                        </button>
                </div>
            </div>
        </div>
        <div class="md:w-9/12 sm:mt-2 md:mt-0 w-full h-full min-h-[170px] sm:min-h-[210px] swiper swipeBanner  ">

            <div class=" h-full w-full relative swiper-wrapper">
                <!-- 
                        <div class="absolute flex a w-full h-full bg-blue-400">
                            <div class="w-1/2 ">

                            </div>
                            <div class="w-1/2 ">

                            </div>
                        </div> 
                        -->
                <div style="flex-direction: row;display: flex;" class="swiper-slide  w-full dark:bg-gray-500 dark:bg-opacity-10 flex  flex-row   dark:text-white">
                    <div class="w-1/2  group   ">
                        <div class=" lg:mt-40 xl:mt-48 md:mt-14 sm:mt-10 mt-6 xl:pl-28 lg:pl-20 md:pl-14 sm:pl-10 pl-5 ">
                            <h1 class="font-thin text-sm sm:text-lg md:text-xl lg:text-2xl xl:text-3xl text tracking-wide  m-auto mb-2 ">Check our huge</h1>
                            <h1 class="font-semibold text-2xl sm:text-3xl  md:text-4xl tracking-wide lg:text-5xl xl:text-6xl  m-auto mb-2">Smartphones</h1>
                            <h1 class="font-thin md:text-sm lg:text-base xl:text-lg text-xs  m-auto">& Accessories collection</h1>
                            <button type="submit " class="bg-gray-800 mt-4 group-hover:scale-110 text-white transition-all group-hover:ring border border-transparent group-hover:border-gray-50  group-hover:ring-gray-500 w-fit md:p-1 active:opacity-80
                                    dark:text-black dark:bg-gray-50 dark:group-hover:border-gray-800 dark:group-hover:ring-gray-300       
                                    ">
                                <h1 class="w-fit border border-transparent text-center p-1 sm:text-base text-sm"> Shop Now ></h1>
                            </button>
                        </div>
                    </div>
                    <div class="w-1/2 h-full  flex flex-row items-center justify-center relative ">
                        <img src="banner\phone-banner-PhotoRoom.png-PhotoRoom.png" class="h-full m-auto  lg:h-96" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" md:hidden grid grid-cols-3 px-2   sm:h-fit   select-none  ">
        <div class=" flex flex-row    min-w-full  scale-90 bg-red-300 hover:bg-red-400 bg-opacity-20 hover:bg-opacity-10">
            <div class="w-1/2 h-full flex flex-row items-end">
                <img src="banner\flip_samsung_banner.png " class="min-h-[50%]  " alt="">
            </div>
            <div class="w-1/2 flex flex-col items-start justify-center h-full">
                <h1 class="text-[9px] sm:text-sm dark:text-gray-400 text-gray-500  md:mb-0 ">Next Gen</h1>
                <h1 class="text-[9px] sm:text-sm  dark:text-gray-400 text-gray-500  "><span class="font-semibold sm:text-base  mr-2 text-gray-800 dark:text-white ">Flip</span>phone
                    <h1 class="font-semibold text-[9px] sm:text-base   mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                    <button type="submit " class="text-[9px] sm:text-sm md:text-lg  text-red-500 hover:text-red-300  mt-1 hover:underline ">
                        Shop now >
                    </button>
            </div>
        </div>
        <div class=" flex flex-row   min-w-full  scale-90 bg-blue-300 hover:bg-blue-400 bg-opacity-20 hover:bg-opacity-10">
            <div class="w-1/2 h-full flex flex-row items-end">
                <img src="banner\flip_samsung_banner.png " class="min-h-[50%]  " alt="">
            </div>
            <div class="w-1/2 flex flex-col items-start justify-center h-full">
                <h1 class="text-[9px] sm:text-sm dark:text-gray-400 text-gray-500  md:mb-0 ">Next Gen</h1>
                <h1 class="text-[9px] sm:text-sm  dark:text-gray-400 text-gray-500  "><span class="font-semibold sm:text-base  mr-2 text-gray-800 dark:text-white ">Flip</span>phone
                    <h1 class="font-semibold text-[9px] sm:text-base   mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                    <button type="submit " class="text-[9px] sm:text-sm md:text-lg  text-blue-500 hover:text-blue-300  mt-1 hover:underline ">
                        Shop now >
                    </button>
            </div>
        </div>
        <div class=" flex flex-row   min-w-full scale-90 bg-green-300 hover:bg-blue-400 bg-opacity-20 hover:bg-opacity-10">
            <div class="w-1/2 h-full flex flex-row items-end">
                <img src="banner\flip_samsung_banner.png " class="min-h-[50%]  " alt="">
            </div>
            <div class="w-1/2 flex flex-col items-start justify-center h-full">
                <h1 class="text-[9px] sm:text-sm dark:text-gray-400 text-gray-500  md:mb-0 ">Next Gen</h1>
                <h1 class="text-[9px] sm:text-sm  dark:text-gray-400 text-gray-500  "><span class="font-semibold sm:text-base  mr-2 text-gray-800 dark:text-white ">Flip</span>phone
                    <h1 class="font-semibold text-[9px] sm:text-base   mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                    <button type="submit " class="text-[9px] sm:text-sm md:text-lg  text-green-500 hover:text-green-300  mt-1 hover:underline ">
                        Shop now >
                    </button>
            </div>
        </div>

        <!-- <div class="pt-2 pl-2 flex flex-row  sm:w-1/3 min-w-fit  scale-90 bg-blue-300 bg-opacity-20">
            <div class="w-1/2 h-full flex flex-row items-end">
                <img src="banner\flip_samsung_banner.png " class="h-32 w-32 xs:h-36 xs:w-36 " alt="">
            </div>
            <div class="w-1/2 flex flex-col items-start justify-center h-full">
                <h1 class="text-xs xs:text-sm sm:text-base dark:text-gray-400 text-gray-500 ">Next Gen</h1>
                <h1 class="text-xs xs:text-sm sm:text-base dark:text-gray-400 text-gray-500  "><span class="font-semibold text-base xs:text-lg sm:text-xl mr-2 text-gray-800 dark:text-white ">Flip</span>phone
                    <h1 class="font-semibold text-base xs:text-lg sm:text-xl mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                    <button type="submit " class=" text-blue-500 hover:text-blue-300  mt-1 hover:underline ">
                        Shop now >
                    </button>
            </div>
        </div>
        <div class="pt-2 pl-2 flex flex-row  sm:w-1/3 min-w-fit  scale-90 bg-green-300 bg-opacity-20">
            <div class="w-1/2 h-full flex flex-row items-end">
                <img src="banner\flip_samsung_banner.png " class="h-32 w-32 xs:h-36 xs:w-36 " alt="">
            </div>
            <div class="w-1/2 flex flex-col items-start justify-center h-full">
                <h1 class="text-xs xs:text-sm sm:text-base dark:text-gray-400 text-gray-500 ">Next Gen</h1>
                <h1 class="text-xs xs:text-sm sm:text-base dark:text-gray-400 text-gray-500  "><span class="font-semibold text-base xs:text-lg sm:text-xl mr-2 text-gray-800 dark:text-white ">Flip</span>phone
                    <h1 class="font-semibold text-base xs:text-lg sm:text-xl mr-2 text-gray-800 dark:text-white ">Best Camera</h1>
                    <button type="submit " class=" text-green-500 hover:text-green-300  mt-1 hover:underline ">
                        Shop now >
                    </button>
            </div>
        </div> -->


    </div>
    <!-- PRODUCT-ITEM-SECTION-START -->
    <div class="pt-2  px-5 py-2 sm:px-10  group/pro mb-16  ">
        <div class="flex mt-6 mb-2 flex-row justify-between before:absolute border-b ">
            <div class="mb-4 dark:text-white text-base  sm:text-lg md:text-xl tracking-wide font-rubic font-bold "><span class="before:absolute before:w-1/2 relative before:h-[14%] md:before:top-10 before:top-9 sm:before:top-10  before:z-10 before:bg-red-500 text-red-500 group-hover/brand:before:w-full before:transition-all before:ease-in-out before:delay-200 "> <span class=" dark:text-white text-zinc-900  ">Shop by</span> Brand</span></div>
            <a href='shop' class="z-20 border h-fit hover:ring hover:ring-gray-700 dark:hover:ring dark:hover:ring-gray-50 border-transparent hover:border-white dark:hover:border-black flex flex-row px-2 dark:text-zinc-300 active:opacity-80 dark:active:ring-2 lg:py-1  dark:active:ring-gray-400 text-white dark:bg-zinc-700 bg-gray-700 text-center font-thin sm:text-base text-sm py-0.5">More <span class="md:block hidden mx-1">products</span>></a>
        </div>

        <div class="grid px-4 sm:pt-10 grid-cols-2 gap-y-6 gap-x-4 md:gap-y-20 mb-10   md:grid-cols-3 lg:grid-cols-4">
            @foreach($data as $item)
            <div class="dark:bg-zinc-700 pt-2 border   dark:border-zinc-700 hover:border-white dark:hover:border-zinc-900 mb-20 md:mb-0 dark:bg-opacity-25 w-full group hover:z-30 active:z-30 focus:z-30  hover:bg-gray-100 dark:hover:bg-zinc-700  dark:hover:bg-opacity-100 h-fit dark:text-white relative" onclick="focus(this)">
                <div class="relative">
                    <a href="productInfo?p_id={{$item->p_id}}" class="absolute w-full h-full "></a>
                    <input type="hidden" value="{{$item->p_id}}" id="p_{{$item->p_id}}">
                    <div class="absolute -left-1 top-3 px-2 h-6 text-xs font-semibold bg-red-500 text text-white   text-center flex items-center lg:text-sm font-pop"> <span class="m-auto">{{ceil((($item->p_oprice - $item->p_price)/$item->p_oprice)*100)}} off</span></div>
                    <button class="absolute right-1 top-1 lg:m-3 sm:m-2">
                        <input type="checkbox" name="" class="peer opacity-0  absolute top-0.5 right-0.5 w-8 h-8 z-[100]" id="">
                        <i class="text-[4vw] sm:text-2xl lg:text-xl absolute  top-0.5 right-0.5 peer-checked:opacity-0 opacity-100 dark:text-white text-black fa-regular fa-heart"></i>
                        <i class="absolute text-[4vw] sm:text-2xl lg:text-xl  top-0.5 right-0.5 dark:peer-checked:opacity-100 text-transparent peer-checked:text-red-500 fa-solid fa-heart "></i>
                        </input>

                    </button>
                    <input type="hidden" name="" value="{{$item->p_id}}">
                    <a href="productInfo?p_id={{$item->p_id}}" class="absolute bottom-20 right-1 lg:m-3 sm:m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="sm:w-6 sm:h-6 w-5 h-5 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>

                    </a>
                    <img src="productimages/{{$item->p_image}} " alt="" srcset="" class="max-h-[10rem] min-h-[10rem] rounded-xl sm:max-h-[15rem] sm:min-h-[15rem]  m-auto">
                    <div class="p-2 px-2 sm:px-5 font-rubic ">
                        <h1 class="text-xs sm:text-sm font-thin ">4&nbsp;<span class=" opacity-70">|</span>&nbsp;128</h1>
                        <h1 class="text-xs mt-0.5 font-pop sm:text-base font-[500]  ">{{$item->p_name}}</h1>
                        <div class="flex">
                            <h1 class="text-sm sm:text-base dark:text-gray-300 text-gray-800 font-thin ">₹ {{$item->p_price}}</h1>
                            <strike class=" ml-2 text-sm font-thin sm:text-base dark:text-gray-300 text-gray-500 ">₹ {{$item->p_oprice}}</strike>

                        </div>
                    </div>
                </div>
                <div class="transition-all  px-2   sm:px-4 group-focus:h-24  h-24 md:block dark:group-focus:bg-gray-200 delay-100 text-center md:h-0 overflow-hidden absolute   group-hover:h-24 z-40  group-hover:bg-gray-100  dark:group-hover:bg-zinc-700   dark:group-hover:bg-opacity-100 dark:bg-zinc-600 dark:bg-opacity-25  w-full">
                    <button type="submit " class="uppercase mt-2 active:opacity-80 dark:hover:ring-1 dark:hover:ring-gray-200 dark:focus:ring-1 dark:focus:ring-gray-200 dark:hover:border-gray-800 dark:focus:border-gray-800 hover:ring-1 hover:ring-gray-800 focus:ring-1 focus:ring-gray-800 hover:border-gray-200  border w-full py-1  xs:text-sm text-xs dark:bg-gray-200 bg-gray-800 text-white dark:text-black " onclick="addToCart(this)"> Add to Cart</button>
                    <button type="submit " class="uppercase  mt-2 border w-full py-1 xs:text-sm text-xs dark:text-white text-black border-gray-600 dark:border-gray-200">BUY NOW</button>
                </div>
            </div>
            @endforeach


        </div>
    </div>
    <!-- LIMITED -DEALS START -->
    <div class="w-full  font-rubic dark:text-white px-5 py-2 xs:px-10 sm:px-16 ">
        <div class="mb-8 dark:text-white text-base  sm:text-lg md:text-xl tracking-wide font-rubic font-bold "><span class="before:absolute before:w-1/2 relative before:h-[14%] md:before:-bottom-6 before:-bottom-4  before:z-10 before:bg-red-500 text-red-500 group-hover/pro:before:w-full before:transition-all before:ease-in-out before:delay-200 "> <span class=" dark:text-white text-zinc-900     before:absolute before:w-[90vw] before:h-[1px] before:mb-[1px] before:bg-zinc-300 md:before:-bottom-6 before:-bottom-4  before:-z-0  ">Newly released</span> Smartphones</span></div>
    </div>
    <div class="flex flex-row py-2 px-10 sm:px-16 group  ">
        <div class="w-1/2   flex flex-row justify-end items-baseline md:mb-24 mb-16 ">
            <img src="limited/limited-nothing.png" class="h-[30vw] lg:h-96 mt-5 " alt="" srcset="">
        </div>
        <div class="w-1/2 h-auto md:pt-10 flex flex-col justify-evenly dark:text-white">

            <h1 class="text-xl sm:text-2xl md:text-4xl lg:text-6xl font-semibold font-mono  ">
                Phone (1)
            </h1>
            <h1 class="xs:text-xs text-[9px] sm:text-sm md:text-base overflow-hidden lg:text-lg xl:text-xl md:w-80 lg:w-96">
                Less distractions. More soul.
                Just pure instinct, formed as a machine.
                Phone (1) can bring us back. To us.
            </h1>
            <button type="submit " class="bg-gray-800 mt-4 group-hover:scale-110 text-white transition-all group-hover:ring border border-transparent group-hover:border-gray-50  group-hover:ring-gray-500 w-fit md:p-1 active:opacity-80 group-hover:animate-bounce
                                    dark:text-black dark:bg-gray-50 dark:group-hover:border-gray-800 dark:group-hover:ring-gray-300
                                    
                                    ">
                <h1 class="w-fit border border-transparent text-center sm:p-1 p-0.5 sm:text-base text-xs "> Shop Now ></h1>
            </button>

        </div>
    </div>
    <!-- SHOP-BY-BRAND -->
    <div class="w-full px-5 py-2 xs:px-10 sm:px-16 md:mb-16 mb-12 group/brand">
        <div class="mb-8 dark:text-white text-base  sm:text-lg md:text-xl tracking-wide font-rubic font-bold "><span class="before:absolute before:w-1/2 relative before:h-[14%] md:before:-bottom-6 before:-bottom-4  before:z-10 before:bg-red-500 text-red-500 group-hover/brand:before:w-full before:transition-all before:ease-in-out before:delay-200 "> <span class=" dark:text-white text-zinc-900 before:absolute before:w-[90vw] before:h-[1px] before:mb-[1px] dark:before:bg-zinc-500 before:bg-zinc-300 md:before:-bottom-6 before:-bottom-4  before:-z-0 ">Shop by</span> Brand</span></div>
        <div class="mt-12   flex  overflow-scroll ">

            <div class=" card relative min-w-[100%] justify-center group min-h-[200px] sm:min-w-[50%] sm:min-h-[200px] lg:min-w-[33%] lg:min-h-[200px] overflow-hidden">
                <span class="dot "></span>
                <div class="circle border dark:border-zinc-700 border-zinc-300 ">

                </div>
                <div class="content  ">
                    <div style=" margin-left: -20px; margin-top:-14px; color:#fff">NOTHING</div>
                </div>
                <h1 class="text-white group-hover:opacity-0 z-20 absolute  uppercase text-lg font-bold ">Nothing</h1>
                <img src="-original-imagg4xza5rehdqv-removebg-preview.png" alt="" class="phone">
            </div>
        </div>
    </div>
    <!-- BESTSELLER-NEWARRIVAL-TOPRATED -->
    <div class="w-full px-5 py-2 xs:px-10 sm:px-16 pb-20 sm:pb-0">
        <div class="mb-8 dark:text-white text-base  sm:text-lg md:text-xl tracking-wide font-rubic font-bold "><span class="before:absolute before:w-1/2 relative before:h-[14%] md:before:-bottom-6 before:-bottom-4  before:z-10 before:bg-red-500 text-red-500 group-hover/pro:before:w-full before:transition-all before:ease-in-out before:delay-200 "> <span class=" dark:text-white text-zinc-900 before:absolute before:w-[90vw] before:h-[1px] before:mb-[1px] before:bg-zinc-300 md:before:-bottom-6 before:-bottom-4  before:-z-0 ">Newly released</span> Smartphones</span></div>
        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1">
            <div class="best-seller group mx-1">
                <div class="flex flex-row my-1 dark:bg-gray-50 cursor-pointer dark:bg-opacity-0 dark:hover:bg-opacity-20">
                    <img src="iphonex.png" alt="" srcset="" class="h-20">
                    <div class="flex flex-col justify-center">
                        <h1 class=" text-xs sm:text-sm md:text-base font-semibold dark:text-white  ">iPhone x</h1>
                        <div class="text-sm sm:text-base text-red-500 dark:text-red-300 md:text-lg">₹ 3 4999</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function addToCart(e) {
        console.log('cart_id qty =');
        const id = e.parentNode.parentNode.children[0].children[1].value;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', `addcart?id=${id}`, true);
        xhr.onload = () => {
            let type = JSON.parse(xhr.responseText)
            console.log('type=', type)
            if (type['type'] == 'warn') {
                setTimeout(() => {
                    document.querySelector('.notific_class').innerHTML = `    
                        <div id='notification' class='notify w-fit h-fit relative dark:bg-zinc-900 m-5 mt-16 bg-zinc-100 rounded'>
                            <div class='w-80 h-20 border rounded dark:border-zinc-300   border-zinc-300 z-50 relative before:absolute before:w-[18%] before:h-full before:bg-yellow-500 blur before:z-40 after:absolute after:w-full after:h-1 after:bottom-0 after:bg-zinc-500  before:rounded-l-sm  group '>
                                <div class='absolute w-[102%] bg-zinc-900 h-[105%] -top-0.5 -left-0.5  blur bg-opacity-10 dark:bg-opacity-20 dark:bg-zinc-400  '></div>
                                <i class='fa-solid fa-circle-xmark absolute top-1 right-2 text-lg text-zinc-500 '></i>
                                <i class='fa-solid fa-triangle-exclamation absolute top-5 left-3 text-3xl text-white z-40'></i>

                            </div>
                            <div id='load' class='progress w-80 h-20 border top-0 left-0 rounded dark:border-zinc-500    border-zinc-400 z-50  before:absolute before:w-[18%] before:h-full  before:bg-yellow-500 before:opacity-50 before:z-40  before:rounded-l-sm  group absolute after:absolute after:w-0 after:h-1 after:rounded-b after:z-40 after:bottom-0 border-b border-b-zinc-500 after:bg-zinc-500'>
                                <div class='absolute flex flex-row items-center justify-center w-[102%] bg-zinc-100 h-[105%] -top-0.5 -left-0.5  blur bg-opacity-10 dark:bg-opacity-20 dark:bg-zinc-400  '></div>
                                <button class='focus:opacity-70 absolute top-1 right-2' onclick='removeProg(this)'>
                                    <i class='fa-solid fa-circle-xmark  text-lg dark:text-zinc-400 text-zinc-500'></i>
                                </button>
                                <i class='fa-solid fa-triangle-exclamation absolute top-5 left-3 text-3xl text-white z-40'></i>
                                <p class= 'z-50 dark:text-white ml-[4.5rem] mr-10 text-xs font-semibold mt-2 text-black'>${type['value']}</p>
                            </div>
                        </div>

        
                    `;


                    const notification = document.querySelector('#notification');
                    setInterval(() => {
                        notification.remove()
                    }, 4800);

                }, 0);

                function removeProg(e) {
                    console.log(e.parentNode.parentNode.remove())
                }
                console.log(type['value'])
            } else if (type['type'] == 'success') {
                document.getElementById('cart_qty').innerHTML = parseInt(document.getElementById('cart_qty').innerHTML) + 1

                setTimeout(() => {
                    document.querySelector('.notific_class').innerHTML = `    
                        <div id='notification' class='notify w-fit h-fit relative dark:bg-zinc-900 m-5 mt-16 bg-zinc-100 rounded'>

                            <div class='w-80 h-20 border rounded dark:border-zinc-300   border-zinc-300 z-50 relative before:absolute before:w-[18%] before:h-full before:bg-green-500 blur before:z-40 after:absolute after:w-full after:h-1 after:bottom-0 after:bg-zinc-500  before:rounded-l-sm  group '>
                                <div class='absolute w-[102%] bg-zinc-900 h-[105%] -top-0.5 -left-0.5  blur bg-opacity-10 dark:bg-opacity-20 dark:bg-zinc-400  '></div>
                                <i class='fa-solid fa-circle-xmark absolute top-1 right-2 text-lg text-zinc-500 '></i>
                                <i class='fa-solid fa-circle-check absolute top-5 left-3 text-3xl text-white z-40'></i>
                            </div>
                            <div id='load' class='progress w-80 h-20 border top-0 left-0 rounded dark:border-zinc-500    border-zinc-400 z-50  before:absolute before:w-[18%] before:h-full  before:bg-green-500 before:opacity-100 before:z-40  before:rounded-l-sm  group absolute after:absolute after:w-0 after:h-1 after:rounded-b after:z-40 after:bottom-0 border-b border-b-zinc-500 after:bg-zinc-500'>
                                <div class='absolute flex flex-row items-center justify-center w-[102%] bg-zinc-100 h-[105%] -top-0.5 -left-0.5  blur bg-opacity-10 dark:bg-opacity-20 dark:bg-zinc-400  '></div>
                                <button class='focus:opacity-70 absolute top-1 right-2' onclick='removeProg(this)'>
                                    <i class='fa-solid fa-circle-xmark  text-lg dark:text-zinc-400 text-zinc-500'></i>
                                </button>
                                <i class='fa-solid fa-circle-check absolute top-5 left-3 text-3xl text-white z-40'></i>
                                <p class= 'z-50 dark:text-white ml-[4.5rem] mr-10 text-xs font-semibold mt-2 text-black'>${type['value']}</p>
                            </div>
                        </div>

        
                    `;

                    const notification = document.querySelector('#notification');
                    setInterval(() => {
                        notification.remove()
                    }, 4800);

                }, 0);

                function removeProg(e) {
                    console.log(e.parentNode.parentNode.remove())
                }
                console.log(type['value'])
            }
        }
        xhr.send()
    }
</script>
<script>

</script>

@endsection