@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header',['H3Header'=>'','CaptionHeader'=>'','TitleHeader'=>'',])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar-employee')
@endsection
<section class="">
    hi
</section>
<!-- Hero End -->
@endsection
