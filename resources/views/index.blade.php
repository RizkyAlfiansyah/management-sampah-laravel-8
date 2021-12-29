<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src=""></script>

    <title>WEB MANAGEMENT SAMPAH</title>
  </head>
  <body>
      <div class="container mt-2" style="background-color: #E5E5E5;">
          <div class="row">
              <div class="col">
                <h1 class="text-center my-5 font-monospace fw-bold" style="color: #1C85A2;">WEB MANAGEMENT SAMPAH</h1>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <div class="row" style="color: aliceblue; background-color: #0C325F;">
                            <div class="col">
                                <h3 class="text-center py-3 col-12 fw-light fs-5" >Data Sampah</h3>
                            </div>
                        </div>
                        <div class="row justify-content-center bg-light mb-3">
                            <div id="fetch-data">
                                
                            </div>
                            <div class="col-12">                                
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-info p-3 shadow rounded-3 col-12 my-3 " style="color:aliceblue; background-color: #30AEE4;" onClick="create()" >Tambah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
      </div>

      <!-- Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Input Sampah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <div id="input"></div>
                </div>
            </div>
            </div>
        </div> 

    <script>
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
        </script>

  </body>
</html>
