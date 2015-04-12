@extends("layout.layout")

@section("contentSect")
    My content included
@stop

@section("headerSect")
    @include("layout.header", ["title" => $title])
@stop

@section("footerSect")
    @include("layout.footer")
@stop
