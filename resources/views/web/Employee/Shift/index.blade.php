@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header',['H3Header'=>'شیفت کاری','CaptionHeader'=>'خانه - شیفت - ','TitleHeader'=>'شیفت کاری'])
@endsection

@section('sidebar')
@include('web.Layouts.side-bar-employee',[
    'ClassDashbord'=>'',
    'ClassYourShift'=>'',
    'ClassReported'=>'',
    'ClassFunction'=>'',
    'ClassRequest'=>'',
    'ClassShift'=>'active-item-sidebar'
])
@endsection
<section class="">
    shift employee
</section>
<!-- Hero End -->
@endsection
