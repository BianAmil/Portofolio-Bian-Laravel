<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('path-to-your-image.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
    </style>
</head>
<body class="flex items-center justify-center">
    <!-- Login Form Container -->
    <div class="bg-white bg-opacity-90 p-6 rounded-lg shadow-lg w-80">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
        <form id="LoginForm">
            <!-- Username Input -->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input 
                    id="BianAmil" 
                    type="text" 
                    placeholder="Enter your username" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                />
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input 
                    id="bina3004" 
                    type="password" 
                    placeholder="Enter your password" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                />
            </div>
            
            <div>
            <button 
                    type="submit" 
                    class="w-full bg-orange-500 text-white py-2 rounded-lg hover:bg-orange-600 focus:outline-none"
                >
                <a href="{{ route('index') }}" class="text-3xl text-center">Sign In</a>
                </button>
            
            </div>

            <!-- Submit Button -->
            <div>
                <button 
                    type="submit" 
                    class="w-full bg-orange-500 text-white py-2 rounded-lg hover:bg-orange-600 focus:outline-none"
                >
                    LOGIN
                </button>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
