<template>
    <v-parallax scale="0.5" src="/img/MainBackground.jpg">
        <v-sheet
            class="d-flex align-center flex-wrap"
            :class="mobile ? 'flex-column justify-center px-4 py-16' : 'flex-row justify-space-between pa-4'"
            min-height="100svh"
        >
            <v-sheet class="d-flex  flex-column align-center" width="100%">
                <v-img
                    class="bg-transparent align-self-baseline mx-auto mb-4"
                    src="/img/UitBestCutOut.png"
                    width="300"
                />
            </v-sheet>
            <v-sheet class="d-flex justify-space-evenly align-center" :class="mobile && 'flex-column'" width="100%">
                <v-card
                    class="d-flex flex-column my-10"
                    :class="! mobile && 'mr-8'"
                    color="transparent"
                    elevation="24"
                    max-width="400"
                    rounded="xl"
                    style="backdrop-filter: blur(20px)"
                    width="100%"
                    @click="showRelocateMessage = true"
                >
                    <v-card-text>
                        <v-img
                            class="w-100 bg-transparent align-self-baseline mx-auto"
                            max-width="400"
                            src="/img/TimoCutOut.png"
                        />
                        <v-divider class="border-opacity-0 mb-4 mx-auto" inset />
                        <div class="text-center" :class="mobile ? 'text-h5' : 'text-h4'">
                            Timo Cuijpers
                        </div>
                    </v-card-text>
                    <v-card-actions class="justify-center">
                        <v-btn class="mb-6 px-4" text="Portfolio" variant="outlined" />
                    </v-card-actions>
                </v-card>

                <v-card
                    class="d-flex flex-column my-10"
                    :class="! mobile && 'ml-8'"
                    color="transparent"
                    elevation="24"
                    max-width="400"
                    rounded="xl"
                    style="backdrop-filter: blur(20px)"
                    width="100%"
                >
                    <v-card-text>
                        <v-img
                            class="w-100 bg-transparent align-self-baseline mx-auto"
                            max-width="400"
                            style="backdrop-filter: blur(20px)"
                        >
                            <template v-slot:default>
                                <v-img src="/img/JelleCutOut.png" style="filter: sepia(30%) saturate(2) brightness(125%)" />
                            </template>
                        </v-img>
                        <v-divider class="border-opacity-0 mb-6 mx-auto" inset />
                        <div class="text-center text-disabled mb-2" :class="mobile ? 'text-h5' : 'text-h4'">
                            Jelle van Oijen
                        </div>
                    </v-card-text>
                    <v-card-actions class="justify-center d-flex flex-column">
                        <div class="text-disabled text-caption mb-6">* Nog niet beschikbaar *</div>
                    </v-card-actions>
                </v-card>
            </v-sheet>
        </v-sheet>
        <v-sheet height="400" />
        <div class="text-center text-disabled text-h4 mb-16">
            *Meer informatie binnenkort beschikbaar*
        </div>
    </v-parallax>
    <v-overlay v-model="showRelocateMessage" class="d-flex justify-center align-center">
        <v-card
            color="dark"
            subtitle="Je word naar een nieuwe pagina gestuurd"
            title="Let op,"
            variant="flat"
        >
            <v-card-actions class="d-flex justify-end">
                <v-btn text="Ok" @click="goTimo" />
                <v-btn text="Cancel" @click="showRelocateMessage = false" />
            </v-card-actions>
        </v-card>
    </v-overlay>
</template>

<script setup>
    import { computed, ref } from 'vue';
    import { useDisplay } from 'vuetify';

    const display = useDisplay();
    const mobile = computed(() => display.smAndDown.value);

    const showRelocateMessage = ref(false);

    const goTimo = (url) => {
        window.open('https://timo.uit.best/', '_blank');
        showRelocateMessage.value = false;
    };
</script>
