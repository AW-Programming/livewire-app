<div>
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Users</li>
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
              <button wire:click.prevent="addNew" class="btn btn-primary">
                <i class="fa fa-plus-circle mr-1"></i>Add New User</button>
            </div>
              <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Options</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($users as $user)
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                              <a href="" wire:click.prevent="edit({{ $user}})">
                                <i class="fa fa-edit mr-2"></i>
                              </a>

                              <a href="" wire:click.prevent="confirmUserRemoval({{ $user->id}})" >
                                <i class="fa fa-trash text-danger"></i>
                              </a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  {{ $users->links() }}
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
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this User?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Cancel</button>
        <button type="button" wire:click.prevent="deleteUser"class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Delete User</button>
      </div>
    </div>
  </div>
</div>

  <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
      <form autocomplete="off" wire:submit.prevent="{{$showEditModel ? 'updateUser' : 'createUser'}}">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">@if($showEditModel)
          <span>Edit User</span>
          @else
          <span>Add New User</span>
          @endif
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
                @if($showEditModel)
                <span>Save Changes</span>
                @else <span>Save</span>
                @endif
                </button>
              </div>
      </form>
      </div>

</div>

</div>
        
