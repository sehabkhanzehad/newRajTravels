@extends('dashboard.layouts.main')
@section('pageTitle', 'Website Settings')
@section('content')
    <section class="content file_manager">
        <div class="container-fluid">

            @include('dashboard.components.common.breadcrumb', [
                'title' => 'Home',
                'route' => route('dashboard.website.home'),
                'path' => 'Website',
            ])


        </div>
    </section>


@endsection
