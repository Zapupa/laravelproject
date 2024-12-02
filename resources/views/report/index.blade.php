<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Список заявлений')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-nav-link :href="route('reports.create')" type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-3 text-center mb-11">Создать
                    заявление</x-nav-link>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($reports as $report)
                    <div class="p-8 flex flex-col gap-8">
                        <p class="text-red-600 font-bold text-base">{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y')}}
                        </p>
                        <div class='flex justify-between'>
                            <p class="font-bold text-base">{{ $report->number }}</p>
                            <p class="w-full max-w-3xl font-normal text-base">{{ $report->description }}</p>
                            <p class="w-full max-w-32 font-bold text-base">{{ $report->status->name }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>