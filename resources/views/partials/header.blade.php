    <header>
        <!--nav -->
        <a href="#menu" class="menu-link">
            <span>toggle menu</span>
        </a>
        <nav id="menu" class="panel">
            <ul>
                <li>
                    <a href="/" class="@if($_SERVER['REQUEST_URI'] == '/') active @endif">Home</a>
                </li>
                <li>
                    <a href="/about" class="@if($_SERVER['REQUEST_URI'] == '/about') active @endif">About</a>
                </li>
                <li>
                    <a href="/skills" class="@if($_SERVER['REQUEST_URI'] == '/skills') active @endif">Skills</a>
                </li>
                <li>
                    <a href="/">Blogs</a>
                </li>
                <li>
                    <a href="/">Portofolio</a>
                </li>
                <li>
                    <a href="/contact-me"  class="@if($_SERVER['REQUEST_URI'] == '/contact-me') active @endif">contact</a>
                </li>
            </ul>
        </nav>
    </header>