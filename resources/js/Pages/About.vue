<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Head } from '@inertiajs/vue3'
import { ref } from 'vue'

const showContactModal = ref(false)

const props = defineProps({
    about_page: Object,
    company_address: String,
    mobile_number_1: Number,
    mobile_number_2: Number,
    mobile_number_3: Number,
    mobile_number_4: Number,
    mobile_number_5: Number,
})

const features = [
    { title: 'Genuine Price', icon: 'receipt', key: 'genuine_price' },
    { title: 'Best Quality', icon: 'cube', key: 'best_quality' },
    { title: 'Safe To Use', icon: 'shield-check', key: 'safe_to_use' },
    { title: 'Trusted', icon: 'shield', key: 'trusted' },
]
</script>

<template>
    <Head title="About Us - Rajan Crackers Sivakasi">
        <meta name="description" content="About Rajan Crackers - Trusted wholesale and retail crackers dealer in Sivakasi, Tamil Nadu. Genuine prices, best quality, safe green crackers." />
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

        <div class="mx-auto max-w-6xl px-4 py-8">
           
            <!-- About Section -->
            <div v-for="about in about_page" :key="about.id" class="mb-12">
                <div class="grid gap-10 lg:grid-cols-2 items-center">
                    <!-- Text -->
                    <div>
                        <p class="text-brand-red font-semibold tracking-wide text-sm mb-2 uppercase">About Us</p>
                        <h1 class="mb-4 font-heading text-3xl md:text-4xl font-bold text-brand-dark">
                            Who We Are <span>👑</span>
                        </h1>
                        <p class="leading-relaxed text-brand-gray">{{ about.about }}</p>
                    </div>

                    <!-- Image -->
                    <div class="flex justify-center">
                        <div class="rounded-full p-1.5 bg-gradient-to-tr from-brand-red to-yellow-400 w-[300px] h-[300px] md:w-[350px] md:h-[350px] flex items-center justify-center">
                            <img src="/assets/img/rajan.logo.jpg" alt="Rajan Crackers"
                                 class="rounded-full w-full h-full object-cover" />
                        </div>
                    </div>
                </div>

                <!-- Feature Cards -->
                <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <div
                        v-for="feature in features"
                        :key="feature.key"
                        class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-gray-100 transition-all hover:shadow-md hover:-translate-y-0.5"
                    >
                        <!-- Icon -->
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-lg bg-red-50 text-brand-red">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                                <path v-if="feature.icon === 'receipt'" stroke-linecap="round" stroke-linejoin="round" d="M9 14.25l6-6m4.5-3.493V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0c1.1.128 1.907 1.077 1.907 2.185Z" />
                                <path v-if="feature.icon === 'cube'" stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                <path v-if="feature.icon === 'shield-check'" stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                                <path v-if="feature.icon === 'shield'" stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286ZM12 15.75h.007v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <h3 class="mb-1 font-heading text-base font-semibold text-brand-dark">{{ feature.title }}</h3>
                        <p class="text-sm text-brand-gray">{{ about[feature.key] }}</p>
                    </div>
                </div>
                <!-- Categories Section -->
                <div class="mt-16 text-center">
                    <p class="text-brand-red font-semibold tracking-wide text-sm mb-2 uppercase">Products</p>
                    <h2 class="mb-10 font-heading text-3xl font-bold text-brand-dark">Our Exclusive Categories</h2>

                    <div class="grid grid-cols-2 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                        <div v-for="category in [
                                { name: 'One Sound Crackers', image: '/assets/img/one sound crackers.png' },
                                { name: 'Sparklers', image: '/assets/img/sparklers.jpg' },
                                { name: 'Flower Pots', image: '/assets/img/flower pots.jpg' },
                                { name: 'Ground Chakker', image: '/assets/img/ground chakker.jpg' },
                                { name: 'Rockets', image: '/assets/img/rockets.jpg' },
                                { name: 'Kids fancy novelties', image: '/assets/img/kids fancy novelties.jpg' },
                                { name: 'Gift box', image: '/assets/img/gift box.jpg' },
                                { name: 'New arrivals', image: '/assets/img/new arrivals.jpg' },
                            ]" :key="category.name"
                            class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 flex flex-col items-center justify-center transition-all duration-300 hover:shadow-md hover:-translate-y-1"
                        >
                            <div class="pt-6 pb-2 flex justify-center w-full">
                                <img :src="category.image" :alt="category.name" class="w-40 h-40 sm:w-48 sm:h-48 lg:w-56 lg:h-56 rounded-full object-cover transition-transform duration-300 hover:scale-110" />
                            </div>
                            <div class="pb-6 pt-2 text-center w-full px-2">
                                <span class="inline-block rounded-full bg-red-50 px-3 sm:px-4 py-1.5 text-xs sm:text-sm font-medium text-brand-red">
                                    {{ category.name }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
            