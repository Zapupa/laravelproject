@extends('layouts.main')
@section('content')
<div class='container md:mx-auto border m-4'>
    <h2>Список репортов</h2>
    @foreach($reports as $report)
        <div class='flex justify-between'>
            <p class="border w-full">{{ $report->number }}</p>
            <p class="border w-full">{{ $report->description }}</p>
            <p class="border w-full">{{ $report->created_at }}</p>
        </div>
        <form action="{{route('reports.destroy', $report->id)}}" method="post">
            @method('delete')
            @csrf
            <input type="submit" value="Удалить" />
        </form>
    @endforeach

    <form action="{{route('reports.store')}}" method="POST">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-1">
            <div>
                <label for="number" class="block mb-2 text-sm font-medium text-gray-900">Number</label>
                <input type="text" name="number" id="number"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="нумбер" required />
            </div>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                <textarea type="text" name="description" id="description"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="дискриптион" required></textarea>
            </div>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Create</button>
    </form>
</div>

@endsection()