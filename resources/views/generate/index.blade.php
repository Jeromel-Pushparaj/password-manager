<x-app-layout>
    <div class="flex justify-center items-center w-full min-h-screen bg-gray-900">
        <div
            class="p-8 w-11/12 rounded-2xl border shadow-xl md:w-3/4 lg:w-2/3 backdrop-blur-lg bg-white/10 border-white/20">
            <form method="POST" action="{{ route('createnew') }}">
                @csrf
                @method('POST')
                <div class="flex justify-between items-center mb-4">
                    <h2 class="mb-4 font-semibold text-gray-900 dark:text-white">Site Name</h2>
                    <input @required(true) type="text" placeholder="Enter a Site" name="site"
                        class="p-2 w-1/2 placeholder-gray-300 text-white rounded-lg focus:ring-2 focus:ring-purple-300 focus:outline-none bg-white/20">
                </div>
                <div class="flex justify-between items-center mb-4">

                    <h2 class="mb-4 font-semibold text-gray-900 dark:text-white">Email</h2>
                    <input @required(true) type="email" placeholder="Enter email" name="email"
                        class="p-2 w-1/2 placeholder-gray-300 text-white rounded-lg focus:ring-2 focus:ring-purple-300 focus:outline-none bg-white/20">
                </div>
                <div class="flex justify-between items-center mb-4">


                    <h2 class="mb-4 font-semibold text-gray-900 dark:text-white">User Name</h2>
                    <input @required(true) type="text" placeholder="Enter username" name="username"
                        class="p-2 w-1/2 placeholder-gray-300 text-white rounded-lg focus:ring-2 focus:ring-purple-300 focus:outline-none bg-white/20">
                </div>
                <div class="flex justify-between items-center mb-4">

                    <h2 class="mb-4 font-semibold text-gray-900 dark:text-white">Category</h2>
                    <input @required(true) type="text" placeholder="Enter Category" name="category"
                        class="p-2 w-1/3 placeholder-gray-300 text-white rounded-lg focus:ring-2 focus:ring-purple-300 focus:outline-none bg-white/20">
                </div>

                @livewire('genpass')

                <div class="flex flex-row justify-center items-center mt-10 mb-4"">
                    <button type="sumbit" name="action" value="save"
                        class="py-2 px-4 m-10 text-white bg-purple-600 rounded-lg hover:bg-purple-700">Save</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>
