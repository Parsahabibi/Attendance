@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', ['H3Header' => 'تعریف تعطیلات', 'CaptionHeader' => 'خانه - تعطیلات - ', 'TitleHeader' => 'تعریف تعطیلات'])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar', [
        'ClassDashbord' => '',
        'ClassLocation' => '',
        'ClassShift' => '',
        'ClassPersonel' => '',
        'ClassReported' => '',
        'ClassRequest' => '',
        'ClassProject' => '',
        'ClassHoliday' => 'active-item-sidebar',
    ])
@endsection
<section class="">
    Holiday Manager
</section>
<!-- Hero End -->
@endsection
