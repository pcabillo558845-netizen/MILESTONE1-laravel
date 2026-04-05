@extends('layouts.app')

@section('content')
<div style="text-align: center; margin: 40px 0;">
    <h1>Dashboard</h1>
    <p>Manage your e-resources:</p>
    <div>
        <a href="{{ route('e-resources.index') }}" class="dashboard-btn" style="background: #007bff;">View</a>
        <a href="{{ route('e-resources.create') }}" class="dashboard-btn" style="background: #28a745;">Add</a>
    </div>
</div>
@endsection

