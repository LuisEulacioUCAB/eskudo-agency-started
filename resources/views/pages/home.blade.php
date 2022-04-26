@extends('layout/layout')

@section('title', 'Home')


@section('container')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="https://static.wixstatic.com/media/400fbd_9266a54c73f8453b9bfcbc47fb651ed9~mv2.jpg/v1/fill/w_1899,h_950,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/400fbd_9266a54c73f8453b9bfcbc47fb651ed9~mv2.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img
                    src="https://static.wixstatic.com/media/400fbd_5f194d056270425fb0c350c02d4294d5~mv2.jpg/v1/fill/w_1899,h_950,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/400fbd_5f194d056270425fb0c350c02d4294d5~mv2.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img
                    src="https://static.wixstatic.com/media/400fbd_3db0d1ae5df543dd9a39c68884cabd58~mv2.jpg/v1/fill/w_1899,h_950,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/400fbd_3db0d1ae5df543dd9a39c68884cabd58~mv2.jpg"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="width: 4rem;height: 4rem;"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" style="width: 4rem;height: 4rem;" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="headband bg-secondary-color"></div>
    <div class="bg-primary-color pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-6">
                        <p class="text-light fw-light fs-2">
                            Somos líderes en innovación y soluciones
                        </p>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-light fw-light fs-5 text-center">Clientes satisfechos</div>
                            <div class="secondary-color fs-61 text-center fw-700">30+</div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-light fw-light fs-5 text-center">Sistemas creados</div>
                            <div class="secondary-color fs-61 text-center fw-700">12+</div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-light fw-light fs-5 text-center">Paises</div>
                            <div class="secondary-color fs-61 text-center fw-700">15+</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="headband bg-secondary-color"></div>

    <div class="pt-4 pb-4">
        <div class="container">
            <div class="text-center fw-light fs-1">Tu Solución,</div>
            <div class="text-center">
                <img
                    src="https://static.wixstatic.com/media/400fbd_12b2e63a36114bf7955d775ad3bc848c~mv2.png/v1/fill/w_475,h_188,al_c,usm_0.66_1.00_0.01,enc_auto/400fbd_12b2e63a36114bf7955d775ad3bc848c~mv2.png"
                    alt="" style="width:380px;height:150px;object-fit:cover;object-position:50% 50%">
            </div>
            <div class="d-flex justify-content-center">
                <div class="divider"></div>
            </div>
            <div class="d-flex justify-content-center mt-4 m-4">
                <p class="fw-light fs-5 w-600 text-center">
                    Cada una de las áreas de Safex está enfocada en 5 sectores organizacionales, conócelos y selecciona
                    el que más se adapte a las necesidades de tu empresa
                </p>
            </div>
            <div class="container overflow-hidden">
                <div class="row g-5 justify-content-center">
                    <div class="col-md-4">
                        <div class="card-primary p-5 text-center">
                            <img
                                src="https://static.wixstatic.com/media/400fbd_54a9e887eb0c47b39868d35735220587~mv2.png/v1/fill/w_120,h_96,al_c,usm_0.66_1.00_0.01,enc_auto/carpeta.png"
                                alt="carpeta.png"
                                style="width:96px;height:77px;object-fit:cover;object-position:50% 50%">
                            <div class="mt-4 mb-2">
                                <img
                                    src="https://static.wixstatic.com/media/400fbd_6d5df660eb284db49c9a3f1368aa0de9~mv2.png/v1/crop/x_246,y_272,w_2577,h_647/fill/w_294,h_74,al_c,usm_0.66_1.00_0.01,enc_auto/400fbd_6d5df660eb284db49c9a3f1368aa0de9~mv2.png"
                                    alt="" style="width:235px;height:59px;object-fit:cover;object-position:50% 50%">
                            </div>
                            <p class="secondary-color fs-4 fw-bolder pe-3 ps-3 lh-1">
                                Administrative Management
                            </p>
                            <p class="text-light pe-3 ps-3 mt-1">
                                Te permite tener el control sobre el estado de la documentación y requerimientos de
                                empresas contratistas y de sus colaboradores
                            </p>
                            <div>
                                <button type="button" class="btn button-primary fw-bold">Ver mas</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-primary-2 p-5 text-center">
                            <img
                                src="https://static.wixstatic.com/media/400fbd_54a9e887eb0c47b39868d35735220587~mv2.png/v1/fill/w_120,h_96,al_c,usm_0.66_1.00_0.01,enc_auto/carpeta.png"
                                alt="carpeta.png"
                                style="width:96px;height:77px;object-fit:cover;object-position:50% 50%">
                            <div class="mt-4 mb-2">
                                <img
                                    src="https://static.wixstatic.com/media/400fbd_6d5df660eb284db49c9a3f1368aa0de9~mv2.png/v1/crop/x_246,y_272,w_2577,h_647/fill/w_294,h_74,al_c,usm_0.66_1.00_0.01,enc_auto/400fbd_6d5df660eb284db49c9a3f1368aa0de9~mv2.png"
                                    alt="" style="width:235px;height:59px;object-fit:cover;object-position:50% 50%">
                            </div>
                            <p class="secondary-color fs-4 fw-bolder pe-3 ps-3 lh-1">
                                Administrative Management
                            </p>
                            <p class="text-light pe-3 ps-3 mt-1">
                                Te permite tener el control sobre el estado de la documentación y requerimientos de
                                empresas contratistas y de sus colaboradores
                            </p>
                            <div>
                                <button type="button" class="btn button-primary fw-bold">Ver mas</button>
                            </div>
                        </div>
                    </div>

                    {{--                            --}}
                    <div class="col-md-4">
                        <div class="card-primary p-5 text-center">
                            <img
                                src="https://static.wixstatic.com/media/400fbd_54a9e887eb0c47b39868d35735220587~mv2.png/v1/fill/w_120,h_96,al_c,usm_0.66_1.00_0.01,enc_auto/carpeta.png"
                                alt="carpeta.png"
                                style="width:96px;height:77px;object-fit:cover;object-position:50% 50%">
                            <div class="mt-4 mb-2">
                                <img
                                    src="https://static.wixstatic.com/media/400fbd_6d5df660eb284db49c9a3f1368aa0de9~mv2.png/v1/crop/x_246,y_272,w_2577,h_647/fill/w_294,h_74,al_c,usm_0.66_1.00_0.01,enc_auto/400fbd_6d5df660eb284db49c9a3f1368aa0de9~mv2.png"
                                    alt="" style="width:235px;height:59px;object-fit:cover;object-position:50% 50%">
                            </div>
                            <p class="secondary-color fs-4 fw-bolder pe-3 ps-3 lh-1">
                                Administrative Management
                            </p>
                            <p class="text-light pe-3 ps-3 mt-1">
                                Te permite tener el control sobre el estado de la documentación y requerimientos de
                                empresas contratistas y de sus colaboradores
                            </p>
                            <div>
                                <button type="button" class="btn button-primary fw-bold">Ver mas</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card-primary-2 p-5 text-center">
                            <img
                                src="https://static.wixstatic.com/media/400fbd_54a9e887eb0c47b39868d35735220587~mv2.png/v1/fill/w_120,h_96,al_c,usm_0.66_1.00_0.01,enc_auto/carpeta.png"
                                alt="carpeta.png"
                                style="width:96px;height:77px;object-fit:cover;object-position:50% 50%">
                            <div class="mt-4 mb-2">
                                <img
                                    src="https://static.wixstatic.com/media/400fbd_6d5df660eb284db49c9a3f1368aa0de9~mv2.png/v1/crop/x_246,y_272,w_2577,h_647/fill/w_294,h_74,al_c,usm_0.66_1.00_0.01,enc_auto/400fbd_6d5df660eb284db49c9a3f1368aa0de9~mv2.png"
                                    alt="" style="width:235px;height:59px;object-fit:cover;object-position:50% 50%">
                            </div>
                            <p class="secondary-color fs-4 fw-bolder pe-3 ps-3 lh-1">
                                Administrative Management
                            </p>
                            <p class="text-light pe-3 ps-3 mt-1">
                                Te permite tener el control sobre el estado de la documentación y requerimientos de
                                empresas contratistas y de sus colaboradores
                            </p>
                            <div>
                                <button type="button" class="btn button-primary fw-bold">Ver mas</button>
                            </div>
                        </div>
                    </div>

                    {{--                            --}}
                    <div class="col-md-4">
                        <div class="card-primary p-5 text-center">
                            <img
                                src="https://static.wixstatic.com/media/400fbd_54a9e887eb0c47b39868d35735220587~mv2.png/v1/fill/w_120,h_96,al_c,usm_0.66_1.00_0.01,enc_auto/carpeta.png"
                                alt="carpeta.png"
                                style="width:96px;height:77px;object-fit:cover;object-position:50% 50%">
                            <div class="mt-4 mb-2">
                                <img
                                    src="https://static.wixstatic.com/media/400fbd_6d5df660eb284db49c9a3f1368aa0de9~mv2.png/v1/crop/x_246,y_272,w_2577,h_647/fill/w_294,h_74,al_c,usm_0.66_1.00_0.01,enc_auto/400fbd_6d5df660eb284db49c9a3f1368aa0de9~mv2.png"
                                    alt="" style="width:235px;height:59px;object-fit:cover;object-position:50% 50%">
                            </div>
                            <p class="secondary-color fs-4 fw-bolder pe-3 ps-3 lh-1">
                                Administrative Management
                            </p>
                            <p class="text-light pe-3 ps-3 mt-1">
                                Te permite tener el control sobre el estado de la documentación y requerimientos de
                                empresas contratistas y de sus colaboradores
                            </p>
                            <div>
                                <button type="button" class="btn button-primary fw-bold">Ver mas</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="headband bg-secondary-color"></div>
    <div class="section-info"></div>
    <div class="headband bg-secondary-color"></div>

    <div class="bg-primary-color pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-light fw-light fs-2 text-center">
                        "La innovación distingue a los líderes de los seguidores"
                    </p>
                    <p class="secondary-color text-center fs-4">-Steve Jobs</p>
                </div>
            </div>
        </div>
    </div>

    <div class="headband bg-secondary-color"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="row g-0">
                <div class="col-md-4 p-5 bg-section-info">
                    <p class="p-2 text-justify">
                        Digitalizar los procesos de tu empresa es tan importante para ti como para tu equipo, sin
                        importar su tamaño. La innovación y optimización es una necesidad hoy en día.
                    </p>
                    <div class="p-2 text-justify">
                        Así como el mundo evoluciona rápidamente, tú también debes hacerlo, no puedes quedarte atrás
                        mientras tu competencia crece.
                    </div>
                    <div class="p-2 text-justify">
                        En Somax somos más que un software, somos tu solución, y nuestro objetivo es ayudarte a mejorar
                        la rentabilidad de tu empresa, simplificando procesos y optimizándolos.
                    </div>
                    <div class="p-2 text-justify">
                        En Somax te asesoramos a ti y a tu equipo sin importar edades o generaciones, nuestros módulos
                        están creados para cualquier usuario.
                    </div>
                </div>
                <div class="col-md-8">
                    <img
                        class="parallax-image"
                        src="https://static.wixstatic.com/media/400fbd_384c8b6005e74935a100c74116bda117~mv2.jpg/v1/fill/w_911,h_619,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/400fbd_384c8b6005e74935a100c74116bda117~mv2.jpg"
                        alt="Alt Text"
                        data-speed="1"
                        data-height="600px"
                    />
                </div>
            </div>

        </div>
    </div>


    <div class="pt-4 pb-4">
        <div class="container">
            <div class="text-center fw-light fs-1">Benefíciate con</div>
            <div class="text-center">
                <img
                    src="https://static.wixstatic.com/media/400fbd_12b2e63a36114bf7955d775ad3bc848c~mv2.png/v1/fill/w_475,h_188,al_c,usm_0.66_1.00_0.01,enc_auto/400fbd_12b2e63a36114bf7955d775ad3bc848c~mv2.png"
                    alt="" style="width:380px;height:150px;object-fit:cover;object-position:50% 50%">
            </div>
            <div class="d-flex justify-content-center">
                <div class="divider"></div>
            </div>
            <div class="d-flex justify-content-center mt-4 m-4">
                <p class="fw-light fs-5 w-600 text-center">
                    Cada una de las áreas de Safex está enfocada en 5 sectores organizacionales, conócelos y selecciona
                    el que más se adapte a las necesidades de tu empresa
                </p>
            </div>
            <div class="container overflow-hidden">
                <div class="row g-5 justify-content-center align-items-center">

                    <div class="col-md-4">
                        @include('components/slider-info-1')
                    </div>
                    <div class="col-md-4">
                        @include('components/slider-info')
                    </div>

                    <div class="col-md-4">
                        @include('components/slider-info-2')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="headband bg-secondary-color"></div>
    <div class="section-benefits">
        <div class="container">

        </div>
    </div>

    <div class="headband bg-secondary-color"></div>

    <div class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="fw-bolder fs-2 text-center">
                        Experiencias
                    </p>
                    <div class="d-flex justify-content-center">
                        <div class="divider"></div>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-6">
                            <p class="text-center fs-5">Se propone crear un formulario en google forms para que
                                los clientes nos dejen sus comentarios y los mismos cargarlos a las siguientes
                                secciones</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
