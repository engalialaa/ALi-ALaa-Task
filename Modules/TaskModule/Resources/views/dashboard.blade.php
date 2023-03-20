@extends('commonmodule::layouts.master')

@section('title')
Home
@endsection

@section('content')
    <!--begin::Post-->
    <div class="content flex-column-fluid" id="kt_content">
        <!--begin::Row-->
        <div class="row g-5 g-lg-10">
            <!--begin::Col-->
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-5">
                <a href="#" class="card bg-body h-100">
                    <div class="card-body">
                        <div class="mb-1">
                            <i class="bi bi-columns-gap fs-2tx"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="text-dark fw-bolder fs-1 mb-0 mt-5">Tasks</div>
                            <div class="text-muted fw-bold fs-4">{{$tasks}}</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection


