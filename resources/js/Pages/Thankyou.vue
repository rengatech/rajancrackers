<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Head } from '@inertiajs/vue3'
import { onMounted } from 'vue'

const props = defineProps({
    orderId: Number,
})

onMounted(() => {
    setTimeout(() => {
        window.location.href = `/admin/orders/${props.orderId}/download`
    }, 2000)
})
</script>

<template>
    <Head title="Thank You" />

    <AppLayout>
        <div class="flex min-h-[70vh] items-center justify-center px-4 py-12">
            <div class="text-center">
                <!-- Spinner -->
                <div class="mx-auto mb-4 h-12 w-12 animate-spin rounded-full border-4 border-gray-200 border-t-brand-red"></div>
                <p class="text-sm text-gray-500">Please wait while the estimate is being downloaded...</p>

                <!-- Thank you card -->
                <div class="mx-auto mt-8 max-w-xs rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mx-auto mb-3 h-10 w-10 text-brand-red">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                    <h3 class="font-heading text-xl font-bold text-brand-dark">THANK YOU</h3>
                    <p class="mt-2 text-sm text-gray-500">For creating an estimate with Madhu Crackers</p>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
