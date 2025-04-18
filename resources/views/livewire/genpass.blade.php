<div class="flex-row p-4 mb-4 rounded-2xl border border-gray-100 dark:border-white">
    <div>
        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Difficulty</h3>
    </div>

    <div class="flex justify-between items-center mb-4">
        <div class="flex flex-row mb-10 w-full">

            <ul
                class="items-center w-full text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 sm:flex dark:text-white dark:bg-gray-700 dark:border-gray-600">

                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="caps-checkbox-list" type="checkbox" value="1" name="caps" wire:model="caps"
                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded-sm border-gray-300 dark:bg-gray-600 dark:border-gray-500 dark:ring-offset-gray-700 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="caps-checkbox-list"
                            class="py-3 w-full text-sm font-medium text-gray-900 dark:text-gray-300 ms-2">Caps</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="numerics-checkbox-list" type="checkbox" value="1" name="nums"
                            wire:model="nums"
                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded-sm border-gray-300 dark:bg-gray-600 dark:border-gray-500 dark:ring-offset-gray-700 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="numerics-checkbox-list"
                            class="py-3 w-full text-sm font-medium text-gray-900 dark:text-gray-300 ms-2">Numerics</label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="symbols-checkbox-list" type="checkbox" value="1" wire:model="symbols"
                            name="symbols"
                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded-sm border-gray-100 dark:bg-gray-600 dark:border-gray-900 dark:ring-offset-gray-700 focus:ring-2 focus:ring-blue-500 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-700">
                        <label for="symbols-checkbox-list"
                            class="py-3 w-full text-sm font-medium text-gray-900 dark:text-gray-300 ms-2">Symbols</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="flex justify-between items-center mt-10 mb-4"">

        <a wire:click="generate"
            class="py-2 px-4 m-10 text-white bg-purple-600 rounded-lg cursor-pointer hover:bg-purple-700">Generate</a>
        <input type="text" placeholder="Enter Length of password" name="length"
            wire:model.live.debounce.250ms="length"
            class="p-2 w-1/2 placeholder-gray-300 text-white rounded-lg focus:ring-2 focus:ring-purple-300 focus:outline-none bg-white/20">
    </div>
    @if (isset($passwd))
        <div class="flex flex-row justify-center items-center mt-10 mb-4"">
            <input type="text" placeholder="" name="password" value="{{ $passwd }}"
                class="p-2 w-1/2 placeholder-gray-300 text-center text-white rounded-lg focus:ring-2 focus:ring-purple-300 focus:outline-none bg-white/20">
        </div>
    @endif
</div>
