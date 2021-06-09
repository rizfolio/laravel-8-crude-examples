@extends('admin.layouts.master')

@section('content')

 

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create New Category</h6>
        </div>
        <div class="card-body">
          
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="p-5">
                   
                      
                            
                        {!! Form::model($cat,array('class' => 'user', 'route' => ['category.update',$cat->id],'method'=>'PATCH')) !!}

                            <div class="form-group row">
                                <div class="col-sm-8 mb-3  ">
                               

                                        <label for="title">Category Title</label>

                                         {!! Form::text('title', null, array('required'=>'required','placeholder' => 'Category Title','class' => 'form-control')) !!}   


                                </div>
                              
                            </div>
                           
                           
                             <button type="submit" class="btn btn-primary btn-create"> Update Category</button>
                             <a class="btn btn-link  " href="{{ route('category.index') }}">Go Back to List</a>
                        
                     {!! Form::close() !!}
                       
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

 


@endsection




