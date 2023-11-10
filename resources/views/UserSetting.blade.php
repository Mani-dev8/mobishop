@extends('welcome')
@section('content')
<style>
  .image-input {
    text-align: center
  }

  .input-file {
    display: none
  }

  label {
    border-radius: 3px;
    display: block;
    padding: .3rem .6rem;
    cursor: pointer
  }


  .file_ico {
    font-size: 125%;
    margin-right: .3rem
  }

  label:hover .file_ico {
    animation: shake .35s infinite
  }

  .img {
    max-width: 175px;
    display: none
  }

  .span {
    display: none;
    text-align: center;
    cursor: pointer
  }

  @keyframes shake {
    0% {
      transform: rotate(0deg)
    }

    25% {
      transform: rotate(10deg)
    }

    50% {
      transform: rotate(0deg)
    }

    75% {
      transform: rotate(-10deg)
    }

    100% {
      transform: rotate(0deg)
    }
  }
</style>
<div class="w-[100vw] h-[100vh] bg-white dark:bg-zinc-900 ">
  <section id="" class="font-pop w-[100%]  px-4 m-auto xl:px-0 xl:w-[90vw] h-[90vh] overflow-scroll md:pt-0 pt-20 dark:text-white pb-20 sm:pb-0">
    @if(session('user')!='')
    <h2 class="sm:mt-5  text-2xl font-bold">Account Settings</h2>
    <div class="flex flex-col sm:flex-row gap-5 w-full  mt-4">
      <div class="shadow-md  sm:w-2/3 w-full  border border-zinc-200  dark:border-zinc-500 rounded min-h-[20px] ">
        <h4 class=" text-lg pl-3 pt-2 font-semibold">Profile Details</h4>
        <div class="sm:flex flex-row  justify-between mt-8">

          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMJ4u2oBiaNxB-N3HCFTQR9e33O8ftn3B4dA&usqp=CAU" alt="" srcset="" class="rounded-full m-auto sm:m-0 w-32 sm:ml-4">

          <div class="flex flex-row m-auto sm:m-0  mt-10  sm:mt-0 w-fit sm:mr-16">
            <div class="w-fit m-auto ">
              <div class="image-input">
                <input type="file" accept="image/*" id="imageInput" class="input-file">
                <label for="imageInput" class="image-button dark:text-black dark:bg-white text-white bg-zinc-900"><i class="far fa-image file_ico"></i> Choose image</label>
                <img src="" class="image-preview img">
                <span class="change-image span">Choose different image</span>
              </div>
            </div>
            <!-- <button class="btn Delete border-2 h-fit m-auto px-2 py-1 rounded border-red-500 text-red-500"><b>Delete</b></button> -->
          </div>
        </div>
        <div class=" sm:mt-10 mt-5 flex flex-col gap-4">

          <div class="flex flex-col gap-1 pl-3">
            <h5> Username </h5>
            <input type="text" disabled class="text-sm border pl-2 dark:bg-zinc-700 dark:border-zinc-500 w-11/12 max-w-[350px]  border-zinc-300 h-8 rounded" value="{{explode('@',session('user'))[0]}}">
          </div>
          <div class=" flex flex-col gap-1 pl-3 mb-4">
            <h5> Email </h5>
            <input type="email" disabled class="border text-sm pl-2 dark:bg-zinc-700 dark:border-zinc-500 w-11/12 max-w-[350px] border-zinc-300 h-8 rounded" value="{{session('user')}}">
          </div>
        </div>

      </div>
      <div class="flex flex-col gap-5 sm:w-1/3 justify-between ">
        <div class="border shadow-md  rounded border-zinc-200  dark:border-zinc-500  flex h-full  items-end justify-center  relative  sm:h-1/2 min-h-[10rem]">
          <h4 class="absolute left-3 top-2 font-semibold">Change Password</h4>

          <button class="hover:text-white hover:bg-red-500 text-red-500 px-8  border-red-500 mb-4 rounded py-2 font-semibold text-sm shadow-md border shadow-red-200 dark:shadow-red-700 hover:shadow-none ">Change Password</button>
        </div>

        <div class=" border shadow-md rounded border-zinc-200  dark:border-zinc-500 flex h-full items-end justify-center relative sm:h-1/2 min-h-[10rem]">
          <h4 class="absolute left-3 top-2 font-semibold"> Close account</h4>

          <a href="/logout" onclick="" class="hover:text-white hover:bg-red-500 text-red-500 px-8  border-red-500 mb-4 rounded py-2 font-semibold text-sm shadow-md border shadow-red-200 dark:shadow-red-700 hover:shadow-none ">
            Log Out
          </a>
          @else
          <div class="flex flex-row justify-center items-center h-full relative ">
            <p class="absolute left-0 right-0  m-auto text-center text-zinc-400">It seems like you have not sign in,<br> Please sign In .</p>
            <a href="/login" onclick="" class="hover:text-white m-auto hover:bg-red-500 text-red-500 px-8  border-red-500 mb-4 rounded py-2 font-semibold text-sm shadow-md border shadow-red-200 dark:shadow-red-700 hover:shadow-none ">
              Sign In
            </a>
          </div>

        </div>
      </div>
    </div>
    @endif
  </section>
</div>



@endsection