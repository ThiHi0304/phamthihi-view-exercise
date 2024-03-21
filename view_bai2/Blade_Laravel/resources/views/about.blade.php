@extends('layouts.home')
@section('sidebar')
    <div class="col-3">
        <ul class="list-group list-group-flush">
            <?php for ($i = 0; $i < 8; $i++) { ?>
            <li class="list-group-item">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle rounded-0" type="button" data-bs-toggle="dropdown">
                        <span class="text-left">Dropdown button</span>
                    </button>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
@endsection
@section('home')
    <div class="col-7 ">
        <div class="row mb-2 bg">
            <div class="col-6">
                <h5>BIGGEST BEFORESST REASVELED</h5>
                <h1>MORE DETAIL INSIDE UP TO 50%</h1>
            </div>
            <div class="col-6">
                <img src="/assets/images/sofa.png" alt="" width="370px">
            </div>
        </div>
        <div class="row">
            <div class="col-4 ml-5 bg1">
                <img src="https://yeepvn.sgp1.digitaloceanspaces.com/2023/03/sg-11134201-23020-wake2e2dzfnv78.jpg"
                    alt="" width="278px" height="180px" style="margin:3px">
            </div>
            <div class="col-4 bg2">
                <img src="https://yeepvn.sgp1.digitaloceanspaces.com/2023/03/sg-11134201-23020-wake2e2dzfnv78.jpg"
                alt="" width="278px" height="180px" style="margin:3px">
            </div>
            <div class="col-4 bg3">
                <img src="https://yeepvn.sgp1.digitaloceanspaces.com/2023/03/sg-11134201-23020-wake2e2dzfnv78.jpg"
                    alt="" width="278px" height="180px" style="margin:3px">
            </div>
        </div>
    </div>
@endsection
@section('product')
    <div class="col-2 bg-light">
        <p class="text-center "style="font-weight: bold;">Branch Gucchi</p>
        <img src="https://product.hstatic.net/1000103112/product/172852-02_01_b7af9d028f8c41c3b38c608b95fcb88b_master.jpg"
            alt=""width="250px" height="200px">
        <p class="text-center bold"style="font-weight: bold;">Branch Gucchi</p>
        <img src="https://product.hstatic.net/1000103112/product/172852-02_01_b7af9d028f8c41c3b38c608b95fcb88b_master.jpg"
            alt=""width="250px" height="200px">
    </div>
@endsection

@section('deal')
    <div class="row">
        
        <div class="col-4"style="font-weight: bold;"><h4>DEAL OF THE DAY</h4></div>
        <div class="col-4"style="font-weight: bold; color:red">23:00:00 LEFT</div>
        <div class="col-4"style="font-weight: bold;">View all detail</div>
    </div>
@endsection

@section('relative')
    <div class="row">
        <?php for ($i = 0; $i < 6; $i++) { ?>
        <div class="col-2"><img src="https://down-vn.img.susercontent.com/file/vn-11134201-7qukw-lescmnup06dz29_tn"
                alt="" width="230px" height="200px">
            <h4 class="text-center">Túi xinh xắn</h4>
            <p class="text-center">12000$</p>
            <p class="text-center">Description</p>
        </div>
        <?php } ?>
    </div>
@endsection
