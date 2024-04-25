@extends('back.layout')

@section('css')
<link rel="stylesheet" href="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.css">
<style>
    input,
    th span {
        cursor: pointer;
    }
</style>
@endsection

@section('main')

<div class="row">
    <div class="col-md-12">

        <div class="box">

            <div class="box-body">

                <table class="table table-striped table-hover">

                    <tr>
                        <th>Name</th>
                        <td>{{$graduation_details->name}}</td>
                    </tr>

                    <tr>
                        <th>Phone Number</th>
                        <td>{{$graduation_details->phone}}</td>

                    </tr>

                    <tr>
                        <th>Email Id</th>
                        <td>{{$graduation_details->email}}</td>
                    </tr>

                    @if($graduation_details->company)
                    <tr>
                        <th>Company Name</th>
                        <td>{{$graduation_details->company}}</td>
                    </tr>
                    @endif

                    @if($graduation_details->no_of_vehicle)
                    <tr>
                        <th>Number of Vehicles</th>
                        <td>{{$graduation_details->no_of_vehicle}}</td>
                    </tr>
                    @endif

                    @if($graduation_details->subject)
                    <tr>
                        <th>Subject</th>
                        <td>{{$graduation_details->subject}}</td>
                    </tr>
                    @endif

                    @if($graduation_details->message)
                    <tr>
                        <th>Message</th>
                        <td>{{$graduation_details->message}}</td>
                    </tr>
                    @endif

                    {{-- <tr>
                    <th>Resume</th>
                    <td><a href="{{asset('storage/resume')}}/{{$graduation_details->file_path}}" target="_blank"><i class="fa fa-download" title="Click to download" aria-hidden="true"></i></a></td>
                    </tr> --}}

                </table>

            </div><!-- /.box-body -->


        </div>
        <!-- /.box -->
        <a href="{{route('prospects.graduation-index')}}" class="btn btn-default pull-right">@lang('Back')</a>

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

@endsection

@section('js')
<script src="{{ asset('adminlte/js/back.js') }}"></script>

@endsection