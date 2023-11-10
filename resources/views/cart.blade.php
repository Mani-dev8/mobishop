@extends('welcome')
@section('content')
<section class="cart_section relative font-pop h-[100vh] w-[100vw] dark:bg-zinc-900">
    <div class="w-60 h-60 bg-transparent fixed  top-0 bottom-0 m-auto left-0 right-0 z-50">
        <div class="w-full h-full delete_notify  flex flex-row items-center justify-center">
        </div>
    </div>
    <div class="w-full  dark:bg-gray-50 bg-zinc-900">
        <div class="flex lg:h-40 h-36 xl:w-[1280px] w-auto flex-col m-auto px-4 xl:px-0">
            <div class="h-1/2 w-full flex items-center justify-between border-b ">
                <h1 class="text-2xl  text-white dark:text-black font-bold uppercase ">My Cart</h1>
                <div class="flex ">
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
                                <i class="fa-solid fa-cart-shopping  text-xs sm:text-sm lg:text-base  dark:text-black text-white "></i>
                            </div>
                            <span class="text-xs sm:text-sm lg:text-base">Cart</span> <span class="text-gray-400">&nbsp;></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="h-1/2 w-full  flex flex-row ">
                <div class="lg:w-2/3  w-full flex justify-between items-center text-center ">
                    <div class="flex items-center ">
                        <h1 class=" text-white dark:text-black mr-2 sm:text-lg  text-xs font-bold ">Products</h1>
                    </div>
                    <a href="home" class="w-40 rounded-sm md:w-44 text-white shadow-sm shadow-red-400 active:opacity-60 hover:shadow-none bg-red-600 dark:bg-red-500 border px-2 py-1 text-xs sm:text-sm border-red-500 "> <i class="fa-solid fa-angle-left"></i> Continue Shopping</a>
                </div>
                <div class="sm:min-w-[280px] md:min-w-[330px] xl:w-1/3"></div>
            </div>
        </div>
    </div>
    <div class="w-full dark:bg-zinc-900  sm:mb-0">
        <div class="flex  xl:w-[1280px] justify-between  w-auto flex-row m-auto px-4 xl:px-0 h-full ">
            <div class="lg:w-8/12 rounded shadow-md border border-zinc-100 dark:border-zinc-700 dark:shadow-zinc-600 px-3  w-full h-[calc(88vh-5.5rem-4rem)]  sm:h-[calc(88vh-7.3rem)] overflow-scroll mt-6  ">
                @if(count($cartItems)>0)
                <input type="hidden" name="" value="{{$total=0}}">
                @foreach($cartItems as $item)
                <input type="hidden" name="" value='{{$total=$total+($item->p_price*$item->qty)}}'>
                <div class="dark:bg-zinc-800 bg-zinc-100 dark:bg-opacity-60 bg-opacity-60 hover:bg-zinc-200 dark:hover:bg-opacity-10 dark:active:bg-opacity-10 rounded-md  flex my-4 flex-row w-full border pr-2 border-zinc-200 dark:border-zinc-700 justify-between ">
                    <input type="hidden" name="" id="pro_{{$item->p_id}}">
                    <div class="flex  flex-row w-fit items-start">
                        <img src="productimages/{{$item->p_image}}" alt="" class=" max-h-[80px]" srcset="">

                        <div class="flex h-full  text-black dark:text-white flex-row text-left  ml-4 ">
                            <div class="m-auto">
                                <div class="text-xs sm:text-sm md:text-base lg:text-lg font-semibold font-pop">
                                    {{$item->p_name}}
                                </div>
                                <div class="  mt-0.5 text-xs sm:text-sm md:text-base">

                                </div>
                                <div class=" -mt-0.5  text-xs sm:text-sm md:text-base">
                                    white
                                </div>
                                <div class="lg:text-xl tracking-wider flex xs:flex-row sm:flex-col md:flex-row flex-col  font-pop font-bold md:text-base sm:text-sm text-xs">
                                    <span>₹{{$item->p_price}}</span>
                                    <div class="font-thin hidden xs:block sm:hidden md:block">&nbsp;&nbsp; | &nbsp;&nbsp;</div> <strike class="font-normal opacity-80">₹{{$item->p_oprice}}</strike>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" flex flex-col justify-center   ">
                        <div class=" flex flex-col ">
                            <h1 class="text-black font-base dark:text-white   text-xs sm:text-sm ">
                                Quantity
                            </h1>

                            <div id="quantity" class="flex flex-col relative">
                                <input type="hidden" name="" value="{{$item->p_id}}">
                                <input type="number" onkeyup="checkValue(this);" onkeypress=" return event.charCode>=48 && event.charCode<=57 " pattern="[0-9]+" onchange="console.log('changed')" min="0" id="pin" name="pin" class="focus:outline-none border bg-transparent dark:text-white md:p-1 p-0.5 lg:p-2 my-2 lg:w-32 md:w-28 sm:w-24 w-16  sm:py-1 rounded-sm border-zinc-600 text-xs sm:text-sm focus:border-red-400 focus:border-opacity-60 " maxlength="2" size="2" required oninvalid="this.setCustomValidity('Enter Quantity')" oninput="this.setCustomValidity('')" value="{{$item->qty}}" />
                                <button onclick="increment(this)" class="bg-zinc-100 h-3 w-4 md:scale-100 scale-75 text-[10px] font-semibold absolute top-2.5 md:top-[0.70rem] right-1 active:opacity-80  hover:bg-zinc-300  z-50">+</button>
                                <button onclick="decrement(this)" id="decrease" class="bg-zinc-100 md:scale-100 scale-75 top-[1.2rem]  h-3 w-4  text-[10px] pb-1 font-bold md:top-[1.45rem] right-1 absolute active:opacity-80  hover:bg-zinc-300  z-50">-</button>
                                <button type="submit" onclick="delete_notification(this.parentElement.children[0].value)" class="text-red-500 hover:text-red-400  active:opacity-60 text-xs sm:text-sm lg:text-base text-left ">
                                    <i class="fa-regular fa-circle-xmark text-xs  "></i>
                                    Remove
                                </button>
                                <input type="hidden" name="" value="{{$item->p_price}}" class="price">
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <input type="hidden" name="" value='{{$total}}' id='subtotal_h'>
                @else
                <div class="w-full h-[90%] flex flex-row justify-center relative">
                    <img src="Rectangle.gif" alt="" srcset="" class="w-60 h-60 m-auto">
                    <p class="m-auto absolute bottom-10 dark:text-red-400 text-center">it seems like your cart is empty <br>please add products to see in your cart</p>
                </div>
                @endif
            </div>
            <div class="w-3/12 h-[88vh] dark:border-zinc-700  min-w-[260px] md:min-w-[300px] rounded hidden sm:block transition-all mt-[-5.5rem] md:-mt-[5.8rem] p-4 ml-4 group/category  bg-white  dark:bg-zinc-900 shadow-md  dark:shadow-gray-600">
                <div class="dark:text-white border-b  text-sm lg:text-base dark:border-gray-500 pb-3  group-hover/category:text-red-500 text-center  text-black font-base  mt-2 ">Subtotal
                    <h1 class=" text-lg lg:text-2xl font-rubic font-bold " id="subtotal">₹ 0<span class="text-sm md:text-lg ">.00</span> </h1>
                </div>
                <div class="flex text-black dark:text-white mt-6 text-sm md:text-base">
                    <div class="text-white bg-gradient-to-r mr-4 from-red-400 to-red-600 px-2 rounded text-center text-sm pb-0.5">
                        note
                    </div>
                    Additional Comments
                </div>
                <textarea name="" id="" rows="3" class=" ext-black dark:text-white bg-transparent border w-full  p-3 dark:focus:border-red-400 focus:border-red-400  focus:border-opacity-60 border-zinc-300 dark:border-zinc-600 focus:outline-none my-2 rounded-sm"></textarea>
                <div class="w-full">
                    <!-- relative  before:rounded-lg before:absolute dark:before:bg-gray-600  before:w-full before:h-[1px] before:bottom-0 -->

                    <div class="flex w-full  group/promo   transition-all ease-linear delay-200 mt-6 cursor-pointer relative   my-2">
                        <input class="w-full pr-4 h-6 z-10 opacity-0  absolute peer " type="checkbox" name="category" id="">
                        <i class="fa-sharp fa-solid p-1 peer-checked:text-white rounded-full peer-checked:bg-opacity-70 dark:peer-checked:bg-rose-500 peer-checked:bg-red-600  fa-chevron-up dark:text-white absolute right-2  text-sm peer-checked:rotate-180"></i>
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
                    </div>


                </div>
                <a href="checkout">
                    <button class="active:opacity-70 rounded bg-red-500 shadow-md  shadow-red-400 hover:shadow-none hover:bg-red-600 text-white text-center px-2 py-2  w-full">
                        <i class="fa-regular fa-credit-card text-white"></i> Proceed to checkout
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div id="bottom-checkout" class="sm:hidden fixed bottom-0  h-16 w-full bg-zinc-900 dark:bg-zinc-200 flex flex-row justify-between items-center px-4">
        <div class="total flex items-baseline text-white dark:text-black">
            <span class="text-base mr-2 ">₹</span>
            <h1 class="text-2xl font-rubic font-bold" id="subtotalBottom">0</h1>
            <span class="text-base mr-2">.00</span>
        </div>
        <a href="checkout" class="px-4 border border-zinc-300 dark:border-zinc-300 rounded-full py-1 uppercase font-pop hover:text-zinc-900 hover:border-zinc-100 hover:bg-zinc-100 hover:shadow-none active:opacity-60 text-zinc-100 shadow-md  shadow-zinc-500 dark:text-black">checkout</a>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js" integrity="sha512-fTTVSuY9tLP+l/6c6vWz7uAQqd1rq3Q/GyKBN2jOZvJSLC5RjggSdboIFL1ox09/Ezx/AKwcv/xnDeYN9+iDDA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const subtotal = document.querySelector('#subtotal_h');
    console.log("total", subtotal.value);
    document.querySelector('#subtotal').innerText = `₹ ${parseInt(subtotal.value).toLocaleString()}`;
    document.querySelector('#subtotalBottom ').innerText = `₹ ${parseInt(subtotal.value).toLocaleString()}`;
    price_div = document.querySelectorAll('.price');
    const cartPriceCal = () => {
        let total = 0;
        price_div.forEach(e => {
            console.log(e.value)
            total = total + (parseInt(e.value) * parseInt(e.parentElement.children[1].value))
            console.log(e.parentElement.children[1].value)
        });
        document.querySelector('#subtotal').innerText = `₹ ${total.toLocaleString()}`;
        document.querySelector('#subtotalBottom ').innerText = `₹ ${total.toLocaleString()}`;
        console.log(total)
    }
    window.onload = () => {
        cartPriceCal()
    }
    // bodymovin.loadAnimation({
    //     container: document.getElementById('lottie'),
    //     path: 'public/lottie.json',
    //     renderer: 'svg',
    //     autoplay: 'true'
    // })

    function increment(e) {
        var xhr = new XMLHttpRequest();
        var q_element = e.previousElementSibling;
        var q = q_element.value;
        var p_id = e.previousElementSibling.previousElementSibling.value;
        console.log(p_id)
        xhr.open('GET', `qty_p?q=${q}&c={{$c_id}}&p=${p_id}`, true)
        xhr.onload = () => {
            console.log(xhr.responseText)
        }
        xhr.send()
        q_element.value = parseInt(q_element.value) + 1
        cartPriceCal()
    }

    var p_id = 0;
    var q = 0;

    function decrement(e) {
        var xhr = new XMLHttpRequest();
        const q_element = e.previousElementSibling.previousElementSibling;
        p_id = parseInt(e.previousElementSibling.previousElementSibling.previousElementSibling.value);
        q = q_element.value
        if (parseInt(q) > 1) {
            xhr.open('GET', `qty_m?q=${q}&c={{$c_id}}&p=${p_id}`, true)
            xhr.onload = () => {
                console.log(xhr.responseText)
            }
            q_element.value = parseInt(q_element.value) - 1
            cartPriceCal()
            console.log(q_element.value)
            xhr.send()
        } else {
            e.disabled = true;
            setTimeout(() => {
                console.log(document.querySelector('.delete_notify'))
                document.querySelector('.delete_notify').innerHTML = document.querySelector('.delete_notify').innerHTML + `
                <div style="" id='notification_delete' class='notify_delete w-60 h-60 relative dark:bg-zinc-900  m-5 mt-16 bg-zinc-100 rounded-lg'>
                    <div class='w-60 h-60 border rounded-lg dark:border-zinc-400   border-zinc-300 z-50 relative blur   group '>
                        <div class='absolute w-[102%] bg-zinc-900 h-[105%] -top-0.5 -left-0.5  blur bg-opacity-10 dark:bg-opacity-20 dark:bg-zinc-400 '></div>
                        <i class='fa-solid fa-circle-xmark absolute top-1 right-2 text-lg text-zinc-500 '></i>
                        <i class='fa-solid fa-circle-exclamation absolute top-5 left-20 text-7xl blur text-yellow-300 opacity-50 z-40'></i>
                    </div>
                    <div id='load' class='progress_delete w-60 h-60 border top-0 left-0 rounded-lg dark:border-zinc-600    border-zinc-400 z-50      group absolute  border-b border-b-zinc-500 '>
                        <div class='absolute flex flex-row items-center justify-center w-[102%] bg-zinc-100 h-[105%] -top-0.5 -left-0.5  blur bg-opacity-10 dark:bg-opacity-20 dark:bg-zinc-900 '></div>
                        <button class='focus:opacity-70 absolute top-1 right-2' onclick="console.log(this.parentNode.parentNode.remove());document.querySelector('#decrease').disabled=false" >
                            <i class='fa-solid fa-circle-xmark  text-lg dark:text-zinc-400 text-zinc-500'></i>
                        </button>
                        <i class='fa-solid fa-circle-exclamation text-yellow-400 absolute top-5 left-20 text-7xl  z-40'></i>
                        <p class='z-50 dark:text-white m-auto w-40 text-center  mr-10 text-sm font-semibold mt-28 text-black'>are you sure you want to DELETE this item from cart</p>
                        <div class="w-full mt-2 absolute bottom-0 h-10  overflow-hidden  border-2 rounded-b-lg dark:border-zinc-900 dark:border-opacity-50">
                            <div class="flex flex-row h-full items-center justify-center">
                                <button onclick="this.parentNode.parentNode.parentNode.parentNode.remove();delete_item()" class="w-1/2  h-full hover:text-zinc-300 dark:active:bg-opacity-30 dark:active:bg-red-600 dark:hover:bg-red-500 dark:bg-red-600  dark:bg-opacity-100  dark:hover:bg-opacity-30 dark:text-zinc-300">YES</button>
                                <div class="h-full border dark:border-zinc-900 dark:border-opacity-50  "></div>
                                <button onclick="console.log(this.parentNode.parentNode.parentNode.parentNode.remove());document.querySelector('#decrease').disabled=false" class="w-1/2 h-full hover:text-zinc-300  dark:active:bg-opacity-30 dark:active:bg-green-600 dark:hover:bg-green-500 dark:bg-green-600  dark:bg-opacity-100  dark:hover:bg-opacity-30 dark:text-zinc-300">NO</button>
                            </div>
                        </div>
                    </div>
                </div>
                `;
            }, 0);
            //             document.body.innerHTML = document.body.innerHTML + `<h1 class="dark:text-white text-black dark:bg-zinc-900 bg-zinc-100 w-fit h-fit px-4 py-2">Delete item</h1>
            // `
        }
    }

    function checkValue(e) {
        console.log('on key up', e.value)
    }

    function delete_item() {

        console.log("p_id==", p_id)
        // console.log(document.querySelector(`#pro_${p_id}`).parentNode.remove())
        var xhr = new XMLHttpRequest();
        xhr.open('GET', `qty_m?q=${q}&c={{$c_id}}&p=${p_id}`)
        xhr.onload = () => {
            console.log("248 response text=== ", xhr.responseText)
            if (xhr.responseText == "deleted") {
                document.querySelector(`#pro_${p_id}`).parentNode.remove()
                setTimeout(() => {
                    location.reload()
                }, 100);
                console.log("hello ")
            }
        }
        xhr.send()

    }

    function delete_notification(value) {
        document.querySelector('.delete_notify').innerHTML = document.querySelector('.delete_notify').innerHTML + `
                <div style=""  id='notification_delete' class='notify_delete w-60 h-60 relative dark:bg-zinc-900  m-5 mt-16 bg-zinc-100 rounded-lg'>
                    <div class='w-60 h-60 border rounded-lg dark:border-zinc-400   border-zinc-300 z-50 relative blur   group '>
                        <div class='absolute w-[102%] bg-zinc-900 h-[105%] -top-0.5 -left-0.5  blur bg-opacity-10 dark:bg-opacity-20 dark:bg-zinc-400 '></div>
                        <i class='fa-solid fa-circle-xmark absolute top-1 right-2 text-lg text-zinc-500 '></i>
                        <i class='fa-solid fa-circle-exclamation absolute top-5 left-20 text-7xl blur text-yellow-300 opacity-50 z-40'></i>
                    </div>
                    <div id='load' class='progress_delete w-60 h-60 border top-0 left-0 rounded-lg dark:border-zinc-600    border-zinc-400 z-50      group absolute  border-b border-b-zinc-500 '>
                        <div class='absolute flex flex-row items-center justify-center w-[102%] bg-zinc-100 h-[105%] -top-0.5 -left-0.5  blur bg-opacity-10 dark:bg-opacity-20 dark:bg-zinc-900 '></div>
                        <button class='focus:opacity-70 absolute top-1 right-2' onclick="console.log(this.parentNode.parentNode.remove());document.querySelector('#decrease').disabled=false" >
                            <i class='fa-solid fa-circle-xmark  text-lg dark:text-zinc-400 text-zinc-500'></i>
                        </button>
                        <i class='fa-solid fa-circle-exclamation text-yellow-400 absolute top-5 left-20 text-7xl  z-40'></i>
                        <p class='z-50 dark:text-white m-auto w-40 text-center  mr-10 text-sm font-semibold mt-28 text-black'>are you sure you want to DELETE this item from cart</p>
                        <div class="w-full mt-2 absolute bottom-0 h-10  overflow-hidden  border-2 rounded-b-lg dark:border-zinc-900 dark:border-opacity-50">
                            <div class="flex flex-row h-full items-center justify-center">
                                <button onclick="this.parentNode.parentNode.parentNode.parentNode.remove();remove(${value})" class="w-1/2  h-full hover:text-zinc-300 dark:active:bg-opacity-30 dark:active:bg-red-600 dark:hover:bg-red-500 dark:bg-red-600  dark:bg-opacity-100  dark:hover:bg-opacity-30 dark:text-zinc-300">YES</button>
                                <div class="h-full border dark:border-zinc-900 dark:border-opacity-50  "></div>
                                <button onclick="console.log(this.parentNode.parentNode.parentNode.parentNode.remove());document.querySelector('#decrease').disabled=false" class="w-1/2 h-full hover:text-zinc-300  dark:active:bg-opacity-30 dark:active:bg-green-600 dark:hover:bg-green-500 dark:bg-green-600  dark:bg-opacity-100  dark:hover:bg-opacity-30 dark:text-zinc-300">NO</button>
                            </div>
                        </div>
                    </div>
                </div>
                `;

    }

    function remove(e) {

        console.log(e)
        var xhr = new XMLHttpRequest();
        xhr.open('GET', `qty_m?q=${1}&c={{$c_id}}&p=${e}`)
        xhr.onload = () => {
            console.log("248 response text=== ", xhr.responseText)
            if (xhr.responseText == "deleted") {
                document.querySelector(`#pro_${e}`).parentNode.remove()
                setTimeout(() => {
                    location.reload()
                }, 100);
                console.log("hello ")
            }
        }
        xhr.send();
    }
</script>

@endsection