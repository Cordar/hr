<template>
    <div class="flex justify-center">
        <div>
            <h1 class="font-bold">Department Name - Max Salary</h1>
            <div v-for="department in departments">{{ department.name + ' - ' + department.maxSalary }}</div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Report1",
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
