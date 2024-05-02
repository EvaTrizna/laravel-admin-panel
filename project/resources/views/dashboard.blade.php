<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <table class="table table-striped">
                    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название</th>
      <th scope="col">Категория</th>
      <th scope="col">Дата публикации</th>
      <th scope="col">Статус</th>
      <th scope="col"></th>
      <th scope="col"></th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($data as $el)
  
    <tr>
      <td>{{ $el->id }}</td>
      <td>{{ $el->title }}</td>
      <td>{{ $el->category->title }}</td>
      <td>{{ $el->published_at }}</td>
      @if($el->visible==true)
        <td>Опубликован</td>
      @else
        <td>Черновик</td>
      @endif
      @if(auth()->user()->role == 0)
      <td><a href="{{route('post-delete',$el->id)}}"><button class="btn btn-danger rounded-pill px-3" type="button">Удалить</button></a></td>
      @endif
      <td><a href="{{route('post-update',$el->id)}}"><button class="btn btn-info rounded-pill px-3" type="button">Редактировать</button></a></td>
      
    </tr>

@endforeach
  </tbody>
  </table>
                   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
