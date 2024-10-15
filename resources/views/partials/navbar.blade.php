
    <style>
        /* Navbar Styling */
        .navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #d3d3d3;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .navbar-brand img {
            max-height: 50px;
            transition: max-width 0.3s ease;
        }

        /* Desktop Search Input */
        .search-input-desktop {
            width: 300px;
        }

        .search-input-desktop:focus {
            border-color: #7012db;
            box-shadow: 0 0 5px rgba(6, 106, 131, 0.5);
        }

        /* Icons and Text Styling */
        .nav-desktop .nav-link {
            color: #086a83;
            font-size: 1rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 5px;
            position: relative;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .nav-desktop .nav-link i {
            font-size: 1rem;
            transition: transform 0.3s ease;
        }

        /* Hover Animations for Desktop */
        .nav-desktop .nav-link:hover {
            color: #065f6d;
            transform: translateY(-2px);
        }

        .nav-desktop .nav-link:hover i {
            transform: scale(1);
        }

        /* Badge Styling */
        .cart-icon .badge {
            position: absolute;
            top: -5px;
            right: -10px;
            background-color: #086a83;
            color: #ffffff;
            border-radius: 50%;
            padding: 3px 6px;
            font-size: 8pt;
        }

        .nav-desktop {
            gap: 35px;
        }
        .btn-outline-success:hover{
            color: #ffffff;
            background-color: #006f7e;
        }
        /* Pencarian di Mobile */
        .navbar-search-active .nav-mobile-icons,
        .navbar-search-active .navbar-brand {
            display: none;
        }

        .navbar-search-active .dropdown {
            display: none;
        }

        .navbar-search-active .navbar {
            padding-left: 15px;
            padding-right: 15px;
        }

        .navbar-search-active #searchFormMobile {
            display: flex;
            gap: 10px;
            width: 100%;
        }

        .search-input-mobile {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #086a83;
            border-radius: 4px;
            outline: none;
        }

        .search-input-mobile:focus {
            border-color: #065f6d;
            box-shadow: 0 0 5px rgba(6, 106, 131, 0.5);
        }

        /* Mobile Navbar Styling */
        @media (max-width: 768px) {
            .navbar {
                padding: 10px 15px;
            }

            .navbar-brand img {
                max-width: 120px;
            }

            /* Hide search input on mobile */
            .search-input-desktop {
                display: none;
            }

            /* Mobile Icons */
            .nav-mobile-icons {
                display: flex;
                align-items: center;
                gap: 25px;
                font-size: 1.2rem;
            }

            /* Adjust Dropdown Menu Position */
            .dropdown-menu {
                right: 0;
                left: auto;
            }
        }
        .b-login{
            border: 1px solid #006f7e;
            padding: 3px 10px;
            border-radius: 5px;
        }
        /* Animasi Transisi */
        .navbar-search-active #searchFormMobile {
            display: flex !important;
            animation: slideIn 0.3s ease-in-out;
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img id="logo" src="{{ asset('img/logo.png') }}?v={{ time() }}" alt="Logo">
            </a>

            <!-- Desktop Search Form -->
            <form class="d-none d-lg-flex mx-auto">
                <input class="form-control me-2 search-input-desktop" type="search" placeholder="Cari produk..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
            </form>

            <!-- Right-side items for Desktop -->
            <div class="d-none d-lg-flex align-items-center nav-desktop">
                <!-- Kontak -->
                <a class="nav-link" href="tel:+1234567890">
                    <i class="bi bi-phone-vibrate-fill"></i>
                    <span>Kontak</span>
                </a>
                <!-- Keranjang -->
                <a class="nav-link position-relative cart-icon" href="/cart">
                    <i class="bi bi-bag"></i>
                    <span class="badge">3</span>
                </a>
                <!-- Login / Akun -->
                <a class="nav-link b-login" href="/login">
                    <span>Login</span>
                    <i class="bi bi-box-arrow-in-right"></i>
                </a>
            </div>

            <!-- Mobile Icons -->
            <div class="nav-mobile-icons d-lg-none ms-auto">
                <!-- Search Icon -->
                <a href="#" id="searchIcon" class="search-icon">
                    <i class="bi bi-search"></i>
                </a>
                <!-- Keranjang Icon -->
                <a href="/cart" class="position-relative cart-icon">
                    <i class="bi bi-bag"></i>
                    <span class="badge">3</span>
                </a>
                <!-- Akun Icon -->
                <div class="dropdown">
                    <a href="#" id="accountDropdown" class="account-icon" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                        <li><a class="dropdown-item" href="/login"><i class="bi bi-box-arrow-in-right me-2"></i> Login</a></li>
                        <li><a class="dropdown-item" href="tel:+1234567890"><i class="bi bi-phone-vibrate-fill me-2"></i> Kontak</a></li>
                    </ul>
                </div>
            </div>

            <!-- Search Form for Mobile (Hidden initially) -->
            <form id="searchFormMobile" class="d-none">
                <input class="form-control search-input-mobile" type="search" placeholder="Cari produk..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </nav>

    <script>
        // JavaScript to handle mobile search functionality
        document.addEventListener('DOMContentLoaded', function () {
            const searchIcon = document.getElementById('searchIcon');
            const navbar = document.querySelector('.navbar');
            const searchFormMobile = document.getElementById('searchFormMobile');

            // Activate search mode on mobile
            searchIcon.addEventListener('click', function (e) {
                e.preventDefault();
                navbar.classList.toggle('navbar-search-active');
            });

            // Close search mode when clicking outside the search form and search icon
            document.addEventListener('click', function (e) {
                if (!searchFormMobile.contains(e.target) && !searchIcon.contains(e.target)) {
                    navbar.classList.remove('navbar-search-active');
                }
            });

            // Prevent clicks inside the search form from closing it
            searchFormMobile.addEventListener('click', function (e) {
                e.stopPropagation();
            });
        });
    </script>
