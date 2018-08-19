<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events</title>
    <style>
    .bling{
        background-color: orange;
    }
    </style>
</head>
<body>
<h1>{{$events->count()}} Events</h1>
@foreach ($events as $event )
    <article class="{{$loop->index % 2==0? 'bling':'' }}">
    <h1>{{$event->name}}</h1>
    <p>{{$event->description}}</p>
    <p>{!!format_price($event)!!}</p>
    <strike>{{$event->fake_price}}</strike>
    <p>Lieu: {{$event->location}}</p>
    @if ($event->start_at)
    <p>Date: {{$event->start_at->format('d/m/Y H:i')}}</p>
    @endif
    </article>
    @if (!$loop->last)
        <hr>  
    @endif
@endforeach
</body>
</html>