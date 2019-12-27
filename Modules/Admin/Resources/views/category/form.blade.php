<form class="user" action="" method="post">
        @csrf
        <div class="form-group">
        <input type="text" class="form-control form-control-user" name="name" value="{{ old('name',isset($category->c_name) ? $category->c_name : '')}}" placeholder="Tên danh mục sản phẩm">
            @if($errors->has('name'))
                <div class="error-text" style="color:red">
                    {{$errors->first('name')}}
                </div>
            @endif
        </div>
        <div class="form-group">
        <input type="text" class="form-control form-control-user" value="{{ old('icon',isset($category->c_icon) ? $category->c_icon : '')}}" name="icon" placeholder="icon">
            @if($errors->has('icon'))
                <div class="error-text" style="color:red">
                    {{$errors->first('icon')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" name="c_title_seo" value="{{ old('c_title_seo',isset($category->c_title_seo) ? $category->c_title_seo : '')}}" placeholder="Meta title">

        </div>
        <div class="form-group">
            <textarea type="text" class="form-control form-control-user" name="c_description_seo" value="" placeholder="Meta description">{{ old('c_description_seo',isset($category->c_description_seo) ? $category->c_description_seo :'')}}</textarea>

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
