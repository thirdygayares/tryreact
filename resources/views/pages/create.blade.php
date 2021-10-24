@extends('pages.layout.frontend')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Products
                                <a href="{{url('/admin')}}" class="btn btn-danger float-end">BACK</a>
                            </h4>
                        </div>

                        <div class="card-body">
                            <form action="{{ url('store-employee') }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                <div class="form-group mb-3">
                                    <label for=""> Image (File Upload)</label>
                                    <input type="file" name="image"class="form-control" required>
                                </div>

                                
                                <div class="form-group mb-3">
                                    <label for=""> Category</label>
                                    <input type="text" name="category" class="form-control" required>
                                </div>



                                <div class="form-group mb-3">
                                    <label for=""> Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                              

                                <div class="form-group mb-3">
                                    <label for=""> Price</label>
                                    <input type="text" name="price"  class="form-control" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for=""> Description</label>
                                    <textarea type="text" name="description" class="form-control" rows="3"></textarea required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for=""> Size</label>
                                    <input type="text" name="size"  class="form-control" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for=""> Color</label>
                                    <input type="text" name="color"  class="form-control" required>
                                </div>


                                <div class="form-group mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>

                               
                                

                            </form>
                        </div>


                    </div>
            </div>
        </div>
    </div>

    
@endsection


