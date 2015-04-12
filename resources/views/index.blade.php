@extends("layout")

@section("content")
    My content included
@stop

@section("header")
    @include("header", ["title" => $title])
@stop

@section("footer")
    @include("footer")
@stop
