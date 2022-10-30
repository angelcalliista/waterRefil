@extends('layouts.home')

@section('content')
    <section>
        <div class="container ">
            <div class="col-12 mb-5">
                <div class="row mt-5 pt-5">
                    <div class="col-lg-8 col-md-6 col-sm-6">
                        <h2 class="title"><b>MY REFIL WATER</b></h2>
                        <h4 class="sub-title mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim incidunt maxime ut eveniet voluptatibus, architecto dicta sequi ab doloribus eius nihil voluptas error consequuntur non quae harum id voluptatum neque?</h6>
                        <h4 class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum unde repudiandae ipsum voluptas delectus suscipit quibusdam, incidunt voluptatem! Doloremque sit laborum modi molestiae deserunt! Architecto cumque aliquid beatae excepturi non?</h4>
                        <div class="flex-container">
                            <button class="btn btn-content btn-primary mt-4" onClick="window.open('/info')" type="button"><b>INFO</b></button>
                            <button class="btn btn-content btn-primary mt-4" onclick="window.open('/jns-pemesanan')" type="button"><b>PESAN</b></button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-none d-sm-block">
                        <img class="justify-content-center" style="width: 400px" src="{{ asset('assets/images/gallon-2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-12">
                <h2 class="title text-center"><b>Our Services</b></h2>
                <div class="row mt-5 pt-5">
                    <div class="col-3 text-center p-2">
                        <img class="home-img" src="{{ asset('assets/images/clock.png') }}" alt="">
                        <h4>Pengiriman cepat</h4>
                    </div>
                    <div class="col-3 text-center  p-2">
                        <img class="home-img" src="{{ asset('assets/images/gallon-2.png') }}" alt="">
                        <h4>Air murni dengan <br> kebersihan yang terjaga</h4>
                    </div>
                    <div class="col-3 text-center  p-2">
                        <img class="home-img" src="{{ asset('assets/images/shield.png') }}" alt="">
                        <h4 >100% terpercaya</h4>
                    </div>
                    <div class="col-3 text-center  p-2">
                        <img class="home-img" src="{{ asset('assets/images/wallet.png') }}" alt="">
                        <h4 >Pembayaran mudah</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Footer">
        <div class="container ">
            <div class="row mt-5 pt-5">
                <div align="center" class="col-md-4 col-sm-6 footer-box justify-content-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{ asset('assets/images/smk46.png') }}" style="height: 50px; width: 50px;" class="footer-img mb-3" />
                    <p>
                        <a href=" #Home ">Home <i class="iconify" data-icon="ant-design:home-twotone"></i></a>
                    </p>
                    <p>
                        <a href=" #Service ">Service <i class="iconify" data-icon="eos-icons:rotating-gear"></i></a>
                    </p>
                    <p>
                        <a href=" #About ">About Us <i class="fad fa-users"></i></a>
                    </p>
                    <p>
                        <a href=" #Product ">Product    <i class="fad fa-box-open"></i></a>
                    </p>
                    <p>
                        <a href=" #Contact ">Contact    <i class="fad fa-phone-volume"></i></a>
                    </p>
                    <p>
                        <a href="contributor.php">Contributor <i class="fad fa-users-cog"></i></a>
                    </p>
                </div>
                <div align="center" class=" col-md-4 col-sm-6 footer-box justify-content-center" data-aos="zoom-out" data-aos-delay="200">
                    <h4 class=" h4 mb-4 ">CONTACT US</h4>
                    <p class=" footer-contact"><img src="{{ asset('assets/images/icon-footer1.png') }}" class="icon-footer "> &nbsp;Jakarta, Indonesia</p>
                    <p class="footer-contact"><img src="{{ asset('assets/images/icon-footer2.png') }}" class="icon-footer "></i> &nbsp; +62 895 6003 19250 </p>
                    <p class="footer-contact"><img src="{{ asset('assets/images/icon-footer3.png') }}" class="icon-footer "></i> &nbsp; zannawildan@gmail.com</p>
                </div>

                <div align="center" class="col-md-4 col-sm-6 footer-box  justify-content-center" data-aos="zoom-out" data-aos-delay="300">
                    <h4>LIVE CHAT</h4>
                    <a type="button" class="btn btn-primary bg-dark" href="login.php">Live Chat</a>
                </div>
            </div>
        </div>
        <hr>
        <footer class="text-center pb-5">
            <p style="color:white;>Copyright &copy; <?= date('Y') ?></p>
        </footer>
    </section>
@endsection