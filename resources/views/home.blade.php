<h1>Homepage UNICODE</h1>
<h2>{{!empty(request()->keyword)?request()->keyword:'Nothing'}}</h2>
<div class="container">
    {!! !empty($content)?$content:false!!}
</div>
<hr>
@php
// $message = 'Order is successful'
@endphp

@include('parts.notice')


