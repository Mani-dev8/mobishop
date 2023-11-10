@extends('welcome')
@section('content')

<div class="dark:bg-zinc-900 h-[100vh] absolute w-full">
    <div id='notification_delete' class='notify_delete w-fit h-fit relative dark:bg-zinc-900 m-5 mt-16 bg-zinc-100 rounded-lg'>
        <div class='w-60 h-60 border rounded-lg dark:border-zinc-400   border-zinc-300 z-50 relative blur   group '>
            <div class='absolute w-[102%] bg-zinc-900 h-[105%] -top-0.5 -left-0.5  blur bg-opacity-10 dark:bg-opacity-20 dark:bg-zinc-400 '></div>
            <i class='fa-solid fa-circle-xmark absolute top-1 right-2 text-lg text-zinc-500 '></i>
            <i class='fa-solid fa-circle-exclamation absolute top-5 left-20 text-7xl blur text-yellow-300 opacity-50 z-40'></i>
        </div>
        <div id='load' class='progress_delete w-60 h-60 border top-0 left-0 rounded-lg dark:border-zinc-600    border-zinc-400 z-50      group absolute  border-b border-b-zinc-500 '>
            <div class='absolute flex flex-row items-center justify-center w-[102%] bg-zinc-100 h-[105%] -top-0.5 -left-0.5  blur bg-opacity-10 dark:bg-opacity-20 dark:bg-zinc-900  '></div>
            <button class='focus:opacity-70 absolute top-1 right-2' onclick='removeProg(this)'>
                <i class='fa-solid fa-circle-xmark  text-lg dark:text-zinc-400 text-zinc-500'></i>
            </button>
            <i class='fa-solid fa-circle-exclamation text-yellow-400 absolute top-5 left-20 text-7xl  z-40'></i>
            <p class='z-50 dark:text-white m-auto w-40 text-center  mr-10 text-sm font-semibold mt-28 text-black'>are you sure you want to DELETE this item from cart</p>
            <div class="w-full mt-2 absolute bottom-0 h-10  overflow-hidden  border-2 rounded-b-lg dark:border-zinc-900 dark:border-opacity-50">
                <div class="flex flex-row h-full items-center justify-center">
                    <button class="w-1/2  h-full hover:text-zinc-300 dark:active:bg-opacity-30 dark:active:bg-red-600 dark:hover:bg-red-500 dark:bg-red-600  dark:bg-opacity-100  dark:hover:bg-opacity-30 dark:text-zinc-300">YES</button>
                    <div class="h-full border dark:border-zinc-900 dark:border-opacity-50  "></div>
                    <button class="w-1/2 h-full hover:text-zinc-300  dark:active:bg-opacity-30 dark:active:bg-green-600 dark:hover:bg-green-500 dark:bg-green-600  dark:bg-opacity-100  dark:hover:bg-opacity-30 dark:text-zinc-300">NO</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection