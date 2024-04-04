<div>
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Appointments</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Appointents</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-12">
           <div class="d-flex justify-content-end mb-2">
            <a href="{{ route('admin.appointments.create')}}">
              <button class="btn btn-primary">
                <i class="fa fa-plus-circle mr-1"></i>Add New Appointment</button>
              </a>
            </div>
              <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Client Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Status</th>
                            <th scope="col">Options</th>
                          </tr>
                        </thead>
                        <tbody>
                      
                          <tr>
                            <th scope="row">1</th>
                            <td>Client Name</td>
                            <td>Date</td>
                            <td>Time</td>
                            <td>Status</td>
                            <td>
                              <a href="" ">
                                <i class="fa fa-edit mr-2"></i>
                              </a>

                              <a href=""  >
                                <i class="fa fa-trash text-danger"></i>
                              </a>
                            </td>
                          </tr>
                         
                        </tbody>
                      </table>
                </div>
                <div class="card-footer d-flex justify-content-end">
                
                </div>
              </div>
      
             
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      
      <!-- Modal -->

  <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
      <form autocomplete="off" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class=""><span>Edit User</span>
         
          <span>Add New User</span>
         
          </h5>
          <button type="button" class="close" data-dismiss="modal" style="color:red; aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" wire:model.defer="state.name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" placeholder="Enter full name">
            @error('name')
              <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" wire:model.defer="state.email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                @error('email')
                <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" wire:model.defer="state.password" class="form-control @error('password') is-invalid @enderror"  id="exampleInputPassword1" placeholder="Password">
                @error('password')
                <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" wire:model.defer="state.password_confirmation" class="form-control" id="passwordConfirmation" placeholder="Confirm Password">
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Cancel</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>
               
                <span>Save Changes</span>
                <span>Save</span>
                
                </button>
              </div>
      </form>
      </div>

</div>

</div>
        
