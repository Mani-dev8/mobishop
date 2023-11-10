<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-image: url('https://i.postimg.cc/V6BJhHrx/5email-1.jpg');padding:120px 0px auto 60px;margin:0;width: 90vw;height:60vh; border-radius: 8px;background-repeat: no-repeat;background-size: cover;position:relative;color:#fff">


    <h1 style="color:#fff;width:fit-content;padding-top: 60px;margin-left: 10px;">Dear {{$data['name']}},


    </h1>
    <h5 style="color:#fff;width:fit-content;margin-left: 30px;">
        Thank you for creating an account with us. In order to complete the registration process, <br>
        please enter the following verification code in the space provided on our website:
    </h5>
    <h2 style=" color:#fff;width:fit-content;margin-left:80px">

        {{$data['body']}}

    </h2>

    <h5 style="color:#fff;width:fit-content;margin-left: 30px;">
        This code will expire in 10 minutes. If you are unable to complete the verification <br>
        process within this time, please request a new code.
        <br>
        Thank you for your cooperation. If you have any questions or concerns,<br>
        please don't hesitate to contact us.
        <br>
        <br>

    </h5>
    <h5 style="color:#fff;width:fit-content;margin-left: 10px;">
        Sincerely,<br>
        support@mobishop
    </h5>



</body>

</html>