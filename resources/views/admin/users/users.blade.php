@extends('admin.layouts.app')


@section('title', 'Form General')

@section('headerScript')

@endsection


@section('pageContent')

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
  <div class="x_title">
    <h2>Users</h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <usertable users="{{json_encode($users)}}"></usertable>
  </div>
</div>
</div>


@endsection



@section('footerScript')




@endsection