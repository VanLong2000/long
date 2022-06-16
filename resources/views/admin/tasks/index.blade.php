 @extends('admin.layout.index')
@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <br>
                
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Task
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                   <!--    @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                        @endif -->
                         @if(Session::has('message'))
                        <div class="alert alert-success">{{Session::get('message')}}</div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                            <tr class="odd gradeX" align="center">
                                <td>{{$task->id}}</td>
                                <td>{{$task->title}}</td>
                                <td>{{$task->body}}</td>
                                <td class="center">
                                {!! Form::open(array('route'=>['task.destroy',$task->id],'method'=>'DELETE')) !!}
                                    {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                                {!! Form::close() !!}
                                </td>
                                <td class="center">{{link_to_route('task.edit','Edit',[$task->id],['class'=>'btn btn-primary'])}}
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
        </div>

 @endsection