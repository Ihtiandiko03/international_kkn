@extends('dashboard.layout.main')
@section('container')
      <div class="content">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h5 class="title text-center">Create Announcement</h5>
              </div>
              <div class="card-body">
                <form action="{{ route('pengumuman.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col pr-1">
                            <div class="form-group">
                                <h6>Title</h6>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                        </div>
                    </div>
                    

                    <div class="body-isi">
                        <h6>Announcement</h6>
                        <div class="form-group">
                            <textarea name="isipengumuman" id="isipengumuman" class="form-control" cols="30" rows="10" placeholder="Announcement"></textarea>
                        </div>
                    </div>

                    {{-- <div class="col pr-1">
                        <div class="form-group">
                            <h6>Image (Optional)</h6>
                            <input type="file" class="form-control" name="image" id="image" onchange="previewImage(event)">
                        </div>
                    </div>
                    <div class="col float-left">
                        <label for="">Preview Image</label><br>
                        <img id="image-preview" src="#" alt="Image Preview" style="display: none; margin-top: 10px; max-width: 20%; height: auto;">
                    </div> --}}
                    <br>
                    <br><br>

                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Submit Announcement</button>
                        </div>
                    </div>


                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('scripts')
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('image-preview');
            output.src = reader.result;
            output.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection