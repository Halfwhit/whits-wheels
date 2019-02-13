@if ($errors->any())
    <div class="notification is-danger" style="margin-bottom: 48px">
        @foreach ($errors->all() as $error)
                <h3>{{$error}}</h3>
        @endforeach
    </div>
@endif
