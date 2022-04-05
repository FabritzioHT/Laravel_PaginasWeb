@extends('plantilla')
@section('content')

<Main>
<section>
       <img width="100%" src="./img/nintendo_1.avif" >
     </section>
     <section>
      <h3>Aun no tienes la tuya?</h3>
     </section>

    
     <section class="center-align">
      
      <div class="row">
          <div class="col l4 m6 s12">
            <div class="card">
              <div class="card-image">
                <img height="306px" src="./img/nintendo_2.jpeg">
                <a href="{{route('x')}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">chevron_right</i></a>
              </div>
              <div class="card-content">
                <p> Prueba los origines de nuestro legado<br><br></p>
              </div>
            </div>
          </div>


              <div class="col l4 m6 s12">
                <div class="card">
                  <div class="card-image">
                    <img height="306px" src="./img/nintendo_3.webp">
                    <a  href="{{route('z')}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">chevron_right</i></a>
                  </div>
                  <div class="card-content">
                    <p>Diseñado para personas con poco espacio y tiempo <br><br></p>
                  </div>
                </div>
              </div>

                  <div class="col l4 m6 s12">
                    <div class="card">
                      <div class="card-image">
                        <img height="306px" src="./img/nintendo_4.avif">
                        <a href="{{route('y')}}"  class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">chevron_right</i></a>
                      </div>
                      <div class="card-content">
                        <p> Calidad y comodidad todo en uno <br><br>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
            
        </div>
  </section>


</Main>

@endsection