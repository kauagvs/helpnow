@extends('layouts.app')

@section('conteudo')

    <div class="page">
      
      <header class="header">

      </header>
      <div class="page-content d-flex align-items-stretch"> 
        
        @include('helpnow.Menu.menu')

        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Forms</h2>
            </div>
          </header>
          <!-- Caminho-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Forms            </li>
            </ul>
          </div>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">

                <!-- Formulario de cadastro de Problemas -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Cadastrar Helps</h3>
                    </div>

                    <div class="card-body">
                      <form class="form-horizontal">

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Problema</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Descrição</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Inline checkboxes</label>
                          <div class="col-sm-9">
                            <label class="checkbox-inline">
                              <input id="inlineCheckbox1" type="checkbox" value="option1"> a
                            </label>
                            <label class="checkbox-inline">
                              <input id="inlineCheckbox2" type="checkbox" value="option2"> b
                            </label>
                            <label class="checkbox-inline">
                              <input id="inlineCheckbox3" type="checkbox" value="option3"> c
                            </label>
                          </div>
                        </div>


                        <div class="line"></div>
                        <div class="form-group row">
                          <label for="fileInput" class="col-sm-3 form-control-label">Anexar Arquivos</label>
                          <div class="col-sm-9">
                            <input id="fileInput" type="file" class="form-control-file">
                          </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-secondary">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Cadastrar Problema</button>
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
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