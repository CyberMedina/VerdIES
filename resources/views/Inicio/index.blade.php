@extends('Layouts.layouts')
@section('title', 'Inicio')
@section('content')

    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">¡Bienvenido,{{Session::get('nombre') }}! 🎉</h5>
                            <p class="mb-4">
                                Te damos la bienvenida a nuestra plataforma. Estamos emocionados de tenerte con nosotros.
                                ¡Prepárate para una experiencia increíble!
                            </p>
                            

                           
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
    @endsection
