<style>
    .active {
        background-color: rgba(0, 0, 0, 0.4);
    }
</style>

<div class="dashboard_sidebar">
    <span class="close_icon">
        <i class="far fa-bars dash_bar"></i>
        <i class="far fa-times dash_close"></i>
    </span>
    <a href="" class="dash_logo"><img src="" alt="" class="img-fluid"></a>
    <ul class="dashboard_link">
        <li class=""><a class="" href="{{ route('home') }}"><i class="fas fa-home"></i>Go To Home
                Page</a></li>
        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><a class=""
                href="{{ route('admin.dashboard') }}"><i class="far fa-clipboard"></i>Dashboard</a></li>
        <li class="{{ request()->routeIs(['admin.category.index', 'admin.category.create', 'admin.category.edit']) ? 'active' : '' }}"><a class="" href="{{ route('admin.category.index') }}"><i
                    class="far fa-clipboard"></i>Category</a></li>
        <li
            class="{{ request()->routeIs(['admin.documents.index', 'admin.documents.create', 'admin.documents.show', 'admin.documents.edit']) ? 'active' : '' }}">
            <a class="" href="{{ route('admin.documents.index') }}"><i class="far fa-clipboard"></i>My
                Documents</a></li>

        <li
            class="{{ request()->routeIs(['admin.all.document', 'admin.public.document.show', 'admin.public.document.edit']) ? 'active' : '' }}">
            <a class="" href="{{ route('admin.all.document') }}"><i class="far fa-clipboard"></i>Public
                Documents</a></li>

        <li class="{{ request()->routeIs('admin.profile') ? 'active' : '' }}"><a href="{{ route('admin.profile') }}"><i
                    class="far fa-clipboard"></i> My Profile</a></li>
        <li>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                this.closest('form').submit()";><i
                        class="far fa-sign-out-alt"></i>Log out</a>
            </form>

        </li>
    </ul>
</div>
