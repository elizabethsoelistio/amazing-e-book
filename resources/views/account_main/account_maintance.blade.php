@extends('header.header')

@section('container')

@if (session()->has('byebyeUser'))
<div class="container d-flex justify-content-center mt-3">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('byebyeUser') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card">
            <div class="card-body p-4">
  
              <div class="row">
  
                    <div class="">
                        <h5 class="mb-3"><a class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>{{__("Account Maintance") }}</a></h5>
                        <hr>
        
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div>
                            <p class="mb-1">{{__("User and Roles") }}</p>
                            </div>
                        </div>

                        @if (count($account) != 0)
                            @foreach ($account as $account)
                                <div class="card mb-3">
                                    <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-row align-items-center">
                                        
                                            <div class="ms-3">
                                                @if ($account->middle_name !== null)
                                                    <h5>{{ $account->first_name }} {{ $account->middle_name }} {{ $account->last_name }}</h5>
                                                    <p class="small mb-0">{{ $account->role->role_desc }}</p>
                                                    
                                                @else
                                                    <h5>{{ $account->first_name }} {{ $account->last_name }}</h5>
                                                    <p class="small mb-0">{{ $account->role->role_desc }}</p>
                                                @endif
                                                
                                            </div>

                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            
                                            <div style="padding: 10px">
                                                <a href="/update-role/{{ $account->account_id }}" class="btn btn-info">{{__("Update Role") }}</a>
                                            </div>

                                            <form action="/remove-user" method="POST">
                                                @csrf
                                                <input type="hidden" name="account_id" value="{{ $account->account_id }}">
                                                <h5 class="mb-0"><button type="submit" class="btn btn-danger">{{__("Delete User") }}</button></h5>
                                            
                                            </form>

                                        </div>
                                    </div>
                                    </div>
                                </div>
                            @endforeach
                        
                        @else
                            <tr>
                                <h5>{{__("No User") }}</h5>
                            </tr>

                        @endif

                    </div>
                

                </div>
                
            </div>
 
        </div>
    </div>
</section>

@endsection


