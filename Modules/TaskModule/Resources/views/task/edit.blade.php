@extends('commonmodule::layouts.master')



@section('title')
    Update
@endsection

@section('content')

          <!--begin::Toolbar-->
          <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
              <div class="page-title d-flex flex-column me-3">
                  <h1 class="d-flex text-dark fw-bolder my-1 fs-2">Tasks</h1>
                  <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
                      <li class="breadcrumb-item text-gray-600">
                          <a href="{{url('tasks')}}" class="text-gray-600 text-hover-primary">Tasks</a>
                      </li>
                      <li class="breadcrumb-item text-gray-600"><a href="#!">Update</a></li>
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
                            <form  action="{{url('tasks/'.$data->id)}}"  method="POST" class="needs-validation" novalidate>
                              @csrf
                              {{ method_field('PUT') }}
                              <input type="hidden" name="id" value="{{ $data->id }}">

                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Title</label>
                                        <input name="title" value="{{ $data->title }}" class="form-control" id="validationCustom01" placeholder="Title" value="Mark" required>
                                        <div class="invalid-feedback">

                                        </div>
                                        @if ($errors->has('title'))
                                            @include('commonmodule::includes.error',['errors'=>$errors->toArray(),'filed'=>'title'])
                                        @endif

                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Desc</label>
                                        <input name="desc" value="{{ $data->desc }}" class="form-control" id="validationCustom01" placeholder="Desc" value="Mark" required>
                                        <div class="invalid-feedback">

                                        </div>
                                        @if ($errors->has('desc'))
                                            @include('commonmodule::includes.error',['errors'=>$errors->toArray(),'filed'=>'desc'])
                                        @endif
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom04">Choose Status</label>

                                        <div id="select" name="role" class="form-group mb-4">
                                            <select name="status"  class="form-select" required>
                                                    <option value="">Choose Status</option>
                                                    <option {{$data->status == 'NEW'?'selected':''}} value="NEW">NEW</option>
                                                    <option {{$data->status == 'CANCELLED'?'selected':''}} value="CANCELLED">CANCELLED</option>
                                                    <option {{$data->status == 'INPROGRESS'?'INPROGRESS':''}} value="INPROGRESS">INPROGRESS</option>
                                                    <option {{$data->status == 'COMPLETED'?'COMPLETED':''}} value="COMPLETED">COMPLETED</option>
                                            </select>
                                            @if ($errors->has('status'))
                                                @include('commonmodule::includes.error',['errors'=>$errors->toArray(),'filed'=>'status'])
                                            @endif
                                            <div class="valid-feedback"></div>
                                            <div class="invalid-feedback">

                                            </div>
                                        </div>

                                <button class="btn btn-primary" type="submit">Update</button>
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
