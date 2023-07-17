@extends('web.layouts.master')

@section('head-tag')
    <title></title>
@endsection

@section('content')
    <!-- Hero Start -->
@section('header')
    @include('web.Layouts.header', ['H3Header' => 'داشبورد', 'CaptionHeader' => '', 'TitleHeader' => 'حضور و غیاب'])
@endsection

@section('sidebar')
    @include('web.Layouts.side-bar', [
        'ClassDashbord' => 'active-item-sidebar',
        'ClassLocation' => '',
        'ClassShift' => '',
        'ClassPersonel' => '',
        'ClassReported' => '',
        'ClassRequest' => '',
        'ClassProject' => '',
        'ClassHoliday' => ''
    ])
@endsection
<section class="">
   Dashbord Manager
</section>
<!-- Hero End -->
@endsection
