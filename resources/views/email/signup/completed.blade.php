<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Our Platform!</title>
</head>
<body>
    <h1>Welcome, {{ $user->name }}!</h1>
    <p>Thank you for signing up with us. Your school has been successfully created.</p>
    <p>We will email you once your verification is complete.</p>
    <p>Feel free to explore our platform and let us know if you need any assistance.</p>
    <br>
    <p>Best regards,</p>
    <p>{{ config('app.name') }} Team</p>
</body>
</html>