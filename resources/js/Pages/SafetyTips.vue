<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Head } from '@inertiajs/vue3'
import { ref } from 'vue'

const showContactModal = ref(false)

const props = defineProps({
    mobile_number_1: String,
    mobile_number_2: String,
    mobile_number_3: String,
    mobile_number_4: String,
    mobile_number_5: String,
    company_address: String,
})

const donts = [
    "Don't put fireworks in any container to ignite.",
    "Never ignite fireworks while holding them. Put them down then ignite them and walk away.",
    "Any malfunctioning fireworks should be abandoned.",
    "Use fireworks outdoors, but not on the public thoroughfare.",
    "Never experiment or make your own fireworks.",
    "Do not use spurious / illegal fireworks.",
]

const dos = [
    "Buy the fireworks from the reliable sellers possessing licence.",
    "Always an adult should supervise the use of fireworks.",
    "Safety precautions marked on the fireworks should be strictly followed.",
    "Use a candle or an agarbathi to ignite the fireworks.",
    "Always keep a bucket of water at hand to extinguish an incipient fire.",
    "Aerial fireworks should be used in a safe landing zone.",
]
</script>

<template>
    <Head title="Safety Tips - Rajan Crackers Sivakasi">
        <meta name="description" content="Safety tips for crackers." />
    </Head>

    <AppLayout
        :company_address="company_address"
        :mobile_number_1="mobile_number_1"
        :mobile_number_2="mobile_number_2"
        :mobile_number_3="mobile_number_3"
        :mobile_number_4="mobile_number_4"
        :mobile_number_5="mobile_number_5"
        @contact-click="showContactModal = true"
    >
        <!-- Contact Modal -->
        <Transition
            enter-active-class="transition duration-200 ease-out"
            enter-from-class="opacity-0"
            enter-to-class="opacity-100"
            leave-active-class="transition duration-150 ease-in"
            leave-from-class="opacity-100"
            leave-to-class="opacity-0"
        >
            <div v-if="showContactModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50" @click.self="showContactModal = false">
                <div class="mx-4 w-full max-w-sm rounded-xl bg-white p-6 text-center shadow-xl">
                    <h3 class="mb-4 font-heading text-lg font-bold text-brand-red">Contact Numbers</h3>
                    <div class="space-y-3">
                        <a v-if="mobile_number_1" :href="`tel:+91${mobile_number_1}`" class="block rounded-lg bg-gray-50 px-4 py-2.5 text-sm font-semibold text-brand-dark hover:bg-red-50 hover:text-brand-red">+91 {{ mobile_number_1 }}</a>
                        <a v-if="mobile_number_2" :href="`tel:+91${mobile_number_2}`" class="block rounded-lg bg-gray-50 px-4 py-2.5 text-sm font-semibold text-brand-dark hover:bg-red-50 hover:text-brand-red">+91 {{ mobile_number_2 }}</a>
                    </div>
                    <button @click="showContactModal = false" class="mt-4 rounded-lg bg-brand-dark px-6 py-2 text-sm font-semibold text-white hover:bg-gray-800">Close</button>
                </div>
            </div>
        </Transition>

        <!-- Banner -->
        <div class="bg-brand-maroon py-6 text-center">
            <h1 class="text-lg font-semibold text-white sm:text-2xl">
                A little caution can make your Diwali happy and safe!
            </h1>
        </div>

        <div class="mx-auto max-w-5xl px-4 py-12">
            <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
                <!-- Don'ts -->
                <div>
                    <div class="mb-4 flex items-center gap-2">
                        <span class="text-2xl">👎</span>
                        <h2 class="text-2xl font-bold text-brand-red">Don'ts</h2>
                    </div>
                    <div class="mb-4 h-0.5 w-16 bg-brand-red"></div>
                    <ul class="space-y-4">
                        <li v-for="(item, i) in donts" :key="i" class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-red-100 text-xs text-red-600">✕</span>
                            <span class="text-gray-700">{{ item }}</span>
                        </li>
                    </ul>
                </div>

                <!-- Do's -->
                <div>
                    <div class="mb-4 flex items-center gap-2">
                        <span class="text-2xl">👍</span>
                        <h2 class="text-2xl font-bold text-blue-600">Do's</h2>
                    </div>
                    <div class="mb-4 h-0.5 w-16 bg-blue-600"></div>
                    <ul class="space-y-4">
                        <li v-for="(item, i) in dos" :key="i" class="flex items-start gap-3">
                            <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-blue-100 text-xs text-blue-600">✓</span>
                            <span class="text-gray-700">{{ item }}</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Eco Friendly -->
            <div class="mt-16 text-center">
                <h2 class="text-2xl font-bold text-blue-900">Eco Friendly</h2>
                <div class="mx-auto mt-2 mb-6 h-0.5 w-16 bg-brand-red"></div>
                <p class="text-gray-700">Our crackers are free of harmful components.</p>
            </div>
        </div>
    </AppLayout>
</template>