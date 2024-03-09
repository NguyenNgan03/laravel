@extends('layouts.client')

@section('title')
{{ $title }}
@endsection

{{-- @section('sidebar')
    <!-- @parent -->
    <h3>Products Sidebar</h3>
@endsection --}}
@section('content')
@if (session('msg'))
<div class="alert alert-success"> {{session('msg')}}</div>
@endif 
<h1>Product Page</h1>
@push('scripts')
<script>
    console.log('Push the product 2')
</script>
@endpush
@endsection

@section('css')

@endsection

@section('js')

@endsection

@push('scripts')
<script>
    console.log('Push the product')
</script>
@endpush