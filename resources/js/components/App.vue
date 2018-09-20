<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <router-link class="navbar-brand" to="/">
                <a class="nav-link">Сусамов Тахан</a>
            </router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <router-link-active class="nav-item" tag="li" to="/order">
                        <a class="nav-link">Поръчай</a>
                    </router-link-active>
                    <router-link class="nav-item" tag="li" to="/about">
                        <a class="nav-link">За Нас</a>
                    </router-link>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Продукция
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Сусамов тахан</a>
                            <a class="dropdown-item" href="#">Брашно от Лимец</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Сусамово масло</a>
                            <a class="dropdown-item" href="#">Пчелен мед</a>
                        </div>
                    </li>
                    <router-link class="nav-item" tag="li" to="/contacts">
                        <a class="nav-link">Контакти</a>
                    </router-link>
                    <router-link class="nav-item" tag="li" to="/technology">
                        <a class="nav-link">Технология</a>
                    </router-link>
                    <router-link class="nav-item" tag="li" to="/gallery">
                        <a class="nav-link">Галерия</a>
                    </router-link>
                    <router-link class="nav-item" tag="li" to="/videos">
                        <a class="nav-link">Видео</a>
                    </router-link>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
  }
</script>