@extends('layouts.app')




@section('content')
    <div class="row">   
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Contacts</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/contacts/create" title="Create a contact"> <i class="fas fa-plus-circle"></i>
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
            <th>Name</th>
            <th>Type</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
            <th>State</th>
            <th>&nbsp;</th>
        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact['first_name'] }} {{$contact['last_name']}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <form action="/contacts/{{$contact['id']}}" method="POST">

                        <a href="/contacts/{{ $contact['id'] }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="/contacts/{{ $contact['id'] }}/edit">
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
 
    {!! $contacts->links() !!}
@endsection