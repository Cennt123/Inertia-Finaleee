
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import MyLayout from '@/Layouts/MyLayout.vue';
import { useForm } from '@inertiajs/vue3';
import { defineProps } from 'vue';

const props = defineProps({
  cetizen: {
    type: Object,
    default: () => ({
      fname: '',
      lname: '',
      gender: '',
      age: '',
      bod: '',
      address: '',
      image: '',
    }),
  },
  errors: Object,
});

console.log(props);

const form = useForm({
  fname: props.cetizen?.fname ?? '',
  lname: props.cetizen?.lname ?? '',
  gender: props.cetizen?.gender ?? '',
  age: props.cetizen?.age ?? '',
  bod: props.cetizen?.bod ?? '',
  address: props.cetizen?.address ?? '',
  image: props.cetizen?.image ?? '',
});

const submit = () => {
  form.put(route('citizen.update', props.cetizen.id));
};
</script>

<template>

  <MyLayout>
    <AuthenticatedLayout>
    <div key="edit-page">
    <h1 class="text-4xl mt-2 ml-1">Edit Citizen</h1>

    <div style="max-width: 400px;" class="p-4">
        <form @submit.prevent="submit" class="space-y-4">
            <div>
                <label for="fname" class="block text-sm font-medium text-gray-700">First Name</label>
                <input v-model="form.fname" type="text" id="fname" name="fname" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div>
                <label for="lname" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input v-model="form.lname" type="text" id="lname" name="lname" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div>
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                <input v-model="form.gender" type="text" id="gender" name="gender" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div>
                <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                <input v-model="form.age" type="number" id="age" name="age" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div>
                <label for="bod" class="block text-sm font-medium text-gray-700">Birth Date</label>
                <input v-model="form.bod" type="date" id="bod" name="bod" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <input v-model="form.address" type="text" id="address" name="address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Image URL</label>
                <input v-model="form.image" type="text" id="image" name="image" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="flex items-center justify-end">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 disabled:opacity-25 transition">Submit</button>
            </div>
        </form>
    </div>
</div>
</AuthenticatedLayout>
  </MyLayout>

</template>
