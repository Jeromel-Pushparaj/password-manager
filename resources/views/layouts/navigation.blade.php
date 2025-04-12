<div class="fixed top-0 left-1/2 z-50 w-full bg-transparent -translate-x-1/2 dark:bg-transparent">
    <div class="w-full">
        <div class="grid grid-cols-3 gap-1 p-1 my-2 mx-auto max-w-xs bg-gray-100 rounded-lg dark:bg-gray-600"
            role="group">

            {{-- Drop-up for logged-in user --}}
            @auth
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="flex justify-between items-center py-1.5 px-5 w-full text-xs font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
                        {{ Auth::user()->name }}
                        <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M14.707 12.293a1 1 0 00-1.414 0L10 15.586l-3.293-3.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l4-4a1 1 0 000-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Drop-up menu -->
                    <div x-show="open" @click.away="open = false"
                        class="absolute left-0 bottom-10 z-10 w-40 bg-white rounded-lg shadow-lg dark:bg-gray-700">
                        <a href="{{ route('profile.edit') }}"
                            class="block py-2 px-4 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">
                            Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="py-2 px-4 w-full text-sm text-left text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">
                                Log Out
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}"
                    class="py-1.5 px-5 text-xs font-medium text-center text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
                    Login
                </a>
            @endauth

            {{-- Home --}}
            <a href="{{ url('/') }}" type="button"
                class="py-1.5 px-5 text-xs font-medium text-center text-white bg-gray-900 rounded-lg dark:text-gray-900 dark:bg-gray-300">
                Home
            </a>

            {{-- Generate --}}
            <a href="{{ route('generate') }}" type="button"
                class="py-1.5 px-5 text-xs font-medium text-center text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
                Generate
            </a>
        </div>
    </div>
</div>
