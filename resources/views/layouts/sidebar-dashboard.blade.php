<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{ url('dashboard') }}" aria-expanded="false">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ url('profil') }}" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">Profil</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ url('create-article') }}" aria-expanded="false">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                        <span class="hide-menu">Artikel</span>
                    </a>
                </li>
                <li>

                    <form action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="d-flex align-items-center" style="gap:5px">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <p>Logout</p>
                        </button>
                    </form>

                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
