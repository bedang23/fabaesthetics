@extends('admin.template')

@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"><h1>Edit Blog</h1></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('admin/blog/list')}}">Blogs</a></li>
            <li class="breadcrumb-item active">Edit Blog</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  @if($errors->any())
    <div class="alert alert-danger m-3"><ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
  @endif

  <section class="content">
    <div class="container-fluid">
      @if ( !empty($edit_blog_details) )
      <form method="post" action="{{url('/admin/blog/update')}}/{{$edit_blog_details->id}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$edit_blog_details->id}}">
        <div class="row">
          <div class="col-lg-8">
            <div class="card card-primary">
              <div class="card-header"><h3 class="card-title mb-0">Blog Content</h3></div>
              <div class="card-body">
                <div class="form-group">
                  <label>Title <span class="required-star">*</span></label>
                  <input type="text" name="title" id="title" value="{{$edit_blog_details->title}}" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>URL / Slug <span class="required-star">*</span></label>
                  <input type="text" name="slug" id="slug" value="{{$edit_blog_details->slug}}" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>Content <span class="required-star">*</span></label>
                  <textarea class="ckeditor form-control" name="content" id="content">{{$edit_blog_details->content}}</textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-header"><h3 class="card-title mb-0">Meta</h3></div>
              <div class="card-body">
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="category" id="category">
                    @foreach(['skin-treatment'=>'Skin Treatment','cosmetic-treatment'=>'Cosmetic Treatment','hair-treatment'=>'Hair Treatment','laser-treatment'=>'Laser Treatment','skin-rejuvenation-treatment'=>'Skin Rejuvenation Treatment','make-over'=>'Make Over'] as $val=>$label)
                      <option value="{{$val}}" {{ $edit_blog_details->category == $val ? 'selected' : '' }}>{{$label}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Featured Image</label>
                  @if ($edit_blog_details->featured_image)
                    <div class="mb-2"><img src="{{ asset($edit_blog_details->featured_image) }}" alt="Featured" class="img-fluid rounded" style="max-height:160px;"></div>
                  @endif
                  <input type="file" name="featured_image" id="featured_image" class="form-control-file" accept="image/*">
                  <small class="form-text-help">Leave empty to keep the current image.</small>
                  <img id="imgPreview" src="#" alt="" class="img-fluid rounded mt-2" style="display:none;max-height:160px;">
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header"><h3 class="card-title mb-0">SEO</h3></div>
              <div class="card-body">
                <div class="form-group">
                  <label>SEO Title</label>
                  <input type="text" name="seo_title" id="seo_title" value="{{$edit_blog_details->seo_title}}" class="form-control">
                </div>
                <div class="form-group">
                  <label>SEO Description</label>
                  <textarea class="form-control" name="seo_description" id="seo_description" rows="3">{{$edit_blog_details->seo_description}}</textarea>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Blog</button>
            <a href="{{url('/admin/blog/list')}}" class="btn btn-secondary">Back</a>
          </div>
        </div>
      </form>
      @endif
    </div>
  </section>
</div>

<script type="text/javascript">
  (function(){
    var f=document.getElementById('featured_image'), p=document.getElementById('imgPreview');
    if(f){ f.addEventListener('change', function(){ if(f.files && f.files[0]){ p.src=URL.createObjectURL(f.files[0]); p.style.display='block'; } }); }
  })();
</script>
@endsection
