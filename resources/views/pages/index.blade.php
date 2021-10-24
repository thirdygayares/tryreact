@extends('pages.layout.frontend')



@section('content')
<div class="container">
    <div class="row">

        @guest
        @if (Route::has('login'))
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8" style="margin-top: 50px;" >
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>
        
                        <div class="card-body" >
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
        
                                <div class="form-group row"  >
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row" style="margin-top: 20px;" >
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                       
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0"  style="margin-top: 20px;">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
        
                                      
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif


    @else
      

        <div class="col-md-12 mt-4 text center" >
            @if(session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>PRODUCTS INFORMATION
                        <a href="{{ 'add-employee' }}" class="btn btn-primary float-end">Add Products</a>

                    </h4>
                </div>
                <div class="card-body">


            <table class="table">

                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Size</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    
                    @foreach($employee as $empdata)

                        <tr>
                            <td >{{ $empdata->id }}</td>
                            <td >{{ $empdata->category }}</td>
                            <td >
                                <img src="{{ asset('uploads/products/' .$empdata->image) }}" width="70px" height="70px" alt="image">    
                             
                            </td>
                            
                            <td >{{ $empdata->name }}</td>
                            <td >{{ $empdata->price }}</td>
                           
                            <td >{{ $empdata->size }}</td>
                          
                           

                            <td>
                                <a href="{{url('edit-employee/' .$empdata->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="{{url('delete-employee/' .$empdata->id)}}" class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                        @endforeach

                </tbody>
              </table>
            </div>
        </div>
    </div>

    </div>
</div>

@endguest
@endsection
