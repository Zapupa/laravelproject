<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{__('Список заявлений')}}
    </h2>
  </x-slot>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class='flex justify-between bg-blue-700 text-white font-bold text-xl'>
        <p class="p-5  w-full">Дата заявления</p>
        <p class="p-5  w-full">Номер </p>
        <p class="p-5 w-full">Имя пользователя</p>
        <p class="p-5 w-full">Текст заявления</p>
        <p class="p-5 w-full">Статус</p>
      </div>
      @foreach($reports as $report)
      <div class='flex justify-between'>
      <p class=" w-full p-5">{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y')}}</p>
      <p class="  w-full p-5">{{ $report->number }}</p>
      <p class=" w-full p-5">{{ $report->user->fullName() }}</p>
      <p class=" w-full max-w-xs p-5">{{ $report->description }}</p>
      @if($report->status_id == 1)
      <form class=" w-full p-5" id="form-update-{{$report->id}}" action="{{route('reports.update')}}" method="POST">
      @csrf
      @method('PATCH')
      <input type="hidden" name="id" value="{{$report->id}}">
      <select class=" w-full" name="status_id"
      onchange="document.getElementById('form-update-{{$report->id}}').submit()">
      @foreach ($statuses as $status)
      <option value="{{$status->id}}">{{$status->name}}</option>
    @endforeach
      </select>
      </form>
    @else
      <p class=" w-full p-5">{{ $report->status->name }}</p>
    @endif
      </div>
    @endforeach
    </div>
  </div>

</x-app-layout>