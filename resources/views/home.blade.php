@extends('layouts.app')
@section('content')
@php
    $sites = [
        ['name' => 'Google'],
        ['name' => 'Facebook'],
        ['name' => 'Twitter'],
        ['name' => 'GitHub'],
        ['name' => 'LinkedIn']
    ];
@endphp
<div class="flex items-center w-full justify-center min-h-screen bg-gray-900">
    <div class="backdrop-blur-lg bg-white/10 shadow-xl rounded-2xl p-8 w-11/12 md:w-3/4 lg:w-2/3 border border-white/20">
        <div class="flex justify-between items-center mb-4">
            <button class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700">+ Add New</button>
            <input type="text" placeholder="Search Site" class="w-1/2 p-2 rounded-lg bg-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-300">
        </div>
        <table class="w-full text-white">
            <thead>
                <tr>
                    <th class="border-b border-white/20 p-2">No</th>
                    <th class="border-b border-white/20 p-2">Site Name</th>
                    <th class="border-b border-white/20 p-2">Password</th>
                    <th class="border-b border-white/20 p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sites as $index => $site)
                <tr class="hover:bg-white/20 transition">
                    <td class="p-2 text-center">{{ $index + 1 }}</td>
                    <td class="p-2 text-center">{{ $site['name'] }}</td>
                    <td class="p-2 text-center">********</td>
                    <td class="p-2 text-center flex justify-center gap-2">
                        <button class="bg-gray-600 p-1 rounded-md hover:bg-gray-700"><i class="fas fa-eye"></i></button>
                        <button class="bg-gray-600 p-1 rounded-md hover:bg-gray-700"><i class="fas fa-copy"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


