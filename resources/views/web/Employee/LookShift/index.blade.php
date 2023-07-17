@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header',['H3Header'=>'اطلاعات شیفت شما','CaptionHeader'=>'خانه - شیفت - ','TitleHeader'=>'اطلاعات شیفت شما'])
@endsection

@section('sidebar')
@include('web.Layouts.side-bar-employee',[
    'ClassDashbord'=>'',
    'ClassYourShift'=>'active-item-sidebar',
    'ClassReported'=>'',
    'ClassFunction'=>'',
    'ClassRequest'=>'',
    'ClassShift'=>''
])
@endsection
<section class="">
    look shift employee
</section>
<!-- Hero End -->
@endsection
