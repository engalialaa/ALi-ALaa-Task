    @if($item->status == 'NEW')
        <button type="button" class="btn btn-outline-primary">New</button>
     @elseif($item->status == 'CANCELLED')
            <button type="button" class="btn btn-outline-danger">CANCELLED</button>
        @elseif($item->status =='INPROGRESS')
            <button type="button" class="btn btn-outline-warning">INPROGRESS</button>
        @elseif($item->status =='COMPLETED')
            <button type="button" class="btn btn-outline-dark">COMPLETED</button>
    @endif
