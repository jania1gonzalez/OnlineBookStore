<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    @include('partials.navigation')

    @if(Session::has('producto_borrado'))

        <div class="bg-green-500 text-white p-4 rounded-md mb-4">
            {{ session('producto_borrado') }}
        </div>
    @elseif(Session::has('producto_agregado'))
        <div class="bg-green-500 text-white p-4 rounded-md mb-4">
            {{ session('producto_agregado') }}
        </div>
    @elseif(Session::has('producto_editado'))
        <div class="bg-green-500 text-white p-4 rounded-md mb-4">
            {{ session('producto_editado') }}
        </div>
    @elseif(Session::has('pedido_realizado'))
        <div class="bg-green-500 text-white p-4 rounded-md mb-4">
            {{ session('pedido_realizado') }}
        </div>
    @endif

    
    <section>
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
            <header>
            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
                Nuestros Libros
            </h2>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://th.bing.com/th/id/R.90f13f180085d99f7dcbc01c4cf40386?rik=ZGg36XPC685PLQ&riu=http%3a%2f%2fprodimage.images-bn.com%2fpimages%2f9780345806789_p0_v2_s1200x630.jpg&ehk=ltYHczAkTUR%2fI2TJCv4w0QzH1lFun4rvJFV7Y2h8mBY%3d&risl=&pid=ImgRaw&r=0" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">StevenKing El resplandor</h5>
                                    <!-- Product price-->
                                    $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://th.bing.com/th/id/R.7cdfe15dadd04aaa4aaf631bab6fef5e?rik=i7%2fwR7y%2fZ%2bxW0Q&riu=http%3a%2f%2fjeffreycscott.com%2fwp-content%2fuploads%2f2018%2f04%2fThe-Diary-of-Anne-Frank-Cover-676x1014.jpg&ehk=Sj3pBLtD3SPhFhCthAGbL0AgnpnQrw8hrAVUVbp9RK4%3d&risl=&pid=ImgRaw&r=0" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Anne Frank</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.vqj2ellniSieO1Hbqf7F4wHaLT?w=186&h=284&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Gabriel Garcia Marquez El relato de un naufrago</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.s-Z0O6gqcegd2QMdpFTTmwHaLO?w=141&h=213&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">National Geographic</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.I9oUUaPTOdM4i24Jp739TgHaKG?rs=1&pid=ImgDetMain" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Julio Verne Viaje al centro de la tierra</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$50.00</span>
                                    $25.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://imgv2-1-f.scribdassets.com/img/word_document/209286894/original/010ac0f9b4/1577709550?v=1" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Dracula Bram Stocker</h5>
                                    <!-- Product price-->
                                    $120.00 - $280.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://th.bing.com/th/id/OIP.TFmexhZee7Dqtf6ZizbAqwHaHp?rs=1&pid=ImgDetMain" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Winnie Poo</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" >Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://www.alenuty.pl/environment/cache/images/0_0_productGfx_6702bec6c69ec90c9bcf9556f30e10e8.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">The beatles album</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $40.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy;ProgramacionWeb2024</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
    
            </header>
        
            <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($productos as $producto)
                    <li>
                        <a href="#" class="block overflow-hidden group">
                            <img src="https://th.bing.com/th/id/R.90f13f180085d99f7dcbc01c4cf40386?rik=ZGg36XPC685PLQ&riu=http%3a%2f%2fprodimage.images-bn.com%2fpimages%2f9780345806789_p0_v2_s1200x630.jpg&ehk=ltYHczAkTUR%2fI2TJCv4w0QzH1lFun4rvJFV7Y2h8mBY%3d&risl=&pid=ImgRaw&r=0" alt="el resplandor Steven King">
                        </body>

                        @if ($producto->archivo_nombre == "nada") 
                            <img class="h-56 w-full rounded-md object-cover" 
                                src="{{ $producto->archivo_ubicacion }}" alt="Imagen del producto"> {{-- // Los datos fueron generados por un seeder --}}
                        @else 
                            <img class="h-56 w-full rounded-md object-cover"
                                src="{{ \Storage::url($producto->archivo_ubicacion) }}" alt="{{ $producto->archivo_nombre }}"> {{-- Los datos fueron introducidos por un usuario --}}
                            {{-- @foreach ($imagenesAleatorias as $imagen)
                            <img src="{{ $imagen }}" alt="Imagen aleatoria">
                            @endforeach   --}}
                        @endif
                
                        <div class="relative pt-3 bg-white">
                            <h3
                            class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4"
                            >
                            {{ $producto -> nombre }}
                            </h3>
                
                            <p class="mt-2">
                            <span class="sr-only"> Precio: </span>
                
                            <span class="tracking-wider text-gray-900">  ${{ $producto -> precio }} </span>
                            </p>
                        </div>
                        </a>
                        <span
                            class="inline-flex -space-x-px overflow-hidden rounded-md border bg-white shadow-sm"
                            >
                            <button
                                class="inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative"
                            >
                            <a href="{{ route('producto.edit', $producto) }}">
                                Edit
                            </a>
                            </button>

                            <button
                                class="inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative"
                            >
                            <a href="{{ route('producto.show', $producto) }}">
                                View
                            </a>
                            </button>

                            <form action="{{route('producto.destroy', $producto)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="inline-block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:relative", type="submit"
                                >
                                    Delete
                                </button>
                            </form>

                            

                            </span>
                    </li>
                @endforeach
            </ul>
        </div>
        </section>

</body>

</html>