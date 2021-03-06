@extends('layouts.shared.main')

@section('scripts')
<script src="{{ asset('js/app.js') }}"></script>
@endsection

@section('header.title')
    <a href="index.html" title="">{{ config('app.name', 'Laravel') }}</a>
@endsection

@section('menu')
    <div class="row">

        <ul class="s-header__nav">
            <li class="{{ request()->is('/') ? 'current' : '' }}"><a href="{{ route('home.index') }}">{{ __('common.home') }}</a></li>
            <li class="{{ request()->is('posts*') ? 'current' : '' }}"><a href="{{ route('post.index') }}">{{ __('common.posts') }}</a></li>
            @if (Auth::check())
                <li class="{{ request()->is('user/profile*') ? 'current' : '' }}"><a href="{{ route('user.profile.show') }}">{{ __('common.account') }}</a></li>
            @endif
        </ul> <!-- end #nav -->

    </div>
@endsection

@section('main')
    <div id="main" class="s-content__main large-8 column">
        @yield('content')
    </div> <!-- end main -->
@endsection

@section('sidebar')
    @include('layouts.shared.sidebar')
@endsection

@section('sidebar.buttons')
    <a class="btn btn--primary btn--small" href="{{ route('admin.post.index') }}">{{ __('common.admin') }}</a>
@endsection

@section('footer.menu')
    <ul class="s-footer__list s-footer-list--nav group">
        <li><a href="{{ route('home.index') }}">{{ __('common.home') }}</a></li>
        <li><a href="{{ route('post.index') }}">{{ __('common.posts') }}</a></li>
        <li><a href="{{ route('user.profile.show') }}">{{ __('common.account') }}</a></li>
    </ul>
@endsection
