@extends('layouts.app')

@section('content')
<style>
  table { border-collapse: collapse; width: 100%; margin-top: 20px; }
  th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
  th { background-color: #f2f2f2; }
  button, a { background: #007cba; color: white; padding: 5px 10px; text-decoration: none; border: none; cursor: pointer; margin-right: 5px; }
  button:hover, a:hover { background: #005a87; }
  form { display: inline; }
  h1 { margin-bottom: 20px; }
  .error { color: red; }
</style>

<h1>E-Resources</h1>

<a href="{{ route('e-resources.create') }}">Add New E-Resource</a>

@if($resources->count() > 0)
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Date Added</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($resources as $resource)
        <tr>
            <td>{{ $resource->title }}</td>
            <td>{{ $resource->author }}</td>
            <td>{{ $resource->isbn ?? 'N/A' }}</td>
            <td>{{ $resource->date_added ?? 'N/A' }}</td>
            <td>
                <a href="{{ route('e-resources.edit', $resource) }}">Edit</a>
                <form action="{{ route('e-resources.destroy', $resource) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>No e-resources found. <a href="{{ route('e-resources.create') }}">Add one now</a>.</p>
@endif
@endsection

