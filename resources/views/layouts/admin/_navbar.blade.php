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
                            Items <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('/admin/items')}}">List</a></li>
                            <li><a href="{{url('/admin/item-states')}}">Item States</a></li>
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
                            <li><a href="{{url('/admin/item-infos')}}">List</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Item Types</li>
                            @foreach($navbarItemTypes as $itemType)
                                <li>
                                    <a href="{{route('admin.item-types.show',$itemType)}}" class="text-capitalize">
                                        {{$itemType->name}}
                                        <span class="badge">{{$itemType->itemInfos()->count()}}</span>
                                    </a>
                                </li>
                            @endforeach
                            <li role="separator" class="divider"></li>
                            <li><a href="{{url('/admin/item-types')}}">List</a></li>
                        </ul>
                    </li>
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