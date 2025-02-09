@extends('dashboard.layout.main')
@section('container')
      <div class="content">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h5 class="title text-center">Edit Sponsor</h5>
              </div>
              <div class="card-body">
                <form action="{{ route('sponsor.update', $sponsor->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col pr-1">
                            <div class="form-group">
                                <h6>Name of Sponsor</h6>
                                <input type="text" class="form-control" name="nama_sponsor" id="nama_sponsor" value="{{ $sponsor->nama_sponsor }}">
                            </div>
                        </div>
                        <div class="col pr-1">
                            <div class="form-group">
                                <h6>Website</h6>
                                <input type="text" class="form-control" name="link_website" id="link_website" value="{{ $sponsor->link_website }}">
                            </div>
                        </div>
                    </div>
                    
                    

                    <div class="col pr-1">
                        <div class="form-group">
                            <h6>Logo Sponsor</h6>
                            <input type="file" class="form-control" name="image" id="image" onchange="previewImage(event)">
                        </div>
                    </div>
                    <div class="col float-left">
                        <label for="">Preview Image</label><br>
                        <img id="image-preview" src="{{ $sponsor->image ? asset('storage/' . $sponsor->image) : '#' }}" alt="Image Preview" style="display: {{ $sponsor->image ? 'block' : 'none' }}; margin-top: 10px; max-width: 20%; height: auto;">
                    </div>
                    <br>
                    <br><br>

                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Update Sponsor</button>
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