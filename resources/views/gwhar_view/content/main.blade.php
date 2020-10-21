@include('gwhar_view.content.start_initial')
@include('gwhar_view.content.navbar')
@yield('section')
<h1 style="position:fixed;bottom:2px">{{__('passwords.welcome')}}</h1>
@include('gwhar_view.content.footer')
@include('gwhar_view.content.end_itnitial')
