<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Order Invoice</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }

        body {
            margin: 0px;
        }

        * {
            font-family: Verdana, Arial, sans-serif;
        }

        /* 
        a {
            color: #fff;
            text-decoration: none;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .invoice table {
            margin: 15px;
        }

        .invoice h3 {
            margin-left: 15px;
        }

        .information {
            background-color: #60A7A6;
            color: #FFF;
        }

        .information .logo {
            margin: 5px;
        }

        .information table {
            padding: 10px;
        } */

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            color: #EF4444;
            text-decoration: none;
        }

        body {
            position: relative;
            width: 18cm;
            height: 29.7cm;
            padding-top: 4rem;
            margin: auto;
            color: #555555;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-family: SourceSansPro;
        }

        header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #AAAAAA;
        }

        #logo {
            float: left;

        }

        #logo img {
            height: 70px;
        }

        #company {
            float: right;
            text-align: right;
        }


        #details {
            margin-bottom: 50px;
        }

        #client {
            padding-left: 6px;
            border-left: 6px solid #EF4444;
            float: left;
        }

        #client .to {
            color: #777777;
        }

        h2.name {
            font-size: 1.4em;
            font-weight: normal;
            margin: 0;
        }

        #invoice {
            float: right;
            text-align: right;
        }

        #invoice h1 {
            color: #0087C3;
            font-size: 2.4em;
            line-height: 1em;
            font-weight: normal;
            margin: 0 0 10px 0;
        }

        #invoice .date {
            font-size: 1.1em;
            color: #777777;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 10px 20px;
            background: #EEEEEE;
            text-align: center;
            border-bottom: 1px solid #FFFFFF;
        }

        table th {
            white-space: nowrap;
            font-weight: normal;
        }

        table td {
            text-align: right;
        }

        table td h3 {
            color: #EF4444;
            font-size: 1.2em;
            font-weight: normal;
            margin: 0 0 0.2em 0;
        }

        table .no {
            color: #FFFFFF;
            font-size: 1.6em;
            background: #EF4444;
        }

        table .desc {
            text-align: left;
        }

        table .unit {
            background: #DDDDDD;
        }

        table .qty {}

        table .total {
            background: #EF4444;
            color: #FFFFFF;
        }

        table td.unit,
        table td.qty,
        table td.total {
            font-size: 1.2em;
        }

        table tbody tr:last-child td {
            border: none;
        }

        table tfoot td {
            padding: 10px 20px;
            background: #FFFFFF;
            border-bottom: none;
            font-size: 1.2em;
            white-space: nowrap;
            border-top: 1px solid #AAAAAA;
        }

        table tfoot tr:first-child td {
            border-top: none;
        }

        table tfoot tr:last-child td {
            color: #EF4444;
            font-size: 1.4em;
            border-top: 1px solid #EF4444;

        }

        table tfoot tr td:first-child {
            border: none;
        }

        #thanks {
            font-size: 2em;
            margin-bottom: 50px;
        }

        #notices {
            padding-left: 6px;
            border-left: 6px solid #0087C3;
        }

        #notices .notice {
            font-size: 1.2em;
        }

        footer {
            color: #fff;
            width: 100%;
            height: 30px;
            position: absolute;
            bottom: 0;
            border-top: 1px solid #AAAAAA;
            padding: 8px 0;
            background-color: #EF4444;
            text-align: center;
        }

        body {
            position: relative;
        }
    </style>

</head>

<body>
    <header class="clearfix ">
        <div id="logo">
            <h1 style="font-style:italic;font-size: 3rem">Mobishop</h1>
        </div>
        <div id="company">
            <div class="name">www.mobishop99.000webhostapp.com</div>
            <div>Thane-(W) 400605</div>
            <div>+91 9876543210</div>
            <div><a href="mailto:mobishop123@example.com">mobishop123@example.com</a></div>
        </div>
        </div>
    </header>
    <main>
        <div id="details" class="clearfix">
            <div id="client">
                <input type="hidden" name="" value="{{$count=0}}">
                <input type="hidden" name="" value="{{$length=count(explode('|',session('address')))}}">
                <!-- {{"length==".$length}} -->
                @foreach(explode('|',session('address')) as $field)
                @foreach((explode(':',$field)) as $value)
                @if(count(explode(':',$field))===2)
                @if((explode(':',$field))[0]=="email")
                <div class="email" style="margin-bottom: -20px;"><a href="mailto:{{session('user')}}">{{session('user')}}</a></div>
                @else
                {{(explode(':',$field))[1]}}
                @endif
                <br>
                @break
                @endif
                @endforeach
                @if($count==$length-4)
                @break
                @endif
                <input type="hidden" name="" value="{{$count++}}">
                @endforeach
            </div>
            <div id="invoice">
                <h1>INVOICE #122321</h1>
                <div class="date">Date of Invoice: {{date('Y-m-d'); }}</div>
                <!-- <div class="date">Due Date: 30/06/2014</div> -->
                <!-- {{(session('cart_items'))}} -->
                <!-- {{session('address')}} -->

            </div>
        </div>
        <table border="0" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th class="no">#</th>
                    <th class="desc">DESCRIPTION</th>
                    <th class="unit">UNIT PRICE</th>
                    <th class="qty">QUANTITY</th>
                    <th class="total">TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <input type="hidden" name="" vlaue="{{$total=0}}">
                <input type="hidden" name="" value="{{$sum=0}}">
                @foreach(session('cart_items') as $item)
                <tr style="font-size: 10px;">
                    <td class="no">01</td>
                    <td class="desc">
                        <h3>{{$item->p_name}}</h3>Creating a recognizable design solution based on the company's existing visual identity
                    </td>
                    <td class="unit">Rs. {{($item->p_price-($item->p_price*0.18))}}</td>
                    <td class="qty">{{$item->qty}}</td>
                    <td class="total">Rs. {{($item->p_price-($item->p_price*0.18))*$item->qty}}</td>
                </tr>
                <input typge="hidden" name="" value="{{$total=$total+($item->p_price*$item->qty)}}">
                <input type="hidden" name="" value="{{$sum=$sum+(($item->p_price-($item->p_price*0.18))*$item->qty)}}">
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">SUBTOTAL</td>
                    <td>Rs. {{$sum}}</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">TAX 18%</td>
                    <td>Rs. {{$total-($total-($total*0.18))}}</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">Shipping</td>
                    <td>Rs. 49</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2">GRAND TOTAL</td>
                    <td>Rs. {{($sum+$total-($total-($total*0.18))+49)}}</td>
                </tr>
            </tfoot>
        </table>
        <div id="thanks">Thank you!</div>
        <div id="notices">
            <div>NOTICE:</div>
            <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
        </div>
    </main>
    <footer class="footer">
        Invoice was created on a computer and is valid without the signature and seal.
    </footer>
</body>

</html>