<x-app-layout>
    <div class="flex justify-center items-center w-full min-h-screen bg-gray-900">
        <div
            class="p-8 w-11/12 rounded-2xl border shadow-xl md:w-3/4 lg:w-2/3 backdrop-blur-lg bg-white/10 border-white/20">
            <div class="flex justify-between items-center mb-4">
                <button class="py-2 px-4 text-white bg-purple-600 rounded-lg hover:bg-purple-700">Generate</button>
                <input type="text" placeholder="Enter a Site"
                    class="p-2 w-1/2 placeholder-gray-300 text-white rounded-lg focus:ring-2 focus:ring-purple-300 focus:outline-none bg-white/20">
            </div>

            <div>
                <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Difficulty</h3>
            </div>
            <div class="flex-row w-full">

                <ul
                    class="items-center w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 sm:flex dark:text-white dark:bg-gray-700 dark:border-gray-600">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="caps-checkbox-list" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded-sm border-gray-300 dark:bg-gray-600 dark:border-gray-500 dark:ring-offset-gray-700 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                            <label for="caps-checkbox-list"
                                class="py-3 w-full text-sm font-medium text-gray-900 dark:text-gray-300 ms-2">Caps</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="numerics-checkbox-list" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded-sm border-gray-300 dark:bg-gray-600 dark:border-gray-500 dark:ring-offset-gray-700 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                            <label for="numerics-checkbox-list"
                                class="py-3 w-full text-sm font-medium text-gray-900 dark:text-gray-300 ms-2">Numerics</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input id="symbols-checkbox-list" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded-sm border-gray-100 dark:bg-gray-600 dark:border-gray-900 dark:ring-offset-gray-700 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                            <label for="symbols-checkbox-list"
                                class="py-3 w-full text-sm font-medium text-gray-900 dark:text-gray-300 ms-2">Symbols</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
