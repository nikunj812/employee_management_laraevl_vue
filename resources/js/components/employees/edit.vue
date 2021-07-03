<template>
<div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Update Employee</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Employee
                    <router-link :to="{name: 'EmployeesIndex'}" class="btn btn-primary mb-2 float-right">Back</router-link>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="updateEmployee">
    
                            <div class="form-group row">
                                <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>
    
                                <div class="col-md-6">
                                    <input v-model="form.first_name" id="first_name" type="text" class="form-control" name="first_name"  required   autocomplete="first_name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>
    
                                <div class="col-md-6">
                                    <input v-model="form.last_name" id="last_name" type="text" class="form-control" name="last_name"   required  autocomplete="last_name" autofocus>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="middle_name" class="col-md-4 col-form-label text-md-right">Middle Name</label>
    
                                <div class="col-md-6">
                                    <input v-model="form.middle_name" id="middle_name" type="text" class="form-control" name="middle_name"   required  autocomplete="middle_name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
    
                                <div class="col-md-6">
                                    <textarea v-model="form.address" id="address" type="text" class="form-control" name="address"   required  autocomplete="address" autofocus></textarea>
                                </div>
                            </div>
    
    
                            <div class="form-group row">
                                <label for="department" class="col-md-4 col-form-label text-md-right">DepartMent</label>
    
                                <div class="col-md-6">
                                    <select v-model="form.department_id" id="department" type="text" class="form-control " name="department_id"   required  autocomplete="department" autofocus>
                                        <option value="" selected>Choose Department</option>
                                        <option  v-for="department in departments"  :key="department.id"  :value="department.id" >{{department.name}}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>
    
                                <div class="col-md-6">
                                    <select v-model="form.country_id" @change="getstates()" id="country" type="text" class="form-control " name="country"  required   autocomplete="country" autofocus>
                                        <option value="" > Choose Country</option>
                                        <option  v-for="country in countries"  :key="country.id"  :value="country.id" >{{country.name}}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="state" class="col-md-4 col-form-label text-md-right">State</label>
    
                                <div class="col-md-6">
                                    <select v-model="form.state_id" @change="getcities()" id="state" type="text" class="form-control " name="state"   required  autocomplete="state" autofocus>
                                        <option value="" selected> Choose State</option>
                                        <option  v-for="state in states"  :key="state.id"  :value="state.id" >{{state.name}}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">City</label>
    
                                <div class="col-md-6">
                                    <select v-model="form.city_id" id="city" type="text" class="form-control " name="city_id"   required  autocomplete="city" autofocus>
                                        <option value="" selected>Choose City</option>
                                        <option  v-for="city in cities"  :key="city.id"  :value="city.id">{{city.name}}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zip_code" class="col-md-4 col-form-label text-md-right">Zip Code</label>
    
                                <div class="col-md-6">
                                    <input v-model="form.zip_code" id="zip_code" type="text" class="form-control" name="zip_code"  required   autocomplete="zip_code" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="department" class="col-md-4 col-form-label text-md-right">Birth Date</label>
    
                                <div class="col-md-6">
                                   <datepicker  v-model="form.birth_date" input-class="form-control " required name="birth_date"></datepicker>
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label for="department" class="col-md-4 col-form-label text-md-right">Hired Date</label>
    
                                <div class="col-md-6">
                                   <datepicker  v-model="form.hired_date" input-class="form-control " required  name="hired_date"></datepicker>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>

import Datepicker from 'vuejs-datepicker';
import moment from 'moment';

export default {
    components: {
        Datepicker
    },
    data(){
        return{
            countries : [],
            states : [],
            cities : [],
            departments : [],
            form:{
                first_name: '',
                last_name: '',
                middle_name: '',
                address: '',
                department_id: '',
                country_id: '',
                state_id: '',
                city_id: '',
                zip_code: '',
                birth_date: null,
                hired_date: null,
            }
        }
    },
    created(){
        this.getEmployee();
        this.getCountries();
        this.getDepartment();
    },
    methods:{
        
        getEmployee(){
            axios.get(`/api/employees/${this.$route.params.id}`)
            .then(res => {
                console.log(res);
                this.form = res.data.data;
                this.getstates();
                this.getcities();
            }).catch(error => {
                console.log(error);
            })
        },
        getCountries(){
            axios.get('/api/employees/countries')
            .then(response => {
                this.countries = response.data
            }).catch(error => {
                console.log(error);
            })
        },
        getstates(){
            axios.get(`/api/employees/${this.form.country_id}/states`)
            .then(response => {
                this.states = response.data
            }).catch(error => {
                console.log(error);
            })
        },
        getcities(){
            axios.get(`/api/employees/${this.form.state_id}/cities`)
            .then(response => {
                this.cities = response.data
            }).catch(error => {
                console.log(error);
            })
        },
        getDepartment(){
           axios.get('/api/employees/departments')
            .then(response => {
                this.departments = response.data
            }).catch(error => {
                console.log(error);
            }) 
        },
        updateEmployee(e){
            e.preventDefault();  
            axios.put(`/api/employees/${this.$route.params.id}`, {

                first_name : this.form.first_name,
                last_name : this.form.last_name,
                middle_name : this.form.middle_name,
                address : this.form.address,
                department_id : this.form.department_id,
                country_id : this.form.country_id,
                state_id : this.form.state_id,
                city_id : this.form.city_id,
                birth_date : this.format_date(this.form.birth_date),
                hired_date : this.format_date(this.form.hired_date),
                zip_code : this.form.zip_code,

            }).then(response => {
                this.$router.push({name: 'EmployeesIndex',  params: {
                                        message: response.data,
                                        showMessage: true
                                    }});

            }).catch(error => {
                console.log(error);
            }) 
        },
        format_date(value){
            if(value){
                return moment(String(value)).format('YYYYMMDD');
            }
        }
    }
}
</script>
