@extends('layouts.main')
@section('content')
<form action="{{route('report.update', $report->id)}}" method="POST">
  @csrf
  @method('put')
  <div class="grid gap-6 mb-6 md:grid-cols-1">
    <div>
      <label for="number" class="block mb-2 text-sm font-medium text-gray-900">Number</label>
      <input type="text" name="number" id="number"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        placeholder="нумбер" value="{{$report->number}}" required />
    </div>
    <div>
      <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
      <textarea type="text" name="description" id="description"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
        placeholder="дискриптион" required>{{ $report->description }}</textarea>
    </div>
  </div>
  <button type="submit"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Update</button>
</form>
@endsection