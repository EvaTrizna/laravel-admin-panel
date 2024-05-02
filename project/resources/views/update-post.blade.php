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
                    
                    
               

<form action="{{route('post-update-submit',$data->id)}}" method="post">
   @csrf
   <div class="form-group">
            <label for="title" class="form-label" >Заголовок</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="title" value="{{$data->title}}">
        </div>
        
        <div class="form-group">
              <label for="text-preview" class="form-label" >Краткое описание </label>
              <textarea type="text" class="form-control" name="text-preview" id="text-preview" placeholder="Введите сообщение" >{{$data->text_preview}}</textarea>
        </div>
        <br>
      <button type="submit" class="btn btn-success rounded-pill px-3">Обновить</button>
      </form>
      @if(auth()->user()->role == 0&&$data->visible==false)
      <br><br>
      <a href="{{route('post-visible',$data->id)}}"><button class="btn btn-info rounded-pill px-3" type="button">Изменить видимость</button></a>
      @endif
                   
      </div>
      </div>
      </div>
    </div>
</x-app-layout>