<!--Header-part-->
<div id="head" style="height:60px; important">
<br>
    <h4  style="margin-top:20px; color:white;" ><a href="#" style="color:white;">WebNess -  Administration des ventes</a></h4>
<br>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <!--<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Paramètres</span></a></li> -->
        <li class="">
           <!-- <a class="dropdown-item" href="#"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="icon icon-share-alt"></i>
            </a> -->

            <form id="logout-form" action="#" method="POST" style="display: none;">
                @csrf
            </form>

        </li>
    </ul>
</div> 
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->