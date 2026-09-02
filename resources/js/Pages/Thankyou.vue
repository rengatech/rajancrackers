<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Head } from '@inertiajs/vue3'
import { computed } from 'vue'

const props = defineProps({
    orderId: Number,
    customerName: String,
    total: Number,
    items: Array,
    whatsappNumber: String,
})

const downloadUrl = computed(() => `/admin/orders/${props.orderId}/download`)

const whatsappMessage = computed(() => {
    const itemsText = (props.items || [])
        .map(item => `${item.name} x${item.quantity} - ₹${item.price * item.quantity}`)
        .join('\n')

    return (
        `*New Order #${props.orderId}*\n` +
        `Name: ${props.customerName}\n\n` +
        `Items:\n${itemsText}\n\n` +
        `Total Amount: ₹${props.total}\n\n` +
        `Download Bill: ${window.location.origin}${downloadUrl.value}`
    )
})

const whatsappLink = computed(() => {
    const number = (props.whatsappNumber || '').replace(/\D/g, '')
    return `https://wa.me/91${number}?text=${encodeURIComponent(whatsappMessage.value)}`
})
</script>

<template>
    <Head title="Thank You" />

    <AppLayout>
        <div class="flex min-h-[70vh] items-center justify-center px-4 py-12">
            <div class="w-full max-w-xs rounded-xl bg-white p-6 text-center shadow-sm ring-1 ring-gray-100">
                <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="white" class="h-7 w-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>

                <h3 class="font-heading text-xl font-bold text-brand-dark">Thank you</h3>
                <p class="mt-1 text-sm text-gray-400">Order #{{ orderId }}</p>

                <p class="mt-4 text-sm text-gray-500">
                    Your order is placed. To confirm it, tap the button below and press
                    <span class="font-semibold text-brand-dark">Send</span> in WhatsApp.
                </p>

                <a :href="whatsappLink" target="_blank" class="mt-6 flex w-full items-center justify-center gap-2 rounded-lg bg-green-600 py-3 text-sm font-semibold text-white transition-colors hover:bg-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                        <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.39 1.26 4.81L2 22l5.42-1.42a9.87 9.87 0 0 0 4.62 1.18h.01c5.46 0 9.9-4.45 9.9-9.91C21.96 6.45 17.5 2 12.04 2zm5.8 14.02c-.24.68-1.4 1.3-1.93 1.38-.5.08-1.12.11-1.8-.11-.42-.13-.95-.31-1.63-.61-2.87-1.24-4.74-4.13-4.88-4.32-.14-.19-1.17-1.55-1.17-2.96 0-1.41.74-2.1 1-2.39.26-.28.58-.35.77-.35.19 0 .39 0 .55.01.18.01.42-.07.65.5.24.58.82 2 .89 2.15.07.14.11.31.02.5-.09.19-.14.31-.28.47-.14.16-.29.36-.42.48-.14.13-.28.27-.12.53.16.26.7 1.16 1.51 1.88 1.04.93 1.91 1.22 2.17 1.36.26.14.41.12.56-.07.16-.19.68-.79.87-1.06.18-.27.36-.22.61-.13.24.09 1.55.73 1.82.87.26.13.44.19.5.3.07.11.07.63-.17 1.31z"/>
                    </svg>
                    Send Order on WhatsApp
                </a>

                <a :href="downloadUrl" class="mt-3 flex w-full items-center justify-center gap-2 rounded-lg border border-brand-red py-3 text-sm font-semibold text-brand-red transition-colors hover:bg-red-50">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                    Download Estimate
                </a>
            </div>
        </div>
    </AppLayout>
</template>