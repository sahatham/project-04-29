@extends('layouts.master_backend')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h3  class="card-header"><span style="color: black;">Category</span></h3><br>
                            <div class="table-responsive text-nowrap">
                                <a href="{{ route('c.create')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> Add</a>
                              <table class="table mt-4">

                                  <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @foreach ($category as $cat)

                                  <tr>

                                    <td>{{ $category->firstItem() + $loop->index }}</td>
                                    <td>{{ $cat->name }}</td>
                                    <td>{{ $cat->created_at }}</td>
                                    <td>{{ $cat->updated_at }}</td>

                                    <td>
                                      <a  href="{{ url('admin/category/edit/'.$cat->category_id) }}" class="btn btn-warning">Edit</a>
                                      <a href="{{ url('admin/category/delete/'.$cat->category_id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                            <div class="mt-3 container">
                              {{ $category->links('pagination::bootstrap-5' )}}
                              </div>
                          </div>
                        </div>
                        @endsection
