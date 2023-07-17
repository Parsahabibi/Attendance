@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header',['H3Header'=>'گزارش کارکرد','CaptionHeader'=>'خانه - کارکرد - ','TitleHeader'=>'گزارش کارکرد'])
@endsection

@section('sidebar')
@include('web.Layouts.side-bar-employee',[
    'ClassDashbord'=>'',
    'ClassYourShift'=>'',
    'ClassReported'=>'active-item-sidebar',
    'ClassFunction'=>'',
    'ClassRequest'=>'',
    'ClassShift'=>''
])
@endsection
<section class="">
    reported employee
</section>
<!-- Hero End -->
@endsection
