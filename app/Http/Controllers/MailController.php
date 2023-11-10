<?php

namespace App\Http\Controllers;

use App\Mail\MailSender;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\userAccount;

class MailController extends Controller
{
    public function index(Request $req)
    {
        $email = $req->input('email');

        $data = userAccount::where('u_mail', $email)->exists();

        if ($data) {
            return "<!DOCTYPE html>
              <html lang='en'>

              <head>
                  <meta charset='UTF-8'>
                  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                  <meta name='viewport' content='width=device-width, initial-scale=1.0'>'
                  
                  

                  <!-- GOOGLE-FONTS -->
                  <link rel='preconnect' href='https://fonts.googleapis.com'>
                  <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                  <link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&family=Poppins&family=Rubik&family=Ubuntu&family=VT323&display=swap' rel='stylesheet'>

                  <!-- FONT-AWESOME -->
                  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous' referrerpolicy='no-referrer' />
                  <style>
                      *:focus {
                          outline: none;
                      }

                      * {
                          -ms-overflow-style: none;
                          /* Internet Explorer 10+ */
                          scrollbar-width: none;
                          /* Firefox */
                      }

                      *::-webkit-scrollbar {
                          display: none;
                          /* Safari and Chrome */
                      }

                      
                      @import url('https://fonts.googleapis.com/css2?family=Khand:wght@500&display=swap');
              *{
                margin:0;
                padding: 0;
                box-sizing: border-box;
              }
              body  { 
                height: 100vh;
                display: flex;
                font-size: 14px;
                text-align: center;
                justify-content: center;
                align-items: center;
                font-family: 'Khand', sans-serif;   
              }        

              .wrapperAlert {
                width: 500px;
                height: 400px;
                overflow: hidden;
                border-radius: 12px;
                border: thin solid #ddd;           
              }

              .topHalf {
                width: 100%;
                color: white;
                overflow: hidden;
                min-height: 250px;
                position: relative;
                padding: 40px 0;
                background: rgb(0,0,0);
                background: -webkit-linear-gradient(45deg, orange, yellow);
              }

              .topHalf p {
                margin-bottom: 30px;
              }
              svg {
                fill: white;
              }
              .topHalf h1 {
                font-size: 2.25rem;
                display: block;
                font-weight: 500;
                letter-spacing: 0.15rem;
                text-shadow: 0 2px rgba(128, 128, 128, 0.6);
              }
                      
              /* Original Author of Bubbles Animation -- https://codepen.io/Lewitje/pen/BNNJjo */
              .bg-bubbles{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;            
                z-index: 1;
              }

              li{
                position: absolute;
                list-style: none;
                display: block;
                width: 40px;
                height: 40px;
                background-color: rgba(255, 255, 255, 0.15);/* fade(green, 75%);*/
                bottom: -160px;

                -webkit-animation: square 20s infinite;
                animation:         square 20s infinite;

                -webkit-transition-timing-function: linear;
                transition-timing-function: linear;
              }
              li:nth-child(1){
                left: 10%;
              }		
              li:nth-child(2){
                left: 20%;

                width: 80px;
                height: 80px;

                animation-delay: 2s;
                animation-duration: 17s;
              }		
              li:nth-child(3){
                left: 25%;
                animation-delay: 4s;
              }		
              li:nth-child(4){
                left: 40%;
                width: 60px;
                height: 60px;

                animation-duration: 22s;

                background-color: rgba(white, 0.3); /* fade(white, 25%); */
              }		
              li:nth-child(5){
                left: 70%;
              }		
              li:nth-child(6){
                left: 80%;
                width: 120px;
                height: 120px;

                animation-delay: 3s;
                background-color: rgba(white, 0.2); /* fade(white, 20%); */
              }		
              li:nth-child(7){
                left: 32%;
                width: 160px;
                height: 160px;

                animation-delay: 7s;
              }		
              li:nth-child(8){
                left: 55%;
                width: 20px;
                height: 20px;

                animation-delay: 15s;
                animation-duration: 40s;
              }		
              li:nth-child(9){
                left: 25%;
                width: 10px;
                height: 10px;

                animation-delay: 2s;
                animation-duration: 40s;
                background-color: rgba(white, 0.3); /*fade(white, 30%);*/
              }		
              li:nth-child(10){
                left: 90%;
                width: 160px;
                height: 160px;

                animation-delay: 11s;
              }

              @-webkit-keyframes square {
                0%   { transform: translateY(0); }
                100% { transform: translateY(-500px) rotate(600deg); }
              }
              @keyframes square {
                0%   { transform: translateY(0); }
                100% { transform: translateY(-500px) rotate(600deg); }
              }

              .bottomHalf {
                align-items: center;
                padding: 35px;
              }
              .bottomHalf p {
                font-weight: 500;
                font-size: 1.05rem;
                margin-bottom: 20px;
              }

              button {
                border: none;
                color: white;
                cursor: pointer;
                border-radius: 12px;            
                padding: 10px 18px;            
                background-color: #ea4444;
                text-shadow: 0 1px rgba(128, 128, 128, 0.75);
              }
              button:hover {
                background-color: #ea6969;
              }

              .absolute {
                position: absolute;
              }

              .top-10 {
                top: 2.5rem;
              }

              .left-10 {
                left: 2.5rem;
              }

              .z-10 {
                z-index: 10;
              }

              .mx-2 {
                margin-left: 0.5rem;
                margin-right: 0.5rem;
              }

              .flex {
                display: flex;
              }

              .h-fit {
                height: -moz-fit-content;
                height: fit-content;
              }

              .w-1\.5 {
                width: 0.375rem;
              }

              .w-1 {
                width: 0.25rem;
              }

              .cursor-pointer {
                cursor: pointer;
              }

              .rounded {
                border-radius: 0.25rem;
              }

              .text-3xl {
                font-size: 1.875rem;
                line-height: 2.25rem;
              }

              .font-extrabold {
                font-weight: 800;
              }

              @media (min-width: 768px) {
                .md\:text-5xl {
                  font-size: 3rem;
                  line-height: 1;
                }
              }


                  </style>
                  <title>Document</title>
              </head>

              <body class='font-rubic  text-white overflow-hidden' style='background-color: #242733;'>
                  <div class='wrapperAlert' style='border: 1px solid gray; margin:auto 10px;height:auto'>
                <div class='contentAlert'>
                  <div class='topHalf'>

                    <p>

                        <svg xmlns='http://www.w3.org/2000/svg' style='color:white;width:100px;height: 100px;' viewBox='0 0 512 512'><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d='M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32z'/></svg>
                      </p>
                    <h1>Email already in use</h1>

                  <ul class='bg-bubbles'>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                  </div>

                  <div class='bottomHalf'>

                    <p style='color:white'>It seems like this email have already been used please use different email and try again</p>
                    
                      <a href='/login'><button  id='alertMO' style='background-color:orange'>Retry</button></a>

                  </div>

                </div>        

              </div>
                  <!-- TOAST -->
              
                  <script>


                  </script>
              </body>

              </html>";
        } else {
            $code = rand(10001, 99999);
            $req->session()->put('v_code', $code);
            $req->session()->put('user', $email);
            $req->session()->put('password', $req->input('password'));

            // session()->put('code', $code);
            $data = [
                'subject' => 'gmail verification',
                'body' => $code,
                'name' => explode('@', $email)[0]
            ];
            try {
                Mail::to($email)->send(new MailSender($data));
                return redirect('code');
            } catch (\Throwable $th) {
                return response()->json(['Error occured', 'this error occurs usually']);
            }
        }
    }
}
