<div class="block-header">
    <div class="row clearfix">
        <div class="col-lg-5 col-md-5 col-sm-12">
            <h2>{{ $title }}</h2>
            <ul class="breadcrumb padding-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class="zmdi zmdi-home"></i></a></li>
                @if(isset($path))
                <li class="breadcrumb-item"><a href="{{ $route }}">{{ $path }}</a></li>
                @endif
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ul>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="input-group m-b-0">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-search"></i>
                </span>
            </div>
        </div>
    </div>
</div>

{{-- <div class="block-header">
    <div class="row clearfix">
        <div class="col-lg-5 col-md-5 col-sm-12">
            <h2>View Email</h2>
            <ul class="breadcrumb p-l-0 p-b-0 ">
                <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Inbox</a></li>
                <li class="breadcrumb-item active">View Email</li>
            </ul>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="input-group mb-0">
                <input type="text" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="zmdi zmdi-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div> --}}
