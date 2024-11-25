<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Список заявлений')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class='flex justify-between'>
                    <p class=" border w-full">Время создания</p>
                    <p class="border w-full">Номер авто</p>
                    <p class="border w-full">Описание</p>
                    <p class="border w-full">Статус</p>
                </div>
                @foreach($reports as $report)

                    <div class='flex justify-between'>
                        <p class="border w-full">{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y')}}
                        </p>
                        <p class=" border w-full">{{ $report->number }}</p>
                        <p class="border w-full">{{ $report->description }}</p>
                        <p class="border w-full">{{ $report->status->name }}</p>
                    </div>
                @endforeach
                <x-nav-link :href="route('reports.create')" type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Создать
                    новый</x-nav-link>
            </div>
        </div>
    </div>
</x-app-layout>