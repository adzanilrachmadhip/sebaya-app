@extends('partials.sidebar')

@section('content')
<div class="container-fluid page-body-wrapper">
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- < ================= maps start ================== >  -->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">Form Input Wisata</h4>
                    <p class="card-description"> Basic form layout </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Places Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Latitude</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Longitude</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Alamat Wisata</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="formFileSm" class="form-label">Foto Tempat Wisata</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me </label>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection