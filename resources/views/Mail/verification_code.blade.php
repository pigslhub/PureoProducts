<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: Poppins, sans-serif
        }
    </style>
</head>
<body>
<h1>EzCare2Go</h1>
<h4>Hi {{ $customer->name }}</h4>
<p>You are receiving this email because we received a password reset request for your account, Your verification code is:</p>
<center><h1>{{ $code }}</h1></center>
<p>Copy and paste in your app to reset your password.</p>
<p>If you did not request a password reset, ignore this email.</p>


</body>
</html>
