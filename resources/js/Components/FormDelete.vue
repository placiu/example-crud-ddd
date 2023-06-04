<script setup>
import { router } from '@inertiajs/vue3'

    const props = defineProps({
        vehicle: Object,
    })

    function destroy() {
        router.delete('/vehicles/' + props.vehicle.id);
    }
</script>

<template>
    <p>Are You sure?</p>
    <form @submit.prevent="destroy" class="flex flex-col gap-4 mt-6">
        <button type="submit" class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Confirm</button>
    </form>
</template>
