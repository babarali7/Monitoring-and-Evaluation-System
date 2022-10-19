@if(Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $msg)
            <div class="alert alert-danger" >
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <i class="material-icons">close</i>
                </button>
               <span> {{ $msg }} </span>
            </div>
        @endforeach
    @else
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                <i class="material-icons">close</i>
            </button>
            <span>{{ $data }}</span>
            
        </div>
    @endif
@endif