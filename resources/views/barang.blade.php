@extends('masterview.content')

    @section('content')
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Dina Zalfa Fashion</h6>
                        <h3>Fashion is one of the most desirable industries in the world.</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                        <li><a href='#tabs-1'><img src="{{asset('asset/images/female.png')}}" alt="">Female</a></li>
                                          <li><a href='#tabs-2'><img src="{{asset('asset/images/male.png')}}" alt="">Male</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id="{{ $tabs }}">
                                    <div class="row">
                                        <?php $newCol = True; $innerLoop = 1; $innerRow = True; $isLeft = True;?>
                                        @foreach ($all_barang as $barang)
                                        
                                        @if ($newCol)
                                            <?php $innerLoop = 1; ?>

                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="{{ (($isLeft) ? 'left-list' : 'right-list') }}">
                                                        @if ($isLeft)
                                                            <?php $isLeft = False; ?>
                                                        @else
                                                            <?php $isLeft = True; ?>
                                                        @endif
                                        @endif

                                        @if ($innerLoop < 3)
                                        <?php $newCol = False; ?>
                                        @else
                                        <?php $newCol = True; ?>
                                        @endif

                                        <div class="col-lg-12">
                                            <div class="tab-item">
                                                <img src="{{ asset($barang->gambar) }}" width="100px" height="150px">
                                                <h4>{{ $barang->nama }}</h4>
                                                <p>{{ substr($barang->deskripsi, 0, 80) }}...</p>
                                                <div class="price">
                                                    <h6>Rp{{ $barang->harga }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                                
                                        @if ($newCol)
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        
                                        <?php $innerLoop++; ?>

                                        @endforeach                                    
                                        
                                        {{-- <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/tab-item-04.png" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>$6.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->
@endsection 