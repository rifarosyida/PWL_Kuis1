<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="asset/images/logo-1.png" style="width: 200px;height: 80px;" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                           
                            <li class="scroll-to-section"><a href="{{url('/')}}" class="{{ ($title == "Dz Fashion - Home" )? "active" : "" }}">Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('/supplier')}}" class="{{ ($title == "Dz Fashion - Supplier" )? "active" : "" }}">Supplier</a></li>
                          
                            <li class="scroll-to-section"><a href="{{url('/barang')}}" class="{{ ($title == "Dz Fashion - Barang" )? "active" : "" }}">Barang</a></li>
                            <li class="scroll-to-section"><a href="{{url('/pegawai')}}" class="{{ ($title == "Dz Fashion - Pegawai" )? "active" : "" }}">Pegawai</a></li>
                            <li class="scroll-to-section"><a href="{{url('/pelanggan')}}" class="{{ ($title == "Dz Fashion - Pelanggan" )? "active" : "" }}">Pelanggan</a></li>  
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>