<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Сусамовтахан</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Поръчай</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">За Нас</a>
                    </li>
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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Технология</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Галерия</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Видео</a>
                    </li>
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