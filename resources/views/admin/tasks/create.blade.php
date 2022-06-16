 
 @extends('admin.layout.index')
@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Task
                            <small>Create</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                   
                    <div class="col-lg-7" style="padding-bottom:120px">
                        
                        {!! Form::open(array('route'=>'task.store')) !!}
                                                    
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" placeholder="Please enter your title" />
                            </div>
                            <div class="form-group">
                                <label>Body</label>
                                <input class="form-control" name="body" placeholder="Please enter your body" />
                            </div>
                        
                            <button type="submit" class="btn btn-default">Create</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        {{ Form::close()}}
                    </div>
                </div>
                <!-- /.row -->
              @if ($errors->has('title','body'))
                 <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                     @endforeach
                 </div>
            @endif
            </div>
            <!-- /.container-fluid -->
        </div>
 @endsection