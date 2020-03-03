@extends('layouts.app')
@section('js')
<script type="text/javascript">
    function getPolicy(){
        $.ajax({
            'type':'POST',
            'url':'/blog/policy',
            'data':'_token=<?php echo csrf_token(); ?>',
            success:function(data){
                alert(data);
            }
        });
    }
</script>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  
                    @can('isAdmin')
                        <div class="btn btn-success btn-lg">
                          You have Admin Access
                          <a href="#" onclick="getPolicy()">policy</a>
                        </div>
                    
                    @else
                        <div class="btn btn-info btn-lg">
                          You have User Access
                          <a href="#" onclick="getPolicy()">policy</a>
                        </div>
                    @endcan

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
