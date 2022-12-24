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
                <h4 class="d-flex align-items-center text-muted  fw-bolder fs-6 my-1">{{__('Admin')}}
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <h3 class="text-dark fs-5 fw-bold my-1 ms-1">{{__('Create Admin')}}</h3>
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
                <span class="card-label fw-bolder fs-3 mb-1">{{__('Create Admin')}}</span>
                <span class="text-muted mt-1 fw-bold fs-7"></span>
            </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="">
                <a href="{{route('users.index')}}" class="btn btn-sm btn-primary btn-active-primary">
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
            <form class="form" action="{{route('users.store')}}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="me-n7 pe-7" data-kt-scroll-max-height="auto">
                        <div class="row mb-4">
                            <!------------------------------begin::Col---------------------------->
                            <!--begin::Scroll-->
                            <input type="hidden" name="created_by" value="{{auth()->user()->name}}" />
                            <!--begin::Scroll-->
                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="name" class="required fs-5 fw-bold mb-2">{{__('Name')}}</label>
                                <input type="text" class="form-control form-control-solid" placeholder="{{__('Name')}}" value="{{old('name')}}" name="name" id="name" required autofocus maxlength="255" />
                                @error('name')
                                <script>
                                    var element = document.getElementById("name");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>
                            <div class="col-md-6 fv-row form-group">
                                <label for="languages" class="required fs-5 fw-bold mb-2">{{__('Languages')}}</label>
                                <select class="form-control form-control-solid form-select form-select-solid selectd" tabindex="-1" aria-hidden="true" name="language_id" id="languages" data-placeholder="{{__('languages')}}" maxlength="255" required >
                                    <option disabled>{{__('choose')}}</option>
                                    @foreach ($languages as $language)
                                    <option value="{{ $language->id }}" {{ old('language_id') == $language->id ? 'selected' : '' }}>
                                        {{ $language->title }}</option>
                                    @endforeach
                                </select>
                                @error('language_id')
                                <script>
                                    var element = document.getElementById("language_id");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                            </div>

                            <div class="my-4"></div>

                            <!------------------------------end::Col------------------------------>
                            <!------------------------------begin::Col---------------------------->
                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="email" class="required fs-5 fw-bold mb-2">{{__('Email')}}</label>
                                <input type="email" class="form-control form-control-solid" placeholder="{{__('Email')}}" value="{{old('email')}}" name="email" id="email" maxlength="255" required />
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
                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="phone" class="required fs-5 fw-bold mb-2">{{__('Phone')}}</label>
                                <input type="number" class="form-control form-control-solid" placeholder="{{__('Phone')}}" value="{{old('phone')}}" name="phone" id="phone"  maxlength="50" required />
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
                                <label for="password-field" class="required fs-5 fw-bold mb-2">{{__('Password')}}</label>
                                <input type="password" class="form-control form-control-solid" placeholder="{{__('Password')}}" value="" name="password" id="password-field" maxlength="255" required />
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password showpassword"></span>

                                @error('password')
                                <script>
                                    var element = document.getElementById("password");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>

                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="password-fields" class="required fs-5 fw-bold mb-2">{{__('password confirmation')}}</label>
                                <input type="password" class="form-control form-control-solid " placeholder="{{__('password confirmation')}}" value="" name="password_confirmation" maxlength="255" id="password-fields" required />
                                <span toggle="#password-fields" class="fa fa-fw fa-eye field-icon toggle-password showpassword"></span>

                                @error('password_confirmation')
                                <script>
                                    var element = document.getElementById("password_confirmation");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>
                            <div class="my-4"></div>
                            <!------------------------------end::Col------------------------------>

                            <!------------------------------end::Col------------------------------>
                            <!------------------------------begin::Col---------------------------->
                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="address" class="fs-5 fw-bold mb-2">{{__('Address')}}</label>
                                <input type="text" class="form-control form-control-solid" placeholder="{{__('Address')}}" value="{{old('address')}}" name="address" maxlength="255" id="address" />
                                @error('address')
                                <script>
                                    var element = document.getElementById("address");
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
                                <label for="image" class="fs-5 fw-bold mb-2">{{__('Image')}}</label>
                                <input type="file" class="form-control form-control-solid" placeholder="{{__('Image')}}" value="" name="image" id="image" />
                                @error('image')
                                <script>
                                    var element = document.getElementById("image");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>
                            <div class="my-4"></div>

                            <!------------------------------end::Col------------------------------>


                        </div>
                        <!--end::Input group-->
                    </div>
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
