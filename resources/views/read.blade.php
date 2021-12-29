@foreach ($data as $item)            
<div class="row justify-content-center my-2">
    <div class="col-11 p-2 my-2 bg-light shadow rounded-3">
        <p class="text-start mx-2 fs-5">{{ $item->name }}</p>
        <div class="row">
            <div class="col-6">
                <p class="text-start text-muted mx-2 fs-6">{{ $item->type }}</p>
            </div>
            <div class="col-6 justify-content-center">
                <p class="text-end">
                    <button type="button" name="delete" class="btn btn-warning btn-xs delete" onClick="show({{ $item->id }})">Edit</button>
                    <button type="button" name="delete" class="btn btn-danger btn-xs delete" onClick="destroy({{ $item->id }})">Hapus</button>
                </p>
            </div>
        </div>
    </div>
</div>
@endforeach