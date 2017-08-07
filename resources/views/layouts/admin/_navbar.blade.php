@section('navbar')
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ route('admin') }}"> {{ config('app.name','BDJeux')}} | Admin Area</a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Library <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('admin.statuses.index')}}">Status List</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Statuses</li>
                            @foreach($navbarStatuses as $status)
                                <li>
                                    <a href="{{route('admin.statuses.show',$status)}}" class="text-capitalize">
                                        {{$status->name}} <span class="badge">{{-- TODO $status->items()->count()
                                        --}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Items <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('admin.items.index')}}">Item List</a></li>
                            <li><a href="{{route('admin.item-states.index')}}">Item States</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Item States</li>
                            @foreach($navbarItemStates as $itemState)
                                <li>
                                    <a href="{{route('admin.item-states.show',$itemState)}}" class="text-capitalize">
                                        {{$itemState->name}}
                                        <span class="badge">{{$itemState->items()->count()}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Item Infos <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('admin.item-infos.index')}}">Item Infos List</a></li>
                            <li><a href="{{route('admin.item-types.index')}}">Item Types List</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Item Types</li>
                            @foreach($navbarItemTypes as $itemType)
                                <li>
                                    <a href="{{route('admin.item-types.show',$itemType)}}" class="text-capitalize">
                                        {{$itemType->name}}
                                        <span class="badge">{{$itemType->itemInfos()->count()}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('admin.users.index')}}">Users</a></li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">

                            <li><a href="{{route('profile')}}">Profile</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{route('home')}}">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endsection