@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', ['H3Header' => 'پروژه', 'CaptionHeader' => 'خانه - پروژه ', 'TitleHeader' => 'ثبت پروژه'])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar', [
        'ClassDashbord' => '',
        'ClassLocation' => '',
        'ClassShift' => '',
        'ClassPersonel' => '',
        'ClassReported' => '',
        'ClassRequest' => '',
        'ClassProject' => 'active-item-sidebar',
        'ClassHoliday' => '',
    ])
@endsection
<section class="">
    Sabt Project Manager
</section>
<!-- Hero End -->
@endsection
