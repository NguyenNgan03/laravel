<h1>Homepage UNICODE</h1>
<h2>{{!empty(request()->keyword)?request()->keyword:'Nothing'}}</h2>
<div class="container">
    {!! !empty($content)?$content:false!!}
</div>
<hr>

<!-- @for ($i=1; $i<=10; $i++)
    <p> Item: {{$i}}</p>
@endfor -->

<!-- @while ($i<=10)
   <p>Item: {{$i}}</p>
   @php 
    $i++;
   @endphp
@endwhile -->

<!-- 
@foreach ($dataArr as $key => $item)
    <p>This is {{ $item }} - {{$key}}</p>
@endforeach -->

<!-- @forelse ($dataArr as $item)
    <li>{{$item}}</li>
@empty
    <p>No item</p>
@endforelse -->

<!-- @if ($number<=0) 
    <p>Bad</p>
    @elseif ($number>0 && $number<5) 
        <p>This is small number</p>
    @elseif ($number>5 && $number<10)
        <p>This is arrage number</p>
    @else
    <p>Big Number</p>
@endif -->

<!-- @switch($number)
    @case(1)
    @case(3)
    @case(5)
        First case...
        @break
 
    @case(2)
        Second case...
        @break
 
    @default
        Default case...
@endswitch -->

@for ($i=1; $i<=10; $i++)
    @if ($i==5) 
        @continue
    @endif 
        <p> The Item: {{$i}}</p>
        @endfor