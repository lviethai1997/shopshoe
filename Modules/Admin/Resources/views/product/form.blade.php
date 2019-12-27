<form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="pro_name">Tên sản phẩm</label>
        <input type="text" class="form-control" id="pro_name" name="pro_name" value="{{ old('pro_name',isset($product->pro_name) ? $product->pro_name : '')}}" placeholder="Tên sản phẩm">
            @if($errors->has('pro_name'))
                <div class="error-text" style="color:red">
                    {{$errors->first('pro_name')}}
                </div>
            @endif
        </div>
        <div class="form-group">
                <label for="pro_name">Mô tả ngắn sản phẩm</label>
            <textarea class="form-control" name="pro_description" id="" cols="30" rows="5" placeholder="Mô tả ngắn">{{ old('pro_name',isset($product->pro_description) ? $product->pro_description : '')}}</textarea>
            @if($errors->has('pro_description'))
            <div class="error-text" style="color:red">
                {{$errors->first('pro_description')}}
            </div>
        @endif
        </div>
        <div class="form-group">
                <label for="pro_name">Nội dung sản phẩm</label>
            <textarea class="form-control" name="pro_content" id="" cols="30" rows="10" placeholder="Nội dung sản phẩm">{{ old('pro_name',isset($product->pro_content) ? $product->pro_content : '')}}</textarea>
            @if($errors->has('pro_content'))
            <div class="error-text" style="color:red">
                {{$errors->first('pro_content')}}
            </div>
        @endif
        </div>
        <div class="form-group">
            <label for="pro_name">Meta Description</label>
            <textarea class="form-control" name="pro_description_seo" id="" cols="30" rows="10" value="{{ old('pro_name',isset($product->pro_description_seo) ? $product->pro_description_seo : '')}}" placeholder="meta desc"></textarea>
        </div>
        <div class="form-group">
                <label for="pro_name">Meta Title</label>
                <textarea class="form-control" name="pro_title_seo" id="" cols="30" rows="10" value="{{ old('pro_name',isset($product->pro_title_seo) ? $product->pro_title_seo : '')}}" placeholder="meta title"></textarea>
            </div>
        <div class="form-group">
                <label for="pro_name">Chọn loại sản phẩm</label>
            <select name="pro_category_id" class="form-control">
                <option value="{{ old('pro_name',isset($product->pro_category_id) ? $product->pro_category_id : '')}}">--Chọn loại sản phẩm--</option>
                @if(isset($categories))
                    @foreach ($categories as $category)
                        <option value="{{ $category->id}}">{{ $category->c_name}}</option>
                    @endforeach
                @endif
            </select>
            @if($errors->has('pro_category_id'))
            <div class="error-text" style="color:red">
                {{$errors->first('pro_category_id')}}
            </div>
        @endif
        </div>
        <div class="form-group">
                <label for="avatar">Hình ảnh đại diện</label>
            <input type="file" id="input_img" name="avatar" class="form-control">
        </div>
        <div class="form-group">
           <img src="" id="out_img" alt="">
    </div>
        <div class="form-group">
                <label for="pro_name">Giá sản phẩm</label>
            <input type="number" name="pro_price" class="form-control" value="{{ old('pro_price',isset($product->pro_price) ? $product->pro_price : '0')}}" placeholder="Giá sản phẩm">
            @if($errors->has('pro_price'))
            <div class="error-text" style="color:red">
                {{$errors->first('pro_price')}}
            </div>
        @endif
        </div>
        <div class="form-group">
                <label for="pro_name">Số lượng sản phẩm</label>
            <input type="number" name="pro_number" class="form-control" value="{{ old('pro_number',isset($product->pro_number) ? $product->pro_number : '0')}}" placeholder="Số lượng sản phẩm">
            @if($errors->has('pro_number'))
            <div class="error-text" style="color:red">
                {{$errors->first('pro_number')}}
            </div>
        @endif
        </div>
        <div class="form-group">
                <label for="pro_name">Giảm giá</label>
            <input type="number" name="pro_sale" class="form-control" value="{{ old('pro_name',isset($product->pro_sale) ? $product->pro_sale : '0')}}" placeholder="Giảm giá" >
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" class="custom-control-input" name="hot" >
                <label class="custom-control-label" for="customCheck">Nổi bật</label>
            </div>
        </div>
        <!-- <div class="form-group">
            <input type="email" class="form-control form-control-user" placeholder="Email Address">
        </div> -->

        <input type="submit" name="submit" class="btn btn-primary btn-user btn-block" value="Xác nhận">


     </form>
     @section('script')
    <script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('pro_content');
        CKEDITOR.config.autoParagraph = false;
    </script>
     @stop
