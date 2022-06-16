 
 @extends('admin.layout.index')
@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Task
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                   
                    <div class="col-lg-7" style="padding-bottom:120px">
                      <!--   @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                         @endif -->
                        <!-- @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                        @endif -->
                        
                        {!! Form::model($task,array('route'=>['task.update',$task->id],'method'=>'PUT')) !!}
                                                    
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" value="{{$task->title}}" name="title" placeholder="Please enter your title" />
                            </div>
                            <div class="form-group">
                                <label>Body</label>
                                <input class="form-control" value="{{$task->body}}" name="body" placeholder="Please enter your body" />
                            </div>
                        
                            <button type="submit" class="btn btn-default">Update</button>
                            <button type="reset" class="btn btn-default">Reset</button>

                         <!--    <div class="form-group">
                                {form ::label('title','Enter title')}
                                {form::text('title',null,['class'=>'form-group'])}
                            </div>
                            <div class="form-group">
                                {form ::label('body','Enter body')}
                                {form::text('body',null,['class'=>'form-group'])}
                            </div>
                        
                            <div class="form-group">
                                {form ::button('create',['type'=>'submit','class'=>'btn btn-primary'])}
                                
                            </div> -->
                            
                        {!! Form::close() !!}
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