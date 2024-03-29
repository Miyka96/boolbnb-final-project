<div class="ms-messages p-4 m-4">

    <h3>
        Messages
    </h3>

    @foreach ($messages as $message)
        <h5>
            {{ $message->name }}
        </h5>
        <span class="d-none d-sm-inline ml-1">
            sent at 
        </span>
        <span>
            {{ $message->sent_at }}
        </span>
        <p>
            {{ $message->content }}

            @if ()
                <span id="ms-read">

                </span>
            @endif
            
        </p>
    
</div>
    
@endforeach

<script>
        let paragraphs = document.querySelectorAll("p");

        for (let i = 0; i < paragraphs.length; i++) {
            paragraphs[i].onclick = function() {
                this.classList.toggle('ms-active-height');

                setTimeout(messageRead => {
                    this.classList.remove('ms-read');
                }, 500);
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
    }

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

</style>