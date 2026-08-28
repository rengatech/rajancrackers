<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
    company_address: String,
    mobile_number_1: Number,
    mobile_number_2: Number,
    mobile_number_3: Number,
    mobile_number_4: Number,
    mobile_number_5: Number,
})
</script>

<template>
    <!-- Red & Yellow Gradient Footer -->
    <footer class="relative overflow-hidden bg-gradient-to-br from-red-700 via-red-800 to-red-900 border-t-4 border-yellow-400 text-yellow-100">
        
        <!-- Full Footer Spread Fireworks Container -->
        <div class="pointer-events-none absolute inset-0 z-0 w-full h-full">
            <!-- Left Side Blasts -->
            <div class="firework fw-left-top"></div>
            <div class="firework fw-left-bottom"></div>

            <!-- Center-Left & Center Blasts -->
            <div class="firework fw-center-left"></div>
            <div class="firework fw-center"></div>

            <!-- Center-Right & Right Side Blasts -->
            <div class="firework fw-center-right"></div>
            <div class="firework fw-right-top"></div>
            <div class="firework fw-right-bottom"></div>
            <div class="firework fw-far-right"></div>
        </div>

        <div class="relative z-10 mx-auto max-w-6xl px-4 py-12">
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Company Info -->
                <div>
                    <h3 class="mb-4 text-3xl text-white" style="font-family: 'Berkshire Swash', cursive; letter-spacing: 1px;">
                        Rajan Crackers
                    </h3>
                    <p class="mb-4 text-sm leading-relaxed text-white-200/90">
                        Rajan Crackers is one of the best crackers dealers in Sivakasi. Since 2022 we have maintained a good relationship with our valued customers. Here you can get all kinds of crackers at affordable prices.
                    </p>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="mb-4 text-2xl text-white" style="font-family: 'Berkshire Swash', cursive; letter-spacing: 1px;">Contact</h4>
                    <ul class="space-y-4 text-sm font-medium text-white/90">
                        <!-- Address -->
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-0.5 h-5 w-5 shrink-0 text-yellow-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            <span class="leading-relaxed">{{ company_address }}</span>
                        </li>
                        <!-- WhatsApp -->
                        <li v-if="mobile_number_1 || mobile_number_2" class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mt-0.5 h-5 w-5 shrink-0 text-yellow-400">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            <span class="flex flex-wrap gap-1">
                                <a v-if="mobile_number_1" :href="`https://wa.me/91${mobile_number_1}`" class="hover:text-yellow-300 transition-colors">{{ mobile_number_1 }}</a><span v-if="mobile_number_1 && mobile_number_2">,</span>
                                <a v-if="mobile_number_2" :href="`https://wa.me/91${mobile_number_2}`" class="hover:text-yellow-300 transition-colors">{{ mobile_number_2 }}</a>
                            </span>
                        </li>
                        <!-- Call -->
                        <li v-if="mobile_number_1 || mobile_number_2" class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-0.5 h-5 w-5 shrink-0 text-yellow-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                            </svg>
                            <span class="flex flex-wrap gap-1">
                                <a v-if="mobile_number_1" :href="`tel:+91${mobile_number_1}`" class="hover:text-yellow-300 transition-colors">{{ mobile_number_1 }}</a><span v-if="mobile_number_1 && mobile_number_2">,</span>
                                <a v-if="mobile_number_2" :href="`tel:+91${mobile_number_2}`" class="hover:text-yellow-300 transition-colors">{{ mobile_number_2 }}</a>
                            </span>
                        </li>
                        <!-- Email -->
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-0.5 h-5 w-5 shrink-0 text-yellow-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <a href="mailto:mjkkalirajan880@gmail.com" class="hover:text-yellow-300 transition-colors break-all">mjkkalirajan880@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="mb-2 text-2xl text-white" style="font-family: 'Berkshire Swash', cursive; letter-spacing: 1px;">Quick Links</h4>
                    <ul class="space-y-0.5 text-sm font-medium">
                        <li v-for="(link, index) in [
                            { name: 'Home', url: '/' },
                            { name: 'About Us', url: '/about' },
                            { name: 'Price List', url: '/pricelist' },
                            { name: 'Contact', url: '/contact' },
                            { name: 'FAQ', url: '/faq' },
                            { name: 'Safety Tips', url: '/safety-tips' },
                            { name: 'Privacy Policy', url: '/privacy-policy' }
                        ]" :key="index">
                            <a v-if="link.url === '/pricelist'"
                                :href="link.url" 
                                target="_blank"
                                class="inline-block px-2 py-0.5 rounded text-yellow-200 hover:text-red-900 hover:bg-yellow-400 hover:shadow-[0_0_10px_#facc15] transition-all duration-150 font-semibold leading-tight"
                            >
                                {{ link.name }}
                            </a>
                            <Link v-else
                                :href="link.url" 
                                class="inline-block px-2 py-0.5 rounded text-yellow-200 hover:text-red-900 hover:bg-yellow-400 hover:shadow-[0_0_10px_#facc15] transition-all duration-150 font-semibold leading-tight"
                            >
                                {{ link.name }}
                            </Link>
                        </li>
                    </ul>
                </div>

                <!-- Map -->
                <div>
                    <h4 class="mb-4 text-2xl text-white" style="font-family: 'Berkshire Swash', cursive; letter-spacing: 1px;">Find Us</h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3936.568390741373!2d77.81075299999999!3d9.371407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOcKwMjInMTtuLjEiTiA3N8KwNDgnMzguNyJF!5e0!3m2!1sen!2sin!4v1749896362951!5m2!1sen!2sin"
                        class="h-48 w-full rounded-lg border-2 border-yellow-400/50 shadow-lg"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="relative z-10 border-t border-red-800/80 bg-red-950/40 py-4">
            <p class="text-center text-xs text-white-200/70">
                &copy; {{ new Date().getFullYear() }} Rajan Crackers. All rights reserved.
            </p>
        </div>
    </footer>
</template>

<style scoped>
/* Sparklers / Fireworks Animations */
.firework {
  position: absolute;
  width: 6px;
  height: 6px;
  border-radius: 50%;
  aspect-ratio: 1;
}

.firework::before,
.firework::after {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 50%;
  transform: translate(-50%, -50%);
  animation: firework-blast 2s infinite;
}

.firework::before {
  box-shadow: 
    0 -55px #fff, 40px -40px #facc15, 55px 0 #ff9800, 40px 40px #fff,
    0 55px #facc15, -40px 40px #ff9800, -55px 0 #fff, -40px -40px #facc15;
}

.firework::after {
  animation-delay: 0.5s;
  box-shadow: 
    0 -75px #ffe082, 55px -55px #fff, 75px 0 #facc15, 55px 55px #ffe082,
    0 75px #fff, -55px 55px #facc15, -75px 0 #ffe082, -55px -55px #fff;
}

/* Spread Across Screen */
.fw-left-top { top: 20%; left: 8%; animation-delay: 0s; }
.fw-left-bottom { top: 65%; left: 18%; animation-delay: 0.8s; }

.fw-center-left { top: 30%; left: 33%; animation-delay: 0.4s; }
.fw-center { top: 70%; left: 48%; animation-delay: 1.2s; }
.fw-center-right { top: 25%; left: 62%; animation-delay: 0.6s; }

.fw-right-top { top: 20%; left: 78%; animation-delay: 0.2s; }
.fw-right-bottom { top: 68%; left: 88%; animation-delay: 1.0s; }
.fw-far-right { top: 40%; left: 95%; animation-delay: 1.5s; }

@keyframes firework-blast {
  0% {
    transform: translate(-50%, -50%) scale(0.1);
    opacity: 1;
  }
  50% {
    opacity: 1;
  }
  100% {
    transform: translate(-50%, -50%) scale(1.3);
    opacity: 0;
  }
}
</style>