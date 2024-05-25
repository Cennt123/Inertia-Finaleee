<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import MyLayout from '@/Layouts/MyLayout.vue';
    import { Link } from '@inertiajs/vue3';

    defineOptions({
        layout: MyLayout
    });
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <div class="container">
        <h1 class="text-4xl h1">About Us</h1>
        <hr>
        <p class="mt-2">
            Welcome to Citizens, a vibrant and dynamic online platform where creativity, collaboration, and imagination come to life. At Citizens, we believe in the power of storytelling and the magic of shared experiences. Whether you're a seasoned role-player or a newcomer to the world of interactive fiction, there's a place for you in our diverse and inclusive community.
        </p>
        <p>
            Our platform provides a space for individuals from all walks of life to come together and craft compelling narratives, explore immersive worlds, and forge meaningful connections with fellow citizens. With a wide range of settings, genres, and characters to choose from, the possibilities are endless.
        </p>
        <p>
            Whether you're embarking on a thrilling adventure, unraveling a gripping mystery, or simply engaging in casual conversation with fellow citizens, you'll find a welcoming and supportive community ready to join you on your journey.
        </p>
    <div class="buttons">
        <!-- <button class="but">Resume</button> -->
        <Link href="/cetizen" class="but">Citizens</Link>
    </div>
</div>
    </AuthenticatedLayout>
</template>
<style scoped>
.h1{
    margin-top: 100px;
    margin-left: 100px;
}
p {
    max-width: 600px;
    margin-left: 100px;
}
.buttons {
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-top: 100px;
}

.but {
    background-color: transparent;
    border: 1px solid black;
    padding: 10px 20px;
    width: 200px;
    text-align: center;
    transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
}

.but:hover {
    background-color: black;
    color: white;
    transform: translateY(-3px);
}
</style>
