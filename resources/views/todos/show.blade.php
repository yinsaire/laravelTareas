@extends('app')

@section('content')
   <div class="container w-25 border p-4 mt-4" style="background-color: #58d8da; border-radius: .5rem;">
      <form action="{{ route('todos-update', ['id' => $todo->id]) }}" method= "POST">
         @method('PATCH')
         @csrf

         @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
         @endif

         @error('title')
            <h6 class="alert alert-danger">{{ $message }}</h6>
         @enderror

         <div class="mb-3">
            <label for="title" class="form-label"><strong>Título de la tarea</strong></label>
            <input type="text" name="title" class="form-control" value="{{ $todo->title }}">
         </div>
         <button type="submit" class="btn btn-primary">Actualizar tarea</button>
      </form>

      
   </div>
@endsection