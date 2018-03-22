@extends('layouts.app')

@section('conteudo')

    <div class="page">
      

      <div class="page-content d-flex align-items-stretch"> 
        
        @include('helpnow.Menu.menu')

        <div class="content-inner">
          
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Helps</h2>
            </div>
          </header>
          <!-- Caminho-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Lista de Helps</li>
            </ul>
          </div>
          <section>
            <div class="container-fluid">
              <div class="card">
                
                <div class="card-header">
                  <h4>Lista de Helps</h4>
                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <a href="{{ url('listar_helps/create') }}">
                        <button type="button" class="btn btn-primary">
                          Adicionar Help
                        </button>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

              <div class="container-fluid">
                <div class="card">
                  <div class="table-responsive">
                    <table id="datatable1" style="width: 100%;" class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Problema</th>
                          <th>Descrição</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="javascript:void(0)" class="text-muted">1</a></td>
                          <td>Notebook não liga</td>
                          <td>Toda vez que inicio o notebook ele faz um som estranho e não liga</td>
                          <td>Aberto</td>
                        </tr>                
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> 
          </section>
          <!-- Rodape-->
          @include('helpnow.Rodape.rodape')
        </div>
      </div>
    </div>
@endsection

    
