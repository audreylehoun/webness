<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/admin')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
       <!-- <li{{$menu_active==1? ' class=active':''}}><a href="{{url('/admin')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>-->
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Cathégories</span></a>
            <ul>
                <li><a href="{{url('/admin/category/create')}}">Ajouter une cathegorie</a></li>
                <li><a href="{{route('category.index')}}">Liste des cathégories</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Poduits</span></a>
            <ul>
                <li><a href="{{url('/admin/product/create')}}">Ajoutes de nouveaux produits</a></li>
                <li><a href="{{route('product.index')}}">Liste des produits</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==4? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Gestion des publicités</span></a>
            <ul>
                <li><a href="#">Ajouter des publicités</a></li>
                <li><a href="#">Liste des publicités</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->