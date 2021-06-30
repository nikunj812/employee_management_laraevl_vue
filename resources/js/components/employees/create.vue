<template>
<div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Employee</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Employee
                    <router-link :to="{name: 'EmployeesIndex'}" class="btn btn-primary mb-2 float-right">Back</router-link>
                    </div>
                    <div class="card-body">
                        <form>
    
                            <div class="form-group row">
                                <label for="first_name" class="col-md-4 col-form-label text-md-right">First Name</label>
    
                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control" name="first_name"  required autocomplete="first_name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">Last Name</label>
    
                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control" name="last_name"  required autocomplete="last_name" autofocus>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="middel_name" class="col-md-4 col-form-label text-md-right">Middle Name</label>
    
                                <div class="col-md-6">
                                    <input id="middel_name" type="text" class="form-control" name="middel_name"  required autocomplete="middel_name" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
    
                                <div class="col-md-6">
                                    <textarea id="address" type="text" class="form-control" name="address"  required autocomplete="address" autofocus></textarea>
                                </div>
                            </div>
    
    
                            <div class="form-group row">
                                <label for="department" class="col-md-4 col-form-label text-md-right">DepartMent</label>
    
                                <div class="col-md-6">
                                    <select id="department" type="text" class="form-control " name="department_id"  required autocomplete="department" autofocus>
                                        <option value="" selected>Choose Department</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>
    
                                <div class="col-md-6">
                                    <select v-model="form.country_id" id="country" type="text" class="form-control " name="country_id"  required autocomplete="country" autofocus>
                                        <option value="" selected> Choose Country</option>
                                        <option value="" v-for="country in countries"  :key="country.id"  :value="country.id" >{{country.name}}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="state" class="col-md-4 col-form-label text-md-right">State</label>
    
                                <div class="col-md-6">
                                    <select id="state" type="text" class="form-control " name="state_id"  required autocomplete="state" autofocus>
                                        <option value="" selected>Choose State</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">City</label>
    
                                <div class="col-md-6">
                                    <select id="city" type="text" class="form-control " name="city_id"  required autocomplete="city" autofocus>
                                        <option value="" selected>Choose City</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zip_code" class="col-md-4 col-form-label text-md-right">Zip Code</label>
    
                                <div class="col-md-6">
                                    <input id="zip_code" type="text" class="form-control" name="zip_code"  required autocomplete="zip_code" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="department" class="col-md-4 col-form-label text-md-right">Birth Date</label>
    
                                <div class="col-md-6">
                                   <datepicker  input-class="form-control " name="birth_date"></datepicker>
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label for="department" class="col-md-4 col-form-label text-md-right">Hired Date</label>
    
                                <div class="col-md-6">
                                   <datepicker  input-class="form-control " name="hired_date"></datepicker>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        create
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

export default {
    components: {
        Datepicker
    },
    data(){
        return{
            countries : [],
            states : [],
            cities : [],
            department : [],
            form:{
                first_name: '',
                last_name: '',
                middel_name: '',
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
        this.getCountries();
    },
    methods:{
        getCountries(){
            axios.get('/api/employees/countries')
            .then(response => {
                console.log('djfhdj');
                this.countries = response.data
            }).catch(error => {
                console.log(error);
            })
        }
    }
}
</script>
