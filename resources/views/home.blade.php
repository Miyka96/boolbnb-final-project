@extends('layouts.app')

@section('content')
   <div id="root">
      <router-view></router-view>
   </div>

   <script src="{{ asset('js/front.js') }}"></script>
@endsection