<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passwdman</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Include Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="flex flex-col justify-center items-center min-h-screen bg-gray-100">
    <header>
        <div class="fixed bottom-0 left-1/2 z-50 w-full bg-transparent -translate-x-1/2 dark:bg-transparent">
            <div class="w-full">
                <div class="grid grid-cols-3 gap-1 p-1 my-2 mx-auto max-w-xs bg-gray-100 rounded-lg dark:bg-gray-600"
                    role="group">
                    <button type="button"
                        class="py-1.5 px-5 text-xs font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
                        New
                    </button>
                    <a href="{{ url('/') }}" type="button"
                        class="py-1.5 px-5 text-xs font-medium text-white bg-gray-900 rounded-lg dark:text-gray-900 dark:bg-gray-300">
                        Home
                    </a>
                    <a href="{{ route('generate') }}" type="button"
                        class="py-1.5 px-5 text-xs font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
                        Generate
                    </a>
                </div>
            </div>
    </header>
    <main class="flex flex-grow justify-center items-center w-full">
        @yield('content')
    </main>
</body>

</html>
