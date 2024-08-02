@extends('layouts.master')

@push('extended-css')
    @powerGridStyles
    <livewire:styles />
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><strong style="color:black">Companies Existance Within States </strong>

                </div>
                <div class="card-body">
                    <livewire:companies-state-table/>
                   
                </div>
            </div>
        </div>
    </div>
@endsection

@push('extended-js')
    <livewire:scripts />
    @powerGridScripts
    <script src="{{ asset('js/global.js') }}"></script>
@endpush
