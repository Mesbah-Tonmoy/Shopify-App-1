@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <h1>Home Page</h1>
    {{-- <h3><a href="{{ route('collections') }}">Collections</a></h3> --}}
    
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection
