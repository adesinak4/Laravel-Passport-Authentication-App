<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table border = "1" style="border: 1px solid black; width: 100%">
                        <tr>
                            <th style="border: 1px solid black;">Name</th>
                            <th style="border: 1px solid black;">Email</th>
                            <th style="border: 1px solid black;">Phone Number</th>
                            <th style="border: 1px solid black;">Passport Token</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td style="border: 1px solid black; text-align: center;">{{ $user->name }}</td>
                                <td style="border: 1px solid black; text-align: center;">{{ $user->email }}</td>
                                <td style="border: 1px solid black; text-align: center;">{{ $user->phone }}</td>
                                <td style="border: 1px solid black; text-align: center;">{{ $user->remember_token }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
