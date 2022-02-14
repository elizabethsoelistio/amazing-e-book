@extends('header.header')

@section('container')

<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card">
            <div class="card-body p-4">
  
              <div class="row">
  
                    <div class="">
                        <h5 class="mb-3"><a class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>{{__("Changing Roles") }}</a></h5>
                        <hr>
        
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                            <p class="mb-1">{{__("User and Roles") }}</p>
                            </div>
                        </div>

                        @if ($account->middle_name !== null)
                            <h5>{{ $account->first_name }} {{ $account->middle_name }} {{ $account->last_name }}</h5>
                            <p class="small mb-0">{{ $account->role->role_desc }}</p>
                            
                        @else
                            <h5>{{ $account->first_name }} {{ $account->last_name }}</h5>
                            <p class="small mb-0">{{ $account->role->role_desc }}</p>
                        @endif
                        <br><br>
                        <form action="/update-role-user" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <p>Role:</p>
                                    <select class="role_id form-control form-select @error('role_id') is-invalid @enderror" name="role_id"  >
                                    @if ($account->role_id === 1)
                                        <option value="admin" selected>{{__("Admin") }}</option>
                                        <option value="member">{{__("Member") }}</option>
                                    @else
                                        <option value="admin">{{__("Admin") }}</option>
                                        <option value="member" selected>{{__("Member") }}</option>
                                    @endif
                                    
                                  </select>
                                  
                                  <br>
                                  @error('role_id')
                                    {{ $message }}
                                  @enderror
              
                                </div>
                            </div>
                        
                            <input type="hidden" name="account_id" value="{{ $account->account_id }}">
                            <h5 class="mb-0"><button type="submit" class="btn btn-danger">{{__("Save") }}</button></h5>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection