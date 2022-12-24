@extends('dashboard.layouts.appdashboade')
@section('content')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepends" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h4 class="d-flex align-items-center text-muted  fw-bolder fs-6 my-1">
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <h3 class="text-dark fs-5 fw-bold my-1 ms-1">{{__('Settings WebSite')}}</h3>
                    <!--end::Description-->
                </h4>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Tables Widget 9-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">{{__('Settings WebSite')}}</span>
                <span class="text-muted mt-1 fw-bold fs-7"></span>
            </h3>

            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="">
                <a href="{{route('settings.edit',$settings->id)}}" class="btn btn-sm btn-primary btn-active-primary">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    {{-- <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                        </svg>
                    </span> --}}
                    <!--end::Svg Icon-->{{__('Edit')}}
                </a>
            </div>

        </div>
        <!--end::Header-->
        <!--begin::Body-->

        <div class="card-body py-3">
            <div class="separator my-2"></div>
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
                            <!--begin::Card-->
                            <div class="card card-flush pt-3 mb-5 mb-xl-10">
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-3">
                                    <!--begin::Section-->
                                    <div class="12">
                                    <div class="mb-10">
                                        <!--begin::Details-->
                                        <div class="d-flex flex-wrap py-5">
                                            <!--begin::Row-->
                                            <div class="flex-equal me-5">
                                                <!--begin::Details-->
                                                @if ($settings !=NULL)

                                                <table class="table fs-6 fw-bold gs-0 gy-2 gx-2 m-0 cell-border table-bordered table-hover">
                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="text-gray-400">{{__('Title')}}:</td>
                                                        <td class="text-gray-800">{{$settings->title}}</td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="text-gray-400">{{__('Email')}}:</td>
                                                        <td class="text-gray-800">{{$settings->email}}</td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="text-gray-400">{{__('Call')}}:</td>
                                                        <td class="text-gray-800">{{$settings->phone}}</td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <tr>
                                                        <td class="text-gray-400">{{__('link')}}:</td>
                                                        <td class="text-gray-800">{{$settings->link}}</td>
                                                    </tr>
                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="text-gray-400">{{__('Location')}}:</td>
                                                        <td class="text-gray-800">{{$settings->location}}</td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="text-gray-400">{{__('Description')}}:</td>
                                                        <td class="text-gray-800">{!!$settings->description!!}</td>
                                                    </tr>
                                                    <!--end::Row-->



                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="text-gray-400">{{__('logo')}}:</td>
                                                        <td class="text-gray-800">
                                                            {{-- {{$settings->logo}} --}}
                                                            <img src="{{asset($settings->logo)}}" alt="image" class="imagestyle"  alt="" title="" width="100" height="100" style="border: 2px solid #eee; width:100px!important; height:100px!important;border-radius:5%!important" loading="lazy" />

                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->

                                                    <!--begin::Row-->
                                                    <tr>
                                                        <td class="text-gray-400">{{__('Icon')}}:</td>
                                                        <td class="text-gray-800">
                                                            {{-- {{$settings->icon}} --}}
                                                            <img src="{{asset($settings->icon)}}" alt="image" class="imagestyle" class=" image" alt="" title="" width="100" height="100" style="border: 2px solid #eee; width:100px!important; height:100px!important;border-radius:5%!important" loading="lazy" />

                                                        </td>
                                                    </tr>
                                                    <!--end::Row-->


                                                </table>
                                                @else
                                                <h2>{{__('NO FOUND DATA')}}</h2>
                                                @endif
                                                <!--end::Details-->
                                            </div>
                                            <!--end::Row-->

                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->

                        </div>
                        <!--end::Content-->

                    </div>
                    <!--end::Layout-->
                </div>
                <!--end::Container-->

            </div>
            <!--end::Post-->
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 9-->

    </div>
    </div>
    </div>
    @endsection
    @section('script')

    @endsection
