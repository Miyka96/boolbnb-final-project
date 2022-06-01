<template>
    <div class="ms-messages p-4 m-4">
        <h3>
            Messages
        </h3>

        <div v-for="element in arrayProva" :key="element.id">
            <h5>
                Message from Eric
            </h5>
            <span class="d-none d-sm-inline ml-1">
                sent at 
            </span>
            <span>
               30/05/2022
            </span>
            <p class="ms-read">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, dolores debitis! Delectus quia sit, quos accusamus, repudiandae recusandae facere natus consequatur harum sed tempora? Dolor, accusamus? In vel corporis quo recusandae cum nemo quam soluta, quisquam provident adipisci nobis culpa veniam rem quibusdam asperiores nesciunt possimus repellendus aliquam facilis totam dolorum dicta consequuntur? Nulla, fuga est. Repellendus, itaque sequi autem minus et voluptas earum assumenda doloribus consectetur magnam aperiam eaque eius dolores aut animi dicta optio soluta corrupti repellat cupiditate nisi molestias fuga repudiandae obcaecati? Voluptas, quo quidem deleniti praesentium aspernatur voluptates sunt quis enim, id fuga adipisci laboriosam tempore ad explicabo ex minus numquam. Cumque quas ducimus, iusto, aut perferendis soluta natus ipsa porro corrupti ipsum suscipit similique perspiciatis nobis! Qui at natus impedit, laudantium asperiores eaque vel error voluptate. Perspiciatis aspernatur laboriosam explicabo alias repellat dolor omnis. Inventore et reiciendis similique laboriosam aliquid recusandae, consectetur quo iusto, vitae voluptate ea. Cupiditate officiis harum a repudiandae explicabo, nulla iure, et voluptates fuga laboriosam nam? Quisquam, quo vel? Distinctio aliquid quam quasi cupiditate temporibus reprehenderit repellat quidem doloremque sapiente aut. Quis dolorum cum quam quos adipisci unde magnam veniam dignissimos accusamus facilis impedit quo aspernatur fugit, magni atque error alias corporis eum explicabo assumenda totam quod! Distinctio id a ipsum optio sequi dolorem voluptate tenetur cum, nam dolore unde quas veniam quo non, aliquid adipisci corrupti! Laboriosam, repudiandae ipsa. Facere voluptatibus placeat consectetur eveniet vero est, ipsa commodi adipisci nemo at quidem veniam excepturi quam quae? Ipsam repudiandae esse vel?
            </p>
        </div>
        
    </div>
</template>

<script>
    export default {
        data() {
            return {
                arrayProva: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
            }
        },
        mounted() {
            let paragraphs = document.querySelectorAll("p");

            for (let i = 0; i < paragraphs.length; i++) {
                paragraphs[i].onclick = function() {
                    this.classList.toggle('ms-active-height');
                    
                    setTimeout(messageRead => {
                        this.classList.remove('ms-read');
                    }, 500);
                }
            }
        }
    }
</script>

<style lang="scss" scoped>

    .ms-active-height {
        height: auto !important;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1; 
    }
    
    ::-webkit-scrollbar-thumb {
        background: #C9C4BE; 
    }

.ms-messages {
    box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    position: fixed;
    top: 75px;
    background-color: white;
    height: 500px;
    overflow-y: scroll;
    margin: 0 auto;

    h3, p {
        border-bottom: 1px solid #C9C4BE;
        padding-bottom: 5px;
        margin: 6px 0px;
    }

    h3 {
        color: white;
        font-weight: bold;
        font-size: 16px;
        padding: 10px;
        background-color: #FF385C;
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.15);
        border: 0;
        display: inline-block;
    }

    h5 {
        margin: 0;
        margin-top: 6px;
        display: inline-block;
    }

    span {
        color: #C9C4BE;
        font-size: smaller;
    }

    p {
        margin: 0;
        height: 25px;
        overflow: hidden;
        position: relative;
        font-size: 14px;
        padding-right: 10px;
        cursor: pointer;
    }

    .ms-read {
        border-right: 5px solid #FF385C;
    }
}

</style>