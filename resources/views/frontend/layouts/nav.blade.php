<nav class="navbar navbar-expand-lg bg-white shadow-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <a class="navbar-brand" href="index.html">
                    Crispy Kitchen
                </a>

                <div class="d-lg-none">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Reservation</button>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{Route('user.index')}}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{Route('user.about')}}">Story</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{Route('user.menu')}}">Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{Route('user.update')}}">Our Updates</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{Route('user.contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="d-none d-lg-block">
                    <button type="button" class="custom-btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#BookingModal">Reservation</button>
                </div>

            </div>
        </nav>