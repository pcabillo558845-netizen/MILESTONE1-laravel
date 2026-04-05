@extends('layouts.app')

@section('content')
<style>
  form p { margin-bottom: 10px; }
  label { display: block; margin-bottom: 5px; font-weight: bold; }
  input { width: 300px; padding: 5px; border: 1px solid #ddd; }
  button, a { background: #007cba; color: white; padding: 8px 15px; text-decoration: none; border: none; cursor: pointer; margin-right: 10px; }
  button:hover, a:hover { background: #005a87; }
  .error li { color: red; }
  h1 { margin-bottom: 20px; }
  
</style>

<h1>Add New E-Resource</h1>

<form action="{{ route('e-resources.store') }}" method="POST">
    @csrf
    <p>
        <label>Title: <input type="text" name="title" required value="{{ old('title') }}"></label>
    </p>
    <p>
        <label>Author: <input type="text" name="author" required value="{{ old('author') }}"></label>
    </p>
    <p>
        <label>ISBN: <input type="text" name="isbn" value="{{ old('isbn') }}"></label>
    </p>
    <p>
        <label>Date Added: <input type="date" name="date_added" value="{{ old('date_added') }}"></label>
    </p>
    <p>
        <button type="submit">Save</button>
        <a href="{{ route('e-resources.index') }}">Cancel</a>
    </p>
    @if ($errors->any())
        <ul class="error">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</form>
@endsection

