@extends('admin')

@section('content2')
<div class="for__padding pl-4 mt-4 h-full  bg-white dark:bg-zinc-900">
    <section class="title flex flex-row justify-end w-full group mb-8 ">
        <h1 style="box-shadow:0 0 8px -2px rgba(0 0 0/0.8);" class="mr-4 px-2 w-fit relative rounded-full text-[10px] text-white xs:text-xs sm:text-sm border h-fit my-auto active:bg-zinc-600 bg-zinc-800 transition-all dark:text-black group-hover:text-white py-1 border-zinc-500 text-center ">
            <span class="dark:text-white">Add Product</span>
            <div class="absolute w-full h-full left-0 top-0 ">
                <input type="checkbox" name="" id="" class="w-full cursor-pointer h-full z-40 opacity-0 peer/add relative">

                <!-- ADD PRODUCT FORM -->

                <div style="width: calc(100vw - 5rem);" class=" h-fit right-0 xs:top-20 top-12   peer-checked/add:z-50 -z-20 absolute ">

                    <form id='form_add_product' action=""  class="  opacity-100 bg-violet-white pb-6 xs:relative absolute right-[1%] xs:right-0  m-auto  transition-all md:w-[700px] xs:w-[83vw]  w-[90vw] h-fit border-[1.5px] border-zinc-600 bg-zinc-100 dark:border-zinc-400 rounded-sm">
                        @csrf
                        <img id="uploaded_img" src="https://cdn3d.iconscout.com/3d/premium/thumb/add-photos-6242728-5115897.png" class="w-20 h-20 m-auto my-4" alt="" srcset="">
                        <span class="file_name text-sm  h-10 border  tracking-widest font-thin text-zinc-600 hover:text-white hover:bg-zinc-600 border-zinc-600  px-2 py-1 rounded relative font-rubic "> upload

                            <input type="file" onchange="getvalue()" required accept="image/png, image/jpeg" name="" id="file_image" class="text-xs  absolute top-0 w-full h-full left-0 opacity-0 z-30 peer/photo">
                            <i class="validator text-green-500 fa-solid fa-circle-check absolute top-1  -left-5 opacity-0 transition-all delay-200"></i>


                        </span>
                        <div class="md:grid md:grid-cols-2 font-rubic gap-2 ml-4 mt-10 gap-y-6 flex flex-col items-center">
                            <div class="flex gap-2 w-full flex-row justify-between pr-4 ">
                                <label class="text-zinc-600 mt-2 font-thin  text-sm">Product Name</label><input type="text" name="p_name" id="p1" class="border py-1 focus:border-zinc-400 block  placeholder:text-xs font-rubic font-thin text-zinc-600 pl-4 text-sm " placeholder="ex. s22 ultra" required>
                            </div>
                            <div class="flex gap-2 w-full flex-row justify-between pr-4 ">
                                <label class="text-zinc-600 mt-2 font-thin  text-sm">Prodduct Price</label><input onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));" maxlength="7" type="text" name="p_price" class="border py-1 focus:border-zinc-400 block  placeholder:text-xs font-rubic font-thin text-zinc-600 pl-4 text-sm " placeholder="ex. ₹ 11499" id='setprice' onclick="setText(this)" required>
                            </div>
                            <div class="flex gap-2 w-full flex-row justify-between pr-4 ">
                                <label class="text-zinc-600 mt-2 font-thin  text-sm">Prodduct Origin Price</label><input onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));" maxlength="7" type="text" name="p_oprice" class="border py-1 focus:border-zinc-400 block  placeholder:text-xs font-rubic font-thin text-zinc-600 pl-4 text-sm " placeholder="ex. ₹ 12499" id='setoprice' onclick="setText(this)" required>
                            </div>
                            <div class="flex gap-2 w-full flex-row justify-between pr-4 ">
                                <label class="text-zinc-600 mt-2 font-thin  text-sm">Prodduct Quantity</label><input onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));" maxlength="7" type="text" name="p_qty" class="border py-1 focus:border-zinc-400 block  placeholder:text-xs font-rubic font-thin text-zinc-600 pl-4 text-sm " placeholder="ex. 18" required id='qty'>
                            </div>
                            <div class="flex gap-2 w-full flex-row justify-between pr-4 ">
                                <label class="text-zinc-600 mt-2 font-thin  text-sm">Brand</label><input type="text" name="p_brand" id="brand" class="border py-1 focus:border-zinc-400 block  placeholder:text-xs font-rubic font-thin text-zinc-600 pl-4 text-sm " placeholder="ex. redmi" required>
                            </div>
                            <div class="flex gap-2 w-full flex-row justify-between pr-4">
                                <label class="text-zinc-600 font-thin   text-sm mt-2">Description</label>
                                <textarea name="p_desc" id="desc" cols="" rows="1" class="border py-1  focus:border-zinc-400 block  placeholder:text-xs font-rubic font-thin text-zinc-600 pl-4  text-sm" placeholder="enter product name" required></textarea>
                            </div>
                        </div>
                        <button type="" id="form_addpoduct__btn" class="font-mont font-normal border px-3 bg-zinc-700 ml-[60%] mt-12  text-white transition-all delay-150 active:opacity-70 rounded-full shadow text-sm  border-zinc-500    py-1.5  hover:bg-black  ">add product</button>
                    </form>
                </div>

                <!-- EDIT PRODUCT FORM  -->
                <div style="width: calc(100vw - 5rem);" class="edit__form h-fit right-0 xs:top-20 top-12   -z-20 absolute ">
                    <form id="edit_product_form" action="" class="  opacity-100 bg-violet-white pb-6 xs:relative absolute right-[1%] xs:right-0  m-auto  transition-all md:w-[700px] xs:w-[83vw]  w-[90vw] h-fit border-[1.5px] border-zinc-600 bg-zinc-100 dark:border-zinc-400 rounded-sm">

                        <span class="z-50">
                            <i class="edit__cancle fa-solid fa-square-xmark absolute top-4 left-4 text-zinc-600  "></i>
                        </span>
                        <img id="e_img" src="https://cdn3d.iconscout.com/3d/premium/thumb/add-photos-6242728-5115897.png" class="w-20 h-20 m-auto my-4" alt="" srcset="">
                        <span class="file_name text-sm  h-10 border  tracking-widest font-thin text-zinc-600 hover:text-white hover:bg-zinc-600 border-zinc-600  px-2 py-1 rounded relative font-rubic "> upload

                            <input type="file" onchange="getvalue()" accept="image/png, image/jpeg" name="" id="e_file_image" class="text-xs  absolute top-0 w-full h-full left-0 opacity-0 z-30 peer/photo">
                            <i class="e_validator text-green-500 fa-solid fa-circle-check absolute top-1  -left-5 opacity-0 transition-all delay-200"></i>
                        </span>
                        <div class="md:grid md:grid-cols-2 font-rubic gap-2 ml-4 mt-10 gap-y-6 flex flex-col items-center">
                            <div class="flex gap-2 w-full flex-row justify-between pr-4 ">
                                <label class="text-zinc-600 mt-2 font-thin  text-sm">Product Name</label><input type="text" id="e_name" class="border py-1 focus:border-zinc-400 block  placeholder:text-xs font-rubic font-thin text-zinc-600 pl-4 text-sm " placeholder="ex. s22 ultra" required>
                            </div>
                            <div class="flex gap-2 w-full flex-row justify-between pr-4 ">
                                <label class="text-zinc-600 mt-2 font-thin  text-sm">Prodduct Price</label><input onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));" maxlength="7" type="text" class="border py-1 focus:border-zinc-400 block  placeholder:text-xs font-rubic font-thin text-zinc-600 pl-4 text-sm " placeholder="ex. $ 499" id='e_price' onclick="setText()" required>
                            </div>
                            <div class="flex gap-2 w-full flex-row justify-between pr-4 ">
                                <label class="text-zinc-600 mt-2 font-thin  text-sm">Prodduct Quantity</label><input onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));" maxlength="7" type="text" class="border py-1 focus:border-zinc-400 block  placeholder:text-xs font-rubic font-thin text-zinc-600 pl-4 text-sm " placeholder="ex. 18" required id="e_qty">
                            </div>
                            <div class="flex gap-2 w-full flex-row justify-between pr-4 ">
                                <label class="text-zinc-600 mt-2 font-thin  text-sm">Brand</label><input type="text" id="p1" class="border py-1 focus:border-zinc-400 block  placeholder:text-xs font-rubic font-thin text-zinc-600 pl-4 text-sm " placeholder="ex. redmi" required id="e_brand">
                            </div>
                            <div class="flex gap-2 w-full flex-row justify-between pr-4">
                                <label class="text-zinc-600 font-thin   text-sm mt-2">Description</label>
                                <textarea name="" id="e_desc" cols="" rows="1" class="border py-1  focus:border-zinc-400 block  placeholder:text-xs font-rubic font-thin text-zinc-600 pl-4  text-sm" placeholder="enter product name" required></textarea>
                            </div>
                        </div>
                        <button type="" class="  font-mont font-normal border px-3 bg-zinc-700 ml-[60%] mt-12  text-white transition-all delay-150 active:opacity-70 rounded-full shadow text-sm  border-zinc-500    py-1.5  hover:bg-black">update</button>
                    </form>
                </div>








            </div>
            <i class="fa-solid relative fa-plus-circle  px-2  dark:text-white ">
            </i>
        </h1>
    </section>
    <section class="product__table">
        <div class="overflow-hidden rounded-lg border border-gray-200  dark:border-zinc-600 shadow-md mr-5">
            <div class="relative row__data">
                <div class="flex w-full border-b bg-gray-50 text-xs  md:text-sm ">
                    <span scope="col" class=" sm:pl-4 pl-1 w-1/12 py-4 font-semibold font-sans text-gray-900">Id</span>
                    <span scope="col" class=" sm:pl-4 pl-1 py-4 w-5/12 font-semibold font-sans text-gray-900">Name</span>
                    <span scope="col" class=" sm:pl-4 pl-1 py-4 w-1/12 font-semibold font-sans text-gray-900">Qty</span>
                    <span scope="col" class=" sm:pl-4 pl-1 py-4 w-4/12 font-semibold font-sans text-gray-900">Description</span>
                    <span scope="col" class=" sm:pl-4 pl-1 py-4 w-1/12 font-semibold font-sans text-gray-900"></span>
                </div>

                @foreach($pro_data as $item )
                <div class="product__row h-14 overflow-hidden border-b dark:border-zinc-600">
                    <div class="flex flex-row items-center hover:bg-gray-50 dark:hover:bg-opacity-20 py-2 text-xs md:text-sm font-sans relative ">
                        <span class="sm:pl-4 pl-1 w-1/12">
                            <span id="data__id">{{$item->p_id}}</span>
                        </span>
                        <span class="flex gap-3 sm:pl-4 pl-1 w-5/12 font-normal text-gray-900">
                            <div class="relative h-10 w-10">
                                <img id="data__img" class="h-10 w-8   object-cover object-center" src="productimages/{{$item->p_image}}" alt="" />
                                <!-- <span class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span> -->
                            </div>
                            <div class="text-sm  ">
                                <div id="data__name" class="font-medium dark:text-white text-gray-700 text-xs md:text-sm ">{{$item->p_name}}</div>
                                <div id="data__brand" class="text-gray-400 dark:text-gray-300 text-[10px] md:text-xs  -py-1">{{$item->p_brand}}</div>
                            </div>

                        </span>
                        <div class="xs:flex"></div>
                        <span class="sm:pl-4 pl-1 w-1/12 ">
                            <div class="flex gap-2">
                                <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                    <!-- <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span> -->
                                    {{$item->p_quantity}}
                                </span>
                            </div>
                        </span>
                        <span id="data__desc" class="sm:pl-4 pl-1 w-4/12 h-fit  max-w-[80%]" style="text-overflow: ellipsis;
                                overflow: hidden;white-space: nowrap">{{$item->p_info}}
                        </span>
                        <span class="sm:pl-4 pl-1 w-1/12 ">
                            <div class=" m-auto  w-full h-10 pt-2 text-center ">
                                <input type="checkbox" name="" id="" class="edit__checkbox absolute right-[1%] w-full h-8 top-3  opacity-0 z-30 peer/edit ">
                                <i class="fa-solid fa-circle-chevron-down peer-checked/edit:-rotate-180 transition-all delay-400 "></i>
                            </div>
                        </span>
                    </div>
                    <div class="flex flex-row items-center cursor-pointer hover:bg-gray-50  dark:hover:bg-opacity-20  text-xs md:text-sm font-sans relative ">
                        <button onclick="editfunc()" class="edit__btn  w-1/2 font-bold  border-l-0 shadow shadow-green-500 active:bg-green-600 bg-green-500 h-12  text-center text-white flex items-center justify-center rounded-bl ">
                            <i class="fa-solid fa-pen mr-4"></i>Edit
                        </button>
                        <button onclick="deletefunc(this)" class="delete__btn  w-1/2 font-bold border-r-0 shadow shadow-red-500 active:bg-red-600 bg-red-500 h-12 text-center text-white flex items-center justify-center rounded-br ">
                            <i class="fa-solid fa-trash mr-4"></i>Delete
                        </button>
                    </div>

                </div>
                @endforeach

            </div>

        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    const setprice = document.querySelector('#setprice');
    const product__row = document.querySelector('.product__row');

    const edit__form = document.querySelector('.edit__form');
    const eidt__cancle = document.querySelector('.eidt__cancle');
    if (document.querySelector(".product__row").hasChildNodes()) {
        console.log("true")
        const edit__checkbox = document.querySelector('.edit__checkbox');

    }
    const p_name = document.querySelector("#p1")
    const p_price = document.querySelector("#setprice")
    const p_oprice = document.querySelector("#setoprice")
    const p_qty = document.querySelector("#qty")
    const p_brand = document.querySelector("#brand")
    const p_desc = document.querySelector("#desc")

    function setText(e) {
        e.value = "₹ "
        console.log('click' + e.value)
    }

    if (document.querySelector(".product__row").hasChildNodes()) {
        function editfunc() {
            edit__form.classList.remove('-z-20')
            edit__form.classList.add('z-50')
            console.log(edit__form)
        }
    }



    function deletefunc(e) {
        var id = e.parentNode.parentNode.querySelector('#data__id').innerText
        console.log('delete button ==' + id)
        const xhr = new XMLHttpRequest()
        var delete_data = new FormData()
        var _token = document.getElementsByName("_token")[0].value
        console.log('token ==' + _token)
        delete_data.append("_token", _token)
        delete_data.append("p_id", id);
        xhr.open("POST", "{{route('delete')}}", true)
        xhr.onload = () => {
            console.log("repose" + xhr.responseText)
        }
        xhr.send(delete_data)
    }

    if (document.querySelector(".product__row").hasChildNodes()) {
        document.addEventListener('click', (e) => {
            console.log(e.target.classList[0])
            console.log(document.querySelector(".product__row").hasChildNodes())
            if (e.target.classList[0] == 'edit__btn') {
                const e_name = document.querySelector('#e_name');
                const e_brand = document.querySelector('#e_brand');
                const e_price = document.querySelector('#e_price');
                const e_qty = document.querySelector('#e_qty');
                const e_desc = document.querySelector('#e_desc');
                const e_img = document.querySelector('#e_img');
                var id = e.target.parentNode.parentNode.querySelector("#data__id").innerText
                var name = e.target.parentNode.parentNode.querySelector("#data__name").innerText
                var brand = e.target.parentNode.parentNode.querySelector("#data__brand").innerText
                var desc = e.target.parentNode.parentNode.querySelector("#data__desc").innerText
                var img = e.target.parentNode.parentNode.querySelector("#data__img")
                console.log(p_name.removeAttribute("placeholder"))
                console.log("row wala image == " + img.src)
                e_img.setAttribute("src", img.src)
                e_name.setAttribute("placeholder", name)
                e_price.setAttribute("placeholder", "hello")
                e_qty.setAttribute("placeholder", "hello")
                e_desc.setAttribute("placeholder", desc)
                e_brand.setAttribute("placeholder", brand)
                console.log('edit__btn clicked ')
                console.log('parent ele of edit ' + id)
                console.log('parent ele of edit ' + name)
                console.log('parent ele of edit ' + brand)
            }
            if (e.target.classList[0] == 'edit__cancle') {
                console.log("yes")
                edit__form.classList.remove('z-50')
                edit__form.classList.add('-z-20')
            }
            var index = [].indexOf.call(document.querySelectorAll("." + e.target.className.slice(0, 14)), e.target);



            const edit_ch_array = document.querySelectorAll("." + e.target.className.slice(0, 14))
            if (e.target.className.slice(0, 14) == 'edit__checkbox') {
                if (edit_ch_array[index].checked) {
                    // console.log(e.target.slice(0, 12))
                    // product__row.style.height = '6.6rem'
                    if ((e.target.parentNode.parentNode.parentNode.parentNode.className).slice(0, 12) == 'product__row') {
                        e.target.parentNode.parentNode.parentNode.parentNode.style.height = '6.6rem';
                    }
                } else {
                    e.target.parentNode.parentNode.parentNode.parentNode.style.height = '3.5rem'

                }
            }
        })

    }
    const file = document.getElementById('file_image')
    const fileName = document.querySelector('.file_name')
    if ((document.getElementById('file_image').value) != '') {
        document.querySelector('.validator').classList.add('opacity-100')
    }

    function getvalue() {
        if ((document.getElementById('file_image').value) != '') {
            document.querySelector('.validator').classList.add('opacity-100')
            console.log(document.querySelectorAll('.validator'))
        }
        if (document.querySelector(".product__row").hasChildNodes()) {
            if ((document.getElementById('e_file_image').value) != '') {
                document.querySelector('.e_validator').classList.add('opacity-100')

            }
        }
    }
    //AJAX
    const form_addpoduct__btn = document.querySelector("#form_addpoduct__btn")
    const file_image = document.querySelector("#file_image")
    const form_add_product = document.querySelector('#form_add_product');

    file_image.addEventListener('change', function(e) {
        uploaded_img = document.getElementById('uploaded_img');
        console.log("upload" + uploaded_img)
        var filereader = new FileReader();
        filereader.onloadend = function() {
            uploaded_img.src = filereader.result;
        }
        if (file_image.files[0]) {
            filereader.readAsDataURL(file_image.files[0])
        } else {
            uploaded_img.src = "";
        }
    });


    // var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
    form_addpoduct__btn.addEventListener('click', (e) => {
        e.preventDefault()

        console.log(p_name)
        console.log((p_qty))
        console.log(p_price.value.split(" ")[1])
        console.log(p_desc)
        console.log(p_brand)
        var form_data = new FormData()
        form_data.append("sample_image", file_image.files[0])
        form_data.append("_token", document.getElementsByName('_token')[0]['value'])
        // form_data.append("token", CSRF_TOKEN)

        console.log((file_image.files[0]))
        form_data.append("sample_image", file_image.files[0])
        form_data.append("p_name", p_name.value)
        form_data.append("p_price", p_price.value.split(" ")[1])
        form_data.append("p_oprice", p_oprice.value.split(" ")[1])
        form_data.append("p_qty", p_qty.value)
        form_data.append("p_brand", p_brand.value)
        form_data.append("p_desc", p_desc.value)

        // const file_name = (file_image.files[0])['name']
        console.log(form_data)
        // document.getElementsByName('_token')
        console.log((document.getElementsByName('_token')[0]['value']))
        //AJAX
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "{{route('insert')}}", true)
        xhr.onload = () => {
            console.log(xhr.responseText)
        }
        if (form_add_product.checkValidity()) {

            xhr.send(form_data)
        }
        else{
            form_add_product.reportValidity()
        }
    })
</script>
@endsection