<template>
    <table class="table-fixed">
        <thead>
            <tr>
                <th class="w-1/5 px-4 py-2">
                    <input type="checkbox" value="all" />
                </th>
                <th class="w-1/5 px-4 py-2">EMPLOYEE</th>
                <th class="w-1/5 px-4 py-2">SALARY</th>
                <th class="w-1/5 px-4 py-2">STATUS</th>
                <th class="w-1/5 px-4 py-2">MANAGE</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-gray-100" v-for="users in allUsers" :key="users.id">
                <td class="border px-4 py-2">
                    <input type="checkbox" :value="users.id" />
                    <img
                        :alt="users.employee_name"
                        src="https://placehold.it"
                    />
                </td>
                <td class="border px-4 py-2">
                    <p>{{ users.employee_name }}</p>
                    <p>{{ users.employee_role }}</p>
                </td>
                <td class="border px-4 py-2">
                    <p>{{ users.employee_salary }}</p>
                    <p>{{ users.employment_type }}</p>
                </td>
                <td class="border px-4 py-2">
                    <p>{{ users.employment_status }}</p>
                    <p>{{ users.created_at }}</p>
                </td>
                <td class="border px-4 py-2">
                    <span> Update </span>
                    <span>Delete</span>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    data() {
        return {
            allUsers: []
        };
    },

    methods: {
        getAllUsers() {
            axios
                .get("/api/employee")
                .then(data => {
                    this.allUsers = data.data;
                })
                .catch();
        }
    },
    mounted() {
        this.getAllUsers();
    }
};
</script>
