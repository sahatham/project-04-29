@extends('layouts.master_backend')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h3  class="card-header"><span style="color: black;">Product</span></h3><br>
                                <div class="card-body">
                                  <form action="{{url('admin/product/update/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      value="{{$pro->description}}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                  <div class ="mt-3">
                                    @error('name')
                                  <div class="alert alert-danger">{{$message}}</div>
                                  @enderror
                                  </div>

                                  <label for="defaultFormControlInput" class="form-label">Quantity</label>
                                    <input
                                      type="text"
                                      name="type"
                                      value="{{$pro->type}}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกจํานวนสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                  <div class ="mt-3">
                                    @error('name')
                                  <div class="alert alert-danger">{{$message}}</div>
                                  @enderror
                                  </div>



                                    <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input
                                      type="text"
                                      name="price"
                                      value="{{$pro->pirce}}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกราคาสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                    <div class ="mt-3">
                                        @error('name')
                                      <div class="alert alert-danger">{{$message}}</div>
                                      @enderror
                                      </div>

                                    <label for="defaultFormControlInput" class="form-label">Type</label>
                                    <input
                                      type="text"
                                      name="descrtiption"
                                      value="{{$pro->description}}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกรายละเอียดสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="exampleFormControlSelect1" class="form-label">Category</label>
                                    <select name="category_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                        @foreach ($cat as $c)
                                        <option value="{{ $c->category_id }}"
                                    @if ($c->category_id == $pro->category_id)
                                    selected
                                    @endif>
                                    {{ $c->name }}
                                </option>
                                @endforeach
                                    </select>


                                    <label for="defaultFormControlInput" class="form-label">Images</label>
                                      <div class="input-group">
                                        <input type="file" name= "image" class="form-control"  />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                      </div>
                                      <div class ="mt-3">
                                        @error('image')
                                      <div class="alert alert-danger">{{$message}}</div>
                                      @enderror
                                      </div>

                                  <div class="mt-4">
                                    <img src ="{{asset('backend/product/resize/'.$pro->images)}}">
                                  </div>

                                      <input type="submit" value="อัพเดท" class="btn btn-primary mt-3">
                                    <a href="{{ route('p.index')}}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
@endsection
