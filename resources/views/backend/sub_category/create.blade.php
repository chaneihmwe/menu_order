@extends('backend.backend_template')
@section('content')
<!--Nav Bar-->
<div class="container">
    <div class="row">
        <div class="col">
          <h2>Create New Sub Category</h2>
        </div>
        
        <div class="col col-lg-3">
            <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Sub Category List</a>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 card p-5">
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


          <form method="post" action="{{ route('admin.sub_category.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label> Category Type</label>
              <select class="form-control" name="category_id">
                @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
              </select>
              </div>
            <div class="form-group mt-3">
              <label>Sub Category Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary float-right">Add Category</button>
          </form>
        </div>
        
    </div>
    
</div>

@endsection