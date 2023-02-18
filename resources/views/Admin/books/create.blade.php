@extends('Admin.master')
@section('content')


    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Kitob qo`shish </h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Xatolik..!</strong> Kirish bilan bog'liq muammolar bor?<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.books.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for=""> Maqola nomi</label>
                            <input type="text" name="title" value="{{old('title')}}" class="form-control">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="author">Muallif nomi</label>
                            <input type="text" id="author" class="form-control" name="author">
                            @error('author')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for=""> Kategoriyasi </label>
                            <select name="category_id" id="like_to" class="form-control">
                                @foreach($categories as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                         <div class="form-group mb-3">
                            <label for=""> Sirti </label>
                            <select name="cover_id" id="like_to" class="form-control">
                                @foreach($cover as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                            @error('cover_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="file"> Rasm yuklang</label>
                            <input type="file" id="image" class="form-control" name="image">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <label for="author">Narxi</label>
                            <input type="number" id="author" class="form-control" name="price">
                            @error('price')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="author">Kunlik narxi</label>
                            <input type="number" id="author" class="form-control" name="price_daily">
                            @error('price_daily')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="author">Sahifasi</label>
                            <input type="number" id="author" class="form-control" name="page">
                            @error('page')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="author">Soni</label>
                            <input type="number" id="author" class="form-control" name="count">
                            @error('count')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                        <button type="submit" id="alert" class="btn btn-primary " onclick="end()">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">


                    </form>


                </div>
            </div>
        </div>
    </div>


@endsection


