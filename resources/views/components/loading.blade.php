
<style>

    .fullscreen-loader {
        display: flex;
        justify-content: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(22, 21, 21, 0.232);
        z-index: 1000;
    }

    .ld-ripple {
        width: 80px;
        height: 80px;
        position: relative;
    }

    .ld-ripple div {
        position: absolute;
        border: 4px solid #ffffff;
        opacity: 1;
        border-radius: 50%;
        animation: ld-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
    }

    .ld-ripple div:nth-child(2) {
        animation-delay: -0.5s;
    }

    @keyframes ld-ripple {
        0% {
            top: 36px;
            left: 36px;
            width: 0;
            height: 0;
            opacity: 0;
        }

        4.9% {
            top: 36px;
            left: 36px;
            width: 0;
            height: 0;
            opacity: 0;
        }

        5% {
            top: 36px;
            left: 36px;
            width: 0;
            height: 0;
            opacity: 1;
        }

        100% {
            top: 0px;
            left: 0px;
            width: 72px;
            height: 72px;
            opacity: 0;
        }
    }
</style>

<div class="fullscreen-loader" style="display: none" id="wait-loading">
    <div class="ld-ripple">
        <div></div>
        <div></div>
    </div>
</div>
