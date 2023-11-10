@extends('welcome')
@section('content')
<div class="pb-20 dark:bg-zinc-900 ">

    <section class="shop w-full  sm:pb-0 h-fit  sm:mt-0 ">
        <div class="w-full   lg:h-40 h-36 xl:w-[1280px] px-4 xl:px-0 m-auto">
            <div class="flex h-full  flex-col m-auto border-b border-zinc-500 ">
                <div class="h-1/2 w-full flex items-center justify-between border-b dark:border-zinc-500">
                    <!-- <h1 class="text-2xl  dark:text-white text-black font-bold uppercase ">Shop</h1> -->
                    <img src="mobishop_logo.png" alt="logo" srcset="" class=" min-w-[160px]  max-w-[200px] rounded mr-[.95rem] -ml-2 ">
                    <div class="flex font-pop">
                        <a href="home" class="flex dark:text-zinc-800 items-center text-zinc-400 mr-2">
                            <div class="relative sm:mr-2  mr-1  ">
                                <i class="fa-sharp fa-solid fa-house  text-sm md:text-base   "></i>
                            </div>
                            <span class="text-sm md:text-base">Home &nbsp;&gt;</span>
                        </a>
                        <div class="flex dark:text-zinc-100 items-center text-zinc-900 mr-2">
                            <span class="text-sm md:text-base">Shop &nbsp;&gt;</span>
                        </div>
                    </div>
                </div>
                <div class="h-1/2 w-full  flex flex-row ">
                    <div class="lg:min-w-[330px] xl:w-1/3"></div>
                    <div class="lg:w-2/3 w-full flex justify-between items-center text-center">
                        <div class="flex items-center ">
                            <h1 class="font-thin dark:text-white text-black mr-2 lg:text-sm  xs:text-xs text-[9px]">Sort by</h1>
                            <div class="flex relative  items-center dark:bg-black bg-white p-1 w-fit  ">
                                <input type="checkbox" class=" h-full cursor-pointer  w-full  absolute opacity-0 peer z-10" name="" id="">
                                <div class=" uppercase w-full cursor-pointer lg:text-sm xs:text-xs text-[9px]  dark:text-gray-300 text-gray-500 mr-2 ">low -high price</div>
                                <div class="cursor-pointer peer-checked:rotate-180 text-[10px] dark:text-white lg:text-xs   mt-0.5">▲</div>
                                <div class=" peer-checked:border    border-black dark:border-gray-50    -left-0 flex-col mt-24 absolute w-full   peer-checked:text-black peer-checked:h-fit h-0 overflow-hidden ">
                                    <form action="selCategory" class="flex  flex-col items-start bg-gray-50 ">
                                        <button type="submit" name="category" value="redmi" class="w-full p-1 hover:bg-gray-800 hover:text-white text-left lg:text-sm xs:text-xs text-[9px]"> low-high price</button>
                                        <button type="submit" name="category" value="oneplus" class="w-full p-1 hover:bg-gray-800 hover:text-white text-left lg:text-sm xs:text-xs text-[9px]"> oneplus</button>
                                    </form>
                                </div>
                            </div>
                            <span class="text-black dark:text-white font-thin lg:text-sm  xs:text-xs text-[8px]"> &nbsp;of 28 products</span>
                        </div>
                        <div class="flex  h-fit flex-row items-center text-center">
                            <button class="text-gray-400 text-2xl font-thin active:opacity-50 dark:hover:text-black hover:font-normal mx-3">
                                &lt;
                            </button>
                            <h1 class=" text-sm tracking-widest dark:text-white text-black font-mono">4/5</h1>
                            <button class="text-gray-400 text-2xl font-thin active:opacity-50 dark:hover:text-black hover:font-normal mx-3">&gt;</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full">
            <div class="flex  xl:w-[1280px] w-auto flex-row m-auto px-4 xl:px-0">
                <div class="w-3/12 min-w-[300px] hidden lg:block transition-all -mt-24 p-4  group/category  bg-white  dark:bg-black shadow-lg  dark:shadow-gray-700">
                    <div class="dark:text-white group-hover/category:text-red-500  text-black font-semibold ">Categories
                    </div>
                    <div class="w-full">
                        <!-- relative  before:rounded-lg before:absolute dark:before:bg-gray-600  before:w-full before:h-[1px] before:bottom-0 -->

                        <div class="flex w-full     transition-all ease-linear delay-200 mt-6 cursor-pointer relative   my-2">
                            <input class="w-full pr-4 h-6 z-10 opacity-0  absolute peer " type="radio" name="category" id="">

                            <div class="peer-checked:h-auto h-4">
                                <h1 class=" absolute dark:text-white text-sm  peer-hover:text-red-400 peer-hover:underline ">Smartphone</h1>
                                <h1 class="dark:text-white absolute right-2 font-thin  rotate-180 scale-x-150 peer-checked:rotate-0 peer-hover:text-red-400 ">^</h1>
                            </div>


                            <div class=" hidden  absoute peer-checked:mt-4 pt-3   transition-all ease-in-out overflow-hidden peer-checked:block w-full pl-1 pr-2   ">
                                <div class="w-full items-center relative mt-4 flex h-8 ">
                                    <input type="text" class="w-full focus:outline-none  border h-full bg-transparent dark:text-white px-2">
                                    <i class="dark:text-white text-black  absolute fa-solid fa-magnifying-glass right-2"></i>
                                    </input>
                                </div>
                                <div class="px-2 group mt-3 flex justify-between">
                                    <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                    <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                                </div>
                                <div class="px-2 group mt-3 flex justify-between">
                                    <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                    <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                                </div>
                                <div class="px-2 group mt-3 flex justify-between">
                                    <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                    <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                                </div>
                                <div class="px-2 group mt-3 flex justify-between">
                                    <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                    <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="w-full pb-2">
                        <div class="flex w-full  transition-all ease-linear delay-200 mt-6 cursor-pointer relative   my-2">
                            <input class="w-full pr-4 h-6 z-10 opacity-0  absolute peer " type="radio" name="category" id="">

                            <h1 class=" absolute dark:text-white text-sm  peer-hover:text-red-400 peer-hover:underline ">Smartphone</h1>
                            <h1 class="dark:text-white absolute right-2 font-thin  rotate-180 scale-x-150 peer-checked:rotate-0 peer-hover:text-red-400 ">^</h1>


                            <div class="mb-4 hidden  absoute peer-checked:mt-4 pt-3   transition-all ease-in-out overflow-hidden peer-checked:block w-full pl-1 pr-2 ">
                                <div class="w-full items-center relative mt-4 flex h-8 ">
                                    <input type="text" class="w-full  border h-full bg-transparent dark:text-white px-2">
                                    <i class="dark:text-white text-black absolute fa-solid fa-magnifying-glass right-2"></i>
                                    </input>
                                </div>
                                <div class="px-2 group my-3 flex justify-between">
                                    <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                    <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                                </div>
                                <div class="px-2 group my-3 flex justify-between">
                                    <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                    <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                                </div>
                                <div class="px-2 group my-3 flex justify-between">
                                    <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                    <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                                </div>
                                <div class="px-2 group my-3 flex justify-between">
                                    <h1 class="text-sm dark:text-white  group-hover:text-red-500 dark:group-hover:text-red-400">apple</h1>
                                    <h1 class="text-sm dark:text-white group-hover:text-red-500 dark:group-hover:text-red-400">19</h1>

                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="lg:w-8/12 w-full m-auto  gap-x-4 mt-12 gap-y-12 grid grid-cols-2 md:grid-cols-3">
                    <!-- {{session('search_product')}} -->
                    @if(session('search_product'))
                    @foreach(session('search_product') as $item)
                    <div class="dark:bg-zinc-700 pt-2 border   dark:border-zinc-700 mb-20 md:mb-0 dark:bg-opacity-25 w-full group hover:z-30 active:z-30 focus:z-30  hover:bg-gray-100 dark:hover:bg-zinc-700  dark:hover:bg-opacity-100 h-fit dark:text-white relative" onclick="focus(this)">
                        <div class="relative">
                            <a href="productInfo?p_id={{$item->p_id}}" class="absolute w-full h-full "></a>
                            <input type="hidden" value="{{$item->p_id}}" id="p_{{$item->p_id}}">
                            <div class="absolute -left-1 top-3 px-2 h-6 text-xs font-semibold bg-red-500 text text-white   text-center flex items-center lg:text-sm font-pop"> <span class="m-auto">{{ceil((($item->p_oprice - $item->p_price)/$item->p_oprice)*100)}} off</span></div>
                            <button class="absolute right-1 top-1 lg:m-3 sm:m-2">
                                <input type="checkbox" name="" class="peer opacity-0  absolute top-0.5 right-0.5 w-8 h-8 z-[100]" id="">
                                <i class="text-[4vw] sm:text-2xl lg:text-xl absolute  top-0.5 right-0.5 peer-checked:opacity-0 opacity-100 dark:text-white text-black fa-regular fa-heart"></i>
                                <i class="absolute text-[4vw] sm:text-2xl lg:text-xl  top-0.5 right-0.5 dark:peer-checked:opacity-100 text-transparent  dark:peer-checked:text-red-500 fa-solid fa-heart "></i>
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
                        <div class="transition-all     sm:px-4 group-focus:h-24  h-24 md:block dark:group-focus:bg-gray-200 delay-100 text-center md:h-0 overflow-hidden absolute   group-hover:h-24 z-40  group-hover:bg-gray-100  dark:group-hover:bg-zinc-700   dark:group-hover:bg-opacity-100 dark:bg-zinc-600 dark:bg-opacity-25  w-full">
                            <button type="submit " class="uppercase mt-2 active:opacity-80 dark:hover:ring-1 dark:hover:ring-gray-200 dark:focus:ring-1 dark:focus:ring-gray-200 dark:hover:border-gray-800 dark:focus:border-gray-800 hover:ring-1 hover:ring-gray-800 focus:ring-1 focus:ring-gray-800 hover:border-gray-200  border w-full py-1  xs:text-sm text-xs dark:bg-gray-200 bg-gray-800 text-white dark:text-black " onclick="addToCart(this)"> Add to Cart</button>
                            <button type="submit " class="uppercase  mt-2 border w-full py-1 xs:text-sm text-xs dark:text-white text-black border-gray-600 dark:border-gray-200">BUY NOW</button>
                        </div>
                    </div>
                    @endforeach
                    @else
                    @foreach($data as $item)
                    <div class="dark:bg-zinc-700 pt-2 border   dark:border-zinc-700 mb-20 md:mb-0 dark:bg-opacity-25 w-full group hover:z-30 active:z-30 focus:z-30  hover:bg-gray-100 dark:hover:bg-zinc-700  dark:hover:bg-opacity-100 h-fit dark:text-white relative" onclick="focus(this)">
                        <div class="relative">
                            <a href="productInfo?p_id={{$item->p_id}}" class="absolute w-full h-full "></a>
                            <input type="hidden" value="{{$item->p_id}}" id="p_{{$item->p_id}}">
                            <div class="absolute -left-1 top-3 px-2 h-6 text-xs font-semibold bg-red-500 text text-white   text-center flex items-center lg:text-sm font-pop"> <span class="m-auto">{{ceil((($item->p_oprice - $item->p_price)/$item->p_oprice)*100)}} off</span></div>
                            <button class="absolute right-1 top-1 lg:m-3 sm:m-2">
                                <input type="checkbox" name="" class="peer opacity-0  absolute top-0.5 right-0.5 w-8 h-8 z-[100]" id="">
                                <i class="text-[4vw] sm:text-2xl lg:text-xl absolute  top-0.5 right-0.5 peer-checked:opacity-0 opacity-100 dark:text-white text-black fa-regular fa-heart"></i>
                                <i class="absolute text-[4vw] sm:text-2xl lg:text-xl  top-0.5 right-0.5 dark:peer-checked:opacity-100 text-transparent  dark:peer-checked:text-red-500 fa-solid fa-heart "></i>
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
                        <div class="transition-all     sm:px-4 group-focus:h-24  h-24 md:block dark:group-focus:bg-gray-200 delay-100 text-center md:h-0 overflow-hidden absolute   group-hover:h-24 z-40  group-hover:bg-gray-100  dark:group-hover:bg-zinc-700   dark:group-hover:bg-opacity-100 dark:bg-zinc-600 dark:bg-opacity-25  w-full">
                            <button type="submit " class="uppercase mt-2 active:opacity-80 dark:hover:ring-1 dark:hover:ring-gray-200 dark:focus:ring-1 dark:focus:ring-gray-200 dark:hover:border-gray-800 dark:focus:border-gray-800 hover:ring-1 hover:ring-gray-800 focus:ring-1 focus:ring-gray-800 hover:border-gray-200  border w-full py-1  xs:text-sm text-xs dark:bg-gray-200 bg-gray-800 text-white dark:text-black " onclick="addToCart(this)"> Add to Cart</button>
                            <button type="submit " class="uppercase  mt-2 border w-full py-1 xs:text-sm text-xs dark:text-white text-black border-gray-600 dark:border-gray-200">BUY NOW</button>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

</div>
<script>
    function addToCart(e) {
        document.getElementById('cart_qty').innerHTML = parseInt(document.getElementById('cart_qty').innerHTML) + 1
        console.log('cart_id qty =');
        const id = e.parentNode.parentNode.children[0].children[1].value;
        console.log(e)
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
@endsection