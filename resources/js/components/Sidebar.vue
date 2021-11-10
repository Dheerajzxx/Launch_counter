<template>
    <div class="flex flex-col h-full sm:w-1/4 w-screen bg-main bg-opacity-20">
        <div class="my-4 mx-6 h-28 border border-dark flex justify-center items-center">
        Logo
        </div>
        <div class="pt-4 pb-8 w-full text-dark font-bold">
            <div class="flex flex-col justify-center items-start mb-4 text-lg mx-3">
                <div v-on:click="active('Dashboard')" class="mt-1 w-full py-1 px-3 flex flex-row hover:bg-main hover:bg-opacity-30 rounded-lg cursor-pointer">
                    <span class="text-md text-main mr-3"><i class="fas fa-tachometer-alt"></i></span>
                    <span class="tracking-wide truncate"> Dashboard </span>
                </div>
                <div v-on:click="active('Subscribers')" class="mt-1 w-full py-1 px-3 flex flex-row hover:bg-main hover:bg-opacity-30 rounded-lg cursor-pointer">
                    <span class="text-md mr-3 text-main"><i class="fas fa-users"></i></span>
                    <span class="tracking-wide truncate"> Subscribers </span>
                </div>
            </div>
            <div class="w-full flex justify-center items-center">
                <div class="border-t-2 border-main w-4/5"></div>
            </div>
            <div class="mt-3 ml-3 text-gray-500">Theme Settings</div>
            <div class="flex flex-col justify-center items-start mb-4 text-lg mx-3 mt-2">
                <div v-on:click="active('Theme')" class="mt-1 w-full py-1 px-3 flex flex-row hover:bg-main hover:bg-opacity-30 rounded-lg cursor-pointer">
                    <span class="text-md mr-3 text-main"><i class="fas fa-laptop"></i></span>
                    <span class="tracking-wide truncate"> Theme </span>
                </div>
                <div v-on:click="active('Counter')" class="mt-1 w-full py-1 px-3 flex flex-row hover:bg-main hover:bg-opacity-30 rounded-lg cursor-pointer">
                    <span class="text-md mr-3 text-main"><i class="fas fa-history"></i></span>
                    <span class="tracking-wide truncate pl-1"> Counter </span>
                </div>
                <div v-on:click="active('Social')" class="mt-1 w-full py-1 px-3 flex flex-row hover:bg-main hover:bg-opacity-30 rounded-lg cursor-pointer">
                    <span class="text-md mr-3 text-main"><i class="fas fa-comments-dollar"></i></span>
                    <span class="tracking-wide truncate pl-1"> Social Links </span>
                </div>
            </div>
            <div class="w-full flex justify-center items-center">
                <div class="border-t-2 border-main w-4/5"></div>
            </div>
            <div class="mt-3 ml-3 text-gray-500">Other Settings</div>
            <div class="flex flex-col justify-center items-start mt-2 text-lg mx-3">
                <div v-on:click="active('Profile')" class="mt-1 w-full py-1 px-3 flex flex-row hover:bg-main hover:bg-opacity-30 rounded-lg cursor-pointer">
                    <span class="text-md mr-3 text-main"><i class="fas fa-address-card"></i></span>
                    <span class="tracking-wide truncate pl-1"> Profile </span>
                </div>
                <div v-on:click="active('General')" class="mt-1 w-full py-1 px-3 flex flex-row hover:bg-main hover:bg-opacity-30 rounded-lg cursor-pointer">
                    <span class="text-md mr-3 text-main"><i class="fas fa-cogs"></i></span>
                    <span class="tracking-wide truncate"> General </span>
                </div>
            </div>
        </div>  
    </div>
</template>
<script>
export default {
    data() {
        return {
            active_menu: "hello",
        }
    },
    props: {
        active: Function,
    },
}
</script>