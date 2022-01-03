$(document).ready(function() {
    read();
});

//Read Data
function read() {

    $.get( "/read", {}, function(data, status){
        $("#fetch-data").html(data);
    });
}

// Create Modal
function create() {
    $.get("/create", {}, function(data, status){
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
        url: "/store",
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
    $.get("/show/" +id, {}, function(data, status){
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
        url: "/update/" +id,
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

    var answer = window.confirm("Apakah Anda Yakin Ingin Menghapus Data Ini ?");

    if (answer){
        var name = $("#name").val();
        var type = $("#type").val();
        $.ajax({
            type: "GET",
            url: "/destroy/" +id,
            data: "name=" + name + "&type=" + type,
            success:function(data){
                $(".btn-close").click();
                read();
                alert("Data Berhasil Dihapus !");
            }
        });
    } else{
        alert("Data Gagal Dihapus !");
        $(".btn-close").click();
        read();
    }
}
