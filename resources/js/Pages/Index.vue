<script setup>
    import { Head } from '@inertiajs/vue3'
    import Layout from './../Components/Layout.vue'
    import Dialog from './../Components/Dialog.vue'
    import FormAdd from './../Components/FormAdd.vue'
    import FormEdit from './../Components/FormEdit.vue'
    import FormDelete from './../Components/FormDelete.vue'
</script>

<template>
    <Layout>
        <Dialog>
            <template v-slot:button-text>
                Add
            </template>
            <template v-slot:dialog-title>
                Add New Car
            </template>
            <template v-slot:dialog-content>
                <FormAdd />
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            1
                        </td>
                        <td class="px-6 py-4">
                            DW22233
                        </td>
                        <td class="px-6 py-4">
                            Mercedes
                        </td>
                        <td class="px-6 py-4">
                            MP-4
                        </td>
                        <td class="px-6 py-4">
                            2020-02-02 12:25
                        </td>
                        <td class="px-6 py-4">
                            2020-02-02 12:55
                        </td>
                        <td class="flex gap-2 justify-center px-6 py-4">
                            <Dialog>
                                <template v-slot:button-text>
                                    Edit
                                </template>
                                <template v-slot:dialog-title>
                                    Edit Car
                                </template>
                                <template v-slot:dialog-content>
                                    <FormEdit />
                                </template>
                            </Dialog>
                            <Dialog>
                                <template v-slot:button-text>
                                    Delete
                                </template>
                                <template v-slot:dialog-title>
                                    Delete Car
                                </template>
                                <template v-slot:dialog-content>
                                    <FormDelete />
                                </template>
                            </Dialog>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </Layout>
</template>