<template>
    <form action="" class="flex flex-col gap-4 mt-6">
        <div class="col-span-full">
            <label for="make" class="block text-sm font-medium leading-6 text-gray-900">Marka</label>
            <div class="mt-2">
              <input type="text" name="make" id="make" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
            </div>
        </div>
        <div class="col-span-full">
            <label for="model" class="block text-sm font-medium leading-6 text-gray-900">Model</label>
            <div class="mt-2">
                <input type="text" name="model" id="model" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
            </div>
        </div>
        <div class="col-span-full">
            <label for="licence-number" class="block text-sm font-medium leading-6 text-gray-900">Nr Rejestracyjny</label>
            <div class="mt-2">
                <input type="text" name="licence_number" id="licence-number" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6" />
            </div>
        </div>
        <button type="submit" class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Save</button>
    </form>
</template>

<script setup>

</script>