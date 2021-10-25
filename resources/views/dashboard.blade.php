<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            
        </h2>
        <ul>
            <li><a href="/contacts">Contacts</a></li>
            <li><a href="/posts">Posts</a></li>
        </ul>
    </x-slot>

  
</x-app-layout>
