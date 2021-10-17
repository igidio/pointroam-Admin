<div class="contenedorimg">
    <div class="user-avatar text-center d-block" style="width: 200px; margin-left: auto; margin-right: auto; height: 200px; overflow: hidden; border-radius: 50%;">
        @if(Auth::user()->imagen)
            <img src="{{ url('/avatar/'.Auth::user()->imagen)}}" alt="" style="width: 100%; height: auto;">
        @else
            <img class="user-avatar rounded-circle" src="{{asset('images/default_user.png')}}" alt="User Avatar" style="width: 100%; height: auto;">
        @endif
        <div class="overlay" data-toggle="modal" data-target="#actualizarimagen" style="cursor: pointer;">
            <a class="icon" title="Actualizar foto" style="color: white;">
            <i class="fas fa-file-upload"></i>
            </a>
        </div>
    </div>
</div>



<style>
  .contenedorimg {
  position: relative;
  width: 100%;
  max-width: 400px;
  }
  .overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  width: 200px; margin-left: auto; margin-right: auto; height: 200px; overflow: hidden; border-radius: 50%;
  transition: .3s ease;
  background-color: black;
  }
  .contenedorimg:hover .overlay {
  opacity: 1;
  }
  .icon {
  font-size: 100px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  }
</style>
