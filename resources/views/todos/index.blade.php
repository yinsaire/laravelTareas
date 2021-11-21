@extends('app')

@section('content')
   <div class="container w-25 border p-4 mt-4" style="background-color: #ffffe4; border-radius: .5rem;">
      <form action="{{ route('todos') }}" method= "POST">
         @csrf

         @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
         @endif

         @error('title')
            <h6 class="alert alert-danger">{{ $message }}</h6>
         @enderror

         <div class="mb-3">
            <label for="title" class="form-label"><strong>Ingrese el título de la tarea</strong></label>
            <input type="text" name="title" class="form-control">
         </div>

         <label for="category_id" class="form-label"><strong>Seleccione una categoría</strong></label>
         <select name="category_id" class="form-select">
            @foreach ($categories as $category)
               <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
         </select>

         <center>
            <button type="submit" class="btn btn-primary border mt-4">Crear nueva tarea</button>
         </center>
      </form>

      <div>
         @foreach($todos as $todo)
            <div class="row py-1">
               <div class="col-md-9 d-flex align-items-center">
                  <a href="{{ route('todos-edit', ['id' => $todo->id]) }}">{{ $todo->title }}</a>
               </div>

               <div class="col-md-3 d-flex justify-content-end">
                  <form action="{{ route('todos-destroy', [$todo->id]) }}" method="POST">
                     @method('DELETE')
                     @csrf
                     <button class="btn btn-danger btn-sm">Eliminar</button>
                  </form>
               </div>
            </div>
         @endforeach
      </div>
   </div>
@endsection