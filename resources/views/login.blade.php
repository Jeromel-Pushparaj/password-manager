@extends('layouts.app')
@section('content')
    <div class="p-8 max-w-md">
        <div class="p-6 bg-white bg-opacity-30 rounded-2xl shadow-xl backdrop-blur-lg">
            <h2 class="mb-6 text-2xl font-bold text-center">Login</h2>
            <div class="p-4 bg-white bg-opacity-20 rounded-md shadow-md backdrop-blur-md">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="user" class="block text-gray-700">User</label>
                        <input type="text" name="user" id="user"
                            class="p-2 w-full bg-transparent rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input type="password" name="password" id="password"
                            class="p-2 w-full bg-transparent rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>
                    </div>
                    <div class="flex justify-between items-center">
                        <button type="submit"
                            class="py-2 px-4 w-full font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Login</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
