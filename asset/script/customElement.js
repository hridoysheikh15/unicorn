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