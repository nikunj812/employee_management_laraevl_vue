<template>
<div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Employees</h1>
    </div>
    
    <div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="card mx-auto">
                <div  v-if='showMessage'>
                    <div class="alert alert-success">
                        {{message}}
                    </div>
                </div>  
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            <form>
                                <div class="form-row align-item-center">
                                    <div class="col">
                                        <input type="text" v-model="search" @keyup="getEmployees()" name="search" class="form-control mb-2" placeholder="Search"/>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-primary mb-2">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                    <div>
                        <router-link :to="{name: 'EmployeesCreate'}" class="btn btn-primary mb-2">Create</router-link>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Department</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="employee in employees" :key="employee.id">
                            <th scope="row">{{employee.id}}</th>
                            <td>{{employee.first_name}}</td>
                            <td>{{employee.last_name}}</td>
                            <td>{{employee.address}}</td>
                            <td>{{employee.department.name}}</td>
                            <td>
                                <button class="btn btn-info"><router-link :to="{
                                                                                    name: 'EmployeesEdit', 
                                                                                    params: { id: employee.id }
                                                                                }"
                                                                                >Edit</router-link></button>
                                <button class="btn btn-danger" @click="employeeDelete(employee.id)">Delete</button>
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</template>

<script>

export default {
    props: ['message','showMessage'],
    data(){
        return{
            employees:[],
            showMessage: false,
            message: '',
            search:null,
        }
    },
    created(){
        this.getEmployees();
    },
    methods:{
        getEmployees(){
            axios.get('/api/employees', {
                params: {
                    search: this.search
                }
            })
            .then(res => {  
                this.employees = res.data.data
            }).catch(error => {
                console.log(error);
            })
        },
        employeeDelete(id){
            axios.delete(`/api/employees/${id}`)
            .then(res => {

                this.showMessage = true;
                this.message = res.data;
                this.getEmployees();

            }).catch(error => {
                console.log(error);
            })
        }
    }
    
}
</script>


<style scoped>

</style>