
<div class="d-flex btns-actions">
    @if(isset($show) && $show=='true')
            <a class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1" id="customer_details" data-id="{{$item->id}}" data-toggle="tooltip" data-placement="top" title="{{__('general.show')}}">
                <span> <i class="bi bi-info-circle-fill"></i></span>
            </a>
    @endif
    @if(isset($edit) && $edit=='true')
                <a href="{{url($url.'/'.$item->id.'/edit')}}" data-toggle="tooltip" data-placement="top" title="{{__('general.edit')}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                    <span><i class="bi bi-pencil-fill fs-5"></i></span>
                </a>

    @endif

    @if(isset($delete) && $delete=='true')

            <form id="delete-item{{isset($id)?$id:''}}-form-{{$item->id}}" class="inline" action="{{url($url.'/' . $item->id)}}" method="POST">
                {!! method_field('DELETE') !!}
                {!! csrf_field() !!}

                <button title="{{__('general.delete')}}" type="submit" onclick="deleteItemForm(event,'{{$item->id}}')" type="button"
                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"><i class="bi bi-trash-fill fs-5"></i></button>
            </form>
    @endif

</div>

