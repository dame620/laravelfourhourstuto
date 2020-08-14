@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-3 p-3">
          <img src="https://shopmeaway.com/images/transporteur-de-produits-extraordinaires.png"  style="height:161px; width:150px; padding:10px" alt="image sma">
        </div>
         <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline"><h1>{{ $user->username }}</h1>
            <a href="">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong>shipment_week</div>
                <div class="pr-5"><strong>2351</strong>customer</div>
                <div class="pr-5"><strong>23512</strong>users</div>
            </div>
            <div class="pt-4" style="font-weight: bold;">{{$user->profil->title}}</div>
            <div>
            {{$user->profil->description}}
            </div>
            <div><a href="">{{ $user->profil->url }}</a></div>
         </div>
    </div>
    <div class="row pt-4">

        <div class="col-4">
            <img src="https://mk0hootsuiteblof6bud.kinstacdn.com/wp-content/uploads/2018/08/instagram-shopping-940x470-620x310.jpg" alt="" class="w-100" style="width:105px; height:210px">
        </div>

        <div class="col-4">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQwLeWk7t9PQgJ5tsq3fJEhv6r9FL46iHD0Sg&usqp=CAU" alt="" class="w-100" style="width:105px; height:210px">
        </div>

        <div class="col-4">
            <img src="https://www.sitedesmarques.com/var/uploads/a/asos-black-friday.jpg" alt="" class="w-100" style="width:105px; height:210px">
        </div>

        
    </div>

</div>
@endsection
