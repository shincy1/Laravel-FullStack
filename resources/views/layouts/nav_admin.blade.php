<nav class="navbar shadow-xl" style="background-color: #FFC47E;">
    <div class="container-fluid">
        <button type="button" class="btn btn-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling">
            <i class="bi bi-list"></i>
        </button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" style="color: FFAD84;"
            tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header" style="background-color: #FFC47E; color: FFAD84;">
                <h3 class="offcanvas-title" id="offcanvasScrollingLabel">
                    Admin Dashboard
                </h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="background-color: white;">
                <div class="text-dark">
                    <h6>MENU</h6>
                </div>
                <div class="grid gap-4 text-dark">
                    <div class="p-2">
                        <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action">
                            <h6><i class="bi bi-house-door"></i> Home</h6>
                        </a>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('admin') }}" class="list-group-item list-group-item-action">
                            <h6><i class="bi bi-speedometer"></i> Dashboard</h6>
                        </a>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('kategori_pakaian') }}" class="list-group-item list-group-item-action">
                            <h6><i class="bi bi-tags-fill"></i> Data Kategori Pakaian</h6>
                        </a>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('data_pakaian') }}" class="list-group-item list-group-item-action">
                            <h6><i class="bi bi-journal-bookmark-fill"></i> Data Pakaian</h6>
                        </a>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('data_user') }}" class="list-group-item list-group-item-action">
                            <h6><i class="bi bi-columns-gap"></i> Data User</h6>
                        </a>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('data_pembelian') }}" class="list-group-item list-group-item-action">
                            <h6><i class="bi bi-table"></i> Data Pembelian</h6>
                        </a>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('login') }}" class="list-group-item list-group-item-action">
                            <h6><i class="bi bi-box-arrow-left"></i> Logout</h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="offcanvas-footer" style="background-color: #FFC47E; color: black;">
                <div class="grid ps-4 m-3">
                    <h6>Telah Login Sebagai:</h6>
                    <h6>
                        <i class="bi bi-person-lines-fill"></i> Admin
                    </h6>
                </div>
            </div>
        </div>
        <img width="150px" src="{{ asset('img/logo.svg') }}">
    </div>
</nav>
