<template >
    <nav class="navbar sticky-top border-bottom" style="z-index: 1050;">
        <div class="container-fluid">
            <a class="navigation_button" :class="{ show : isBtnClose}" @click="handleButton" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navigation_icon"></span>
            </a>
            <Link href="/" class="navbar-brand text-primary-emphasis fw-bold" >{ Mohammad Alamin } </Link>
            <div class="offcanvas offcanvas-end shadow" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold fs-1 text-primary-emphasis" id="offcanvasNavbarLabel">Menu</h5>
                </div>
                <div class="offcanvas-body d-flex flex-column justify-content-between">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <Link href="/" class="d-block fw-bold fs-4 text-primary-emphasis navigation_link">Home</Link>
                        </li>
                        <li class="list-group-item">
                            <Link href="/about" class="d-block fw-bold fs-4 text-primary-emphasis navigation_link">About</Link>
                        </li>
                        <li class="list-group-item">
                            <Link href="/contact" class="d-block fw-bold fs-4 text-primary-emphasis navigation_link">Contact</Link>
                        </li>
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </nav>
</template>
<script>
import { Link } from '@inertiajs/vue3'
export default {
    data() {
        return {
            isBtnClose:false,
        }
    },
    components: { Link },
    methods:{
        handleButton(){
            this.isBtnClose = !this.isBtnClose;
        }
    }
}
</script>
<style>
.offcanvas {
    background: rgba(255, 255, 255, 0.40);
    backdrop-filter: blur(6.6px);
    -webkit-backdrop-filter: blur(6.6px);
    transition: all 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28)
}

.offcanvas.offcanvas-end {
    border-left:0;
}

.list-group-item {
    background: none;
}

.navbar .offcanvas-backdrop {
    background-color: #fff !important;
}


.navigation_button {
    background-color: #8254e5;
    height: 50px;
    width: 50px;
    border-radius: 50%;
    z-index: 2000;
    cursor: pointer;
    position: relative;
}


.navigation_link{
    letter-spacing: 2px;
    text-decoration: none;
    transition: all 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28);
}

.navigation_link:hover,
.navigation_link:active {
    transform: translateX(10px);
}

.navigation_icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}

.navigation_icon,
.navigation_icon::before,
.navigation_icon::after {
    width: 20px;
    height: 2px;
    background-color: #fff;
    display: inline-block;
}

.navigation_icon::before,
.navigation_icon::after {
    content: "";
    position: absolute;
    left: 0;
    transition: all 0.3s cubic-bezier(0.18, 0.89, 0.32, 1.28)
}

.navigation_icon::before {
    top: -7px;
}

.navigation_icon::after {
    top: 7px;
}

.navigation_button.show .navigation_icon {
    background-color: transparent;
}
.navigation_button.show .navigation_icon::before {
    top: 0;
    transform: rotate(135deg);
}

.navigation_button.show .navigation_icon::after {
    top: 0;
    transform: rotate(-135deg);
}

.navigation__checkbox:checked+.navigation__button .navigation__icon {
    background-color: transparent;
}

.navigation__checkbox:checked+.navigation__button .navigation__icon::before {
    top: 0;
    transform: rotate(135deg);
}

.navigation__checkbox:checked+.navigation__button .navigation__icon::after {
    top: 0;
    transform: rotate(-135deg);
}</style>