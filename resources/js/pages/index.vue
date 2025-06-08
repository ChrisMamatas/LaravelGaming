<script setup lang="ts">
import Input from "../components/Input.vue";
import {Link, router} from "@inertiajs/vue3";
import {onMounted, ref} from "vue";
import Button from "../components/Button.vue";

const madeUsername = ref<boolean>(false);
const userName = ref<string>();
const roomName = ref<string>();

// function setupWebsocket() {
//     window.Echo.channel("test").listen("MessageEvent", (e) => {
//         console.log("Received event:", e.message);
//     });
// }

function createRoom() {
    router.post('/room', {name: roomName.value})
}

</script>

<template>
    <div class="flex justify-center items-center w-screen h-screen bg-gray-700 text-white">
        <div v-if="!madeUsername">
            <Input v-model="userName" placeholder="Enter Username"/>
            <Button @click="madeUsername = true">Next</Button>
        </div>
        <div v-else>
            <Input placeholder="Create Room" />
            <Button @click="createRoom">Create</Button>

            <div class="mt-2 text-center">
                or select room.


            </div>
        </div>
    </div>
</template>
