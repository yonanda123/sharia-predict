<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css')
    @vite('resources/js/app.js') --}}
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</head>

<body class="h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center w-full max-w-md px-6 py-8 mx-auto">
        <!-- Logo -->
        <a href="{{ route('get.beranda') }}" class="flex items-center mb-6 space-x-3 rtl:space-x-reverse">
            <img src="{{ URL('img/logo.png') }}" class="h-10 w-10 object-contain object-center"
                alt="Sharia Predict Logo" />
            <span class="text-xl font-semibold whitespace-nowrap tracking-tight text-gray-900 dark:text-white">
                Sharia Prediction
            </span>
        </a>
        <!-- Card -->
        <div class="w-full bg-white rounded-lg shadow-lg dark:border dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 sm:p-8">
                <h1 class="text-2xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white text-center">
                    Sign in to your account
                </h1>
                <!-- Form -->
                <form class="space-y-4" action="{{ route('post.login') }}" method="POST">
                    @csrf
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Your email
                        </label>
                        <input type="email" name="email" id="email" placeholder="name@company.com"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <!-- Password Input -->
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Password
                        </label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required>
                    </div>
                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Sign in
                    </button>
                    <!-- Footer Text -->
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400 text-center">
                        Don't have an account yet?
                        <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">
                            Sign up
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
