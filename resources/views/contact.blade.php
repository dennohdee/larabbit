@extends('layouts.admin')
@section('content')
<section class="content-header">
      <h1>
        Contact Us
        <small>Please enquire from us</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Contact</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
<!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('contact') }}" method="post">
                @csrf
              <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Your name</label>
                  <input class="form-control" id="name" name="name" placeholder="" type="text" required>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input class="form-control" id="email" name="email" placeholder="Your Email" type="email" required>
                </div>
                </div>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="newsletter"> Subscribe to our newsletter
                  </label>
                </div>
            
              
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              
            </form>
              <table class="table table-striped">
                <tr>
                    <th>Name</th>
                    <th>Message</th>
                </tr>
               <tr>
                    <td>D</td>
                    <td>L</td>
                </tr>
              </table>
              </div>
          <!-- /.box -->
          </section>
         
@endsection
