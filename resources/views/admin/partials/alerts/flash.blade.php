@if(session('success'))
    <div class="alert alert-success alert-dismissible fade-in ${dismissed ? 'hidden': ''}" role="alert">
        <button type="button" class="close" click.delegate="dismiss" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Success!</strong>&nbsp;&nbsp;&nbsp;{{ session('success') }}
    </div>
@elseif(session('status'))
    <div class="alert alert-success alert-dismissible fade-in ${dismissed ? 'hidden': ''}" role="alert">
        <button type="button" class="close" click.delegate="dismiss" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Success!</strong>&nbsp;&nbsp;&nbsp;{{ session('status') }}
    </div>
@elseif(session('error'))
    <div class="alert alert-danger alert-dismissible fade-in ${dismissed ? 'hidden': ''}" role="alert">
        <button type="button" class="close" click.delegate="dismiss" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Failed!</strong>&nbsp;&nbsp;&nbsp;{{ session('error') }}
    </div>
@elseif(session('error1'))
    <div class="alert alert-info fade-in ${dismissed ? 'hidden': ''}" role="alert">
        <button type="button" class="close" click.delegate="dismiss" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Failed!</strong>&nbsp;&nbsp;&nbsp;{{ session('error1') }}
    </div>
@elseif(session('nosubscription'))
    <div class="alert alert-danger alert-dismissible fade-in ${dismissed ? 'hidden': ''}" role="alert">
        <button type="button" class="close" click.delegate="dismiss" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Failed!</strong>&nbsp;&nbsp;&nbsp;{{ session('nosubscription') }}
        <a href="/renew-subscription">Clicking here</a>
    </div>
@endif
