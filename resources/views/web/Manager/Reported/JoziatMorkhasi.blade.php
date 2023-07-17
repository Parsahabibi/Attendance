@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', ['H3Header' => 'گزارش ها', 'CaptionHeader' => 'خانه - گزارش ها - ', 'TitleHeader' => 'جزییات مرخصی'])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar', [
        'ClassDashbord' => '',
        'ClassLocation' => '',
        'ClassShift' => '',
        'ClassPersonel' => '',
        'ClassReported' => 'active-item-sidebar',
        'ClassRequest' => '',
        'ClassProject' => '',
        'ClassHoliday' => '',
    ])
@endsection
<section class="">
    JoziatMorkhasi Reported Manager
</section>
<!-- Hero End -->
@endsection
