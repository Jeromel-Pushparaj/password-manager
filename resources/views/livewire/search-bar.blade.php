<div class="flex justify-center items-center w-full min-h-screen bg-gray-900">
    <div class="p-8 w-11/12 rounded-2xl border shadow-xl md:w-3/4 lg:w-2/3 backdrop-blur-lg bg-white/10 border-white/20">
        <div class="flex justify-between items-center mb-4">
            <a href="{{ route('generate') }}" class="py-2 px-4 text-white bg-purple-600 rounded-lg hover:bg-purple-700">+
                Add New</a>
            <input wire:model.live="search" type="text" placeholder="Search Site"
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
                @php
                    $count = 1;
                @endphp
                @foreach ($passwords as $site)
                    <tr class="transition hover:bg-white/20" x-data="{
                        show: false,
                        link: '{{ $site->password }}',
                        copied: false,
                        timeout: null,
                        copy() {
                            // fallback method
                            const el = document.createElement('textarea');
                            el.value = this.link;
                            document.body.appendChild(el);
                            el.select();
                            try {
                                document.execCommand('copy');
                                this.copied = true;
                            } catch (err) {
                                console.error('Fallback: Unable to copy', err);
                            }
                            document.body.removeChild(el);

                            clearTimeout(this.timeout);
                            this.timeout = setTimeout(() => this.copied = false, 3000);
                        }
                    }">

                        <td class ="p-2 text-center">
                            {{ $count++ }}</td>
                        <td class="p-2 text-center">{{ $site->site }}</td>
                        <td class="p-2 text-center">{{ $site->email }}</td>
                        <td class="p-2 text-center">{{ $site->username }}</td>
                        <td class="p-2 text-center">
                            <span x-show="show">{{ $site->password }}</span>
                            <span x-show="!show">•••••••••</span>
                        </td>
                        <td class="flex gap-2 justify-center p-2 text-center">
                            <button @click="show = !show" class="p-1 bg-gray-600 rounded-md hover:bg-gray-700"><i
                                    :class="show ? 'fas fa-eye-slash' : 'fas fa-eye'"></i></button>

                            <form method="GET" action="{{ route('edit', $site->id) }}">
                                @csrf
                                <button class="p-1 bg-purple-600 rounded-md hover:bg-gray-700" type="sumbit"><i
                                        class="fas fa-pencil"></i></button>
                            </form>
                            <button @click="copy" class="p-1 bg-gray-600 rounded-md hover:bg-gray-700"><i
                                    :class="copied ? 'fas fa-copy' : 'far fa-copy'"></i></button>
                            <form method="POST" action="{{ route('delete', $site->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="p-1 bg-red-600 rounded-md hover:bg-gray-700" type="sumbit"
                                    onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
