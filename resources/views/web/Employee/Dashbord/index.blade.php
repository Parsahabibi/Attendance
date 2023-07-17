@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header',['H3Header'=>'داشبورد','CaptionHeader'=>'','TitleHeader'=>'حضور و غیاب'])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar-employee',[
        'ClassDashbord'=>'active-item-sidebar',
        'ClassYourShift'=>'',
        'ClassReported'=>'',
        'ClassFunction'=>'',
        'ClassRequest'=>'',
        'ClassShift'=>''
    ])
@endsection
<section class="">
 dashbord employee
</section>
<!-- Hero End -->
@endsection
