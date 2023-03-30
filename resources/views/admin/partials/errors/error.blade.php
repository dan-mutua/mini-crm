@if($errors->any())
    {{--<div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <ul>
                <strong><li class="text-center">{{ $error }}</li></strong>
            </ul>
        @endforeach
    </div>--}}
    <div class="alert alert-danger alert-dismissible fade-in ${dismissed ? 'hidden': ''}" role="alert">
        <button type="button" class="close" click.delegate="dismiss" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Failed!</strong>
        @foreach($errors->all() as $error)
            <ul>
               <li> &nbsp;&nbsp;&nbsp;{{ $error }}</li>
            </ul>
        @endforeach
    </div>
@endif


