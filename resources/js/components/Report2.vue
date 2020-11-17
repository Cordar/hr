<template>
    <div class="flex justify-center">
        <div>
            <h1 class="font-bold">Departments with 2 or more employees with a salary higher than 50k</h1>
            <div v-for="department in departments">{{ department.name }}</div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Report2",
    props: {
        departments: {
            type: Array,
            default: () => []
        }
    }
}
</script>

<style scoped>

</style>
