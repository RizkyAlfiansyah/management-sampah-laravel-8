require('./bootstrap');
$(document).ready(function() {
    read();
});

//Read Data
function read() {
    $.get("{{url('read')}}", {}, function(data, status){
        $("#fetch-data").html(data);
    });
}

// Create Modal
function create() {
    $.get("{{url('create')}}", {}, function(data, status){
        $("#exampleModalLabel").html('Input Data');
        $("#input").html(data);
        $("#addModal").modal('show');
    });
}

//Create Data
function store() {
    var name = $("#name").val();
    var type = $("#type").val();
    $.ajax({
        type: "GET",
        url: "{{ url('store') }}",
        data: "name=" + name + "&type=" + type,
        success:function(data){
            $(".btn-close").click();
            read();
            alert("Data Berhasil Di Input !");
        }
    });
}

// edit data Modal
function show(id) {
    $.get("{{ url('show') }}/" +id, {}, function(data, status){
        $("#exampleModalLabel").html('Edit Data');
        $("#input").html(data);
        $("#addModal").modal('show');
    });
}

//Update Data
function update(id) {
    var name = $("#name").val();
    var type = $("#type").val();
    $.ajax({
        type: "GET",
        url: "{{ url('update') }}/" +id,
        data: "name=" + name + "&type=" + type,
        success:function(data){
            $(".btn-close").click();
            read();
            alert("Data Berhasil Diperbarui !");
        }
    });
}

//Delete Data
function destroy(id) {
    confirm("Apakah Anda Yakin Ingin Menghapus Data Ini ?");
    var name = $("#name").val();
    var type = $("#type").val();
    $.ajax({
        type: "GET",
        url: "{{ url('destroy') }}/" +id,
        data: "name=" + name + "&type=" + type,
        success:function(data){
            $(".btn-close").click();
            read();
            alert("Data Berhasil Dihapus !");
        }
    });
}