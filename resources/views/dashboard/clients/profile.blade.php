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
                <h4 class="d-flex align-items-center text-muted  fw-bolder fs-6 my-1">{{__('Profile')}}
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <h3 class="text-dark fs-5 fw-bold my-1 ms-1">{{__('Update Profile')}}
                        ({{$user->name}})
                    </h3>
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
                <span class="card-label fw-bolder fs-3 mb-1">{{__('Update Profile')}}</span>
                <span class="text-muted mt-1 fw-bold fs-7"></span>
            </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="">
                <a href="{{route('admin.home')}}" class="btn btn-sm btn-primary btn-active-primary">
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
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Navbar-->
                <div class="card mb-5 mb-xxl-8">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap">
                            <!--begin: Pic-->
                            <div class="me-7 mb-4">
                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                    @if ($user->image !=null)
                                    <img src="{{asset($user->image)}}" alt="image" class="imagestyle" loading="lazy" />
                                    @else
                                    <img src="{{asset('images')}}/adminimage.png" alt="user" class="imagestyle" loading="lazy" />
                                    @endif
                                    <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::User-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">
                                                ({{$user->name}})
                                            </a>
                                            <a href="#">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                        <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF" />
                                                        <path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </div>
                                        <!--end::Name-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                <i class="fas fa-user-shield stylephone">
                                                </i>
                                                {{-- <!--end::Svg Icon-->{{$user->type}} --}}
                                            </a>


                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                <i class="fas fa-phone stylephone">
                                                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
                                                        <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
                                                    </svg> --}}
                                                </i>
                                                <!--end::Svg Icon-->{{$user->phone}}
                                            </a>


                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black" />
                                                        <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->{{$user->email}}
                                            </a>
                                            <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-4 me-1" style="padding: 0px 0px 0px 8px!important;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                        <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                {{$user->address}}
                                            </a>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Actions-->
                                    <div class="d-flex my-5" style="font-size: 30px!important">
                                        <!--begin::Menu-->
                                        {{-- <a href="{{$user->facebook}}" title="{{$user->facebook}}" class="paddingstyle" target="_blank">
                                            <i class="fab fa-facebook-f">
                                            </i>
                                        </a>
                                        <a href="{{$user->twitter}}" title="{{$user->twitter}}" class="paddingstyle" target="_blank">
                                            <i class="fab fa-twitter">
                                            </i>
                                        </a>
                                        <a href="{{$user->instream}}" title="{{$user->instream}}" class="paddingstyle" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        <a href="{{$user->linkedin}}" title="{{$user->linkedin}}" class="paddingstyle" target="_blank">
                                            <i class="fab fa-linkedin"></i>
                                        </a> --}}
                                        {{-- mostafa here facebook and other --}}
                                        <!--begin::Menu-->
                                        <div class="me-0">

                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Title-->
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                        <!--begin::Stats-->
                                        <div class="d-flex flex-wrap">
                                            <!--begin::Stat-->
                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3  d-none">

                                            </div>
                                            <!--end::Stat-->


                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Wrapper-->

                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Navs-->
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#">{{__('Update Data')}}</a>
                            </li>
                            <!--end::Nav item-->
                        </ul>
                        <!--begin::Navs-->
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::Row-->
                <div class="row g-0 g-xxl-8">
                    <!--begin::Col-->
                    <div class="col-xl-12">
                        <!--begin::Feeds Widget 1-->
                        <div class="card mb-1 mb-xxl-12">
                            <!--begin::Body-->
                            <div class="card-body pb-0">
                                <!--begin::Header-->
                                <div class="d-flex align-items-center">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center flex-grow-1">

                                        <!--begin::Body-->

                                        <!--begin::Table container-->
                                        <!--begin::Form-->
                                        <form action="{{ route('updateuser', $user->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="lang" value="en" />
                                            <div class="modal-body py-1 px-lg-1">
                                                <!--begin::Scroll-->
                                                <div class="me-n7 pe-7" data-kt-scroll-max-height="auto">
                                                    <div class="row mb-4">
                                                        <!------------------------------begin::Col---------------------------->
                                                        <div class="col-md-6 fv-row form-group">
                                                            <!--begin::Input-->
                                                            <label for="name" class="required fs-5 fw-bold mb-2">{{__('Name')}}</label>
                                                            <input type="text" class="form-control form-control-solid" placeholder="{{__('Name')}}" value="{{$user->name}}" name="name" id="name" maxlength="255" required />
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
                                    <!--begin::Input-->
                                    <label for="language" class="required fs-5 fw-bold mb-2">{{__('languages')}}</label>
                                    <select class="form-control form-control-solid form-select form-select-solid selectd" tabindex="-1" aria-hidden="true" name="language_id" id="language" maxlength="255" data-placeholder="{{__('Languages')}}" required>
                                        <option disabled>{{__('Choose')}}</option>
                                        @foreach ($languages as $language)
                                        <option value="{{ $language->id }}" {{ $user->language_id == $language->id ? 'selected' : '' }} >
                                            {{ $language->title }}
                                        </option>
                                       @endforeach


                                    </select>
                                    @error('language_id')
                                    <script>
                                        var element = document.getElementById("language_id");
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
                                                            <label for="email" class="required fs-5 fw-bold mb-2">{{__('Email')}}</label>
                                                            <input type="email" class="form-control form-control-solid" placeholder="{{__('Email')}}" value="{{$user->email}}" maxlength="255" name="email" id="email" required />
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
                                                            <input type="number" class="form-control form-control-solid" placeholder="{{__('phone')}}" value="{{$user->phone}}" maxlength="255" name="phone" id="phone" required />
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
                                                            <label for="password-field" class="fs-5 fw-bold mb-2">{{__('Password')}}</label>
                                                            <input type="password" class="form-control form-control-solid" placeholder="{{__('Password')}}" value="" maxlength="255" name="password" id="password-field" />
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
                                                            <label for="password-fields" class="fs-5 fw-bold mb-2">{{__('password confirmation')}}</label>
                                                            <input type="password" class="form-control form-control-solid" placeholder="{{__('password confirmation')}}" maxlength="255" value="" name="password_confirmation" id="password-fields" />
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
                                                    <!------------------------------begin::Col---------------------------->
                                                    <div class="col-md-6 fv-row form-group">
                                                        <!--begin::Input-->
                                                        <label for="address" class="fs-5 fw-bold mb-2">{{__('Address')}}</label>
                                                        <input type="text" class="form-control form-control-solid" placeholder="{{__('Address')}}" value="{{$user->address}}" maxlength="255" name="address" id="address" />
                                                        @error('address')
                                                        <script>
                                                            var element = document.getElementById("address");
                                                            element.classList.add("border-danger");

                                                        </script>
                                                        <span class="validation-code colorred">{{ $message }}</span>

                                                        @enderror
                                                        <!--end::Input-->
                                                    </div>

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


                                                    <!------------------------------begin::Col---------------------------->


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

                                    <!--begin::Body-->



                                </div>
                                <!--end::User-->

                            </div>
                            <!--end::Header-->

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Feeds Widget 1-->
                </div>
                <!--end::Col-->

            </div>

        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

</div>
<!--end::Tables Widget 9-->


</div>
@endsection
@section('script')

@endsection
