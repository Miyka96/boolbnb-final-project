<template>
    <div class="container-fluid text-white text-uppercase">
        <div class="filter d-flex flex-column align-items-center justify-content-center">
            <h1>404</h1>
            <div class="testo">Ops! Qualcosa è andato storto.</div>
            <span><a href="/"></a></span>
        </div>
    </div>
</template>

<script>
export default {
       
    }
</script>

<style scoped lang="scss">
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container-fluid{
    height: 100vh;
    width: 100%;
    background-image: url('https://picsum.photos/1920/1080');
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'Oswald', sans-serif;

    a{
        color: currentColor;
        text-decoration: none;
    }

    .filter{
        height: 100%;
        width: 100%;
        background-color: rgba(black, 0.5);
    }

    h1{
        font-size: 10rem;
    }

    .testo{
        font-size: 2rem;
        padding: 15px 0;
    }

   span{
        display: inline-flex;
        width: 180px;
        height: 55px;
        margin: 0 15px;
        
    }

    span a{
        font-size: 19px;
        letter-spacing: 1px;
        transform-style: preserve-3d;
        transition: transform .25s;   
    }

    span a:before, span a:after{
        position: absolute;
        content: "GO HOME";
        height: 55px;
        width: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 5px solid white;
        box-sizing: border-box;
        border-radius: 5px;
    }

    span a:before{
        color: white;
        background: transparent;
        transform: rotateY(0deg) translateZ(25px);
    }

    span a:after{
        color: black;
        background-color: white;
        transform: rotateX(90deg) translateZ(25px);
    }

    span a:hover{
        transform: translateZ(-25px) rotateX(-90deg);
    }
    
}

</style>