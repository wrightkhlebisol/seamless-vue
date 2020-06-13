<template>
    <!-- class="flex flex-col shadow-2xl rounded-lg w-100 mx-auto" -->
    <div
        class="w-full max-w-lg mx-auto z-40 absolute inset-0 bg-gray-500 my-48 rounded-t-lg"
    >
        <div
            class="flex flex-row justify-around py-10 font-bold text-white text-2xl"
            @click="closeModal"
        >
            <div>X Close Form</div>
            <div>{{ createStatus }}</div>
        </div>
        <form
            @submit="createUser()"
            class="bg-white shadow-md rounded px-8  pt-6 pb-8 mb-4"
        >
            <div class="mb-4">
                <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="employee_name"
                >
                    Name
                </label>
                <input
                    v-model="employee_name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text"
                    placeholder="Name"
                />
            </div>
            <div class="mb-6">
                <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="employee_role"
                >
                    Role
                </label>
                <input
                    v-model="employee_role"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text"
                    placeholder="Role"
                />
            </div>
            <div class="mb-6">
                <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="employee_salary"
                >
                    Salary
                </label>
                <input
                    v-model="employee_salary"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text"
                    placeholder="Salary"
                />
            </div>
            <div class="mb-6">
                <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="employment_type"
                >
                    Employment Type
                </label>
                <input
                    v-model="employment_type"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text"
                    placeholder="Employment Type"
                />
            </div>
            <div class="mb-6">
                <label
                    class="block text-gray-700 text-sm font-bold mb-2"
                    for="employment_status"
                >
                    Employment Status
                </label>
                <input
                    v-model="employment_status"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text"
                    placeholder="Employment Status"
                />
            </div>
            <button
                class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded"
                type="button"
                @click="createUser()"
            >
                {{ createStatus }}
            </button>
            <!-- <div>
                <input type="submit" value="Create Employee" />
            </div> -->
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            employee_name: "",
            employee_role: "",
            employee_salary: "",
            employment_type: "",
            employment_status: "",
            showModal: true,
            createStatus: "Create Employee"
        };
    },

    props: {
        display: true
    },

    methods: {
        createUser() {
            this.createStatus = ". . . Creating employee";
            axios
                .post("api/employee", {
                    employee_name: this.employee_name,
                    employee_role: this.employee_role,
                    employee_salary: this.employee_salary,
                    employment_type: this.employment_type,
                    employment_status: this.employment_status
                })
                .then(res => {
                    this.createStatus = "Employee Created !!!";
                    setTimeout(location.reload(), 4000);
                    res.data;
                })
                .catch(err => {
                    this.createStatus =
                        "Employee Creation Failed, Check the form !!!";
                    console.log(err);
                });
        },
        closeModal() {
            this.showModal = false;
        }
    }
};
</script>
