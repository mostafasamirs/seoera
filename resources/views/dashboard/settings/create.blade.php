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
                <h4 class="d-flex align-items-center text-muted  fw-bolder fs-6 my-1">{{__('Settings')}}
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <h3 class="text-dark fs-5 fw-bold my-1 ms-1">{{__('Settings')}}</h3>
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
    {{-- $table->longText('description');
    $table->string('image')->nullable();
    $table->string('title_header')->nullable();
    $table->longText('content')->nullable();
    $table->string('url_vedio')->nullable(); --}}

    <!--begin::Tables Widget 9-->
    <div class="card mb-5 mb-xl-8">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">{{__('Settings')}}</span>
                <span class="text-muted mt-1 fw-bold fs-7"></span>
            </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="">
                <a href="{{route('settings.index')}}" class="btn btn-sm btn-primary btn-active-primary">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    {{-- <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                        </svg>
                    </span> --}}
                    <!--end::Svg Icon-->{{__('Back')}}
                </a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <!--begin::Form-->
            <form class="form" action="{{route('settings.update',$setting->id)}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <!--begin::Scroll-->
                    <div class="me-n7 pe-7" data-kt-scroll-max-height="auto">
                        <div class="row mb-4">
                            <!------------------------------begin::Col---------------------------->
                            <div class="col-md-12 fv-row form-group">
                                <!--begin::Input-->
                                <label for="title" class="required fs-5 fw-bold mb-2">{{__('Title')}}</label>

                                <input type="text" class="form-control form-control-solid" placeholder="{{__('Title')}}" value="{{$setting->title}}" name="title" id="title" maxlength="255" required autofocus/>
                                @error('title')
                                <script>
                                    var element = document.getElementById("title");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>
                            <div class="my-4"></div>

                            <!------------------------------end::Col------------------------------>
                            <!------------------------------begin::Col---------------------------->
                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="email" class="required fs-5 fw-bold mb-2">{{__('Email')}}</label>

                                <input type="email" class="form-control form-control-solid" placeholder="{{__('Email')}}" value="{{$setting->email}}" name="email" maxlength="255" id="email" />
                                @error('email')
                                <script>
                                    var element = document.getElementById("email");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>

                            <!------------------------------end::Col------------------------------>
                            <!------------------------------begin::Col---------------------------->
                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="phone" class="required fs-5 fw-bold mb-2">{{__('phone')}}</label>

                                <input type="number" class="form-control form-control-solid" placeholder="{{__('phone')}}" value="{{$setting->phone}}" name="phone" maxlength="50" id="phone" />
                                @error('phone')
                                <script>
                                    var element = document.getElementById("phone");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>
                            <div class="my-4"></div>

                            <!------------------------------end::Col------------------------------>
                            <!------------------------------begin::Col---------------------------->
                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="link" class="required fs-5 fw-bold mb-2">{{__('link')}}</label>

                                <input type="url" class="form-control form-control-solid" placeholder="{{__('link')}}" value="{{$setting->link}}" maxlength="400" name="link" id="link" />
                                @error('link')
                                <script>
                                    var element = document.getElementById("link");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>
                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="location" class="required fs-5 fw-bold mb-2">{{__('Location')}}</label>

                                <input type="number" class="form-control form-control-solid" placeholder="{{__('Location')}}" value="{{$setting->location}}" maxlength="400" name="location" id="location" />
                                @error('location')
                                <script>
                                    var element = document.getElementById("location");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>


                            <!------------------------------end::Col------------------------------>

                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="icon" class="required fs-5 fw-bold mb-2">{{__('Icon')}}</label>

                                <input type="file" class="form-control form-control-solid" placeholder="{{__('Icon')}}" value="{{$setting->icon}}" name="icon" id="icon" />
                                @error('icon')
                                <script>
                                    var element = document.getElementById("icon");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>
                            <!------------------------------end::Col------------------------------>
                            <!------------------------------begin::Col---------------------------->
                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="logo" class="required fs-5 fw-bold mb-2">{{__('Logo')}}</label>

                                <input type="file" class="form-control form-control-solid" placeholder="{{__('logo')}}" value="{{$setting->logo}}" name="logo" id="logo" />
                                @error('logo')
                                <script>
                                    var element = document.getElementById("logo");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>
                            <div class="my-4"></div>

                            <div class="col-md-12 fv-row form-group">
                                <!--begin::Input-->
                                <label for="description" class="required fs-5 fw-bold mb-2">{{__('Description')}}</label>

                                <textarea type="text" class="form-control form-control-solid tinymce-editor" placeholder="{{__('Description')}}" value="{{$setting->description}}" name="description" id="description"></textarea>
                                @error('description')
                                <script>
                                    var element = document.getElementById("description");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>

                        </div>
                        <!--end::Input group-->
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->

                    <div class="modal-footer flex-end">
                        <button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
                            <span class="indicator-label">{{__('Save')}} <i class="fa fas fa-check"></i> </span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
            </form>
            <!--end::Form-->

            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 9-->


</div>
@endsection
@section('script')

@endsection
