<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/img/lamina-logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/71d1c9e2bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('/css/admin-style.css') }}">
    <title>@yield('title') | Admin Lamina Studios</title>
</head>
<body>
    <main class="container-fluid">
        <div class="sidebar">
            <div class="navbar-brand"><img src="{{ asset('assets/img/lamina-logo.png') }}" alt=""></div>
            <ul class="sidebar-nav">
                <li class="sidebar-nav-items">
                    <a href="/admin" class="sidebar-nav-links text-uppercase @yield('current1')">dashboard</a>
                </li>
                <li class="sidebar-nav-items">
                    <a href="/admin/home" class="sidebar-nav-links text-uppercase @yield('current2')">home</a>
                </li>
                <li class="sidebar-nav-items dropdown">
                    <input type="checkbox" id="collapsible-head">
                    <label for="collapsible-head" class="sidebar-nav-links text-uppercase lbl @yield('current3')" for="">about</label>
                    <ul class="collapsible">
                        <a href=""><li class="text-uppercase @yield('current4')">talents</li></a>
                        <a href=""><li class="text-uppercase @yield('current5')">parents</li></a>
                        <a href=""><li class="text-uppercase @yield('current6')">collaborations</li></a>
                        <a href=""><li class="text-uppercase @yield('current7')">initiatives</li></a>
                        <a href=""><li class="text-uppercase @yield('current8')">news & events</li></a>
                    </ul>
                </li>
                <li class="sidebar-nav-items">
                    <a href="/admin/projects" class="sidebar-nav-links text-uppercase @yield('current9')">projects</a>
                </li>
                <li class="sidebar-nav-items">
                    <a href="/admin/settings" class="sidebar-nav-links text-uppercase @yield('current10')">settings</a>
                </li>
                <li class="sidebar-nav-items">
                    <a href="/admin/users" class="sidebar-nav-links text-uppercase @yield('current11')">users</a>
                </li>
            </ul>
        </div>
        <div class="content">
            <nav>
                <input type="search" class=""><button><i class="fa-solid fa-magnifying-glass"></i></button>
            </nav>
            <section>
                @yield('section')
            </section>
        </div>
    </main>
    <footer>
        <hr>
        <p>&copy; 2022 Lamina Studios, LLC All Rights Reserved.</p>
    </footer>


    {{-- MODAL TEMPLATE --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">@yield('modal-title')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    @yield('modal-body')
                </div>
            </div>
        </div>
    </div>

    {{-- FOR EDIT --}}
    <div class="modal fade" id="editProjectModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">@yield('modal-title-edit')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa-solid fa-x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    @yield('modal-body-edit')
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

