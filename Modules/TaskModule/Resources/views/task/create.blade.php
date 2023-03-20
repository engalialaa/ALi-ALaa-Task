@extends('commonmodule::layouts.master')

@section('title')
    Add New
@endsection

@section('content')

    <!--begin::Toolbar-->
    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
        <div class="page-title d-flex flex-column me-3">
            <h1 class="d-flex text-dark fw-bolder my-1 fs-2">Tasks</h1>
            <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
                <li class="breadcrumb-item text-gray-600">
                    <a href="{{url('customers')}}" class="text-gray-600 text-hover-primary">Tasks</a>
                </li>
                <li class="breadcrumb-item text-gray-600"><a href="#!">Add New</a></li>
            </ul>
        </div>
    </div>

          <!--begin:::Tab content-->
          <div class="tab-content" id="myTabContent">
              <!--begin:::Tab pane-->
              <div class="tab-pane fade show active" id="individual_client" role="tabpanel">
                  <div class="card pt-4 mb-6 mb-xl-9">
                      <!--begin::Card header-->
                      <div class="card-body pt-0">

                      <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <form  action="{{url('tasks')}}"  method="POST" class="needs-validation" novalidate>
                              @csrf
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Title</label>
                                        <input name="title" value="{{ old('title') }}" class="form-control" id="validationCustom01" placeholder="Title" value="Mark" required>
                                        <div class="invalid-feedback">

                                        </div>
                                        @if ($errors->has('title'))
                                          @include('commonmodule::includes.error',['errors'=>$errors->toArray(),'filed'=>'title'])
                                        @endif

                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Desc</label>
                                        <input name="desc" value="{{ old('desc') }}" class="form-control" id="validationCustom01" placeholder="Desc" value="Mark" required>
                                        <div class="invalid-feedback">

                                        </div>
                                        @if ($errors->has('desc'))
                                          @include('commonmodule::includes.error',['errors'=>$errors->toArray(),'filed'=>'desc'])
                                        @endif

                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Save</button>
                            </form>
                        </div>
                    </div>


                      </div>
                  </div>
              </div>
          </div>

@stop

@section('js')
    <script  src="{{ asset('dashboard/js/forms/bootstrap_validation/bs_validation_script.js')}}" ></script>
@endsection
