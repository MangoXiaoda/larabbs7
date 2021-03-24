@extends('layouts.admin')
<!-- @section('title', '首页') -->

@section('content')

<div>
    <el-tag type="success">@{{ info }}</el-tag>
</div>

@stop 

@section('set_admin_data')

<script>
    admin_data.info = @json($info);
</script>

@stop




