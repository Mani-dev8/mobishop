@extends('admin')
@section('content2')

<div class="main-dashboard pl-2 py-4 ">
    <div class="flex flex-row  pl-2  sm:h-36 lg:h-[200px] xl:h-[220px] sm:min-h-[120px]  max-w-[100vw] pr-3% xs:pr-[10%] sm:pr-[8%] md:pr-[5%] lg:pr-[5%]  items-center  overflow-scroll  ">

        <button class="m-auto dark:hover:bg-violet-700 bg-gradient-to-r  active:opacity-50 hover:from-blue-500 hover:to-blue-800 from-blue-400 to-blue-700 flex flex-row min-w-[170px] relative sm:min-w-[200px] md:min-w-[260px] lg:min-w-[300px]  xl:min-w-[330px] lg:min-h-[200px] mr-2 dark:shadow border dark:border-zinc-600 dark:shadow-zinc-600 overflow-hidden  h-[90%] dark:bg-zinc-700 rounded px-2 pt-2 justify-center items-center group">
            <div class="absolute w-[70%] h-[120%] -top-1/2 -right-1/3 rounded-full bg-zinc-400 opacity-20 shadow-inner shadow-gray-900"></div>
            <div class="absolute w-[70%] h-[130%] -bottom-2/3 -right-10 rounded-full bg-zinc-400 opacity-20 shadow-inner shadow-gray-900"></div>
            <div class=" text-zinc-300 group-hover:text-zinc-200">
                <h4 class="z-10 text-xs sm:text-sm md:text-base xl:text-xl ">This week orders</h4>
                <h1 class="md:text-3xl z-10 lg:text-4xl sm:text-3xl font-bold xl:text-5xl dark:text-white my-3">
                    1,239
                </h1>
                <h4 class=" text-xs sm:text-sm md:text-base z-10 xl:text-xl">weekly orders</h4>
            </div>
            <i class="fa-solid fa-cubes md:text-4xl lg:text-5xl text-3xl ml-4 z-10 text-zinc-300"></i>
        </button>
        <button class="  bg-gradient-to-r m-auto  active:opacity-50 hover:from-teal-400 hover:to-teal-800 from-teal-400 to-teal-700 flex flex-row min-w-[170px] relative sm:min-w-[200px] md:min-w-[260px] lg:min-w-[300px]  xl:min-w-[330px] lg:min-h-[200px] mr-2 dark:shadow border dark:border-zinc-600 dark:shadow-zinc-600 overflow-hidden  h-[90%] dark:bg-zinc-700 rounded px-2 pt-2 justify-center items-center group">
            <div class="absolute w-[70%] h-[120%] -top-1/2 -right-1/3 rounded-full bg-zinc-400 opacity-20 shadow-inner shadow-gray-900"></div>
            <div class="absolute w-[70%] h-[130%] -bottom-2/3 -right-10 rounded-full bg-zinc-400 opacity-20 shadow-inner shadow-gray-900"></div>
            <div class=" text-zinc-300 group-hover:text-zinc-200">
                <h4 class="z-10 text-xs sm:text-sm md:text-base xl:text-xl ">This week orders</h4>
                <h1 class="md:text-3xl z-10 lg:text-4xl sm:text-3xl font-bold xl:text-5xl dark:text-white my-3">
                    1,239
                </h1>
                <h4 class=" text-xs sm:text-sm md:text-base z-10 xl:text-xl">weekly orders</h4>
            </div>
            <i class="fa-solid fa-cubes md:text-4xl lg:text-5xl text-3xl ml-4 z-10 text-zinc-300"></i>
        </button>
        <button class=" bg-gradient-to-r m-auto active:opacity-50 hover:from-amber-500 hover:to-amber-800 from-amber-400 to-amber-700 flex flex-row min-w-[170px] relative sm:min-w-[200px] md:min-w-[260px] lg:min-w-[300px]  xl:min-w-[330px] lg:min-h-[200px] mr-2 dark:shadow border dark:border-zinc-600 dark:shadow-zinc-600 overflow-hidden  h-[90%] dark:bg-zinc-700 rounded px-2 pt-2 justify-center items-center group">
            <div class="absolute w-[70%] h-[120%] -top-1/2 -right-1/3 rounded-full bg-zinc-400 opacity-20 shadow-inner shadow-gray-900"></div>
            <div class="absolute w-[70%] h-[130%] -bottom-2/3 -right-10 rounded-full bg-zinc-400 opacity-20 shadow-inner shadow-gray-900"></div>
            <div class=" text-zinc-300 group-hover:text-zinc-200">
                <h4 class="z-10 text-xs sm:text-sm md:text-base xl:text-xl ">This week orders</h4>
                <h1 class="md:text-3xl z-10 lg:text-4xl sm:text-3xl font-bold xl:text-5xl dark:text-white my-3">
                    1,239
                </h1>
                <h4 class=" text-xs sm:text-sm md:text-base z-10 xl:text-xl">weekly orders</h4>
            </div>
            <i class="fa-solid fa-cubes  md:text-4xl lg:text-5xl text-3xl ml-4 z-10 text-zinc-300"></i>
        </button>

    </div>
    <div class="cart flex flex-col md:flex-row   w-full  ">
        <canvas id="myLine" class="m-auto md:max-w-[60vw] mx-2 my-8 md:max-h-[300px] lg:max-h-[400px]  dark:bg-white bg-zinc-100 rounded"></canvas>
        <canvas id="myChart" class="md:mx-2 m-auto lg:max-w-[400px] lg:max-h-[400px] md:max-w-[300px] md:max-h-[300px] max-w-[250px] max-h-[250px]    bg-zinc-100 dark:bg-white rounded "></canvas>
    </div>

</div>
<div class="flex lg:flex-row flex-col order-history my-4  px-4 w-[100%]  mb-20">
    <div class="flex flex-row justify-between items-center lg:w-3/5 w-[95%]">
        <h1 class="md:text-lg font-bold text-sm lg:text-base">Order Histroy</h1>
        <form action="" class="h-full flex flex-row items-center">

            <button type="submit" name="view all" class="dark:bg-zinc-100 dark:hover:bg-zinc-200 dark:text-black bg-zinc-500 py-1 md:py-1.5 hover:bg-zinc-700 hover:shadow-none px-4 rounded-sm shadow-md shadow-zinc-500 sm:mr-2 text-white md:text-sm text-xs lg:text-xs">View All</button>
        </form>
    </div>
</div>
@endsection