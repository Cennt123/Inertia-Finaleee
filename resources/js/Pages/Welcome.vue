<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Welcome" />
    <div class="bg-image bg-gray-50 text-black/50 dark:bg-gray-900 dark:text-white/50 min-h-screen flex flex-col">
        <header class="w-full flex justify-between items-center p-6">
            <div class="flex justify-center lg:col-start-2">
                <!-- Logo or other content can go here -->
            </div>
            <nav v-if="canLogin" class="flex gap-4">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                >
                    Dashboard
                </Link>
                <template v-else>
                    <Link
                        :href="route('login')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Log in
                    </Link>
                    <Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Register
                    </Link>
                </template>
            </nav>
        </header>
        <main class="flex-grow flex items-center justify-center">
            <div id="screenshot-container">
                <img src="path/to/your/image.jpg" @error="handleImageError" alt="Screenshot" />
            </div>
        </main>
        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
        </footer>
    </div>
</template>


<style>
body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    background-color: #f9fafb; /* Add background color */
}

.flex {
    display: flex;
}

.flex-col {
    flex-direction: column;
}

.items-center {
    align-items: center;
}

.justify-center {
    justify-content: center;
}

.flex-grow {
    flex-grow: 1;
}

.min-h-screen {
    min-height: 100vh;
}

.p-6 {
    padding: 1.5rem;
}

.py-16 {
    padding-top: 4rem;
    padding-bottom: 4rem;
}

.text-black {
    color: black;
}

.text-white {
    color: white;
}

.bg-gray-50 {
    background-color: #f9fafb;
}

.dark\\:bg-gray-900 {
    background-color: #b9c8e5; /* Adjusted dark mode background color */
}

a {
    text-decoration: none;
}

.rounded-md {
    border-radius: 0.375rem;
}

.px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
}

.py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}

.ring-1 {
    box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.05);
}

.ring-transparent {
    box-shadow: 0 0 0 1px transparent;
}

.transition {
    transition: all 0.3s ease-in-out;
}

.bg-image {
    background-image: url('https://www.interweave.in/wp-content/uploads/2018/08/Senior-Citizens-Community-Resource-Fair-header.jpg');
    background-size: cover;
    background-position: center;
}
</style>
