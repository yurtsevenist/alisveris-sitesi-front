<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">{{Str::Words(Auth::user()->name,2)}}</div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('profil')}}"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Üyelik Bilgileri</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('sepet')}}"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>&nbsp;Sepet</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Siparişler</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa fa-retweet" aria-hidden="true"></i>&nbsp;İadeler</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp;Favoriler</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!"><i class="fa fa-gift" aria-hidden="true"></i>&nbsp;İndirim Çekleri</a>
    </div>
</div><!-- Page content wrapper-->
<div id="page-content-wrapper">
    <!-- Top navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <button class="btn btn-outline-light" id="sidebarToggle"><i class="fa fa-bars text-danger" aria-hidden="true"></i></button>                            
        </div>
    </nav>
