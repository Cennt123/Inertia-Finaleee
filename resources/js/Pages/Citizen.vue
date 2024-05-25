<template>
     <AuthenticatedLayout>
    <div class="mt-4">
        <div class="divv flex justify-between items-center mb-4">
            <h1 class="text-4xl ml-5">Senior Citizens</h1>
            <Link :href="route('cetizen.create')" class="btn btn-primary">Add</Link>
        </div>

        <div class="overflow-auto min-h-[10vh]">
            <transition-group name="fade">
                <div v-for="cetizen in cetizens" :key="cetizen.id" class="bg-white mt-2 border rounded-lg p-4 flex items-center relative" id="card">
                    <button @click="deleteCetizen(cetizen.id)" class="delete-btn absolute top-2 right-2">X</button>
                    <div class="flex-shrink-0">
                        <img :src="cetizen.image" alt="Cetizen Image" class="w-32 h-32 object-cover rounded-md">
                    </div>
                    <div class="ml-4 flex-grow">
                        <div>
                            <h1 class="text-lg font-semibold text-gray-800">{{ cetizen.fname }} {{ cetizen.lname }}</h1>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600">{{ cetizen.gender }}</p>
                            <p class="text-sm text-gray-600">{{ cetizen.age }}</p>
                        </div>
                    </div>
                    <div>
                        <Link :href="route('cetizen.edit', { id: cetizen.id })" class="btn btn-primary edit">Edit</Link>
                    </div>
                </div>
            </transition-group>
        </div>
    </div>
</AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MyLayout from '@/Layouts/MyLayout.vue';
import { defineProps } from 'vue';
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    cetizens: Array
});

const deleteCetizen = (id) => {
    if (confirm('Are you sure you want to delete this citizen?')) {
        Inertia.delete(route('cetizen.destroy', { id }));
    }
};

defineOptions({
  layout: MyLayout
});
</script>

<style scoped>
.divv {
  display: flex;
  margin-bottom: 1rem;
}
.btn-primary {
  background-color: blue;
  color: #ffffff;
  padding: 0.5rem 1rem;
  border-radius: 0.25rem;
  text-align: center;
  text-decoration: none;
}
.edit {
  margin-left: auto;
  margin-right: 0;
}
.delete-btn {
  background-color: red;
  color: white;
  border: none;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.fade-enter-active, .fade-leave-active {
    transition: opacity 0.3s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active in <2.1.8 */ {
    opacity: 0;
}
</style>
