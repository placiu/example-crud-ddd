<script setup>
    import Layout from './../Components/Layout.vue'
    import Dialog from './../Components/Dialog.vue'
    import FormAdd from './../Components/FormAdd.vue'
    import FormEdit from './../Components/FormEdit.vue'
    import FormDelete from './../Components/FormDelete.vue'

    const props = defineProps({
        types: Array,
        brands: Array,
        vehicles: Object
    })

    function licenceNumberFormatted(licenceNumber) {
        return licenceNumber.toUpperCase();
    }

    function dateFormatted(date) {
        const timestamp = Date.parse(date);
        const dateObject = new Date(timestamp);

        const year = dateObject.getFullYear();
        const month = String(dateObject.getMonth() + 1).padStart(2, '0');;
        const day = String(dateObject.getDay()).padStart(2, '0');
        const hour = String(dateObject.getHours()).padStart(2, '0');
        const minutes = String(dateObject.getMinutes()).padStart(2, '0');

        return year + '.' + month + '.' + day + ' ' + hour + ':' + minutes;
    }
</script>

<template>
    <Layout>
        <Dialog>
            <template v-slot:button-text>
                Add
            </template>
            <template v-slot:dialog-title>
                Add New Vehicle
            </template>
            <template v-slot:dialog-content>
                <FormAdd :brands="props.brands" :types="props.types" />
            </template>
        </Dialog>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Lp.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nr rejestracyjny
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Marka
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Model
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Data utworzenia
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Data modyfikacji
                        </th>
                        <th scope="col" class="flex px-6 py-3 justify-center">
                            Akcje
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="vehicle in vehicles" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" :key="vehicle.id">
                        <td class="px-6 py-4">
                            {{ vehicle.id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ licenceNumberFormatted(vehicle.licence_number) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ vehicle.brand.charAt(0).toUpperCase() + vehicle.brand.slice(1) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ vehicle.model }}
                        </td>
                        <td class="px-6 py-4">
                            {{ dateFormatted(vehicle.created_at) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ dateFormatted(vehicle.updated_at) }}
                        </td>
                        <td class="flex gap-2 justify-center px-6 py-4">
                            <Dialog>
                                <template v-slot:button-text>
                                    Edit
                                </template>
                                <template v-slot:dialog-title>
                                    Edit Vehicle
                                </template>
                                <template v-slot:dialog-content>
                                    <FormEdit :brands="brands" :types="types" :vehicle="vehicle"/>
                                </template>
                            </Dialog>
                            <Dialog>
                                <template v-slot:button-text>
                                    Delete
                                </template>
                                <template v-slot:dialog-title>
                                    Delete Vehicle
                                </template>
                                <template v-slot:dialog-content>
                                    <FormDelete :vehicle="vehicle"/>
                                </template>
                            </Dialog>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </Layout>
</template>
