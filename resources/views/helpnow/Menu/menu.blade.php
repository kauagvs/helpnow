    @if (\Request::is('/'))       
     
    @else   
      <nav class="side-navbar">        
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h4">Kauã Semenov</h1>
            
          </div>
        </div>
        
        <ul class="list-unstyled">
          <li class="active"><a href="{{ url('dash') }}"> <i class="icon-home"></i>Home </a></li>
          <li><a href="{{ url('listar_helps') }}"> <i class="icon-padnote"></i>Helps </a></li>
          <li><a href="{{ url('dash') }}"> <i class="icon-interface-windows"></i>Configurações</a></li>
        </ul>

      </nav>   
    @endif