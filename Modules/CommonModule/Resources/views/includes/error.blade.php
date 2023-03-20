
<div class="invalid-feedback" style="display: block; font-size:15px;">
  @foreach ($errors as $key=>$error)
    @if($key==$filed)
          {{ $error[0] }}
    @endif
  @endforeach

</div>
