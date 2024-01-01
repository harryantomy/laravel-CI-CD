@extends('template')
@section('content')
    <div>
        <div class="container" id="detail-event">
            {{-- <form> --}}
            <div class="mt-5">
                <h1>Nama Event</h1>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="https://via.placeholder.com/400" alt="imagePreview" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <h4>Detail Event</h4>
                    <div class="d-flex">
                        <div class="col-md-4">
                            <p>Tanggal Mulai</p>
                            <p>Tanggal Berakhir</p>
                            <p>Deskripsi</p>
                        </div>
                        <div class="col-md-6">
                            <p>: 12-12-2021</p>
                            <p>: 12-12-2021</p>
                            <p>: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo labore, harum in,
                                inventore, eveniet provident culpa optio nemo libero repellendus error eaque quia qui et
                                praesentium repudiandae fugiat cum tempora?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary mx-2" id="edit-button" type="button">Edit</button>
                <button class="btn btn-danger">Delete</button>
            </div>
            {{-- </form> --}}
        </div>


        <div class="container mt-5" id="update-detail">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" placeholder="">
                        <label for="name">Nama Event</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center">
                            <img id="imagePreview" src="https://via.placeholder.com/400" class="img-fluid"
                                alt="dummy-image">
                        </div>
                        <div class="form-grup mt-2">
                            <label for="imageInput">Pilih Gambar</label>
                            <input type="file" class="form-control-file" id="imageInput" name="imagePreview">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="start" placeholder="">
                            <label for="start">Tanggal Mulai</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="end" placeholder="">
                            <label for="end">Tanggal Berakhir</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea type="text" class="form-control" id="description" style="height:15rem" placeholder=""></textarea>
                            <label for="description">Deskripsi</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-success mx-2" type="submit">Update</button>
                        <button class="btn btn-secondary" type="button" id="cancel-button">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        const detailEvent = document.getElementById('detail-event');
        const updateDetail = document.getElementById('update-detail');
        const editButton = document.getElementById('edit-button');
        const canceButton = document.getElementById('cancel-button');

        updateDetail.style.display = 'none';
        editButton.addEventListener('click', function(e) {
            e.preventDefault();
            detailEvent.style.display = 'none';
            updateDetail.style.display = 'block';
        });

        canceButton.addEventListener('click', function(e) {
            e.preventDefault();
            detailEvent.style.display = 'block';
            updateDetail.style.display = 'none';
        });
    </script>
@endsection
