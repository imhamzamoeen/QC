@extends('layouts.master')

@push('extended-css')
    @include('theme_include.toaster')
    @include('theme_include.select')
    @include('vendors.sweet-alerts')
    @include('vendors.datatable')
@endpush

@section('content')

    <div class="row">
        <div class="mb-2 col-md-12">
        
            <x-user-company-assign-user-company-component />
        </div>
      
    </div>

    <x-user-company-assign-user-company-modal-component />
    <x-user-company-assign-edit-user-company-modal-component />
 

 

@endsection

@push('extended-js')
    <script src="{{ asset('js/dynamic_ajax.js') }}"></script>
    <script src="{{ asset('js/core/user-company/main.js') }}"></script>
    {{-- <script src="{{ asset('js/core/user-company/table.js') }}"></script> --}}
    <script src="{{ asset('js/core/user-company/assign_user_company_form.js') }}"></script>
    <script src="{{ asset('js/core/user-company/edit_user_company.js') }}"></script>
    <script src="{{ asset('js/core/user-company/delete.js') }}"></script>
    <script src="{{ asset('js/core/user-company/edit_user_company_assign_form.js') }}"></script>
    <script src="{{ asset('js/core/user-company/assign_all_button.js') }}"></script>

    <script>
        var route = "{{ route('register.register') }}";
        var asset = "{{ asset('') }}"
        var route_to_get_companies = "{{ route('Information.get_all_companies') }}";
        var global_obj=[];

        // The lower script just do not re order the selected options... mltb pehl wala pehly rehy ga .. alpha betically nhe hoga
        $("select").on("select2:select", function(evt) {
                var element = evt.params.data.element;
                var $element = $(element);

                $element.detach();
                $(this).append($element);
                $(this).trigger("change");
            });
    </script>



@endpush
