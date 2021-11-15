@extends('app')

@section('content')

<div class="container w-25 border p-4 mt-4">
   <form action="{{ route('tareas') }}" method="POST">
      @csrf
      <div class="mb-3">
         <label for="title" class="form-label">Título de la tarea</label>
         <input type="text" name="title" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Crear tarea</button>
   </form>
</div>
@endsection