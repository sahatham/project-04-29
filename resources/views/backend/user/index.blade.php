@extends('layouts.master_backend')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h3  class="card-header"><span style="color: black;">User</span></h3><br>
                            <div class="table-responsive text-nowrap">
                              <table class="table">
                                <thead class="table-dark">

                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                      </tr>
                                @foreach ($user as $u)
                                  <tr>
                                  <td>{{ $u->id }}</td>
                                  <td>{{ $u->name }}</td>
                                  <td>{{ $u->email }}</td>
                                  <td>{{ $u->phone }}</td>
                                  <td>{{ $u->created_at }}</td>
                                  <td>{{ $u->updated_at }}</td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

@endsection
