<x-app-layout>
    <div class="flex justify-center items-center w-full min-h-screen bg-gray-900">
        <div
            class="p-8 w-11/12 rounded-2xl border shadow-xl md:w-3/4 lg:w-2/3 backdrop-blur-lg bg-white/10 border-white/20">
            <div class="flex justify-between items-center mb-4">
                <button class="py-2 px-4 text-white bg-purple-600 rounded-lg hover:bg-purple-700">+ Add New</button>
                <input type="text" placeholder="Search Site"
                    class="p-2 w-1/2 placeholder-gray-300 text-white rounded-lg focus:ring-2 focus:ring-purple-300 focus:outline-none bg-white/20">
            </div>
            <table class="w-full text-white">
                <thead>
                    <tr>
                        <th class="p-2 border-b border-white/20">No</th>
                        <th class="p-2 border-b border-white/20">Site Name</th>
                        <th class="p-2 border-b border-white/20">Email</th>
                        <th class="p-2 border-b border-white/20">UserName</th>
                        <th class="p-2 border-b border-white/20">Password</th>
                        <th class="p-2 border-b border-white/20">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($passwords as $site)
                        <tr class="transition hover:bg-white/20">
                            <td class="p-2 text-center">{{ $site->id }}</td>
                            <td class="p-2 text-center">{{ $site->site }}</td>
                            <td class="p-2 text-center">{{ $site->email }}</td>
                            <td class="p-2 text-center">{{ $site->username }}</td>
                            <td class="p-2 text-center">************</td>
                            <td class="flex gap-2 justify-center p-2 text-center">
                                <button class="p-1 bg-gray-600 rounded-md hover:bg-gray-700"><i
                                        class="fas fa-eye"></i></button>
                                <button class="p-1 bg-gray-600 rounded-md hover:bg-gray-700"><i
                                        class="fas fa-trash"></i></button>
                                <button class="p-1 bg-gray-600 rounded-md hover:bg-gray-700"><i
                                        class="fas fa-pencil"></i></button>

                                <button class="p-1 bg-gray-600 rounded-md hover:bg-gray-700"><i
                                        class="fas fa-copy"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
