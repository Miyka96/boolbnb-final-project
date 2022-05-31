<div class="d-flex justify-content-center m-3">
    <div class="pl-3 pr-2 d-flex justify-content-center align-items-center ms-button">
        Aggiungi
    </div>
    <span class="d-flex justify-content-center align-items-center">
        <div class="d-flex justify-content-center align-items-center">
            <i class="fa-solid fa-plus"></i>
        </div>
    </span>
</div>

<style lang="scss" scoped>

    .ms-button, span {
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
        height: 44px;
        border: 1px solid #C9C4BE;
        background-color: white;
        cursor: pointer;
    }

    .ms-button {
        border-right: 0;
        color: #717171;
        outline: none;
        font-size: small;
        text-transform: uppercase;
        font-weight: bold;
        border-radius: 25px 0px 0px 25px;
    }

    span {
        width: 40px;
        border-radius: 0px 25px 25px 0px;
        border-left: 0;
        color: white;
        cursor: pointer;

        div {
            background-color: #FF385C;
            border-radius: 25px;
            text-align: center;
            height: 30px;
            width: 30px;
            margin-right: 5px;
        }
    }

</style>