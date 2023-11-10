@extends('welcome')
@section('content')
<section class="productdetail dark:bg-black">
    <div class="w-full dark:bg-gray-50 bg-black">
        <div class="flex lg:h-40 h-36 xl:w-[1280px] w-auto flex-col m-auto px-4 xl:px-0">
            <div class="h-1/2 w-full flex items-center justify-between  ">

                <h1 class="text-2xl  text-white dark:text-black font-bold uppercase ">Product Detail</h1>
                <div class="flex ">
                    <div class="flex text-white items-center dark:text-black mr-2">
                        <div class="flex relative items-center mr-1 ">
                            <i class="fa-sharp fa-solid fa-house   text-xs sm:text-sm lg:text-base  dark:text-black text-white "></i>
                        </div>
                        <span class="text-xs sm:text-sm lg:text-base ">Home</span> <span class="text-gray-400">&nbsp;></span>
                    </div>
                    <div class="flex text-white items-center dark:text-black mr-2">
                        <span class="text-xs sm:text-sm lg:text-base">Cart</span> <span class="text-gray-400">&nbsp;></span>
                    </div>
                </div>
            </div>
            <div class="h-1/2 w-full  flex flex-row ">
                <div class="lg:w-2/3 w-full flex justify-between items-center text-center ">
                    <div class="flex items-center ">

                    </div>

                </div>
                <div class="lg:min-w-[330px] xl:w-1/3"></div>
            </div>
        </div>

    </div>
    <div class="w-full   m-auto xl:w-[1280px]">
        <div class="pb-5 ">
            <div style="box-shadow: 0 0 15px 0px  #71717a; " class="z-0 sm:flex  rounded border  dark:border-zinc-900 text-black dark:text-white  -mt-16  lg:mx-6 p-4 xl:w-[1280px] w-auto dark:bg-gray-800  bg-zinc-100 flex-row xl:mx-auto mx-4 xl:px-0  ">
                @foreach($pro_info as $item)
                <button onmousedown="zoomFunc(this)" onclick="zoomFunc(this)" class="img_btn sm:w-7/12  ">
                    <ul class="imgzoom bg-white p-2 rounded  lg:max-w-[90%]   m-auto">
                        <li class=" flex flex-row justify-center  h-full  overflow-visible items-center ">
                            @foreach($pro_photo as $photo)
                            <img id="pro_img" src="productimages/{{$photo->image}}" style="object-fit:cover;" class="m-auto  h-4/5 w-4/5" alt="" srcset="">
                            @break
                            @endforeach
                        </li>
                    </ul>
                </button>
                <div class="sm:w-5/12 pl-2">
                    <div class="flex flex-row  w-full justify-between items-center mt-4 sm:mt-0 pb-2 sm:pb-0">
                        <div class="rating  md:text-base text-sm">
                            <div class="flex flex-row justify-center items-center dark:text-white"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><span class="text-black dark:text-white font-rubic ml-2">74 review</span></div>
                        </div>
                        <button class=" lg:m-3 sm:m-2 relative h-5 w-5">
                            <input type="checkbox" name="" class="peer -bottom-1 opacity-0 h-full md:right-1 right-2 w-full  absolute   z-10" id="" />
                            <i class="text-[16px] xs:text-xl -bottom-1  absolute  sm:text-xl md:right-1 right-2 lg:text-xl peer-checked:opacity-0 opacity-100  dark:text-white  text-black fa-regular fa-heart"></i>
                            <i class=" text-[16px] xs:text-xl -bottom-1 absolute  sm:text-xl md:right-1 right-2 lg:text-xl         dark:peer-checked:opacity-100 text-transparent  peer-checked:text-red-500 fa-solid fa-heart "></i>

                        </button>
                    </div>
                    <div class="">
                        <div class="flex flex-row items-baseline">
                            @foreach($product as $i)
                            <div class="lg:text-3xl sm:text-2xl text-xl dark:text-white tracking-widest font-rubic ">₹{{$i->p_price}}<span class="font-rubic sm:text-base lg:text-lg text-sm  mr-3 "></span> </div>
                            @break
                            @endforeach
                            <del class="lg:text-lg sm:text-base  dark:text-gray-300 text-gray-700 tracking-widest font-rubic text-sm">₹{{$i->p_oprice}}<span class="font-rubic lg:text-xs sm:text-[10px] text-[8px]"></span> </del>

                        </div>
                    </div>
                    <div class="">
                        <h1 class="dark:text-white md:text-lg sm:mt-1 md:mt-2 font-semibold">

                            color:
                            @foreach(explode('/',$item->p_color) as $col_name)
                            <span class="dark:text-gray-300 font-thin font-rubic text-gray-800 md:text-sm text-xs">@foreach(explode('-',$col_name) as $value)
                                {{$value}} /
                                @break
                                @endforeach
                            </span>
                            @endforeach
                        </h1>
                        <div class="flex flex-row justify-between   items-center">
                            <div class="flex">
                                @foreach(explode('/',$item->p_color) as $col)
                                <!-- {{explode('-',$col)[1]}} -->
                                <div class="flex relative mt-2 w-[26px]      h-[26px]  mr-2 ">
                                    <input onclick="ImageColor(this)" type="radio" name="color" value="red" id="" class="color_option absolute h-full w-full opacity-0 peer z-10">
                                    <input type="hidden" name="" value="{{explode('-',$col)[0]}}">
                                    <div class="bg_div_{{explode('-',$col)[0]}} h-[19px] w-[19px] ml-[3.7px] mt-[3.7px] absolute rounded-full bg-[`{{explode('-',$col)[1]}}`] dark:border-white  border border-black  "></div>
                                    <div class="w-full rounded-full h-full  peer-checked:border-2 peer-checked:border-red-500 "></div>
                                </div>
                                <script>
                                    document.querySelector(`.bg_div_{{explode('-',$col)[0]}}`).style.backgroundColor = `{{explode('-',$col)[1]}}`;
                                    console.log((`{{explode('-',$col)[1]}}`))
                                </script>
                                @endforeach
                                <!-- <div class="flex relative mt-2 w-[26px]      h-[26px]  mr-2 ">
                                    <input type="radio" name="color" value="red" id="" class="absolute h-full w-full opacity-10 peer z-10">
                                    <div class="h-[19px] w-[19px] ml-[3.4px] mt-[3.7px] absolute rounded-full  bg-black dark:border-white  border border-black   "></div>
                                    <div class="w-full rounded-full h-full  peer-checked:border-2 peer-checked:border-red-500 "></div>
                                </div>
                                <div class="flex relative mt-2 w-[26px]      h-[26px]  mr-2 ">
                                    <input type="radio" name="color" value="red" id="" class="absolute h-full w-full opacity-10 peer z-10">
                                    <div class="h-[19px] w-[19px] ml-[3.7px] mt-[3.7px] absolute rounded-full  bg-white dark:border-white  border border-black  "></div>
                                    <div class="w-full rounded-full h-full  peer-checked:border-2 peer-checked:border-red-500 "></div>
                                </div> -->
                            </div>
                            <div class="available relative ">
                                <div style="z-index: 20;" class="w-40 text-sm sm:text-base text-center flex items-center h-8 bg-gradient-to-r from-lime-500   to-green-500 -mr-6 xl:-mr-4 "><span class="m-auto text-white"> <i class="fa-regular fa-circle-check mr-2 "></i>Product available</span>
                                </div>
                            </div>
                        </div>
                        <button class="quantity text-sm sm:text-base py-0 focus:outline-none border sm:h-9 h-8 pl-2 pr-2  bg-transparent focus:border-red-400 focus:border-opacity-60 rounded-sm border-zinc-600  mt-3 flex flex-row items-center">
                            <span class="font-rubic mr-2">Quanity :</span>
                            <input type="number" min="0" id="pin" name="pin" class="min-h-[32px] bg-transparent  dark:text-white md:p-1 p-0.5 lg:pl-2 lg:py-1.5 my-2   sm:py-1  pl-1.5 focus:outline-none outline-0 " maxlength="2" size="2" required oninvalid="this.setCustomValidity('Enter Quantity')" oninput="this.setCustomValidity('')" />
                        </button>
                        <div class="flex w-full mt-4">
                            <button class="rounded w-1/2 font-rubic text-center active:opacity-50  text-xs xs:text-sm lg:text-base border py-1.5  m-1.5 ml-0 hover:bg-red-500 hover:text-white shadow-red-400 text-red-500  border-red-500 sm:text-xs md:text-sm"><i class="fa-solid fa-cart-shopping mr-2"></i>ADD TO CART</button>
                            <button class="rounded w-1/2 font-rubic text-center active:opacity-50 text-xs xs:text-sm sm:text-xs md:text-sm lg:text-base border m-1.5 border-red-300 bg-red-400 text-white shadow-md hover:shadow-none hover:bg-red-500 shadow-red-300"><i class="fa-solid fa-bolt mr-2"></i>BUY NOW</button>
                        </div>
                    </div>
                    <div class="product-info w-full">
                        <div class=" group/info">
                            <span class="font-rubic text-black font-semibold dark:text-white text-sm sm:text-base group-hover/info:text-red-600 dark:group-hover/info:text-red-400"><i class="fa-solid fa-circle-info mr-2 mt-4"></i>Product info</span>

                            <ul class="text-sm font-rubic ml-8 font-thin dark:text-zinc-400 text-zinc-600" style="list-style-type: disc;">
                                @for($i=0;$i< count(explode("/",$item->p_high));$i++)

                                    <li>{{explode("/",$item->p_high)[$i]}}</li>
                                    @endfor
                                    <!--                                 
                                <li>iOS 16 Operating System</li>
                                <li> Apple A15 Bionic chip</li>
                                <li> 128 GB Internal Memory</li>
                                <li> 6.1-inch OLED Display</li>
                                <li> Dual 12MP Primary Camera</li>
                                <li> 12 MP Front Camera</li>
                                <li> Emergency SOS</li>
                                <li> Crash Detection</li>
                                <li> 1 Year Manufacturer Warranty</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="product-description text-black dark:text-white font-rubic xl:mx-auto mx-4 xl:px-0 mt-10">
                <h1 class="text-lg md:text-xl font-bold  underline ">Product Description</h1>
                <div class="grid lg:grid-cols-2 ">
                    @foreach($pro_info as $info)
                    @foreach(explode('*',$info->p_desc) as $value)
                    @for($k=0;$k< count(explode("/",$value));$k++) <div class="flex w-full flex-row py-4 justify-between items-center  border-zinc-500 pr-4 ">
                        <div class=" w-7/12">
                            <h1 class="font-semibold md:text-base text-sm">
                                {{(explode("/",$value))[1]}}
                            </h1>
                            <h4 class="font-thin text-zinc-500 dark:text-zinc-300 sm:text-sm text-xs">
                                {{(explode("/",$value))[2]}}
                            </h4>
                        </div>
                        <img src="productdetails/{{(explode('/',$value))[0]}}" alt="" srcset="" class="w-3/12 min-w-[120px] max-w-[240px] max-h-[80px] md:max-h-[120px]">
                </div>
                @break
                @endfor
                @endforeach
                @endforeach
                <!-- <div class="flex w-full flex-row py-4 justify-between items-center pl-2">
                        <img src="https://rukminim1.flixcart.com/image/200/200/cms-rpd-img/f911cab85917488bad55094596200ceb_18359bfe18b_image.png?q=90" alt="" srcset="" class="w-3/12 min-w-[120px] max-w-[240px] max-h-[80px] md:max-h-[120px] lg:order-2">
                        <div class=" w-7/12 ml-1 lg:order-1">
                            <h1 class="font-semibold md:text-base text-sm">
                                Display and Design
                            </h1>
                            <h4 class="font-thin text-zinc-500 sm:text-sm text-xs ">
                                A more vivid OLED display that’s both easier to see in full sunlight and power efficient. With a durable design that’s water and dust-resistant.
                            </h4>
                        </div>
                    </div>
                    <div class="flex w-full flex-row py-4 justify-between items-center lg:border-r border-zinc-500 pr-4 ">
                        <div class=" w-7/12">
                            <h1 class="font-semibold md:text-base text-sm">
                                Display and Design
                            </h1>
                            <h4 class="font-thin text-zinc-500 sm:text-sm text-xs">
                                A more vivid OLED display that’s both easier to see in full sunlight and power efficient. With a durable design that’s water and dust-resistant.
                            </h4>
                        </div>
                        <img src="https://rukminim1.flixcart.com/image/200/200/cms-rpd-img/f911cab85917488bad55094596200ceb_18359bfe18b_image.png?q=90" alt="" srcset="" class="w-3/12 min-w-[120px] max-w-[240px] max-h-[80px] md:max-h-[120px]">
                    </div>
                    <div class="flex w-full flex-row py-4 justify-between items-center pl-2">
                        <img src="https://rukminim1.flixcart.com/image/200/200/cms-rpd-img/f911cab85917488bad55094596200ceb_18359bfe18b_image.png?q=90" alt="" srcset="" class="w-3/12 min-w-[120px] max-w-[240px] max-h-[80px] md:max-h-[120px] lg:order-2">
                        <div class=" w-7/12 ml-1 lg:order-1">
                            <h1 class="font-semibold md:text-base text-sm">
                                Display and Design
                            </h1>
                            <h4 class="font-thin text-zinc-500 sm:text-sm text-xs ">
                                A more vivid OLED display that’s both easier to see in full sunlight and power efficient. With a durable design that’s water and dust-resistant.
                            </h4>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
    </div>
</section>
<script>
    const color_option = document.querySelector('.color_option');

    console.log(color_option.checked=true)

    function zoomFunc(e) {
        console.log($('.imgzoom'))
        $('.imgzoom').zoom({
            on: 'grab',
            zoom_area_width: 600,
            autoplay_interval: 3000,
        })
    }

    function ImageColor(e) {

        async function fetchData() {
            try {
                const response = await fetch(`/imgcol?col=${e.nextElementSibling.value}`);
                const data = await response.text();
                image = document.querySelector('#pro_img');
                console.log(image)
                image.src = `productimages/${data}`;
                $('.imgzoom').remove();
                $('.img_btn').html(` <ul class="imgzoom bg-white p-2 rounded  lg:w-[400px]  m-auto">
                        <li class=" flex flex-row justify-center  h-full  overflow-visible items-center ">
 
                            <img id="pro_img" src="productimages/${data}" style="object-fit:cover" class="m-auto h-4/5 w-4/5  " alt="" srcset="">
                        </li>
                    </ul>`);
                console.log(image)

                return data;
            } catch (error) {
                console.error(error);
            }
        }
        fetchData()
            .then(data => console.log(data))
            .catch(error => console.error(error));

    }
</script>

@endsection