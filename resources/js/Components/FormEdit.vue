<script setup>
import { useForm } from '@inertiajs/vue3'

    const props = defineProps({
        types: Array,
        brands: Array,
        vehicle: Object,
    })

    const form = useForm({
        type: props.vehicle.type,
        brand: props.vehicle.brand,
        model: props.vehicle.model,
        licence_number: props.vehicle.licence_number,
    })

    function update() {
        form.put('/vehicles/' + props.vehicle.id, {
            preserveScroll: true,
        });
    }
</script>

<template>
    <form @submit.prevent="update" class="flex flex-col gap-4 mt-6">
        <div class="col-span-full">
            <label for="type" class="block text-sm font-medium leading-6 text-gray-900">Typ</label>
            <div class="flex flex-col mt-2">
                <select id="type" v-model="form.type" name="type" class="flex w-full rounded-md border-0 py-2.5 px-2 text-sm text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 leading-6">
                    <option v-for="type in types" :value="type">{{ type.charAt(0).toUpperCase() + type.slice(1) }}</option>
                </select>
                <div class="mt-2 text-xs text-red-600" v-if="form.errors.type">{{ form.errors.type }}</div>
            </div>
        </div>
        <div class="col-span-full">
            <label for="brand" class="block text-sm font-medium leading-6 text-gray-900">Marka</label>
            <div class="flex flex-col mt-2">
                <select id="brand" v-model="form.brand" name="brand" class="flex w-full rounded-md border-0 py-2.5 px-2 text-sm text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 leading-6">
                    <option v-for="brand in brands" :value="brand">{{ brand.charAt(0).toUpperCase() + brand.slice(1) }}</option>
                </select>
                <div class="mt-2 text-xs text-red-600" v-if="form.errors.brand">{{ form.errors.brand }}</div>
            </div>
        </div>
        <div class="col-span-full">
            <label for="model" class="block text-sm font-medium leading-6 text-gray-900">Model</label>
            <div class="mt-2">
                <input type="text" name="model" v-model="form.model" id="model" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
                <div class="mt-2 text-xs text-red-600" v-if="form.errors.model">{{ form.errors.model }}</div>
            </div>
        </div>
        <div class="col-span-full">
            <label for="licence-number" class="block text-sm font-medium leading-6 text-gray-900">Nr Rejestracyjny</label>
            <div class="mt-2">
                <input type="text" name="licence_number" v-model="form.licence_number" id="licence-number" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
                <div class="mt-2 text-xs text-red-600" v-if="form.errors.licence_number">{{ form.errors.licence_number }}</div>
            </div>
        </div>
        <button type="submit" class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Save</button>
    </form>
</template>
