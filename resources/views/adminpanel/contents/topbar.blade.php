<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header" style="padding-top: 7px;">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="">Selamat datang {{ Auth::user()->fullname }}</span>
            </li>



            <li>
                <a href="#">
                    <form action="{{ url('/logout') }}" method="POST">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <i class="fa fa-sign-out"></i> LOGOUT
                        </button>
                        {{ csrf_field() }}
                    </form>

                </a>
            </li>
        </ul>

    </nav>
</div>