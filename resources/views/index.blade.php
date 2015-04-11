@extends("layout")

@section("content")
    <div id="nekaj">
        <div class="banner">
            My content included
        </div>
    </div>
@stop

@section("header")
    @include("header", ["title" => $title])
@stop

@section("footer")
    @include("footer")
@stop
