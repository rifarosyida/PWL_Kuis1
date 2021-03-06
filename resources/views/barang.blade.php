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
                                            <li><a href="{{ url('barang/perempuan') }}" class="{{ ($active == 'pr') ? 'barang-aktif' : ''  }}"><img src="{{ asset('asset/images/female.png')}}" >Female</a></li>
                                            <li><a href="{{ url('barang/lelaki') }}" class="{{ ($active == 'lk') ? 'barang-aktif' : '' }}"><img src="{{ asset('asset/images/male.png') }}" >Male</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id="barangs">
                                    <div class="row">
                                        <?php $newCol = True; $innerLoop = 1; $isLeft = True;?>
                                        @foreach ($all_barang as $barang)
                                        
                                        @if ($newCol==True)
                                            <?php $innerLoop = 1; ?>

                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="{{ (($isLeft==True) ? 'left-list' : 'right-list') }}">
                                                        @if ($isLeft==True)
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
                                                    @if ($barang->diskon > 0)
                                                    <span class="reducedfrom">Rp. {{ $barang->harga }}</span>
                                                    {{-- harga = harga- (harga*diskon) --}}
                                                    <span class="actual">Rp. {{ ($barang->harga -= ($barang->harga * $barang->diskon)) }}</span><br>
                                                    @else 
                                                        <span class="actual">Rp. {{ $barang->harga }}</span><br>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                                
                                        @if ($newCol==True)
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        
                                        <?php $innerLoop++; ?>

                                        @endforeach   
                                            
                                    </div>                                       
                                </article>                                 
                            </section>
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $all_barang->links() }}
            </div>  

        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->
@endsection 