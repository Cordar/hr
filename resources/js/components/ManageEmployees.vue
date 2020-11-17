<template>
    <div class="flex justify-center">
        <div>
            <div>
                <label for="name" class="font-bold">Name:</label>
                <input type="text" id="name" v-model="name" class="border border-gray-300 rounded-lg text-center">
                <label for="salary" class="font-bold">Salary:</label>
                <input type="number" id="salary" v-model="salary" class="border border-gray-300 rounded-lg text-center">
                <label for="department_id">Choose a department:</label>
                <select id="department_id" v-model="department_id">
                    <option v-for="department in departments" :value="department.id">{{ department.name }}</option>
                </select>
                <button @click="add" class="bg-blue-200 px-3 py-1 rounded-lg">Add</button>
            </div>
            <div class="mt-2">
                <ul>
                    <li class="font-bold">Name - Salary - Department</li>
                    <li v-for="employee in employeesLocal" :key="employee.id">{{ employee.name + ' - ' + employee.salary + ' - ' + departments.find(x => x.id === employee.department_id).name}}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ManageEmployees",
    props: {
        employees: {
            type: Array,
            default: () => []
        },
        departments: {
            type: Array,
            default: () => []
        }
    },
    data() {
        return {
            name: '',
            salary: 0,
            department_id: null,
            employeesLocal: this.employees,
        }
    },
    methods: {
        add() {
            this.$web.post('employees', {name: this.name, salary: this.salary, department_id: this.department_id}).then(res => {
                this.name = '';
                this.salary = 0;
                this.department_id = null;
                this.employeesLocal.push(res.data);
            })
        }
    }
}
</script>

<style scoped>

</style>
