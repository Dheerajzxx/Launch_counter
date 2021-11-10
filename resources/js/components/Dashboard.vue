<template>
    <!-- Page header -->
    <div class=" text-dark px-4">
        <h1 class="text-2xl font-semibold">Welcome Admin!</h1>
        <h2 class="text-base font-semibold ">Dashboard</h2>
    </div>
    <!-- Counting Cards -->
    <div class=" grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 px-1">
        <div class="w-full flex items-center justify-center mt-6 text-white">
            <div style="background-color:#28a745;" class="h-full w-11/12 px-6 rounded-md shadow-md flex flex-col justify-between">
                <div class="font-bold text-lg font-sans text-gray-700 pt-4">ALL SUBSCRIBERS</div>
                <div class="text-sm font-medium text-gray-700">All users that have subscribed to get notified.</div>
                <div class="text-3xl font-extrabold text-gray-800 py-4 ">100</div>
            </div>
        </div>
        <div class="w-full flex items-center justify-center mt-6 text-white">
            <div style="background-color:#DC4535;" class="h-full w-11/12 px-6 rounded-md shadow-md flex flex-col justify-between">
                <div class="font-bold text-lg font-sans text-gray-700 pt-4">NEW SUBSCRIBERS</div>
                <div class="text-sm font-medium text-gray-700">New subscribers this month.</div>
                <div class="text-3xl font-extrabold text-gray-800 py-4 ">100</div>
            </div>
        </div>
        <div class="w-full flex items-center justify-center mt-6">
            <div style="background-color:#ffc107;" class="h-full w-11/12 px-6 rounded-md shadow-md flex flex-col justify-between">
                <div class="font-bold text-lg font-sans text-gray-700 pt-4">PAGE VIEWS</div>
                <div class="text-sm font-medium text-gray-700">How many users see your landing page.</div>
                <div class="text-3xl font-extrabold text-gray-800 py-4 ">100</div>
            </div>
        </div>
    </div>
</template>