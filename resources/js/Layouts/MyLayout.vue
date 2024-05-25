    <script setup>
        import { Link } from "@inertiajs/vue3";



    </script>

    <template>

        <div id="main-wrapper">
            <div id="sidebar" class="min-w-[500px] bg-black flex flex-col items-center">

                <div>
                    <h1 class="mt-[20%] fw-bold">Senior Citizens<br> </h1>

                </div>
                <div id="branding">
                    <iframe width="360" height="315" src="https://www.youtube.com/embed/1oDhFnkiRRo?si=xCN1giA5KXj2ZQrg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>


            </div>
            <div id="content" class="flex flex-col flex-1">
        <div class="flex-1 p-8">
            <Transition name="page-trans" mode="out-in">

                <slot />

            </Transition>
        </div>
        <footer class="py-4 text-gray-500 text-center">
            Copyright &copy; Senior Citizens.
        </footer>
        </div>
    </div>
    </template>

    <style scoped>

    .page-trans-enter-active, .page-trans-leave-active {
    transition: opacity 0.5s;
    }
    .page-trans-enter-from, .page-trans-leave-to {
    opacity: 0;
    }


    h4 {
    margin-top: 10%;
    font-size: 20px;
    color: white;
    }

    h1 {
    font-size: 40px;
    color: white;
    }

    #main-wrapper {
    min-height: 100svh;
    display: flex;
    }

    #branding img {
    width: 150px;
    margin-top: 24px;
    }

    .btn-btn {
    background-color: teal;
    color: #ffffff;
    }

    nav a {
    @apply py-4 text-white text-xl hover:bg-pink-400 w-full text-center;
    }
    </style>
