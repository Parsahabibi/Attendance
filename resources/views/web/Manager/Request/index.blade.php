@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', ['H3Header' => 'درخواست ها', 'CaptionHeader' => 'خانه - ', 'TitleHeader' => 'درخواست ها'])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar', [
        'ClassDashbord' => '',
        'ClassLocation' => '',
        'ClassShift' => '',
        'ClassPersonel' => '',
        'ClassReported' => '',
        'ClassRequest' => 'active-item-sidebar',
        'ClassProject' => '',
        'ClassHoliday' => '',
    ])
@endsection
<section class="">
    Request Manager
</section>
<!-- Hero End -->
@endsection
