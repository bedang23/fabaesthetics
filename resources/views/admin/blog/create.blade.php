@extends('admin.template')

@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6"><h1>New Blog</h1></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('admin/blog/list')}}">Blogs</a></li>
            <li class="breadcrumb-item active">New Blog</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  @if(session()->has('mesg'))
    <div class="alert alert-danger m-3">{{ session()->get('mesg') }}</div>
  @endif
  @if($errors->any())
    <div class="alert alert-danger m-3"><ul class="mb-0">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
  @endif

  <section class="content">
    <div class="container-fluid">
      <form name="createlist" id="createlist" method="post" action="{{url('admin/blog/create')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-lg-8">
            <div class="card card-primary">
              <div class="card-header"><h3 class="card-title mb-0">Blog Content</h3></div>
              <div class="card-body">
                <div class="form-group">
                  <label>Title <span class="required-star">*</span></label>
                  <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>URL / Slug <span class="required-star">*</span></label>
                  <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="form-control" required>
                  <small class="form-text-help">Lowercase words separated by hyphens, e.g. <em>best-skincare-tips</em>.</small>
                </div>
                <div class="form-group">
                  <label>Content <span class="required-star">*</span></label>
                  <textarea class="ckeditor form-control" name="content" id="ck_editor_txt">{{ old('content') }}</textarea>
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
                    <option value="skin-treatment">Skin Treatment</option>
                    <option value="cosmetic-treatment">Cosmetic Treatment</option>
                    <option value="hair-treatment">Hair Treatment</option>
                    <option value="laser-treatment">Laser Treatment</option>
                    <option value="skin-rejuvenation-treatment">Skin Rejuvenation Treatment</option>
                    <option value="make-over">Make Over</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Featured Image <span class="required-star">*</span></label>
                  <input type="file" name="featured_image" id="featured_image" class="form-control-file" accept="image/*" required>
                  <img id="imgPreview" src="#" alt="" class="img-fluid rounded mt-2" style="display:none;max-height:160px;">
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header"><h3 class="card-title mb-0">SEO</h3></div>
              <div class="card-body">
                <div class="form-group">
                  <label>SEO Title</label>
                  <input type="text" name="seo_title" id="seo_title" value="{{ old('seo_title') }}" class="form-control">
                </div>
                <div class="form-group">
                  <label>SEO Description</label>
                  <textarea class="form-control" name="seo_description" id="seo_description" rows="3">{{ old('seo_description') }}</textarea>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-footer">
            <button name="submit" type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Blog</button>
            <a href="{{url('/admin/blog/list')}}" class="btn btn-secondary">Back</a>
          </div>
        </div>
      </form>
    </div>
  </section>
</div>

<script type="text/javascript">
  // auto-suggest slug from title (only until user edits slug manually)
  (function(){
    var t=document.getElementById('title'), s=document.getElementById('slug'), edited=false;
    s.addEventListener('input', function(){ edited=true; });
    t.addEventListener('input', function(){
      if(edited) return;
      s.value=t.value.toLowerCase().trim().replace(/[^a-z0-9\s-]/g,'').replace(/\s+/g,'-').replace(/-+/g,'-');
    });
    var f=document.getElementById('featured_image'), p=document.getElementById('imgPreview');
    f.addEventListener('change', function(){
      if(f.files && f.files[0]){ p.src=URL.createObjectURL(f.files[0]); p.style.display='block'; }
    });
  })();
</script>
@endsection
