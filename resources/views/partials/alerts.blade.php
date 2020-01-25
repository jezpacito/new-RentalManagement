@if (session('success'))

    <div class="alert alert-success" role="alert">
        <div class="container">
        <i class="now-ui-icons ui-2_like"></i>
        {{session('success')}}
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </span>
          </button>
        </div>
@endif

@if (session('warning'))

<div class="alert alert-warning" role="alert">
    <div class="container">
    <i class="now-ui-icons ui-1_bell-53"></i>
    {{session('warning')}}
    </div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">
          <i class="now-ui-icons ui-1_simple-remove"></i>
        </span>
      </button>
    </div>
@endif

@if (session('error'))

<div class="alert alert-danger" role="alert">
    <div class="container">
    <i class="now-ui-icons ui-1_simple-remove"></i>
    {{session('error')}}
    </div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">
          <i class="now-ui-icons ui-1_simple-remove"></i>
        </span>
      </button>
    </div>
@endif

