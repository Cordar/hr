<template>
    <div class="mt-4">
        <ul class="flex justify-center">
            <li class="pr-5">
                <a href="/report1" class="border border-gray-800 p-2 hover:bg-gray-200" :class="{'bg-gray-300': active===1}">Report 1</a>
            </li>
            <li class="pr-5">
                <a href="/report2" class="border border-gray-800 p-2 hover:bg-gray-200" :class="{'bg-gray-300': active===2}">Report 2</a>
            </li>
            <li class="pr-5">
                <a href="/departments" class="border border-gray-800 p-2 hover:bg-gray-200" :class="{'bg-gray-300': active===3}">Departments</a>
            </li>
            <li>
                <a href="/employees" class="border border-gray-800 p-2 hover:bg-gray-200" :class="{'bg-gray-300': active===4}">Employees</a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "TheApp",
    props: {
        active: {
            type: Number,
            default: 0
        }
    }
}
</script>

<style scoped>

</style>
