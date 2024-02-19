@extends('layouts.master_backend')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h3  class="card-header"><span style="color: black;">Product</span></h3><br>
                                <div class="card-body">
                                  <form action="{{url('admin/product/insert')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
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

                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Quantity</label>
                                    <input
                                      type="text"
                                      name="type"
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
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกรายละเอียดสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="exampleFormControlSelect1" class="form-label">Category</label>
                                    <select name="category_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                      <option selected>กรุณาเลือกประเภทสินค้า</option>
                                      @foreach ($category as $cat)
                                      <option value="{{ $cat->category_id}}">{{ $cat->name }}</option>
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
                                      <input type="submit" value="Save" class="btn btn-primary mt-3">
                                    <a href="{{ route('p.index')}}" class="btn btn-danger mt-3 mx-2">Back</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
@endsection
