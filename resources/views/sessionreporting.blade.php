@extends('layouts.admin')
@section('content')
<section class="content-header">
      <h1>
        Session Reporting.&nbsp;
        <small>Please report in time</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Session Reporting</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Report for session</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped">
                <tr>
                    <th>Session Reported</th>
                    <th>Date Created</th>
                </tr>
                <tr>
                    <td>SEMESTER 2 2015/2016 </td>
                    <td>1/12/2016 1:39:49 AM </td>
                </tr>
                <tr>
                    <td>SEMESTER 2 2015/2016</td>
                    <td>1/12/2016 1:39:49 AM </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </section>
@endsection