// custom navbar

class navbar extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <header>
        <div class="header container-lg text-uppercase">
            <div class="head">
                <div class="head-item">
                    <div class="logo">
                        <img src="../image/unicorn-removebg-preview.png" alt="logo">
                        <img src="../image/unicorn.png" alt="logo">
                    </div>
                    <div class="navber">
                        <div class="nav-burger-icon">
                            <i class="cngIcon bi bi-list"></i>
                        </div>
                        <div class="nav-list">
                            <div class="nav-items">
                                <a href="../../index.html" class="nav-item">
                                    home
                                </a>
                                <a href="./about.html" class="nav-item">
                                    about us
                                </a>
                                <a href="./portfolio.html" class="nav-item">
                                    portfolio
                                </a>
                                <a href="./service.html" class="nav-item">
                                    service
                                </a>
                                <a href="./blog.html" class="nav-item">
                                    blog
                                </a>
                                <a href="./contact.html" class="nav-item">
                                    contact
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="login">
                        <div class="login-section">
                            <div class="login-icon">
                                <a href="#">
                                    <i class="bi bi-person-circle"></i><span>login</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

        `
    }
}

customElements.define ("my-nav", navbar);

// custom footer

class myfooter extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-content-item text-uppercase">
                    <div class="footer-item">
                        <div class="footer-company-info">
                            <!-- <h1 class="text-lowercase">
                                ussbd.com
                            </h1> -->
                            <img src="../image/unicorn-removebg-preview.png" alt="logo">
                            <h5>
                                ELEGANCE, INTELLIGENCE, PATIENCE ...
                            </h5>
                            <p>
                                tel: <a class="text-decoration-none" href="tel:+8801797459533">
                                    +880 1797 459 533
                                </a>
                            </p>
                            <p class="text-capitalize">
                                474, Nirala-24 No Road, Khulna
                            </p>
                        </div>
                    </div>
                    <div class="footer-item">
                        <div class="footer-menu">
                            <h1>menu</h1>
                            <li><a href="../../index.html">
                                    home
                                </a></li>
                            <li><a href="../page/aboutUs.html">
                                    about us
                                </a></li>
                            <li><a href="#">
                                    portfolio
                                </a></li>
                            <li><a href="#">
                                    service
                                </a></li>
                            <li><a href="#">
                                    blog
                                </a></li>
                            <li><a href="#">
                                    contact
                                </a></li>
                        </div>
                    </div>
                    <div class="footer-item">
                        <div class="footer-service-menu">
                            <h1>services</h1>
                            <li><a href="#">
                                    Infrastructure and Cloud Services
                                </a></li>
                            <li><a href="#">
                                    Network Services
                                </a></li>
                            <li><a href="#">
                                    Testing Services
                                </a></li>
                            <li><a href="#">
                                    Business Excellence Services
                                </a></li>
                            <li><a href="#">
                                    Integrated Engineering Solutions
                                </a></li>
                            <li><a href="#">
                                    Performance Engineering
                                </a></li>
                            <li><a href="#">
                                    Oracle
                                </a></li>
                            <li><a href="#">
                                    Artificial Intelligence
                                </a></li>
                            <li><a href="#">
                                    Cyber Security
                                </a></li>
                            <li><a href="#">
                                    Intelligent Automation
                                </a></li>
                        </div>
                    </div>
                </div>
                <hr class="container-lg">
                <div class="copyright-section container-sm text-uppercase">
                    <p>
                    <h3>say hello</h3>
                    Interested to work with us? Drop a mail to:
                    <a href="mailto:abusid@ussbd.com" class="text-decoration-underline">us</a>
                    </p>
                    <p class="mb-0">
                        &#169; ALL RIGHT RESERVED TO <a class="text-decoration-underline" href="#">USSBD.COM</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

        `
    }
}

customElements.define ("my-footer", myfooter);