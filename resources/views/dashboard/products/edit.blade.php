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
                <h4 class="d-flex align-items-center text-muted  fw-bolder fs-6 my-1">{{__('Products')}}
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <h3 class="text-dark fs-5 fw-bold my-1 ms-1">{{__('Edit Product')}}</h3>
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
                <span class="card-label fw-bolder fs-3 mb-1">{{__('Edit product')}}</span>
                <span class="text-muted mt-1 fw-bold fs-7"></span>
            </h3>
            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="">
                <a href="{{route('products.index')}}" class="btn btn-sm btn-primary btn-active-primary">
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
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="me-n7 pe-7" data-kt-scroll-max-height="auto">
                        <div class="row mb-4">
                            <!--begin::Scroll-->
                            <!--begin::Scroll-->
                            <!------------------------------begin::Col---------------------------->
                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="name" class="fs-5 fw-bold mb-2">{{__('name')}}</label>
                                <input type="text" class="form-control form-control-solid" placeholder="{{__('name')}}" value="{{$product->name}}" name="name" id="name" maxlength="255" required autofocus />
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
                                        <option value="{{ $language->id }}" {{ $product->language_id == $language->id ? 'selected' : '' }} >
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

                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="salary" class="fs-5 fw-bold mb-2">{{__('salary')}}</label>
                                <input type="number" class="form-control form-control-solid" placeholder="{{__('salary')}}" value="{{$product->salary}}" maxlength="50" name="salary" id="salary" min="0" step="any" required />
                                @error('salary')
                                <script>
                                    var element = document.getElementById("salary");
                                    element.classList.add("border-danger");
                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>
                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="discount" class="fs-5 fw-bold mb-2">{{__('Discount')}}</label>
                                <input type="number" class="form-control form-control-solid" placeholder="{{__('discount')}}" value="{{$product->discount}}" maxlength="50" name="discount" id="discount" min="0" step="any" required />
                                @error('discount')
                                <script>
                                    var element = document.getElementById("discount");
                                    element.classList.add("border-danger");
                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>
                            <div class="my-4"></div>

                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="public_unpublic" class="required fs-5 fw-bold mb-2">{{__('Public & unpublic')}}</label>
                                <select class="form-control form-control-solid form-select form-select-solid selectd" tabindex="-1" aria-hidden="true" name="public_unpublic" maxlength="255" id="public_unpublic" data-placeholder="{{__('Public & Unpublic')}}" required>
                                    <option disabled>{{__('choose')}}</option>
                                    <option value="public" {{ $product->public_unpublic == 'unpublic' ? 'selected' : '' }}>{{__('Public')}}</option>
                                    <option value="unpublic" {{ $product->public_unpublic == 'unpublic' ? 'selected' : '' }}>{{__('Unpublic')}}</option>

                                </select>
                                @error('public_unpublic')
                                <script>
                                    var element = document.getElementById("public_unpublic");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>


                            <div class="col-md-6 fv-row form-group">
                                <!--begin::Input-->
                                <label for="image" class="fs-5 fw-bold mb-2">{{ __('image') }}</label>
                                <input type="file" id="image" class="form-control" value="{{old('image')}}" placeholder="image" name="image" multiple accept="image/*">

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

                            <div class="col-md-12 fv-row form-group">
                                <!--begin::Input-->
                                <label for="name" class="fs-5 fw-bold mb-2">{{__('Description')}}</label>
                                <textarea type="text" class="form-control form-control-solid tinymce-editor" placeholder="{{__('Description')}}" value="{{$product->description}}" name="description" id="description"  >{!!$product->description!!}</textarea>
                                @error('description')
                                <script>
                                    var element = document.getElementById("description");
                                    element.classList.add("border-danger");

                                </script>
                                <span class="validation-code colorred">{{ $message }}</span>

                                @enderror
                                <!--end::Input-->
                            </div>


                            <div class="my-4"></div>


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
