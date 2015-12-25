@extends('start')

@section('publications')
    <div class="row">
    @foreach ($publications as $publication)
        <div class="col-md-4">
            <div class="col-md-3">
                <img class="img-circle" src="http://www.proshkolu.info/pict/userfoto/no_male.jpg" alt="">
            </div>
            <div class="col-md-9">
                <h3>{{ $publication->title }}<br /><small>{{ $publication->author->name }} {{ $publication->author->surname }}</small></h3>
            </div>
        </div>
    @endforeach
    </div>
@endsection