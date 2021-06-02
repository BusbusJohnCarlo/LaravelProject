@extends('layout')

@section('main-content')
    <div>
        <div class="float-start">
            <h4 class="pb-3">Finished Task </h4>
            <p> “You Can not learn anything in life
unless You do or Face it”
― Saif Rehman
 <p>
       
        </div>
       <!--  <div class="float-end">
        <button  onclick="location.href = 'http://127.0.0.1:8000/task/create';" type="button" class="btn-warning1 btn-circle btn-xl"><i class="fa fa-plus"></i>
                            </button>
                
        </div> -->
        
        <div class="clearfix"></div>
    </div>

    @foreach ($tasks as $task)
        <div class="card mt-3">
            <h5 class="card-header">
                @if ($task->status === 'Todo')
              
                    {{ $task->title }}
                @else
                    {{ $task->title }}
                @endif

               
                <span class="badge rounded-pill bg-success text-light">
                    {{ $task->created_at->diffForHumans() }}
                </span>
            </h5>

            <div class="card-body">
                <div class="card-text">
                    <div class="float-start">
                        @if ($task->status === 'Todo')
                            {{ $task->description }}
                        @else
                            {{ $task->description }}
                        @endif
                        <br>

                        @if ($task->status === 'Todo')
                            <span class="badge rounded-pill bg-info text-dark">
                                Todo
                            </span>
                        @else
                            <span class="badge rounded-pill bg-success text-white">
                                Done
                            </span>
                        @endif

                        
                        <small>Last Updated - {{ $task->updated_at->diffForHumans() }} </small>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-success">
                           <i class="fa fa-edit"></i>
                        </a>

                        <form action="{{ route('task.destroy', $task->id) }}" style="display: inline" method="POST" onsubmit="return confirm('Are you sure to delete ?')">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    @endforeach

    @if (count($tasks) === 0)
        <div class="alert alert-success  p-2">
            No task found, Looks like everything's organized in the right place
            <br>
            <br>
          
        
        </div>
    @endif

@endsection
