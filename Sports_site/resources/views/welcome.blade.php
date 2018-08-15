
  @extends('layouts.app')

  
 @section('content')
  

   <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <a href="{{ url('/teams') }}">
              <img class="img-fluid rounded-circle" src="../team.jpg" alt="test">
              </a>              
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
            <a href="{{ url('/teams') }}">
              <h2 class="display-4">Teams</h2>
            </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
            <a href="{{ url('/players') }}">
              <img href=""class="img-fluid rounded-circle" src="../player.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
            <a href="{{ url('/players') }}">
              <h2 class="display-4">Players</h2>
            </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
            <a href="{{ url('/games') }}">
              <img class="img-fluid rounded-circle" src="../nba_court.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
            <a href="{{ url('/games') }}">
              <h2 class="display-4">Games</h2>
              </a> 
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Les Fast Pass 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../public/vendor/jquery/jquery.min.js"></script>
    <script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    @endsection
  </body>

</html>
