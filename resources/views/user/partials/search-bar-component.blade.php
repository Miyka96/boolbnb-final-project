<div class="d-flex justify-content-center mx-3">
    <input class="px-3" type="text" placeholder="Cerca l'appartamento dei tuoi sogni">
    <span class="d-flex justify-content-center align-items-center">
        <div class="d-flex justify-content-center align-items-center">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </span>
</div>

<style lang="scss" scoped>
    div {
        width: 100%;
    }

    input, span {
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
        height: 44px;
        border: 1px solid #C9C4BE;
        cursor: pointer;
    }

    input {
        max-width: 400px;
        flex-grow: 1;
        border-right: 0;
        color: #717171;
        outline: none;
        font-size: small;
        gap: 15px;
        border-radius: 25px 0px 0px 25px;
    }

    span {
        width: 40px;
        border-radius: 0px 25px 25px 0px;
        background-color: white;
        border-left: 0;
        color: white;

        div {
            background-color: #FF385C;
            border-radius: 25px;
            text-align: center;
            height: 30px;
            width: 30px;
            font-size: smaller;
            margin-right: 5px;
        }
    }
</style>