<template>
    <div class="d-flex flex-column align-items-end">
        <div @click="showMenu()">
            <span id="msPill" class="badge rounded-pill text-bg-light d-flex justify-content-end align-items-center">
                <i class="fa-solid fa-bars"></i>
                <i class="fa-solid fa-circle-user"></i>
            </span>
        </div>

        <div id="hidden-menu" class="ms-hidden py-3">
            <div class="d-flex justify-content-start flex-column align-items-evenly ms-link">
                <a href="" class="ms-link">
                    Registrati
                </a>
                <a href="" class="ms-link">
                    Login
                </a>
                <span class="ms-link">

                </span>
                <a href="" class="ms-link">
                    Diventa un host
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        methods: {
            showMenu() {
                document.getElementById('hidden-menu').classList.toggle('ms-hidden');
                document.getElementById("msPill").classList.toggle("ms-box-shadow");
            }
        },
        mounted() {
                document.onclick = function(e) {
                    let hiddenMenu = document.getElementById('hidden-menu');
                    let pillButton = document.getElementById("msPill");

                    if(e.target.id !== 'hidden-menu' && e.target.id !== 'msPill' && e.target.className !== 'ms-link') {
                        hiddenMenu.classList.add('ms-hidden');
                        pillButton.classList.remove("ms-box-shadow");
                    }
                }
            }
        }
</script>

<style lang="scss" scoped>

    .ms-box-shadow {
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
    }

    .ms-hidden {
        display: none;
    }

    span {
        border: 1px solid #C9C4BE;
        color: #717171;
        width: 80px;
        height: 44px;
        gap: 15px;
        cursor: pointer;
        
        .fa-bars {
            font-size: 16px;
            position: relative;
            z-index: -1;
        }

        .fa-circle-user {
            font-size: 30px;
            position: relative;
            z-index: -1;
        }
    }

    span:hover {
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
    }

    #hidden-menu {
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
        width: 200px;
        border-radius: 10px;
        position: fixed;
        top: 75px;
        background-color: white;

        a {
            padding-left: 20px;
        }

        span {
            border: 0;
            border-bottom: 1px solid #C9C4BE;
            height: 0px;
            width: 100%;
            margin: 6px 0px;
            cursor: default;
        }

        span:hover {
        box-shadow: none;
        }

        a:first-child {
            font-weight: bold;
        }
    }

    a {
        text-decoration: none;
        color: #717171;
    }

    a:hover {
        background-color:rgb(243, 243, 243);
    }

</style>