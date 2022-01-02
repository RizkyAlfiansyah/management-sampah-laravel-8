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

    <title>@yield('title') | Web Management Sampah</title>
  </head>
  <body>
      <div class="container mt-2" style="background-color: #E5E5E5;">
          <div class="row">
              <div class="col">
                <h1 class="text-center my-5 font-monospace fw-bold" style="color: #1C85A2;">WEB MANAGEMENT SAMPAH</h1>
                @yield('content')
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

        @stack('script')

  </body>
</html>
