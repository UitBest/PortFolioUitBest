<template>
    <v-app>
        <v-navigation-drawer
            :class="pinned && !mobile ? '' : 'rounded-lg ma-2'"
            color="transparent"
            elevation="24"
            :expand-on-hover="!mobile"
            permanent
            :rail="!pinned"
            :sticky="!pinned || mobile"
            style="backdrop-filter: blur(20px)"
        >
            <v-list>
                <v-list-item
                    subtitle="info@uit.best"
                    title="Uit Best"
                >
                    <template #prepend>
                        <v-btn
                            v-if="mobile && !pinned"
                            class="text-white cursor-pointer"
                            color="white"
                            density="compact"
                            icon="mdi-menu"
                            variant="text"
                            @click.stop.prevent="pinned = true"
                        />
                        <v-avatar
                            v-else
                            class="cursor-pointer"
                            image="/img/UitBestCutOut.png"
                            @click="showProfileOverlay = true"
                        />
                    </template>
                    <template #append>
                        <v-btn
                            v-show="pinned || !mobile"
                            class="align-self-end"
                            color="white"
                            :icon="mobile ? 'mdi-close' : (pinned ? 'mdi-pin' : 'mdi-pin-outline') + ' mdi-rotate-45'"
                            size="36"
                            variant="text"
                            @click="mobile ? (pinned = false) : (pinned = !pinned)"
                        />
                    </template>
                </v-list-item>
            </v-list>

            <v-divider v-show="pinned || !mobile" />

            <v-expand-transition>
                <v-list
                    v-show="pinned || !mobile"
                    density="compact"
                    nav
                >
                    <v-list-item
                        v-for="(item, key) in defaultRoutes"
                        :key="key"
                        :prepend-icon="item.icon"
                        :title="item.name"
                        :to="item.to"
                    />

                    <v-divider class="my-4" />

                    <div class="text-truncate px-2 pb-4 text-center text-disabled text-caption">
                        *Deze items kunt u verwachten*
                    </div>

                    <v-list-item
                        v-for="(item, key) in unavailbleRoutes"
                        :key="key"
                        disabled
                        :prepend-icon="item.icon"
                        :title="item.name"
                        :to="item.to"
                    />
                </v-list>
            </v-expand-transition>
        </v-navigation-drawer>

        <v-main
            :class="pinned && !mobile ? '' : 'px-0'"
            style="min-height: 100svh"
        >
            <router-view />

            <v-footer color="dark">
                <Footer />
            </v-footer>
        </v-main>

        <v-overlay
            v-model="showProfileOverlay"
            class="d-flex justify-center align-center"
            eager
        >
            <ProfileOverlay
                @close="
                    () => {
                        showProfileOverlay = false;
                    }
                "
            />
        </v-overlay>
    </v-app>
</template>

<script setup>
    import Footer from './Footer.vue';

    import { useRoute } from 'vue-router';
    import { computed, ref, watch } from 'vue';
    import ProfileOverlay from './Layout/ProfileOverlay.vue';
    import { useDisplay } from 'vuetify';

    const display = useDisplay();
    const mobile = computed(() => display.smAndDown.value);

    const route = useRoute();

    const pinned = ref(!mobile.value);

    const showWebsites = ref(false);

    const showProfileOverlay = ref(false);

    const defaultRoutes = [
        {
            icon: 'mdi-home',
            name: 'Home',
            to: '/home',
        },
    ];

    const unavailbleRoutes = [
        {
            icon: 'mdi-file',
            name: 'Templates',
            to: '/',
            disabled: true,
        },
        {
            icon: 'mdi-cash',
            name: 'Prijzen',
            to: '/',
            disabled: true,
        },
        {
            icon: 'mdi-application',
            name: 'Portfolio',
            to: '/',
            disabled: true,
        },
    ];

    watch(
        route,
        (newRoute) => {
            if (newRoute.path === '/websites') {
                showWebsites.value = true;
            }
        },
        { immediate: true }
    );

    watch(mobile, (value) => {
        pinned.value = !value;
    });
</script>
