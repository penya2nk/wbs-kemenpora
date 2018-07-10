@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <strong><span>&nbsp;</span></strong>{{ $error }}<br>
        @endforeach
    </div>
@endif

