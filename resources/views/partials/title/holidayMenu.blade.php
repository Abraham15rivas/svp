<div class="row">
    <div class="col s2">
        <a class="btn btn-floating light-blue darken-3 pulse" style="margin-top:20px; margin-left:30px" href="{{ URL::previous() }}"><i class="material-icons">keyboard_return</i></a>
    </div>
    <div class="col s8">
        <h3 style="margin-top:50px; margin-left: 350px">{{$title}}</h3>
    </div>
    <div class="col s2">
        <small>
            {{Auth::user()->person->name}}
        </small>
    </div>
</div>