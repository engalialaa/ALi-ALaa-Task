
@extends('commonmodule::layouts.master')

@section('title')
    Tasks
@endsection

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
        <div class="page-title d-flex flex-column me-3">
            <h1 class="d-flex text-dark fw-bolder my-1 fs-2">Tasks</h1>
            <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
                <li class="breadcrumb-item text-gray-600">
                    <a href="{{url('/')}}" class="text-gray-600 text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item text-gray-600">Tasks</li>
            </ul>
        </div>
    </div>

        <div class="page-title" style="float:left">
            <a href="{{url('tasks/create')}}" class="btn btn-primary"> Add New </a>
        </div>
        <br>

    <!--begin:::Tab content-->
    <div class="tab-content" id="myTabContent">
        <!--begin:::Tab pane-->
        <div class="tab-pane fade show active" id="individual_client" role="tabpanel">
            <div class="card pt-4 mb-6 mb-xl-9">
                <!--begin::Card header-->
                <div class="card-body pt-0">

                    <div class="table-responsive">
                        <!--begin::Table-->
                        <!--  BEGIN CONTENT PART  -->
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive mb-4">
                                        {!! $dataTable->table() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  END CONTENT PART  -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-------------------------Details  Form --------------------------------------------------------------->
    <div class="modal fade rtl" id="details_model" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Customer Details</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 table-responsive" id="items_details">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" id="dismiss_details_modal" class="btn btn-white me-3" data-bs-dismiss="modal">
                          Cancel
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------End Details  Form ----------------------------------------------------------------->

@stop
@section('js')

    @include('commonmodule::includes.swal')
    {!! $dataTable->scripts() !!}

    <script>
        function changeStatus(id)
        {
            $.ajax({
                url:"{{url('changeStatusCustomer')}}"+"/"+ id,
                success: function (response){
                    console.log(response)
                },
                failed: function(error){
                    console.log(error)
                }

            })
        }

        function deleteItemForm(event,id)
        {
            event.preventDefault();
            Swal.fire({
                title: 'Delete Item',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes Delete',
                cancelButtonText:'Cancel',
            }).then((result) => {
                if (result.value===true) {
                    $('#delete-item-form-' + id).submit();
                }
            })
        }
    </script>

    <script>
        $(document).on('click', '#customer_details', function () {
            let item = $(this)
            var id = $(this).attr("data-id")
            var url = "/"
            url = url.concat("customer_details/").concat(id);
            $.get(url, function(data) {
                $('#items_details').html(data.html);
            });
            setTimeout(function() {
                $('#details_model').modal('show');
            },1000);
        });
    </script>
@endsection
