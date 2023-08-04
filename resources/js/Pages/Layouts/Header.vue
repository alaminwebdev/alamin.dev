<template >
    <nav class="navbar sticky-top border-bottom">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <Link href="/" class="navbar-brand text-primary-emphasis fw-bold" >{ Mohammad Alamin } </Link>
            <div class="offcanvas offcanvas-end shadow" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold fs-1 text-primary-emphasis" id="offcanvasNavbarLabel">Menu</h5>
                </div>
                <div class="offcanvas-body d-flex flex-column justify-content-between">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <Link href="/" class="nav-link fw-bold fs-4 active text-primary-emphasis">Home</Link>
                        </li>
                        <li class="list-group-item">
                            <Link href="/about" class="nav-link fw-bold fs-4 text-primary-emphasis">About</Link>
                        </li>
                        <li class="list-group-item">
                            <Link href="/contact" class="nav-link fw-bold fs-4 text-primary-emphasis">Contact</Link>
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
    components: { Link }
}
</script>
<style>
.offcanvas{
    background: rgba(255, 255, 255, 0.40);
    backdrop-filter: blur(6.6px);
    -webkit-backdrop-filter: blur(6.6px);
}
.list-group-item{
    background: none;
}
.navbar .offcanvas-backdrop {
    background-color: #fff !important;
}
</style>