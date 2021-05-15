@extends('app')

@section('content')
    
        <!-- Main -->
        <main id="main">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/img1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/img2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/img3.jpg" class="d-block w-100" alt="...">
                  </div>
    
                  <div class="overlay">
                      <div class="container">
                          <div class="row align-items-center">
                              <div class="col-md-6 offset-md-6 text-md-center text-center">
                                  <h1>TecnoEduca</h1>
                                  <p class="d-none d-md-block">Por fin disponible en linea, un evento que vale la pena compartir, 
                                      la primera experiencia online con profesionales que llevan el aprendizaje a otro nivel.
                                  </p>
                                  <a href="{{route('Registro')}}" class="btn btn-outline-light">Quiero ser alumno</a>
                                  <button class="btn btn-light">Mas información</button>
                              </div>
                          </div>
                      </div>
                  </div>
    
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </main>
        <!-- Fin del Main -->
    
        <!-- Cursos -->
            <section id="cursos" class="mt-4">
                <div class="container">
                    <div class="row">
                        <div class="col text-center text-uppercase">
                            <small>conoce nuestros</small>  <h2>Cursos</h2>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-4 mb-4">
                            <div class="card" >
                              
    
                                 <img src="images/html.jpg" class="card-img-top" alt="...">  
                                <div class="card-body">
                                  <h5 class="card-title">HTML </h5>
                                  <p class="card-text">HTML es un lenguaje de marcado que se utiliza para el desarrllo de paginas web</p>
                                  <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#htmlModal">Ver curso</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="card" >
                                <img src="images/css.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">CSS </h5>
                                  <p class="card-text">Hojas de estilo en cascada, es el lenguaje de estilos utilizados para describir la presentacion de documentos en el </p>
                                  <a href="#" class="btn btn-primary">Ver curso</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="card" >
                                <img src="./images/javascript.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">JAVASCRIPT </h5>
                                  <p class="card-text">Es un lenguaje de programacion  ligero interpretado, o compilado con funciones de primera clase</p>
                                  <a href="#" class="btn btn-tecnoeducan">Ver curso</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Fin de cursos -->
        
        <!-- Clase online -->
            <section id="clase-online">
              <div class="container-fluid">
                <div class="row">
                  <div class="col col-lg-6 col-12 pl-0 pr-0">
                     <img src="./images/joven.jpg" alt=""> 
                    
                  </div>
                  <div class="col-lg-6 col-12 pt-4 pb-4"> 
                    <h2>Clase de prueba online Agosto 2021</h2>
                    <p>
                      Registrate a la clase de prueba online, rellena el formulario de contacot para que podamos tener mas información sobre tus necesidades especificas y puedas concretar una clase de gratuita de 30 minutos con el profesor que mejor se adapten a tus necesidades academicas
                    </p>
                    <a href="#" class="btn btn-outline-light" >Registrarme</a>
                  </div>
                </div>
              </div>
            </section>
        <!-- Fin clase Online -->
    
        <!-- Se Maestro -->
            <section id="seMaestro"class="pt-4 pb-4">
              <div class="container" >
                <div class="row">
                  <div class="col text-center">
                    <small class="text-uppercase">Conviertete en un</small>
                    <h2>Maestro</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-center">
                    
                    Participa en el proceso de selección y forma parte del equipo <abbr data-toggle="tooltip" title="Es nombre de tu nueva familia">TecnoEduca,</abbr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8 offset-lg-2 col-md-10  offset-md-1 pt-2">
    
                    <form> 
                      <div class="row">
                        <div class="col-12 col-md-6 form-group">
                          <input type="text" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="col-12 col-md-6 form-group">
                          <input type="text" class="form-control" placeholder="Apellido">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col form-group">
                          <textarea name="descripcion" class="form-control"></textarea>
                          <small>Incluye un titulo en tu descripción  </small>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col form-group">
                          <button type="button" class="btn btn-tecnoeduca btn-block">Enviar</button>
                        </div>
                      </div>
                    </form>
    
                  </div>
                </div>
              </div>
            </section>
        <!-- Fin se maestro -->

@endsection

