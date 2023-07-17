@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header',['H3Header'=>'گزارش تردد','CaptionHeader'=>'خانه - تردد - ','TitleHeader'=>'گزارش تردد'])
@endsection

@section('sidebar')
@include('web.Layouts.side-bar-employee',[
    'ClassDashbord'=>'',
    'ClassYourShift'=>'',
    'ClassReported'=>'',
    'ClassFunction'=>'active-item-sidebar',
    'ClassRequest'=>'',
    'ClassShift'=>''
])
@endsection
<section class="">
    function employee
</section>
<!-- Hero End -->
@endsection
