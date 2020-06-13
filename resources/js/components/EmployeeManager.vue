<template>
    <div class="pl-8 pr-12 w-2/3">
        <div class="flex justify-end">
            <button
                type="submit"
                class="br-5 py-2 px-4 bg-green-500 rounded-full my-5"
                @click="showCreateModal"
            >
                add employee
            </button>
        </div>

        <table class="border-separate border-gray-500 -mt-10px">
            <thead>
                <tr>
                    <th class="w-1/5 px-4 py-2">
                        <input
                            type="checkbox"
                            value="all"
                            class="float-left h-5 w-5"
                        />
                    </th>
                    <th class="w-1/5 px-4 py-2">
                        EMPLOYEE <i class="fas fa-long-arrow-alt-up"></i>
                    </th>
                    <th class="w-1/5 px-4 py-2">
                        SALARY <i class="fas fa-long-arrow-alt-up"></i>
                    </th>
                    <th class="w-1/5 px-4 py-2">
                        STATUS <i class="fas fa-long-arrow-alt-down"></i>
                    </th>
                    <th class="w-1/5 px-4 py-2">MANAGE</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white" v-for="users in allUsers" :key="users.id">
                    <td class="px-4 py-2">
                        <input
                            type="checkbox"
                            :value="users.id"
                            class="h-5 w-5 mt-3"
                        />
                        <img
                            :alt="users.employee_name"
                            src="https://i.pravatar.cc/60?u="
                            class="inline rounded-full h-12 w-12 items-center justify-center float-right"
                        />
                    </td>
                    <td class="px-4 py-2">
                        <p class="font-bold">{{ users.employee_name }}</p>
                        <p class="font-bold text-gray-500">
                            {{ users.employee_role }}
                        </p>
                    </td>
                    <td class="px-4 py-2">
                        <p class="font-bold">{{ users.employee_salary }}</p>
                        <p class="font-bold text-gray-500">
                            {{ users.employment_type }}
                        </p>
                    </td>
                    <td class="px-4 py-2">
                        <p class="font-bold">{{ users.employment_status }}</p>
                        <p class="font-bold text-gray-500">
                            {{ users.created_at }}
                        </p>
                    </td>
                    <td class="px-4 py-2 text-2xl text-gray-500">
                        <span class="mx-5 mt-4" @click="getOneUser(users.id)">
                            <i class="fas fa-pencil-alt"></i>
                        </span>
                        <span class="mt-4" @click="deleteUser(users.id)">
                            <i class="far fa-trash-alt"></i>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
        <update-user
            v-show="showUpdate"
            :propUserId="employeeId"
            :name="employee_name"
            :role="employee_role"
            :salary="employee_salary"
            :type="employment_type"
            :status="employment_status"
        ></update-user>
        <user-create v-show="showCreate"></user-create>
    </div>
</template>

<script>
export default {
    data() {
        return {
            showCreate: false,
            allUsers: [],
            showUpdate: false,
            employeeId: 0,
            employee_name: "",
            employee_role: "",
            employee_salary: "",
            employment_type: "",
            employment_status: ""
        };
    },
    methods: {
        showCreateModal() {
            this.showCreate = !this.showCreate;
        },
        getAllUsers() {
            axios
                .get("/api/employee")
                .then(data => {
                    this.allUsers = data.data;
                })
                .catch();
        },
        getOneUser(userId) {
            alert(userId);
            this.showUpdate = !this.showUpdate;
            axios
                .put(`/api/employee/${userId}`)
                .then(data => {
                    this.employeeId = userId;
                    this.employee_name = data.data.employee_name;
                    this.employee_role = data.data.employee_role;
                    this.employee_salary = data.data.employee_salary;
                    this.employment_type = data.data.employment_type;
                    this.employment_status = data.data.employment_status;
                })
                .catch();
        },
        deleteUser(userId) {
            if (confirm(`Are you sure you want to delete employee ${userId}`)) {
                axios
                    .delete(`/api/employee/${userId}`)
                    .then(data => {
                        location.reload();
                        console.log(data);
                    })
                    .catch();
            }
        }
    },
    mounted() {
        this.getAllUsers();
    }
};
</script>
