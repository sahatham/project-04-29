@extends('layouts.master_backend')
@section('content')
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h3  class="card-header"><span style="color: black;">Product</span></h3><br>
                            <div class="table-responsive text-nowrap">
                                <a href="{{ route('p.create')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> Add</a>
                              <table class="table mt-4">
                                <thead class="table-dark"> </thead>

                                  <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Quantity</th>

                                    <th>images</th>
                                    <th>Price</th>
                                    <th>Type</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th></th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @foreach($product as $pro)
                                    <tr>
                                        <td>{{$product->firstItem()+ $loop->index}}</td>
                                        <td>{{$pro->name}}</td>
                                        <td>{{$pro->type}}</td>


                                        <td>
                                            <img src ="{{asset('backend/product/resize/'.$pro->images)}}" alt="">
                                        </td>

                                        <td>{{$pro->pirce}}</td>
                                        <td>{{$pro->description}}</td>
                                        <td>{{$pro->created_at}}</td>
                                        <td>{{$pro->updated_at}}</td>

                                        <td>
                                          <a href="{{route('p.edit',$pro->product_id)}}"><i class='bx bxs-edit'></i></a>
                                          <a href="{{url('admin/product/delete'.$pro->product_id)}}"><i class='bx bx-trash'></i></a>
                                          <td>
                                            <a  href="{{ url('admin/product/edit/'.$pro->product_id) }}" class="btn btn-warning">Edit</a>
                                            <a href="{{ url('admin/product/delete/'.$pro->product_id) }}"class="btn btn-danger">Delete</a>

                                          </td>
                                        </td>


                                        </tr>

                                        @endforeach

                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>

                    </div>
@endsection
