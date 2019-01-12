        <header class= "mb-4">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                {!! link_to_route('tasks.index', 'TaskList', [], ['class' => 'navbar-brand']) !!}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>            
                </button>
                
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        @if (Auth::check())
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item">{!! link_to_route('logout.get', 'Logout') !!}</li>
                                </ul>
                                
                            </li>
                        @else
                            <li class="nav-item"> {!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                            <li class="nav-item"> {!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
                        @endif
<!--                        <li class="nav-item">{!! link_to_route('tasks.create', '新規タスクの作成', [], ['class' => 'nav-link']) !!}</li>
-->
                    </ul>
                </div>
            </nav>
        </header>
