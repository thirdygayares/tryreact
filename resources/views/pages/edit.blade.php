@extends('pages.layout.frontend')



@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Products Data
                                <a href="{{url('/admin')}}" class="btn btn-danger float-end">BACK</a>
                            </h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ url('update-employee/' .$employee->id ) }}" method="POST"  enctype="multipart/form-data">

                                @csrf
                                @method('PUT')

                                <div class="form-group mb-3">
                                    <label for=""> Category</label>
                                    <input type="text" name="category" value="{{ $employee->category}}"class="form-control">
                                </div>

                              
                                <div class="form-group mb-3">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for=""> name</label>
                                    <input type="text" name="name" value="{{ $employee->name}}" class="form-control" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for=""> Price</label>
                                    <input type="text" name="price" value="{{ $employee->price}}" class="form-control" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for=""> Description</label>
                                    <input type="text" name="description" value="{{ $employee->description}}" class="form-control" required>
                                </div>

                               
                                <div class="form-group mb-3">
                                    <label for="">size</label>
                                    <input type="text" name="size" value="{{ $employee-> size}}" class="form-control" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">size</label>
                                    <input type="text" name="color" value="{{ $employee-> color}}" class="form-control" required>
                                </div>




                                <div class="form-group mb-3">
                                    <label for=""> Status</label>
                                    <input type="checkbox" name="status" {{ $employee ->status == 1 ? 'checked' : '' }}> Unactive -1 / Active-0
                                </div>

                               <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Update</button>

                                </div>


                            </form>
                        </div>


                    </div>
            </div>
        </div>
    </div>

@endsection
