@extends('dashboard.layouts.appdashboade')
@section('content')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{__('Dashboard')}}
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    {{-- <small class="text-muted fs-7 fw-bold my-1 ms-1">#XRS-45670</small> --}}
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Post-->
    <div id="kt_content_container" class="container-xxl">
            <div class="row g-5 g-xl-8">

                <div class="col-xl-4 col-md-6 col-sm-12 ">
                    <!--begin::Statistics Widget 3-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column p-0" style="position: relative;">
                            <div class="d-flex flex-stack flex-grow-1 card-p">
                                <div class="d-flex flex-column me-2">

                                    <a href="{{route('users.index')}}" class="text-dark text-hover-primary fw-bolder fs-3"><i class="fas fa-users styleicondashboard"></i>{{__('Admin')}}</a>
                                    <span class="text-muted fw-bold mt-1">{{__('Admin')}}</span>
                                </div>
                                <span class="symbol symbol-50px">
                                    <span class="symbol-label fs-5 fw-bolder bg-light-success text-success">{{App\Models\User::whereNotIn('id',[1,2])->count()}}</span>
                                </span>
                            </div>
                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 325px; height: 253px;"></div></div><div class="contract-trigger"></div></div></div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 3-->
                </div>

                <div class="col-xl-4 col-md-6 col-sm-12 ">
                    <!--begin::Statistics Widget 3-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column p-0" style="position: relative;">
                            <div class="d-flex flex-stack flex-grow-1 card-p">
                                <div class="d-flex flex-column me-2">

                                    <a href="{{route('clients.index')}}" class="text-dark text-hover-primary fw-bolder fs-3"><i class="fas fa-users styleicondashboard"></i>{{__('Client')}}</a>
                                    <span class="text-muted fw-bold mt-1">{{__('Client')}}</span>
                                </div>
                                <span class="symbol symbol-50px">
                                    <span class="symbol-label fs-5 fw-bolder bg-light-success text-success">{{App\Models\Client::count()}}</span>
                                </span>
                            </div>
                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 325px; height: 253px;"></div></div><div class="contract-trigger"></div></div></div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 3-->
                </div>

                <div class="col-xl-4 col-md-6 col-sm-12 ">
                    <!--begin::Statistics Widget 3-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column p-0" style="position: relative;">
                            <div class="d-flex flex-stack flex-grow-1 card-p">
                                <div class="d-flex flex-column me-2">

                                    <a href="{{route('products.index')}}" class="text-dark text-hover-primary fw-bolder fs-3"><i class="fab fa-product-hunt styleicondashboard"></i>{{__('products')}}</a>
                                    <span class="text-muted fw-bold mt-1">{{__('products')}}</span>
                                </div>
                                <span class="symbol symbol-50px">
                                    <span class="symbol-label fs-5 fw-bolder bg-light-success text-success">{{App\Models\Producer::count()}}</span>
                                </span>
                            </div>
                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 325px; height: 253px;"></div></div><div class="contract-trigger"></div></div></div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 3-->
                </div>

                <div class="col-xl-4 col-md-6 col-sm-12 ">
                    <!--begin::Statistics Widget 3-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column p-0" style="position: relative;">
                            <div class="d-flex flex-stack flex-grow-1 card-p">
                                <div class="d-flex flex-column me-2">

                                    <a href="{{route('touchs.index')}}" class="text-dark text-hover-primary fw-bolder fs-3"><i class="fas fa-shopping-cart styleicondashboard"></i>{{__('Order')}}</a>
                                    <span class="text-muted fw-bold mt-1">{{__('Order')}}</span>
                                </div>
                                <span class="symbol symbol-50px">
                                    <span class="symbol-label fs-5 fw-bolder bg-light-success text-success">{{App\Models\Touch::count()}}</span>
                                </span>
                            </div>
                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 325px; height: 253px;"></div></div><div class="contract-trigger"></div></div></div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 3-->
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12 ">
                    <!--begin::Statistics Widget 3-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column p-0" style="position: relative;">
                            <div class="d-flex flex-stack flex-grow-1 card-p">
                                <div class="d-flex flex-column me-2">

                                    <a href="{{route('languages.index')}}" class="text-dark text-hover-primary fw-bolder fs-3"><i class="fas fa-language styleicondashboard"></i>{{__('Languages')}}</a>
                                    <span class="text-muted fw-bold mt-1">{{__('Languages')}}</span>
                                </div>
                                <span class="symbol symbol-50px">
                                    <span class="symbol-label fs-5 fw-bolder bg-light-success text-success">{{App\Models\Language::count()}}</span>
                                </span>
                            </div>
                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 325px; height: 253px;"></div></div><div class="contract-trigger"></div></div></div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 3-->
                </div>






        </div>
    </div>




    <!--end::Post-->
</div>
<!--end::Content-->

@endsection
@section('script')

@endsection
