<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password Email</title>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; font-size:16px">
    <p>Hell, {{$formData['user']->name}}
    <h1>You have request to change password</h1>
    <p>please click the link given below to reset password</p>
    <a href="{{route('resetPassword',$formData['token']) }}">Click Here</a>
     <p>Thanks</p>
</body>
</html>