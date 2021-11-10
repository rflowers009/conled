@extends('layouts.app')




@section('content')
    <div class="row">   
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Posts</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/posts/create" title="Create a post"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif
 
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Title</th>

            <th>&nbsp;</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post['title'] }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <form action="/posts/{{$post['id']}}" method="POST">

                        <a href="/posts/{{ $post['id'] }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="/posts/{{ $post['id'] }}/edit">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
 
    {!! $posts->links() !!}
@endsection