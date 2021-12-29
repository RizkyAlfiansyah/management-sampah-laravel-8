<div class="row justify-content-center">
    <div class="col-10">
        <div class="row" style="color: aliceblue; background-color: #0C325F;">
            <div class="col">
                <h3 class="text-center py-3 col-12 fw-light fs-5" >Input Sampah</h3>
            </div>
        </div>
        <div class="row justify-content-center bg-light mb-3">
            <div class="col-12">                       
                <div class="form-group">
                    <label for="category" class="form-label">Kategori Sampah</label>
                    <select class="form-select" id="type" name="type" aria-label="Default select example" placeholder="Kategori">
                        <option selected value="{{ $data->type }}">{{ $data->type }}</option>
                        <option value="Plastik">Plastik</option>
                        <option value="Logam">Logam</option>
                        <option value="Residu">Residu</option>
                        <option value="UBC">UBC</option>
                    </select>
                    <label for="name" class="form-label">Nama Sampah</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="categoryHelp" placeholder="Nama Sampah" value="{{ $data->name }}">
                    <button class="btn btn-warning my-3 p-3 col-12 rounded-3" onClick="update({{ $data->id }})">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>