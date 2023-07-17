@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header',['H3Header'=>'درخواست ها','CaptionHeader'=>'خانه - درخواست ها - ','TitleHeader'=>'درخواست ها'])
@endsection

@section('sidebar')
@include('web.Layouts.side-bar-employee',[
    'ClassDashbord'=>'',
    'ClassYourShift'=>'',
    'ClassReported'=>'',
    'ClassFunction'=>'',
    'ClassRequest'=>'active-item-sidebar',
    'ClassShift'=>''
])
@endsection
<section class="">
    request employee
</section>
<!-- Hero End -->
@endsection
