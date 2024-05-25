<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MyLayout from '@/Layouts/MyLayout.vue';
import { useForm } from '@inertiajs/vue3';
import { defineProps, defineOptions } from 'vue';

defineOptions({
    layout: MyLayout,

});


const form = useForm({
    fname: '',
    lname: '',
    gender: '',
    age: '',
    bod: '',
    address: '',
    image: ''
});

const submit = () => {
    form.submit('post', '/Citizens');
};

const props = defineProps({
    cetizens: Object,
    errors:Object
});
</script>
<template>
      <AuthenticatedLayout>
<div>
    <h1 class="text-4xl mt-2 ml-1">Add New Citizen</h1>

    <div style="max-width: 400px;" class="p-4">
        <form @submit.prevent="submit" class="space-y-4">

            <div>
                <label for="fname" class="block text-sm font-medium text-gray-700">First Name</label>
                <input v-model="form.fname" type="text" id="fname" name="fname" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <div class="text-danger text-xs" v-if="errors.fname">{{ errors.fname }}</div>
            </div>


            <div>
                <label for="lname" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input v-model="form.lname" type="text" id="lname" name="lname" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <div class="text-danger text-xs" v-if="errors.lname">{{ errors.lname }}</div>

            </div>
            <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                    <select v-model="form.gender" id="gender" name="gender" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <div class="text-danger text-xs" v-if="errors.gender">{{ errors.gender }}</div>

                </div>


            <div>
                <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                <input v-model="form.age" type="number" id="age" name="age" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <div class="text-danger text-xs" v-if="errors.age">{{ errors.age }}</div>

            </div>
            <div>
                <label for="bod" class="block text-sm font-medium text-gray-700">Birth Date</label>
                <input v-model="form.bod" type="date" id="bod" name="bod" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <div class="text-danger text-xs" v-if="errors.bod">{{ errors.bod }}</div>

            </div>
            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <input v-model="form.address" type="text" id="address" name="address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <div class="text-danger text-xs" v-if="errors.address">{{ errors.address }}</div>

            </div>


            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Image URL</label>
              <input v-model="form.image" type="text" id="image" name="image" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
              <div class="text-danger text-xs" v-if="errors.image">{{ errors.image }}</div>

            </div>


            <div class="flex items-center justify-end">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">Submit</button>
            </div>
        </form>
    </div>
</div>
</AuthenticatedLayout>
</template>
