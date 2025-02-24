<!DOCTYPE html>
<html>
<head>
    <title>Profiles</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #333;
            margin-top: 20px;
        }
        .profiles-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }
        .profile {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
            padding: 20px;
            width: 250px;
            transition: transform 0.2s;
        }
        .profile:hover {
            transform: scale(1.05);
        }
        .profile img {
            border-radius: 50%;
            margin-bottom: 15px;
            width: 100px;
            height: 100px;
        }
        .profile h2 {
            color: #4CAF50;
            margin: 10px 0;
        }
        .profile p {
            color: #777;
            text-align: center;
        }
        .upload-button {
            margin-top: 20px;
        }
        .upload-button a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.2s;
        }
        .upload-button a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>All Profiles</h1>
    <div class="profiles-container">
        @foreach($profiles as $profile)
            <div class="profile">
                <img src="{{ asset('storage/'.$profile->profile_picture) }}" alt="{{ $profile->name }}">
                <h2>{{ $profile->name }}</h2>
                <p>{{ $profile->description }}</p>
            </div>
        @endforeach
    </div>
    <div class="upload-button">
        <a href="{{ route('profile.view') }}">Upload New Profile</a>
    </div>
</body>
</html>