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
    <div class="col-12 d-flex flex-column flex-lg-row m-0 justify-content-center pe-lg-4">
        <div class="col-11 col-lg-5 pe-0 mx-auto">
            <div class="row g-4">
                <div class="col-6">
                    <div class="item-container col-12 rounded-16 p-lg-5 p-3">
                        <div class="d-flex justify-content-between align-items-start gap-4">
                            <div class="pb-5">
                                <img src="{{asset('images/active-personel-icon.svg')}}" alt="">
                            </div>
                            <span class="fs-4 c-gray">۰۰:۰۰</span>
                        </div>
                        <h6 class="text-nowrap">حضور</h6>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-container col-12 rounded-16 p-lg-5 p-3">
                        <div class="d-flex justify-content-between align-items-start gap-4">
                            <div class="pb-5">
                                <img src="{{asset('images/absent-icon.svg')}}" alt="">
                            </div>
                            <span class="fs-4 c-gray">۰۰:۰۰</span>
                        </div>
                        <h6 class="text-nowrap">غیبت</h6>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-container col-12 rounded-16 p-lg-5 p-3">
                        <div class="d-flex justify-content-between align-items-start gap-4">
                            <div class="pb-5">
                                <img src="{{asset('images/Frame 22.svg')}}" alt="">
                            </div>
                            <span class="fs-4 c-gray">۰۰:۰۰</span>
                        </div>
                        <h6 class="text-nowrap">اضافه کار</h6>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item-container col-12 rounded-16 p-lg-5 p-3">
                        <div class="d-flex justify-content-between align-items-start gap-4">
                            <div class="pb-5">
                                <img src="{{asset('images/Frame 13.svg')}}" alt="">
                            </div>
                            <span class="fs-4 c-gray">۰۰:۰۰</span>
                        </div>
                        <h6 class="text-nowrap">مرخصی</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-7 d-flex flex-column justify-content-center align-items-center mx-auto">
            <div class="col-11 card-container bg-orange rounded-16 d-flex flex-column flex-md-row align-items-center p-3 mt-4 mt-lg-0 mb-4">
                <div class="col-md-4 col-10">
                    <img class="w-100" src="{{asset('images/Frame 20.svg')}}" alt="">
                </div>
                <div class="col-md-8 col-12 d-flex flex-column justify-content-between align-items-md-end align-items-center">
                    <h4 class="c-white text-md-start text-center mb-5 lh-base col-md-10 col-12">
                        جهت استفاده از سامانه حضور و غیاب فینتو، مراحل زیر را تکمیل کنید.
                    </h4>
                    <div class="d-flex flex-wrap">
                        <div  role="button" class="boxDrop position-relative item-card-container bg-green rounded-16 py-2 px-4 c-white me-2 mb-2 cursor">
                            <p class="textDrop fs-6 text-nowrap cursor">انتخاب پروژه</p>
                            <div class="positionCostume py-2" style="display: none;">
                                <div class="pb-2 px-4">نیار</div>
                                <div class="divider mb-1"></div>
                                <div class="px-4">بدون پروژه</div>
                            </div>
                        </div>
                        <div class="item-card-container bg-green rounded-16 py-2 px-4 c-white me-2 mb-2">
                            <p class="fs-6 text-nowrap">ورود</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map col-12 d-flex align-items-center justify-content-center">
                <iframe class="col-11 rounded-4" src="https://balad.ir/embed?p=Pqq5T7706TIl8o" title="مشاهده «رستوران آرمانی» روی نقشه بلد" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Hero End -->
@endsection

@section('script')
<script>
    let variable = document.querySelector('.boxDrop')
    let drop = document.querySelector('.positionCostume')  
    let text = document.querySelector('.textDrop')    
    variable.onclick = () =>{
        if(drop.style.display === 'block'){
            drop.style.display = 'none'
        }else{
            drop.style.display = 'block'
        }
    }
    window.onclick = (e) =>{
        if(e.target !== variable && e.target !== text){
            drop.style.display = 'none'
        }
    }


</script>
@endsection