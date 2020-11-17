<template>
    <div class="flex justify-center">
        <div>
            <div>
                <label for="name" class="font-bold">Name:</label>
                <input type="text" id="name" v-model="name" class="border border-gray-300 rounded-lg text-center">
                <button @click="add" class="bg-blue-200 px-3 py-1 rounded-lg">Add</button>
            </div>
            <div class="mt-2">
                <ul>
                    <li class="font-bold">Name</li>
                    <li v-for="department in departmentsLocal" :key="department.id">{{ department.name }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ManageDepartments",
    props: {
        departments: {
            type: Array,
            default: () => []
        }
    },
    data() {
        return {
            name: '',
            departmentsLocal: this.departments,
        }
    },
    methods: {
        add() {
            this.$web.post('departments', {name: this.name}).then(res => {
                this.name = '';
                this.departmentsLocal.push(res.data);
            })
        }
    }
}
</script>

<style scoped>

</style>
