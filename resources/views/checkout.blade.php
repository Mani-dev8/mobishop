@extends('welcome')
@section('content')
<style>
    .path {
        animation: fill 1s;
    }

    .active-circle {
        animation: active 0.8s;
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
            width: 30%;
        }

        50% {
            width: 40%;
        }

        100% {
            width: 50%;
        }
    }
</style>
<section class="checkout font-pop h-[100vh] w-[100vw] dark:bg-zinc-900 overflow-scroll">
    <div class="w-full dark:bg-gray-50 bg-zinc-900">
        <div class="flex lg:h-40 h-36 xl:w-[1280px] w-auto flex-col m-auto px-4 xl:px-0">
            <div class="h-1/2 w-full flex items-center justify-between ">
                <h1 class="text-2xl  text-white dark:text-black font-bold uppercase ">Checkout</h1>
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
                            <div class="flex relative items-center mr-1 ">
                                <i class="fa-regular fa-credit-card  text-xs sm:text-sm lg:text-base  dark:text-black text-white "></i>
                            </div>
                            <span class="text-xs sm:text-sm lg:text-base">Checkout</span> <span class="text-gray-400">&nbsp;></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="h-1/2 w-full pb-12 flex flex-row ">
                <div class="lg:w-2/3  w-full flex justify-between items-center text-center ">
                    <div class="w-full relative justify-around flex flex-row items-center ">
                        <span class=" border-[.125rem] sm:border-2 md:border-[3px]  border-zinc-500 dark:border-zinc-400 absolute w-full z-0"></span>
                        <span class="  z-20 w-5 h-5 md:w-6 md:h-6 bg-red-500  text-white rounded-full text-xs sm:text-sm md:text-base font-semibold pt-0.5 sm:pt-0 ">1
                            <div class="relative mt-2 -ml-3 text-zinc-400 font-[450]">
                                <span class="flex flex-row items-center">
                                    <i class="fa-solid fa-cart-shopping mr-1.5"></i>
                                    Cart
                                </span>
                            </div>
                        </span>
                        <span class="path absolute left-[0%] w-1/2  z-10 border-[.125rem] sm:border-2 md:border-[3px] bg-red-500 border-red-500 text-white  text-xs sm:text-sm md:text-base font-semibold ">
                        </span>
                        <span class="active-circle z-20 w-5 h-5 md:w-6 md:h-6 bg-red-500 text-white rounded-full text-xs sm:text-sm md:text-base font-semibold pt-0.5 sm:pt-0">2
                            <div class="relative mt-2 -ml-5 text-zinc-100 dark:text-zinc-700 font-[450]">
                                <span class="flex flex-row items-center">
                                    <i class="fa-regular fa-circle-user mr-1.5"></i>
                                    Details
                                </span>
                            </div>
                        </span>
                        <span class="z-20 w-5 h-5 md:w-6 md:h-6 bg-zinc-500 dark:bg-zinc-400 text-white rounded-full text-xs sm:text-sm md:text-base font-semibold pt-0.5 sm:pt-0">3
                            <div class="relative mt-2 -ml-5 text-zinc-400 font-[450]">
                                <span class="flex flex-row items-center">
                                    <i class="fa-solid fa-indian-rupee-sign mr-1.5"></i>
                                    Payment
                                </span>
                            </div>
                        </span>
                        <span class="z-20 w-5 h-5 md:w-6 md:h-6 bg-zinc-500 dark:bg-zinc-400 text-white rounded-full text-xs sm:text-sm md:text-base font-semibold pt-0.5 sm:pt-0">4
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
    <div class="w-full dark:bg-zinc-900 mb-16 sm:mb-0">
        <div class="flex sm:flex-row flex-col  xl:w-[1280px] justify-between  w-auto  m-auto px-4 xl:px-0">
            <!-- SHIPPING ADDRESS -->
            <div class="lg:w-8/12 dark:text-white w-full h-fit mb-4  mt-6  p-3">

                <div class="font-semibold text-sm border-b pb-0.5 md:text-lg">Shipping Address</div>

                <form id="addressForm" method="post" action="/address">
                    @csrf
                    <div class="flex md:flex-row justify-between  flex-col w-full mt-3 md:mt-6 relative">
                        <div class="mb-2 md:w-[calc(50%-1rem)]  ">
                            <h1 class="text-xs text-zinc-700 dark:text-zinc-200 mb-1 md:text-sm">First Name</h1>
                            <input type="text" name="fn" id="" required required class="border focus:border-red-300 focus:shadow-sm focus:shadow-red-200 rounded-sm w-full py-0.5 sm:py-1 px-2 md:max-w-[300px] dark:focus:border-red-400 dark:focus:shadow-red-500  dark:bg-zinc-800 dark:border-zinc-600">
                        </div>
                        <div class="mb-2 md:w-[calc(50%-1rem)]">
                            <h1 class="text-xs text-zinc-700 dark:text-zinc-200 mb-1 md:text-sm">Last Name</h1>
                            <input type="text" name="ln" id="" required class="border focus:border-red-300 focus:shadow-sm focus:shadow-red-200 rounded-sm w-full py-0.5 sm:py-1 px-2 md:max-w-[300px] dark:focus:border-red-400 dark:focus:shadow-red-500  dark:bg-zinc-800 dark:border-zinc-600">
                        </div>
                    </div>
                    <div class="flex md:flex-row justify-between  flex-col w-full mt-3 md:mt-6 relative">
                        <div class="mb-2 md:w-[calc(50%-1rem)]  ">
                            <h1 class="text-xs text-zinc-700 dark:text-zinc-200 mb-1 md:text-sm">E-mail Address</h1>
                            <input type="email" name="email" id="" required class="border focus:border-red-300 focus:shadow-sm focus:shadow-red-200 rounded-sm w-full py-0.5 sm:py-1 px-2 md:max-w-[300px] dark:focus:border-red-400 dark:focus:shadow-red-500  dark:bg-zinc-800 dark:border-zinc-600">
                        </div>
                        <div class="mb-2 md:w-[calc(50%-1rem)]">
                            <h1 class="text-xs text-zinc-700 dark:text-zinc-200 mb-1 md:text-sm">Phone Number</h1>
                            <input type="text" onkeypress="return (event.charCode>= 48 && event.charCode <= 57)" maxlength="10" name="phone" id="" required class="border focus:border-red-300 focus:shadow-sm focus:shadow-red-200 rounded-sm w-full py-0.5 sm:py-1 px-2 md:max-w-[300px] dark:focus:border-red-400 dark:focus:shadow-red-500  dark:bg-zinc-800 dark:border-zinc-600">
                        </div>
                    </div>
                    <div class="flex md:flex-row justify-between  flex-col w-full mt-3 md:mt-6 relative">
                        <div class="mb-2 md:w-[calc(50%-1rem)]  ">
                            <h1 class="text-xs text-zinc-700 dark:text-zinc-200 mb-1 md:text-sm">State</h1>
                            <input type="text" name="state" id="" required class="border focus:border-red-300 focus:shadow-sm focus:shadow-red-200 rounded-sm w-full py-0.5 sm:py-1 px-2 md:max-w-[300px] dark:focus:border-red-400 dark:focus:shadow-red-500  dark:bg-zinc-800 dark:border-zinc-600">
                        </div>
                        <div class="mb-2 md:w-[calc(50%-1rem)]">
                            <h1 class="text-xs text-zinc-700 dark:text-zinc-200 mb-1 md:text-sm">District</h1>
                            <input type="text" name="disctrict" id="" required class="border focus:border-red-300 focus:shadow-sm focus:shadow-red-200 rounded-sm w-full py-0.5 sm:py-1 px-2 md:max-w-[300px] dark:focus:border-red-400 dark:focus:shadow-red-500  dark:bg-zinc-800 dark:border-zinc-600">
                        </div>
                    </div>
                    <div class="flex md:flex-row justify-between  flex-col w-full mt-3 md:mt-6 relative">
                        <div class="mb-2 md:w-[calc(50%-1rem)]  ">
                            <h1 class="text-xs text-zinc-700 dark:text-zinc-200 mb-1 md:text-sm">Pin Code</h1>
                            <input type="text" name="pincode" id="" required class="border focus:border-red-300 focus:shadow-sm focus:shadow-red-200 rounded-sm w-full py-0.5 sm:py-1 px-2 md:max-w-[300px] dark:focus:border-red-400 dark:focus:shadow-red-500  dark:bg-zinc-800 dark:border-zinc-600">
                        </div>
                        <div class="mb-2 md:w-[calc(50%-1rem)]">
                            <h1 class="text-xs text-zinc-700 dark:text-zinc-200 mb-1 md:text-sm">Address 1</h1>
                            <input type="text" name="address1" id="" class="border dark:focus:border-red-400 dark:focus:shadow-red-500 dark:border-zinc-600 dark:bg-zinc-800  focus:border-red-300 focus:shadow-sm focus:shadow-red-200 rounded-sm w-full py-0.5 sm:py-1 px-2 md:max-w-[300px]">
                        </div>
                    </div>
                    <div class="flex md:flex-row justify-between  flex-col w-full mt-3 md:mt-6 relative">
                        <div class="mb-2 md:w-[calc(50%-1rem)]  ">
                            <h1 class="text-xs text-zinc-700 dark:text-zinc-200 mb-1 md:text-sm">Address 2</h1>
                            <input type="text" name="address2" id="" required class="border focus:border-red-300 focus:shadow-sm focus:shadow-red-200 rounded-sm w-full py-0.5 sm:py-1 px-2 md:max-w-[300px] dark:focus:border-red-400 dark:focus:shadow-red-500  dark:bg-zinc-800 dark:border-zinc-600">
                        </div>
                    </div>
                </form>
                <h1 class="font-semibold text-sm md:text-base mt-6 border-b pb-2">Billing Address</h1>
                <div class="flex mt-4">
                    <input type="checkbox" name="" id="" class="accent-red-500 bg-red-500 mr-4">
                    <h1 class="text-sm">same as shipping address</h1>
                </div>
                <div class="flex gap-4 justify-between flex-row mt-8">
                    <button class="active:opacity-70 rounded bg-zinc-200 hover:bg-zinc-300 text-black text-center px-2 py-2  w-full">
                        < Back </button>
                            <button onclick="addUserAddress()" class="active:opacity-70 rounded bg-red-500 shadow-md dark:shadow-red-600 shadow-red-400 hover:shadow-none hover:bg-red-600 text-white text-center px-2 py-2  w-full">
                                Next >
                            </button>
                </div>
            </div>
            <!-- //SHIPPING ADDRESS -->
            <!-- ORDER SUMMARY -->
            <div class="sm:w-[30%] dark:text-white border h-fit dark:border-zinc-600  min-w-[260px] md:min-w-[300px] rounded w-full sm:block transition-all sm:mt-[-5rem] lg:-mt-[5.8rem] p-4 sm:ml-4 group/category  bg-white  dark:bg-zinc-900 shadow-md  dark:shadow-gray-700">
                <div class="dark:text-white border-b  text-sm lg:text-base dark:border-gray-500 pb-3  group-hover/category:text-red-500 text-center  text-black font-base  mt-2 ">
                    <h1 class=" text-lg lg:text-2xl font-rubic font-bold ">Order summary </h1>
                </div>
                <section class="items">

                    <input type="hidden" name="" value="{{$total=0}}">
                    @foreach($cartItems as $item)
                    <div class="flex  py-2 flex-row justify-between  text-right xs:pr-5 sm:px-1 px-1 sm:pr-0 border-b dark:border-zinc-600 dark:bg-zinc-800  mt-4 rounded ">
                        <img src="productimages/{{$item->p_image}}" class="w-[25%]" alt="" srcset="">
                        <div class="mt-1 pr-2">
                            <input type="hidden" name="" value="{{$total=$total+($item->p_price*$item->qty)}}">
                            <h1 class="font-[500] text-sm sm:text-base">{{$item->p_name}}</h1>
                            <span class="text-sm font-rubic text-red-500">₹ {{$item->p_price}}.<span class="text-[10px]  mr-2">00</span> <span class="text-zinc-700 dark:text-zinc-400"> x {{$item->qty}}</span></span>
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
                    <div class="flex  mt-2 justify-between border-b dark:border-zinc-400 pb-2 mb-4">
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

                </div>
                <button type='submit' onclick="addUserAddress(this)" class="active:opacity-70 rounded mt-5  bg-red-500 shadow-md dark:shadow-red-600 shadow-red-400 hover:shadow-none hover:bg-red-600 text-white text-center px-2 py-2  w-full">
                    <i class="fa-regular fa-credit-card text-white"></i> Proceed to payment
                </button>
            </div>
            <!-- //ORDER SUMMARY -->
        </div>
    </div>

</section>
<script>
    const addressForm = document.querySelector('#addressForm');

    async function addUserAddress() {
        if (addressForm.checkValidity()) {
            const formData = new FormData(addressForm);
            // console.log(formData)
            try {
              const response=  await fetch("/address", {
                        method: "POST",
                        body: formData,
                    })
               const data=await response.text()
               if(data==="payment"){
                location.href='payment'
               }
               else{
                console.log(data)
               }  

            } catch (error) {
                console.log(error)
            }
        } else {
            addressForm.reportValidity()
        }
        console.log("hello")
    }
</script>
@endsection