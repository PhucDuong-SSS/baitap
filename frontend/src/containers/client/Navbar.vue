<template>
    <div class="container-fluid">
        <div class="nav bg-dark">
            <nav class="menu">
                <ul class="main-menu">
                    <li class="active"><i class="fa fa-home"></i>Home</li>
                    <li class="with-submenu">
                        <i class="fas fa-book-open"></i>N1 <i class="fa fa-caret-down"></i>
                        <ul class="submenu">
                            <li>Grammar</li>
                            <li>Vocabulary</li>
                        </ul>
                    </li>

                    <li class="with-submenu">
                        <i class="<i fas fa-book-open "></i>N2 <i class="fa fa-caret-down"></i>
                        <ul class="submenu">
                            <li>Grammar</li>
                            <li>Vocabulary</li>
                        </ul>
                    </li>
                    <li class="with-submenu">
                        <i class="fas fa-book-open"></i>N3 <i class="fa fa-caret-down"></i>
                        <ul class="submenu">
                            <li>Grammar</li>
                            <li>Vocabulary</li>
                        </ul>
                    </li>
                    <li class="with-submenu">
                        <i class="fas fa-book-open"></i>N4 <i class="fa fa-caret-down"></i>
                        <ul class="submenu">
                            <li>Grammar</li>
                            <li>Vocabulary</li>
                        </ul>
                    </li>
                    <li class="with-submenu">
                        <i class="fas fa-book-open"></i>N5
                        <ul class="submenu">
                            <li>Grammar</li>
                            <li>Vocabulary</li>
                        </ul>
                    </li>


                </ul>
            </nav>
        </div>
        <!-- <article>
            <h1>Home</h1>
            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, et!
                    Veniam, cum. Necessitatibus consectetur, alias facere, cum omnis officia
                    ad architecto dolore rerum voluptatum fuga. Provident, voluptate voluptas? Dolor, blanditiis.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, et!
                    Veniam, cum. Necessitatibus consectetur, alias facere, cum omnis officia
                    ad architecto dolore rerum voluptatum fuga. Provident, voluptate voluptas? Dolor, blanditiis.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, et!
                    Veniam, cum. Necessitatibus consectetur, alias facere, cum omnis officia
                    ad architecto dolore rerum voluptatum fuga. Provident, voluptate voluptas? Dolor, blanditiis.
                </p>
              
            </div>
        </article> -->
    </div>

</template>

<script>
    export default {
        name: 'Navbar'
    }
</script>

<style scoped>
    .nav {
        /* width: 100%;
    height: var(--container-height); */
        /* margin-left: -350px; */
        margin-top: 0px;
        margin-right: auto;
        margin-left: auto;
        top: 0;
        position: relative;
        z-index: 1;
        background: cornflowerblue;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .main-menu {
        display: flex;
        list-style: none;
        margin: auto 0;
        padding: 0.6em 0 0 0;
        width: 100%;
    }

    .main-menu>li {
        box-sizing: border-box;
        height: var(--menu-item-size);
        width: calc(3.5 * var(--menu-item-size));
        line-height: var(--menu-item-size);
        padding: 0 0;
        margin: 0 7px;
        transition: 0.5s linear all;
        background: var(--green-color);
        color: var(--dark-green-color);
        cursor: pointer;
        font-size: 16px;
        text-align: center;

    }

    .main-menu>li:not(.with-submenu) {
        clip-path: polygon(10% 0%, 0% 100%, 95% 100%, 100% 50%, 95% 0%);
        shape-outside: polygon(10% 0%, 0% 100%, 95% 100%, 100% 50%, 95% 0%);
        cursor: pointer;
    }

    .main-menu>li:nth-child(2) {
        transform: translateX(-5%);
    }

    .main-menu>li:nth-child(3) {
        transform: translateX(-10%)
    }

    .main-menu>li:nth-child(4) {
        transform: translateX(-15%)
    }

    .main-menu>li:nth-child(5) {
        transform: translateX(-20%)
    }

    .main-menu>li:nth-child(6) {
        transform: translateX(-25%)
    }

    .main-menu i {
        margin-right: 5px;
    }

    .main-menu>li:hover:not(.active) {
        background: linear-gradient(to right, var(--green-color), var(--blue-color));
        color: var(--white-color);
    }

    .main-menu>li:active:not(.active),
    .main-menu>li:active:not(.with-submenu) {
        background: var(--blue-color);
        color: var(--white-color);
    }

    .main-menu>li:hover i:not(li.active) {
        color: #175c58;
    }

    .main-menu .active {
        color: var(--white-color);
        background: var(--blue-color);
        cursor: default;
        text-shadow: 1px 1px 1px var(--dark-green-color);
        font-size: 18px;
    }

    .submenu {
        display: none;
        position: absolute;
        z-index: 10;
        list-style: none;
        left: 0;
        margin: 0;
        padding: 0;
        min-width: calc(3.5 * var(--menu-item-size) - 5%);
        box-shadow: 5px 5px 5px #CCC;
    }

    .with-submenu {
        position: relative;
        display: inline-block;
        clip-path: polygon(10% 0%, 0% 100%, 0% 500%, 95% 500%, 95% 100%, 100% 50%, 95% 0%);
        shape-outside: polygon(10% 0%, 0% 100%, 95% 100%, 100% 50%, 95% 0%);
    }

    .with-submenu:hover .submenu {
        display: block;
    }

    .submenu>li {
        background: #dedede;
        border-bottom: 1px solid var(--gray-color);
        color: #777;
        padding: 1.2em 1em;
        transition: 0.3s all linear;
        display: block;
        line-height: 0%;
    }

    .submenu>li:hover {
        background: var(--gray-color)
    }

    .submenu>li:active {
        background: var(--white-color);
    }
</style>